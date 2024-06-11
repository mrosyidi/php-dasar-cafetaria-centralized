<?php

  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../Helper/Range.php";
  require_once __DIR__ . "/../Helper/Input.php";

  showFood();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showFood();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  addFood("Mie Goreng", 6000);

  showFood();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showFood();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showFood();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Makanan");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showDrink();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Minuman");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showDrink();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Minuman");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  addDrink("Es Teh", 3000);

  showDrink();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Minuman");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showDrink();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Minuman");

  $result = inRange($numberOrder, $number);
  var_dump($result);

  showDrink();

  $numberOrder = input("Nomor Pemesanan");
  $number = input("Nomor Minuman");

  $result = inRange($numberOrder, $number);
  var_dump($result);
