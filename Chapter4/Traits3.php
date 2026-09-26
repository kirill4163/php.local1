<?php

class MyClass
{
    // Приватный конструктор
    private function __construct()
    {
        echo "Объект создан!<br>";
    }

    // Статический метод для создания объекта
    public static function create(): MyClass
    {
        return new MyClass();
    }

    // Запрещаем клонирование объекта
    private function __clone()
    {
    }
}

// Создаём объект через статический метод
$object = MyClass::create();

echo "Объект успешно создан.<br>";

// Попытка клонирования
$copy = clone $object;