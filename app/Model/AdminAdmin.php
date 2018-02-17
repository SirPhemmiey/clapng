<?php 
App::uses('AuthComponent', 'Controller/Component');
/**
* 
*/
class Admin extends AppModel
{
  //public $avatarUploadDir = 'img/Avatar';
  public $validate = array(
    'email' => array(
      'required' => array(
        'rule' => array('email', 'true'),
        'message' => 'An Email is required.'
        ),
      // 'unique' => array(
      //   'rule' => array('isUniqueEmail'),
      //   'message' => 'This email is alredy in use.'
      //   )
      // ),
    'password' => array(
      'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'A password is required')
      ))
    );
      // 'password_confirm' => array(
      //   'required' => array(
      //     'rule' => array('notEmpty'),
      //     'message' => 'Please confirm your password'),
      //   'equaltofield' => array(
      //     'rule' => array('equaltofield', 'password'),
      //     'message' => 'Both passwords must match.')
      // )
  functon isUniqueEmail($check)
  {
    $email = $this->find(
      'first',
      array(
        'fields' => array(
          'Admin.admin_id'
          ),
        'conditions' => array(
          'Admin.email_address' => $check['email']
          )
        )
      );
    if(!empty($email)){
      if($this->data[$this->alias]['admin_id'] == $email['Admin']['admin_id']){
        return true;
      }
      else{
        return false;
      }
    }
    else{
      return true;
    }
  }
    // public function equaltofield($check, $otherfield)
    // {
    //   //this will of field
    //   $fname = '';
    //   foreach ($check as $key => $value) {
    //     $fname = $key;
    //     break;
    //   }
    //   return $this->data[this->name][$otherfield] === $this->data[$this->name][$fname];
    // }

    /**
       * Before Save
       * @params array $options
       * @return boolean
    */
    public function beforeSave()
    {
      //hash password
      if(isset($this->data[$this->alias]['password'])){
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
      }
      //fallback to our parent
      return parent::beforeSave($options);
    }

}