<?php
abstract class AbstractPayment{
    abstract public function process();
    public function done(){
        return "DONE";
    }
}
 class Paypal extends AbstractPayment{
      public function process(){
         return "Payment Completed..";
      }
 }
 class Creditcard extends AbstractPayment{
     public function process(){
        return "Credit Card Payment Completed...";
     }
 }

 class Payment{
     private $payment;
     public function __construct(AbstractPayment $payment){
        $this->payment = $payment;
     }
     public function process(){
        echo $this->payment->process();
        echo $this->payment->done();
     }
 }
 $paypal = new Paypal();
 $cc = new Creditcard();

 $payment = new Payment($cc);
 $payment->process();

?>