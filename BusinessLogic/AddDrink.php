<?php

  function addDrink(string $name, int $price): void
  {
    global $drinks;

    $number = is_array($drinks) ? sizeof($drinks) : 0;
    $number = $number + 1;

    $drinks[$number]["name"] = $name;
    $drinks[$number]["price"] = $price;
  }
