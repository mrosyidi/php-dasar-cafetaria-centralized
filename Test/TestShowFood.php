<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";

  $foods[1]["name"] = "Mie Goreng";
  $foods[1]["price"] = 7000;

  $foods[2]["name"] = "Rawon";
  $foods[2]["price"] = 15000;

  $foods[3]["name"] = "Soto Ayam";
  $foods[3]["price"] = 12000;

  showFood();

  $numberOfFoods = count($foods);

  for($index = $numberOfFoods; $index >= 1; $index--)
  {
    unset($foods[$index]);
  }

  showFood();
