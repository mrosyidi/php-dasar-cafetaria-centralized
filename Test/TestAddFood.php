<?php

  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../Helper/Input.php";

  showFood();

  $name = input("Name");
  $price = input("Price");

  addFood($name, $price);

  showFood();

  addFood("Soto Ayam", 12000);
  addFood("Rawon", 15000);

  showFood();

  $name = input("Name");
  $price = input("Price");

  addFood($name, $price);

  showFood();
