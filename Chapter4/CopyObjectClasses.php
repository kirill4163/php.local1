<?php
class Company {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

}
class Person{

    public $name, $company;

    function __construct($name, $company) {
        $this->nae = $name;
        $this->company = $company;
    }
    function __clone()
    {
        $this->company = clone $this->company;
    }
}
$microsoft = new Company("Microsoft");
$tom = new Person ("Tom", $microsoft);

$bob = clone $tom ;// копируем объект из $tom в переменную $bob
$bob->name = "Bob";
$bob->company->name = "Google";// изменяем у Боба название компании
echo $tom->company->name . "<br>";// Google - у Тома тоже изменилась компания

?>
