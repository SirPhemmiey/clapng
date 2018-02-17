<?php
/**
*
*/
class UsersController extends AppController
{



  public $components = array('Paginator');

  public function beforeFilter() {
            
            //$this->Security->requireSecure();

       
    }

    // public function forceSSL() {
    //     return $this->redirect('https://' . env('SERVER_NAME') . $this->here);
    // }

  var $paginate = array(
    'limit' => 1
    );
  public function index()
  {

    $this->layout = false;
    $getNumber = substr(sha1(mt_rand()),17,5);
    $this->set(compact('getNumber'));
  }
  public function home()
  {
   $this->layout = false;
   if(!$this->Session->check('User.email_address')){
    $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
    $this->redirect(array('action' =>'login'));
  }
}
public function viewTransactions()
{
  $this->layout = false;
  if(!$this->Session->check('User.email_address')){
    $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
    $this->redirect(array('action' =>'login'));
  }
  $this->User->Payment->Behaviors->load('Containable');
  $email_address = $this->Session->read('User.email_address');
  $query_options = array(
    'fields' => array(
      'Payment.licence_category',
      'Payment.licence_id',
      'Payment.subscription_plan',
      'Payment.paid_date',
      'Payment.renewal_date',
      'Payment.amount_paid',
      'Payment.duration',
      'Payment.trn_ref',
      'Payment.payment_ref',
      'Payment.response_code',
      'Payment.response_desc',

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
   'conditions' => array('Payment.users_id' => $_SESSION['User']['users_id']),
    'order' => 'Payment.paid_date Desc'
    );
  $query = $this->User->Payment->find('all', $query_options);
  $this->set("users", $query);
}
public function login()
{

   //$this->Session->write('User.email_address','femi@playspread.com');
 $this->layout = false;
 if($this->Session->check('User.email_address')){
  $this->redirect(array('action' =>'home'));
}
if($this->request->is('post')){


  $email_address = $_POST['email_address'];
  App::uses('SimplePasswordHasher','Controller/Component/Auth');
  $passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
  
  $password = $passwordHasher->hash($_POST['password']);
    //$password = $_POST['password'];
  $conditions = array(
    'User.email_address' => $email_address,
    'User.password' => $password);
  if($this->User->hasAny($conditions)){
    $data = $this->User->find('all', array('fields' => array(
      'User.email_address', 'User.contact_person', 'User.phone_number', 'User.company_name', 'User.users_id'),  'conditions' => array(
      'User.email_address' => $email_address,
      'User.password' => $password)));
    foreach($data as $details){
      $contact_person = $details['User']['contact_person'];
      $phone_number =  $details['User']['phone_number'];
      $company_name =  $details['User']['company_name'];
      $email = $details['User']['email_address'];
      $users_id = $details['User']['users_id'];
      $this->Session->write(array(
        'User.phone_number' => $phone_number,
        'User.company_name' => $company_name,
        'User.email_address' => $email,
        'User.contact_person' => $contact_person,
        'User.users_id' => $users_id));
    }
    $this->redirect(array('action'=> 'home'));
  }
  else{
    $this->Flash->error('Invalid username or password, try again', array('key' => 'loginError'));
  }
}
}

public function profile()
{
  $this->layout = false;
  if(!$this->Session->check('User.email_address')){
    $this->Flash->error('You do not have access to that location', array('key' => 'loginAuth'));
    $this->redirect(array('action' =>'login'));
  }
  $users = $this->User->find('all', array('conditions' => array('User.users_id' => $this->Session->read('User.users_id'))));
    foreach($users as $user){
      $email_address = $user['User']['email_address'];
      $contact_person = $user['User']['contact_person'];
      $company_name = $user['User']['company_name'];
      $phone_number = $user['User']['phone_number'];
      $this->set(compact('email_address', 'contact_person', 'company_name', 'phone_number'));
    }

}
public function changePassword(){
  $this->layout = false;
   if($this->request->is('post')){
   if(!empty($this->data)){
    $password = $this->request->data['User']['password'];
    $password_confirm = $_POST['password-2'];
    $data = $this->User->find('all', array('fields' => array('User.password'),
     'conditions' => array('User.users_id' => $this->Session->read('User.users_id'))));
    foreach($data as $dataPassword){
      $user_password = $dataPassword['User']['password'];
      if($password !== $password_confirm){
      $this->Flash->error('Your passwords do not match. Please check and try again.', array('key' => 'passwordMatch'));
      }
      if($password === '' || $password_confirm === ''){
       $this->Flash->error('The passwords fields cannot be blank. Please check and try again.', array('key' => 'passwordBlank'));
      }
      else{
        App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
$passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
      $passwordHasher =  $passwordHasher->hash(
      $this->request->data['User']['password']);
        $change_details = array('User.password' => "'".$passwordHasher."'");
        $this->User->updateAll($change_details, array('User.users_id' => $this->Session->read('User.users_id')));
          $this->Flash->error('Your password has been changed successfully. You must login again to use it.', array('key' => 'successPassword'));
      }
    }
   }
  }
}
public function forgotPassword(){
  $this->layout = false;
  if($this->request->is('post')){
    $this->loadModel('User');
    $email = $this->request->data['User']['email_address'];
    $data = $this->User->findByEmail_address($email);
    $subject = 'Password reset instructions from';
    if(!$data){
      $this->Flash->error('No such email address registered with us', array('key' => 'errorEmailNotReg'));
      $this->redirect(array('action' =>'forgotPassword'));
    }
    else{
      $key = $data['User']['resetkey'];
      $id = $data['User']['users_id'];
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

public function returnUser(){
  $this->layout = false;
  if($this->request->is('post')){
   if(!empty($this->data)){
    $this->loadModel('User');
    $this->loadModel('Payment');
     $this->User->create();
    $this->Payment->create();
    if($this->Session->check('User.email_address')){
      $email_address = $this->Session->read('User.email_address');
    }
    if($this->Session->check('User.company_name')){
      $company_name = $this->Session->read('User.company_name');
    }
    if($this->Session->check('User.contact_person')){
      $contact_person = $this->Session->read('User.contact_person');
    }
    if($this->Session->check('User.phone_number')){
      $phone_number = $this->Session->read('User.phone_number');
    }
        $data = array('User.contact_person' =>"'".$contact_person."'", 'User.phone_number' => "'".$phone_number."'", 'User.company_name' => "'".$company_name."'");
        $this->Payment->save($this->request->data);
       // $this->User->updateAll($data, array('User.email_address' => $email_address));
        //$this->User->users_id = $this->Session->read('User.users_id');
        $this->User->updateAll(array(
          'phone_number' => "'".$phone_number."'",
          'contact_person' => "'".$contact_person."'", 
          'company_name' => "'".$company_name."'"),
          array('User.email_address' => $this->Session->read('User.email_address')));
        $this->redirect(array('action' => 'viewTransactions'));
  }
}
}
public function signUp(){


    $this->loadModel('User');
    $this->loadModel('Payment');
  if($this->request->is('post')){

    $this->request->data['Payment']['trn_ref']=$this->request->data['trn_ref'];
   if(!empty($this->request->data))
   {
        $this->loadModel('User');
    $this->loadModel('Payment');
    $this->User->create();
       $email_address = $this->request->data['User']['email_address'];
       $contact_person = $this->request->data['User']['contact_person'];
       $phone_number = $this->request->data['User']['phone_number'];
       $password = $this->request->data['User']['password'];
       $company_name = $this->request->data['User']['company_name'];
       
       $check = array('email_address' => $email_address);
       
    $users_id_session = $this->Session->read('User.users_id');
    $users_id = $this->User->findByUsers_id($users_id_session);
       if(!$this->User->hasAny($check)){
           $this->User->Payment->saveAll($this->request->data);
           $this->login();
       }
    else{
        $data = array('User.contact_person' =>"'".$contact_person."'", 'User.phone_number' => "'".$phone_number."'", 'User.company_name' => "'".$company_name."'");
        $this->User->updateAll($data, array('User.email_address' => $email_address));
        $this->Payment->saveAll($this->request->data);
        $this->redirect(array('action' => 'viewTransactions'));}
//     $this->User->create();
   
//     $users_id_session = $this->Session->read('User.users_id');
//     // $this->User->id = $users_id;
//     $users_id = $this->User->findByUsers_id($users_id_session);
//     if(!$users_id){
//       $this->User->Payment->saveAll($this->request->data);
//       $this->redirect(array('action' => 'index'));
//     }
//     else
   
//     $email_address = $this->request->data['User']['email_address'];
//     $contact_person = $this->request->data['User']['contact_person'];
//     $phone_number = $this->request->data['User']['phone_number'];
//     $password = $this->request->data['User']['password'];
//     $company_name = $this->request->data['User']['company_name'];
   
//     $this->User->updateAll(
//     array(
//       'company_name' => "'$company_name'",
//       'contact_person' => "'$contact_person'",
//       'email_address' => "'$email_address'",
//       'phone_number' => "'$phone_number'",
//       'password' => "'$password'"
//       ),
//     array('email_address' => $email_address)
// );
//     $this->User->save();
//     $this->User->id = $users_id;
//     $this->Payment->save();
//     $this->redirect(array('action' => 'index'));
//   //}
  }
}
}


public function logout()
{
 $this->Session->destroy();
 $this->Flash->error('You have successfully logged out.', array('key' => 'loginOut'));
 $this->redirect(array('action' => 'login'));
}

public function editProfile(){
  $this->layout = false;
  $users = $this->User->find('all', array('conditions' => array('User.users_id' => $this->Session->read('User.users_id'))));
    foreach($users as $user){
      $email_address = $user['User']['email_address'];
      $contact_person = $user['User']['contact_person'];
      $company_name = $user['User']['company_name'];
      $phone_number = $user['User']['phone_number'];
      $this->set(compact('email_address', 'contact_person', 'company_name', 'phone_number'));
    }
}

public function updateProfile(){
  $this->layout = false;
    if($this->request->is('post')){
      $email_address = $this->request->data['User']['email_address'];
       $contact_person = $this->request->data['User']['contact_person'];
       $phone_number = $this->request->data['User']['phone_number'];
       $company_name = $this->request->data['User']['company_name'];
if(!empty($this->data)){
$data = array('User.contact_person' =>"'".$contact_person."'", 
  'User.phone_number' => "'".$phone_number."'", 
  'User.company_name' => "'".$company_name."'",
  'User.email_address' => "'".$email_address."'");
        $this->User->updateAll($data, array('User.users_id' => $this->Session->read('User.users_id')));
          $this->Flash->success('Your profile has been updated successfully. You must login again to use your new information.', array('key' => 'successUpdate'));
        $this->redirect(array('action' => 'editProfile'));
}
if($this->User->findByEmail_address($email_address)){
    $this->Flash->error('The Email address already exist', array('key' => 'errorDuplicate'));
}
else{
  $this->Flash->error('An error occured while updating your record', array('key' => 'errorUpdate'));
}
    }
}


public function checkEmail(){
  $this->loadModel('User');
  $this->autoRender = false;
     $email_address = trim($_POST['email_address']);
     //pr($this->data);
     $regexEmail = preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email_address);
    if($this->request->is('ajax')){
      $conditions = array('User.email_address' => $email_address);
       $query = $this->User->find('count', array(
         'conditions' => $conditions)); 
       if($email_address == '' || empty($email_address)){
        echo "";
       }
      if($query !== 0){
        echo "The email address already exist";
      }
      else if($query == 0){
        echo "The email address is available";
      }
    }
}

public function makePayment($email){

  $this->layout = false;


//$subpdtid = 6204; // collegpay your product ID
$subpdtid = 5722; // your product ID
$submittedamt = $_POST["amount"];
$submittedref = $_POST['txnref'];

        $nhash = "84BDB19F9F8BF395F2D4569F1089DA0830C2E8496402CBA1BDA4A5235B9A1FFD9E3538EBA4C12CF8BE7C31F6DB039688C274D4BB43593491DE9C5D0660319683" ; // the mac key sent to you
        //CP $nhash = "E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4" ; // the mac key sent to you
        $hashv = $subpdtid.$submittedref.$nhash;  // concatenate the strings for hash again
$thash = hash('sha512',$hashv);

$parami = array(
        "productid"=>$subpdtid,
        "transactionreference"=>$submittedref,
        "amount"=>$submittedamt
);
$payparams = http_build_query($parami);

$url = "https://webpay.interswitchng.com/paydirect/api/v1/gettransaction.json?" . $payparams; // json
//FROM OUTSIUDE (NOTE SSL) = "http://172.35.2.11/webpay/api/v1/gettransaction.json?$ponmo"; // json
//stageserv.interswitchng.com stageserv.interswitchng.com note the variables appended to the url as get values for these parameters

$headers = array(
        "GET /HTTP/1.1",
        "Host: sandbox.interswitchng.com",
        "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
        //"Content-type:  multipart/form-data",
        //"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "Accept-Language: en-us,en;q=0.5",
        //"Accept-Encoding: gzip,deflate",
        //"Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
        "Keep-Alive: 300",
        "Connection: keep-alive",
        "Hash: " . $thash
    );


$ch = curl_init();  //INITIALIZE CURL///////////////////////////////
//
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POST, false );
//
$data = curl_exec($ch);  //EXECUTE CURL STATEMENT///////////////////////////////
$json = null;



if (curl_errno($ch))
{
        print "Error: " . curl_error($ch) . "</br></br>";

        $errno = curl_errno($ch);
        $error_message = curl_strerror($errno);
        print $error_message . "</br></br>";;

        print_r($headers);

}
else
{
      

        // Show me the result
        $json = json_decode($data, TRUE);

       

        
        curl_close($ch);    //END CURL SESSION///////////////////////////////

        $this->loadModel('Ipayment');

        $this->request->data['Ipayment']['transaction_reference'] = $submittedref;
        $this->request->data['Ipayment']['payment_ref'] =$json['PaymentReference'];
        $this->request->data['Ipayment']['response_code'] = $json['ResponseCode'];
        $this->request->data['Ipayment']['response_desc']=$json['ResponseDescription'];
        $this->request->data['Ipayment']['email_address']=$id;
        $this->Ipayment->create();
        $this->Ipayment->save($this->request->data);

        $this->set(compact('json','submittedref'));

        
        // loop through the array nicely for your UI
      App::uses('CakeEmail', 'Network/Email');
      $Email = new CakeEmail();
      $Email->config('smtp');
      $Email->emailFormat('html');
      $Email->from(array('oluwafemiakinde@gmail.com' => 'COSON Licence Application Portal'));
      $Email->to($email);
      $Email->viewVars(array('transaction_reference' => $submittedref, 'payment_ref' => $json['PaymentReference'], 'response_desc' =>$json['ResponseDescription']));
      $Email->subject('COSON Music License Transaction Details');
      $Email->template('payment', null);
        //$Email->send($message);
      if($Email->send('payment')){
       $this->Flash->error('Please check your mailbox', array('key' => 'successEmail'));
     }
     else{
       $this->Flash->error('Oops! Something went wrong. Please try again.', array('key' => 'errorEmail'));
     }

}
  
}

public function requery(){

  $this->layout = false;
  


//$subpdtid = 6204; // collegpay your product ID
$subpdtid = 5722; // your product ID
$submittedamt = $_POST["amount"];
$submittedref = $_POST['txnref'];

        $nhash = "84BDB19F9F8BF395F2D4569F1089DA0830C2E8496402CBA1BDA4A5235B9A1FFD9E3538EBA4C12CF8BE7C31F6DB039688C274D4BB43593491DE9C5D0660319683" ; // the mac key sent to you
        //CP $nhash = "E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4" ; // the mac key sent to you
        $hashv = $subpdtid.$submittedref.$nhash;  // concatenate the strings for hash again
$thash = hash('sha512',$hashv);

$parami = array(
        "productid"=>$subpdtid,
        "transactionreference"=>$submittedref,
        "amount"=>$submittedamt
);
$payparams = http_build_query($parami);

$url = "https://webpay.interswitchng.com/paydirect/api/v1/gettransaction.json?" . $payparams; // json
//FROM OUTSIUDE (NOTE SSL) = "http://172.35.2.11/webpay/api/v1/gettransaction.json?$ponmo"; // json
//stageserv.interswitchng.com stageserv.interswitchng.com note the variables appended to the url as get values for these parameters

$headers = array(
        "GET /HTTP/1.1",
        "Host: sandbox.interswitchng.com",
        "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
        //"Content-type:  multipart/form-data",
        //"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
        "Accept-Language: en-us,en;q=0.5",
        //"Accept-Encoding: gzip,deflate",
        //"Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
        "Keep-Alive: 300",
        "Connection: keep-alive",
        "Hash: " . $thash
    );


$ch = curl_init();  //INITIALIZE CURL///////////////////////////////
//
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POST, false );
//
$data = curl_exec($ch);  //EXECUTE CURL STATEMENT///////////////////////////////
$json = null;



if (curl_errno($ch))
{
        print "Error: " . curl_error($ch) . "</br></br>";

        $errno = curl_errno($ch);
        $error_message = curl_strerror($errno);
        print $error_message . "</br></br>";;

        print_r($headers);

}
else
{
      

        // Show me the result
        $json = json_decode($data, TRUE);

        print_r($json);

        exit;

        
        curl_close($ch);    //END CURL SESSION///////////////////////////////

        $this->loadModel('Ipayment');

        $this->request->data['Ipayment']['transaction_reference'] = $submittedref;
        $this->request->data['Ipayment']['payment_ref'] =$json['PaymentReference'];
        $this->request->data['Ipayment']['response_code'] = $json['ResponseCode'];
        $this->request->data['Ipayment']['response_desc']=$json['ResponseDescription'];
        
       
        $this->Ipayment->updateAll(array('Ipayment.payment_ref'=>"'".$json['PaymentReference']."'",'Ipayment.response_code'=>"'".$json['ResponseCode']."'",'Ipayment.response_desc'=>"'".$json['ResponseDescription']."'"),array('Ipayment.transaction_reference'=>"'".$submittedref."'"));

       $this->redirect(array('action'=>'viewTransactions','controller'=>'users'));

        

       // $this->set(compact('json','submittedref'));
        // loop through the array nicely for your UI

}
  
}

}
