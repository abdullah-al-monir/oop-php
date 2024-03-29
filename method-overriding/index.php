<?php

class User
{
  public $id;
  public $name;

  public function set(int $id, string $name, string $address, string $position): void
  {

    $this->id = $id;
    $this->name = $name;
    $this->address = $address;
    $this->position = $position;
  }


  public function display(): void
  {

    echo $this->id . ". " . $this->name;
  }
}


class Student2 extends User
{
  public $address;
  public function display(): void
  {
    echo "Student information:";
    parent::display();
    echo " from {$this->address}";
  }
}


class Teacher extends User
{
  public $position;
  public function display(): void
  {

    echo "Teacher information:";

    parent::display();
    echo " from {$this->position}";
  }
}


$std = new Student2();
$std->set(5, "Kabir");
$std->display();
echo "<br/>";
$std = new Teacher();
$std->set(8, "Paul");
$std->display();
                                     