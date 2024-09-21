<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Find.php";

  showOrder();
  $code = input("Kode Pemesanan");

  $result = find($code);
  var_dump($result);

  addOrder(2, "Mie Ayam", 6000, 1);
  addOrder(4, "Pastel", 5000, 2);

  showOrder();
  $code = input("Kode Pemesanan");

  $result = find($code);
  var_dump($result);


  showOrder();
  $code = input("Kode Pemesanan");

  $result = find($code);
  var_dump($result);
