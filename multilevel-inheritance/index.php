<?php

class Foo
{
  function display(): void
  {
    echo "This is Foo <br/>";
  }
}

class Mar extends Foo
{
  function test1(): void
  {
    echo "Welcome to test1 function <br/>";
  }
}
class Bar extends Mar
{
  function test(): void
  {
    echo "Welcome to test function <br/>";
  }
}

$o1 = new Bar();
$o1->display();
$o1->test1();
$o1->test();
