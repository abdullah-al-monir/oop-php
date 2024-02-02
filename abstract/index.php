<?php

abstract class User
{
  public abstract function getName();

  public function display()
  {
    echo "Welcome  Here ";
  }
}

class student5 extends User
{
  public $name = "Paul";
  public function getName()
  {
    return $this->name;
  }
 
}

$std = new Student5();
$std->display();
echo $std->getName();
