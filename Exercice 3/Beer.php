<?php

declare(strict_types=1);

include_once "Beverage.php";

// Beer is inherited from Beverage through the keyword 'extends'
class Beer extends Beverage
{
  // Properties
  private string $name;
  private float $alcoholPercentage;

  // Construct function
  public function __construct(string $color, float $price, string $name, float $alcoholPercentage) 
  {
    // Calling on the parent construct to properly access & initialize the parent properties in Beverage class before initializing child properties 
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