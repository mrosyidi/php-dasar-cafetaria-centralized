<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Data.php";

  addFood("Mie Goreng", 6000);

  showFood();

  $numberOder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");
  $data = data($numberOder, $number);

  var_dump($data);

  addDrink("Es Teh", 3000);

  showDrink();

  $numberOder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");
  $data = data($numberOder, $number);

  var_dump($data);
