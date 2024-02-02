<?php

class Student
{
  public $id;
  public $name;

  function getName(): string
  {
    return $this->name;
  }
  function getId(): int
  {
    return $this->id;
  }

  function display(): void
  {
    echo "Name is " . $this->getName() . ". Id no. " . $this->getId();
  }
}

$std1 = new Student();
$std1->id = 1;
$std1->name = "Arthur Vidal";
echo $std1->getId() . ". " . $std1->getName();
echo "<br/>";


$std2 = new Student();
$std2->id = 2;
$std2->name = "Jonathan Trot";
echo "<br/>";
echo $std2->getId() . ". " . $std2->getName();
echo "<br/>";


$std3 = new Student();
$std3->id = 3;
$std3->name = "Lucy Den";
echo "<br/>";
echo $std3->getId() . ". " . $std3->getName();
echo "<br/>";

$std1->display();
echo "<br/>";
$std2->display();
echo "<br/>";
$std3->display();
echo "<br/>";
