<?php

interface Drawable{
    public function draw(): string;
}

class Circle implements Drawable{
    public function draw(): string{
        return "Это круг<br>";
    }
}

class Square implements Drawable{
    public function draw(): string{
        return "Это квадрат";
    }
}

$circle = new Circle();
$square = new Square();

echo $circle->draw();
echo $square->draw();

?>
