<?php

//////////////////lab5
class BankAccount {

    protected $id;
    protected $name;
    protected $balance;

    public function setId($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getBalance(){
       return $this-> balance;
    }
    public function withdraw($amount){
        $this->balance-=$amount;
     }
     public function deposit($amount){
        $this->balance+= $amount;
    }
}

class SavingsAccount extends BankAccount{
    protected $interest_rate;
    public function __construct($interest_rate,$balance){
        $this->interest_rate=$interest_rate;
        $this->balance=$balance;
    }
    public function calculateInterest(){
        $interest=$this -> balance* $this->interest_rate;
        $this->deposit($interest);
    }
}

    $SavingsAccount = new SavingsAccount(0.05,1000);
    $SavingsAccount->calculateInterest();
    echo"New banlance: ".$SavingsAccount->getBalance()."<br>";




    //////////////////Lab6

    abstract class Shape{
        abstract public function getArea();
    }
    class Rectangle extends Shape{
        private $width;
        private $height;
        public function __construct($width,$height){
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width*$this->height;
        }
    }
    $rectangle=new Rectangle(5,10);
    echo $rectangle->getArea();

    //Tìm hiểu về DI(dependency injection)
?>