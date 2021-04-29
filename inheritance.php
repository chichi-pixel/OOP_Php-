<?php

class Customer {
    private $id;
    private $name;
    protected $email;
    private $balance;

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
// ERROR :: 
//Parse error: syntax error, unexpected 'class' (T_CLASS), expecting function (T_FUNCTION) 
//or const (T_CONST) in C:\APACHEFORXAMMP\htdocs\OOPphp\inheritance.php on line 17    
class Subscriber extends Customer{
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan) {
        parent:: __construct($id, $name, $email, $balance);
        $this->plan =$plan;
    }

    
}

  $subscriber = new Subscriber(1, 'Kelvin', 'kelvin@email.de', 0, 'Pro');
  echo $subscriber->getEmail(); 
?>

