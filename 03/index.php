<?php

declare(strict_types=1);
class Building
{
  public $name;
  public $color;

  function building_info(): void
  {
    echo "The building name is " . $this->name . " & the color is " . $this->color . "<br/>";
  }

  function vipBuilding(string $name, string $color, int $price = 15000): void
  {
    $this->name = $name;
    $this->color = $color;

    echo "The building name is " . $this->name . " & the color is " . $this->color . " price is " . $price . "<br/>";
  }

  function building2(): void
  {
    echo "The building name is " . $this->name . " & the color is " . $this->color . "<br/>";
  }

  function getName(): string
  {
    return  $this->name;
  }
}

$building = new Building();

$building->name = "NewLand Villa";
$building->color = "blue";

$building->building_info();
echo $building->getName();
echo "<br/>"; 
$building->vipBuilding("Toronto Villa", "green");

$building->building2();
echo $building->getName();
echo "<br/>";
$building->vipBuilding("Mexican Villa", "orange", 60000);

echo $building->getName();
