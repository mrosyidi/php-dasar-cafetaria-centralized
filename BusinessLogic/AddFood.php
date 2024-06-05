<?php

  function addFood(string $name, int $price): void
  {
    global $foods;

    $number = is_array($foods) ? sizeof($foods) : 0;
    $number = $number + 1;

    $foods[$number]["name"] = $name;
    $foods[$number]["price"] = $price;
  }
