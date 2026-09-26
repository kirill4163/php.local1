<?php
class Person{
    public $name, $age;

    static $retirementAge= 65;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello(){
        echo "<br>Привет, меня зовут $this->name!<br>";
    }

    static function printPerson($person){
        echo "Имя $person->name Возраст: $person->age <br>";
    }
}

$tom = new Person("Tom", "38");
//вызов нестатичного метода
$tom->sayHello();

//вызов статического метода
Person::printPerson($tom);
//обращение статическому свойству
echo "Пенсионный возраст: ".Person::$retirementAge . "<br>";

$tom->checkAge();

?>
