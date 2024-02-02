<?php

class Students
{
  private $name = "John";

  public function setName(string $name): void
  {
    $this->name = $name;
  }
  function display()
  {
    echo "name: {$this->name} <br/>";
  }
}


$std = new Students();

// $std->name = "John Kabir";

echo $std->display();
$std->setName("Gall");
echo $std->display();