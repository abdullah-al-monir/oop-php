<?php
class School
{
  public $name;
  function display(): void
  {
    echo "Welcome";
  }
}

class Primary extends School
{
  function test(): void
  {
    echo "This is test function <br/>";
  }
}

$primary = new Primary();
$primary->name = "Halishohor <br/>";
$primary->test();
echo $primary->name . PHP_EOL;
$primary->display();
