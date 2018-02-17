<?php 

/**
* 
*/
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
// App::uses('AuthComponent', 'Controller/Component/Auth');
class User extends AppModel
{
   public $validate = array(
    'username' => array(
      'required' => array(
        'rule' => array('email', 'true'),
        'message' => 'An Email is required.')
        ),
    'password' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A password is required')
      )
    );
   public $primaryKey = 'users_id';
public $hasMany = array(
  'Payment' => array(
    'className' => 'Payment',
    'foreignKey' => 'users_id',
    'dependent' => true
    )
  );
    /**
       * Before Save
       * @params array $options
       * @return boolean
    */
     public function beforeSave($options = array())
    {
      if (!empty($this->data[$this->alias]['password'])) {
      $passwordHasher = new SimplePasswordHasher(array('hashType' =>'sha256'));
      $this->data[$this->alias]['password'] = $passwordHasher->hash(
      $this->data[$this->alias]['password']);
      }
      // $this->data['Admin']['password'] = 
      // AuthComponent::password($this->data['Admin']['password']);
      //fallback to our parent
      $this->data[$this->alias]['resetkey'] = Security::hash(mt_rand(),'md5',true);
      // $this->data[$this->alias]['paid_date'] = date("Y-m-d H:i:s");
      return true;
    }

}