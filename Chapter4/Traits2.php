<?php

class Counter

{
    public static int $count = 0;

    public int $number = 0;

   public function __construct()
   {
       self::$count++;

       $this->number = self::$count;
   }
}
$counter1 = new Counter();
$counter2 = new Counter();
$counter3 = new Counter();


echo "Номер первого объекта: " . $counter1->number . "<br>";
echo "Номер второго объекта: " . $counter2->number . "<br>";
echo "Номер третьего объекта: " . $counter3->number . "<br>";

echo "Всего создано олбъектов: " . Counter::$count;
?>
