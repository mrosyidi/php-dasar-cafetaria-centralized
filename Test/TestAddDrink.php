<?php

  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";

  showDrink();

  $name = input("Name");
  $price = input("Price");

  addDrink($name, $price);

  showDrink();

  addDrink("Es Teh", 3000);
  addDrink("Jus Wortel", 8000);

  showDrink();

  $name = input("Name");
  $price = input("Price");

  addDrink($name, $price);

  showDrink();
