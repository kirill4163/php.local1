<?php

// Абстрактный класс Animal
abstract class Animal
{
    // Имя животного
    protected string $name;

    // Конструктор
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Абстрактный метод для звука
    abstract public function makeSound(): string;

    // Обычный метод для получения имени
    public function getName(): string
    {
        return $this->name;
    }
}

// Класс Cat наследуется от Animal
class Cat extends Animal
{
    // Реализуем звук кошки
    public function makeSound(): string
    {
        return "Мяу!";
    }
}

// Класс Dog наследуется от Animal
class Dog extends Animal
{
    // Реализуем звук собаки
    public function makeSound(): string
    {
        return "Гав!";
    }
}

// Создаём объекты
$cat = new Cat("Куки");
$dog = new Dog("Голова");

// Выводим информацию
echo "Кошка: " . $cat->getName() . "<br>";
echo "Звук: " . $cat->makeSound() . "<br><br>";

echo "Собака: " . $dog->getName() . "<br>";
echo "Звук: " . $dog->makeSound();