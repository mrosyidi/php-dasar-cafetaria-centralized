<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Empty.php";

  showFood();

  $number = input("Nomor Pemesanan");
  $result = isEmpty($number);
  var_dump($result);

  addFood("Mie Goreng", 6000);
  showFood();

  $number = input("Nomor Pemesanan");
  $result = isEmpty($number);
  var_dump($result);

  showDrink();

  $number = input("Nomor Pemesanan");
  $result = isEmpty($number);
  var_dump($result);

  AddDrink("Es Teh", 3000);
  showDrink();

  $number = input("Nomor Pemesanan");
  $result = isEmpty($number);
  var_dump($result);
