<?php

class A
{
  public $name;
}

class B
{
  public $name;
}

$a = new A();
$b = new B();

if ($a instanceof A) {
  echo "This is an object of class A";
} else {
  echo "This is not an object of class A";
}
