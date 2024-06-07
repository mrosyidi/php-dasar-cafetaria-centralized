<?php

  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../View/ViewShowDrink.php";

  $drinks[1]["name"] = "Es Teh";
  $drinks[1]["price"] = 3000;

  $drinks[2]["name"] = "Jus Wortel";
  $drinks[2]["price"] = 8000;

  $drinks[3]["name"] = "Es Coklat";
  $drinks[3]["price"] = 12000;

  viewShowDrink();
