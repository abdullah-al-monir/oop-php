<?php


class User
{
  public $id;
  public $username;
  public $email;

  public $address;

  function getName(): string
  {
    return $this->username;
  }
}

class Student extends User
{
  public $roll;
  public $class;
}


class Teacher extends User
{
  public $department;
  public $position;
}
