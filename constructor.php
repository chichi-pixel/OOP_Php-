<?php

class Customer {
    public $id;
    public $name;
    public $email;
    public $balance;

    public function __construct($id, $name, $email, $balance){
        echo 'The Constructor Ran..';
            $this->id       = $id;
            $this->name     = $name;
            $this->email    = $email;
            $this->balance  = $balance;
    }
    public function getEmail(){
        return $this->email;
    }

    $customer = new Customer(1, 'Kelvin', 'kelvin@email.de', 0);

    //echo $customer->name;
    echo $customer->getEmail();

    //Parse error: syntax error, unexpected '$customer' (T_VARIABLE), expecting function (T_FUNCTION) 
    //or const (T_CONST) in C:\APACHEFORXAMMP\htdocs\OOPphp\constructor.php on line 20
    //I get this error!! Warummmm.,.
}
    ?>

    //public function getCustomer($id) {
    //$this->id = $id;
    //return 'John Doe';
    //}

    //public function __destruct(){
        //echo 'The Destructor Ran..';
    //}

//}

//$customer = new Customer;

//echo $customer->getCustomer(10);

