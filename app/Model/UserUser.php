<?php 
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel{
  public $validate = array(
  'username' => array(
    'rule' => array('notBlank'),
    'message' => 'A username is required',
    'allowEmpty' => false 
    ),
  'password' => array(
    'required' => array(
      'rule' => array('notBlank'),
      'message' => 'A password is required'
      ),
    )
  );
public function beforeSave($options = array()){
  // hash our password
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
         
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
        }
     
        // fallback to our parent
        return parent::beforeSave($options);
    }
}