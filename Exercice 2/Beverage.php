<?php

class Beverage
{
  // Properties
  public string $color;
  public float $price;
  public string $temperature;

  // Construct
  public function __construct(string $color, float $price, $defaultTemperature = "cold")
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $defaultTemperature;
  }

  // The function
  public function getInfo() 
  {
    return "This beverage is $this->temperature, has a $this->color color and costs &euro;$this->price.";
  }
}