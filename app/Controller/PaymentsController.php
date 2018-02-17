<?php 
/**
* 
*/
class PaymentsController extends AppController
{ 
   public function viewPayments()
   {
     $this->layout = false;
     $this->set('users', $this->paginate());
   }
}