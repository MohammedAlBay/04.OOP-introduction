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

  // Methods
  // Getter method for name property
  public function get_Name(): string
  {
    return $this->name;
  }

  // Getter metho to get the alcohol percentage property
  public function get_AlcoholPercentage(): float
  {
    return $this->alcoholPercentage;
  }
}