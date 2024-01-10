<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
  // Properties
  private string $color;
  private float $price;
  private string $temperature;

  // Construct
  public function __construct(string $color, float $price)
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = "cold";
  }

  // The function
  public function getInfo() 
  {
    return "This beverage is $this->temperature, has a $this->color color and costs &euro;$this->price.";
  }
}