<?php 
/**
* 
*/

class AdminController extends AppController
{
  public $paginate = array('limit' => 5);
  // public function beforeFilter(){
  //    $this->Cookie->key = 'qSI232qs*&sXOw!adre@34SAv!@*(XSL#$%)asGb$@11~_+!@#HKis~#^';
  //   $this->Cookie->httpOnly = true;
  //   if($this->Cookie->read('remember_me')){
  //     $cookie = $this->Cookie->read('remember_me');
  //     $admin = $this->Admin->find('first', array(
  //       'conditions' => array(
  //         'Admin.email' => $cookie['email'],
  //         'Admin.password' => $cookie['password']
  //         )
  //       ));
  //   }
  // }

  public function index()
  {
    $this->layout = false;
    if(!$this->Session->check('Admin.email')){
      $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
      $this->redirect(array('action' =>'login'));
    }
  }
  public function login() {
    $this->layout = false;
    if($this->Session->check('Admin.email')){
      $this->redirect(array('action' =>'index'));
    }
    if($this->request->is('post')){
      $email = $_POST['email'];
      App::uses('SimplePasswordHasher','Controller/Component/Auth');
      $passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
      $password = $passwordHasher->hash($_POST['password']);
      $conditions = array(
        'Admin.email' => $email,
        'Admin.password' => $password);
      if($this->Admin->hasAny($conditions)){
        $this->Session->write('Admin.email', $email);
        $this->redirect(array('action'=> 'index'));
      }
      else{
        $this->Flash->error('Invalid username or password, try again', array('key' => 'loginError'));
      }
    }
  }
  public function logout()
  {
    // $this->Cookie->delete('remember_me');
    $this->Session->destroy();
    $this->Flash->error('You have successfully logged out', array('key' => 'loginOut'));
    $this->redirect(array('action' => 'login'));
  }
  public function profile()
  {
    $this->layout = false;
    if(!$this->Session->check('Admin.email')){
      $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
      $this->redirect(array('action' =>'login'));
    }
  }
  public function viewPurchases()
  {
    $this->layout = false;
    if(!$this->Session->check('Admin.email')){
      $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
      $this->redirect(array('action' =>'login'));
    }
    $this->loadModel('User');
    $this->loadModel('Payment');
   $this->User->Payment->Behaviors->load('Containable');
  $query_options = array(
    'fields' => array(
      'Payment.licence_category',
      'Payment.licence_id',
      'Payment.subscription_plan',
      'Payment.paid_date',
      'Payment.renewal_date',
      'Payment.amount_paid',
      'Payment.duration',
      'Payment.number_of_vehicles',
      'Payment.number_of_centres'
      ),
    'contain' => array(
      'User' => array(
        'fields' => array(
         'User.company_name',
         'User.contact_person',
         'User.email_address',
         'User.phone_number',
         ),
        ),
      ),
    );
  // $email_address = $this->Session->read('User.email_address');
  $query = $this->User->Payment->find('all', $query_options);
  $this->set("users", $query);
  } 
  public function forgotPassword(){
    $this->layout = false;
    if($this->request->is('post')){
      $this->loadModel('Admin');
      $email = $this->request->data['Admin']['email'];
      $data = $this->Admin->findByEmail($email);
      $subject = 'Password reset instructions from';
      if(!$data){
        $this->Flash->error('No such email address registered with us', array('key' => 'errorEmailNotReg'));
        $this->redirect(array('action' =>'forgotPassword'));  
      }
      else{
        $key = $data['Admin']['resetkey'];
        $id = $data['Admin']['id'];
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $Email->config('smtp');
        $Email->emailFormat('html');
        $Email->from(array('oluwafemiakinde@gmail.com' => 'COSON Licence Application Portal'));
        $Email->to($email);
        $Email->viewVars(array('key' => $key, 'id' => $id, 'username' =>$email, 'rand' => mt_rand()));
        $Email->subject($subject);
        $Email->template('forgot_password', null);
        //$Email->send($message);
        if($Email->send('forgot_password')){
         $this->Flash->error('Please check your mailbox', array('key' => 'successEmail'));
       }
       else{
         $this->Flash->error('Oops! Something went wrong. Please try again.', array('key' => 'errorEmail'));

       }
     }
   }
 }
}