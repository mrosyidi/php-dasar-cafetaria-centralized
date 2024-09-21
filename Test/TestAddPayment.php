<?php

  require_once __DIR__ . "/../BusinessLogic/AddPayment.php";
  require_once __DIR__ . "/../BusinessLogic/ShowPayment.php";
  require_once __DIR__ . "/../Helper/Input.php";

  showPayment();

  $code = input("Kode");
  $total = input("Total Pesanan");
  $bayar = input("Jumlah Uang");

  addPayment($code, $total, $bayar);
  showPayment();

  addPayment(2, 42000, 50000);
  addPayment(4, 37000, 100000);

  showPayment();
