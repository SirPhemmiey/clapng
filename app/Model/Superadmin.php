<?php 
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
* 
*/
class Superadmin extends AppModel
{

  public $validate = array(
    'email_address' => array(
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
      //fallback to our parent
      return true;
    }

}