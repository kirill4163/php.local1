<?php

class Rectangle
{
    // Свойства только для чтения
    public readonly int $width;
    public readonly int $height;

    // Конструктор
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Метод вычисления площади
    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

// Создаём объект
$rectangle = new Rectangle(10, 5);

// Выводим ширину, высоту и площадь
echo "Ширина: " . $rectangle->width . "<br>";
echo "Высота: " . $rectangle->height . "<br>";
echo "Площадь: " . $rectangle->getArea() . "<br>";

// Попытка изменить ширину
$rectangle->width = 20;