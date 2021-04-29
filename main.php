<?php

class Customer {
    public $id;
    //public $id = 1
    public $name;
    public $email;
    public $balance;


    public function getCustomer($id){
        $this->id = $id;
      
        return 'John Doe';
        //return $this->id;
        }
    }


$customer = new Customer;
echo $customer->getCustomer(1);

?>