<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Code.php";

  showOrder();
  $exit = input("Exit");
  $code = code($exit);

  var_dump($code);

  showOrder();
  $exit = input("Exit");
  $code = code($exit);

  var_dump($code);

  addFood("Mie Goreng", 6000);
  addOrder($code, $foods[1]["name"], $foods[1]["price"], 2);

  showOrder();
  $exit = input("Exit");
  $code = code($exit);

  var_dump($code);

  showOrder();
  $exit = input("Exit");
  $code = code($exit);

  var_dump($code);
