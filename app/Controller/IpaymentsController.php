<?php 
/**
* 
*/
class IpaymentsController extends AppController
{ 
   
   public function get_transactions($transaction_id){

   	return $this->Ipayment->find('first',array('conditions'=>array('Ipayment.transaction_reference'=>$transaction_id)));
   }
}