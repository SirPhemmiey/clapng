<?php 
/**
* 
*/
class UsersController extends AppController
{ 



  public $components = array('Paginator');

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
      'Payment.transaction_reference',
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
    'conditions' => array('email_address' => $email_address),
    );
  $query = $this->User->Payment->find('all', $query_options);
  $this->set("users", $query);
}
public function login()
{

   $this->Session->write('User.email_address','femi@playspread.com');
 $this->layout = false;
 if($this->Session->check('User.email_address')){
  $this->redirect(array('action' =>'home'));
}
if($this->request->is('post')){

  $email_address = $_POST['email_address'];
  App::uses('SimplePasswordHasher','Controller/Component/Auth');
  $passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
  
  $password = $passwordHasher->hash($_POST['password']);
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
public function signUp(){


    $this->loadModel('User');
    $this->loadModel('Payment');
  if($this->request->is('post')){

    $this->request->data['Payment']['trn_ref']=$this->request->data['trn_ref'];
   if(!empty($this->request->data)){
    
    $this->User->create();
   
    $users_id_session = $this->Session->read('User.users_id');
    // $this->User->id = $users_id;
    $users_id = $this->User->findByUsers_id($users_id_session);
    if(!$users_id){
      $this->User->Payment->saveAll($this->request->data);
      $this->redirect(array('action' => 'index'));
    }
    else
   
    $email_address = $this->request->data['User']['email_address'];
    $contact_person = $this->request->data['User']['contact_person'];
    $phone_number = $this->request->data['User']['phone_number'];
    $password = $this->request->data['User']['password'];
    $company_name = $this->request->data['User']['company_name'];
   
    $this->User->updateAll(
    array(
      'company_name' => "'$company_name'",
      'contact_person' => "'$contact_person'",
      'email_address' => "'$email_address'",
      'phone_number' => "'$phone_number'",
      'password' => "'$password'"
      ),
    array('email_address' => $email_address)
);
    $this->User->save();
    $this->User->id = $users_id;
    $this->Payment->save();
    $this->redirect(array('action' => 'index'));
  //}
  }
}
}
public function logout()
{
 $this->Session->destroy();
 $this->Flash->error('You have successfully logged out.', array('key' => 'loginOut'));
 $this->redirect(array('action' => 'login'));
}



public function makePayment($id){

  $this->layout = false;
  

$subpdtid = 6205; // your product ID
$submittedamt = $_POST["amount"];
$submittedref = $_POST['txnref'];

        $nhash = "D3D1D05AFE42AD50818167EAC73C109168A0F108F32645C8B59E897FA930DA44F9230910DAC9E20641823799A107A02068F7BC0F4CC41D2952E249552255710F" ; // the mac key sent to you
        //CP $nhash = "E187B1191265B18338B5DEBAF9F38FEC37B170FF582D4666DAB1F098304D5EE7F3BE15540461FE92F1D40332FDBBA34579034EE2AC78B1A1B8D9A321974025C4" ; // the mac key sent to you
        $hashv = $subpdtid.$submittedref.$nhash;  // concatenate the strings for hash again
$thash = hash('sha512',$hashv); 

$parami = array(
        "productid"=>$subpdtid,
        "transactionreference"=>$submittedref,
        "amount"=>$submittedamt
);
$payparams = http_build_query($parami);

$url = "https://sandbox.interswitchng.com/webpay/api/v1/gettransaction.json?" . $payparams; // json
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

        $this->set(compact('json'));
        // loop through the array nicely for your UI

}
  
}


}