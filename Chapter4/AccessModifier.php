<?php

// public -свойства и методы, объявление  с данными модификаторами можно обращаться из внешнего кода и из классов наследников?


class Person {

    public $publicA = "public";
    protected $protectedA = "protected";

    private function getPrivateMethod()
    {
        echo "private method <br/>";
    }

    protected function getprotectedMethod()
    {
        echo "public method <br/>";
    }

    public function getpublicMethod()
    {
        echo "public method <br/>";
    }
    function test()
    {
        $this->getPrivateMethod();
        $this->getprotectedMethod();
        $this->getpublicMethod();


        echo "$this->privateA<br>";
        echo "$this->protectedA<br>";
        echo "$this->publicA<br>";
    }

}

class Employee extends Person {

    function test()
    {
        // echo $this->privateA;//нельзя так как privateA является приватным
        echo $this->protectedA;//
        echo $this->publicA;
        //$this->getPrivateMethod();//нельзя ,так как private в классе-родителя
        $this->getProtectedMethod();
        $this->getPublicMethod();
    }
}

$person = new Person;
//$person->getPrivateMethod(); недоступно, так как private
//$person->getProtectedMethod(); недоступно, так как protected
$person->getPiblicMethod();


//echo $person->privateA; недоступно, так как private
//echo $person->protectedA;
echo $person->piblicA;


//Доступ к методам и свойтсвам объекта
class Account{
    private $sum = 0;

    function __construct($sum)

    {
        $this->sum = $sum;
    }
    function getSumFrom($otherAccount, $money){
        $otherAccount->sum -= $money;
        $this -> sum += $money;
    }
    function printSum(){
        echo "на счете $this->sum y.e. <br>";
    }
}
$acc1 = new Account(100);
$acc2 = new Account(400);


$acc1->getSumFrom($acc2,200);
$acc2->printSum();


?>






