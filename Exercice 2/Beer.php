<?php

declare(strict_types=1);

include_once "Beverage.php";

// Beer is inherited from Beverage through the keyword 'extends'
class Beer extends Beverage
{
  // Properties
  public string $name;
  public float $alcoholPercentage;

  // Construct function
  public function __construct(string $color, float $price, string $name, float $alcoholPercentage) 
  {
    parent::__construct($color, $price);
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  // Make a get_AlcoholPercentage function to get the alcohol percentage
  public function get_alcoholPercentage()
  {
    return $this->alcoholPercentage;
  }
}