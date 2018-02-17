<?php 

/**
* 
*/
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
// App::uses('AuthComponent', 'Controller/Component/Auth');
class Admin extends AppModel
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
      return true;
    }

}