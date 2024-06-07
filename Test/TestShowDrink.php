<?php

  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";

  $drinks[1]["name"] = "Es Teh";
  $drinks[1]["price"] = 3000;

  $drinks[2]["name"] = "Jus Wortel";
  $drinks[2]["price"] = 8000;

  $drinks[3]["name"] = "Es Coklat";
  $drinks[3]["price"] = 12000;

  showDrink();

  for($index = sizeof($drinks); $index >= 1; $index--)
  {
    unset($drinks[$index]);
  }

  showDrink();
