<?php 
/**
* 
*/
class SuperAdminController extends AppController
{
	public function index()
	{
    $this->layout = false;
    if(!$this->Session->check('Superadmin.email_address')){
      $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
      $this->redirect(array('action' =>'login'));
    }
  }
  public function login() {
    $this->layout = false;
    if($this->Session->check('Superadmin.email_address')){
      $this->redirect(array('action' =>'index'));
    }
    if($this->request->is('post')){
      $email_address = $_POST['email_address'];
      // App::uses('SimplePasswordHasher','Controller/Component/Auth');
      //   $passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
      //   $password = $passwordHasher->hash($_POST['password']);
      $password = $_POST['password'];
      $this->loadModel('Superadmin');
      $conditions = array(
        'Superadmin.email_address' => $email_address,
        'Superadmin.password' => $password);
      if($this->Superadmin->hasAny($conditions)){
        $this->Session->write('Superadmin.email_address', $email_address);
        $this->redirect(array('action'=> 'index'));
      }
      else{
        $this->Flash->error('Invalid username or password, try again', array('key' => 'loginError'));
      }
    }
    
  }

  public function logout()
  {
   $this->Session->destroy();
   $this->Flash->error('You have successfully logged out', array('key' => 'loginOut'));
   $this->redirect(array('action' => 'login'));
 }
 public function addAdmin()
 {
  $this->layout = false;
  if(!$this->Session->check('Superadmin.email_address')){
    $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
    $this->redirect(array('action' =>'login'));
  }
  if($this->request->is('post')){
    $this->loadModel('Admin');
    if(!empty($this->data)){
      $this->Admin->create();
      $det = $this->data['Admin']['email'];
      $data = $this->Admin->find('count', array('conditions' => array('Admin.email' => $det)));
      if($data==0){
        if($this->Admin->save($this->request->data)){
          $this->Flash->success('A new admin has been added.', array('key'=> 'success'));
          $this->redirect(array('action' => 'addAdmin'));
        }
      }
      else
      { 
       $this->Flash->error('Oops! An error occured. May be the admin already exist', array('key' => 'error'));
       $this->redirect(array('action' => 'addAdmin'));

     }
   }
 } 

}
}