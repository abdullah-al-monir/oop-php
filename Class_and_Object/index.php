<?php

class Foo
{
  public $color;

  function display()
  {
    echo "<p style='color: {$this->color}; font-weight: bold;'>Welcome here </p><br/>";
  }
  function setColor($color)
  {
    $this->color = $color;
  }

  function getColor()
  {
    echo "The Color is {$this->color}";
  }
}

$obj = new Foo();
$obj->display();
$obj->color = "red";

$obj->display();
$obj->setColor("green");
$obj->display();
echo $obj->color;
