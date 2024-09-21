<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Pay.php";

  showOrder();
  $code = input("Kode Pesanan");
  $pay = pay($code);
  echo "Total bayar : " . $pay . PHP_EOL;

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(1, "Es Campur", 10000, 2);
  addOrder(1, "Batagor", 5000, 1);
  addOrder(2, "Es Oyen", 12000, 1);

  showOrder();
  $code = input("Kode Pesanan");
  $pay = pay($code);
  echo "Total bayar : " . $pay . PHP_EOL;

  showOrder();
  $code = input("Kode Pesanan");
  $pay = pay($code);
  echo "Total bayar : " . $pay . PHP_EOL;
