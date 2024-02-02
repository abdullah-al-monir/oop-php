<?php

class User
{
  private $name = "Paul";
  protected $email = "Paul@paul.com";

  public function display(): void
  {
    echo "name is {$this->name} <br/>";
    echo "email is {$this->email} <br/>";
  }

  public function getName(): string
  {
    return $this->name;
  }
}

class User1 extends User
{
  public function set(): void
  {
 
    $this->name = "ole";
    $this->email = "ole@ole.com";
  }
}

$user = new User1();
$user->set();
$user->display();

?>
