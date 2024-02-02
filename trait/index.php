<?php

trait User
{
  public function get()
  {
    echo "Wlcome to new user <br/>";
  }
}


trait Session
{
  private $name = "John Doe";
  public function showSession()
  {
    echo "Welcome to session Trait <br/>";
  }

  public function showName()
  {
    echo "Name is {$this->name}";
  }
}

class Student
{
  use User,Session;

  public function display()
  {
    $this->showName();
    $this->showSession();
  }
}

$user = new Student();
$user->get();
$user->showSession();
$user->showName();
$user->display();
