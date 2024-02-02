<?php

interface UserInterface
{
  public function getId();
  public function display();
}

class Users implements UserInterface
{
  public $id = 2;

  public function getId(): int
  {
    return $this->id;
  }

  public function display()
  {
    echo "User ID: " . $this->getId();
  }
}

$user = new Users();
echo $user->getId();
echo "<br/>";
echo $user->display();
