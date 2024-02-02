<?php

class Student
{
  public $name;
  public $roll;

  function __construct(string $name, int $roll)
  {
    $this->name = $name;
    $this->roll = $roll;
  }



  function display(): void
  {
    echo "Name is {$this->name} and roll is {$this->roll}";
  }
  function __destruct()
  {
    echo "<br/> All work has been done";
  }
}

$std = new Student("John Haste", 2);
$std->display();
echo "<br/>";
$std2 = new Student("John Cena", 5);
$std2->display();

echo "<br/>";
echo $std->name;
echo "<br/>";
echo $std->roll;
echo "<br/>";
