<?php

  require_once __DIR__ . "/../Model/Payments.php";
  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/AddPayment.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Duplicate.php";
  require_once __DIR__ . "/../BusinessLogic/AddDetail.php";

  viewShowDetail();

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(2, "Es Campur", 10000, 1);
  addOrder(2, "Pastel", 5000, 1);
  addOrder(3, "Soto Ayam", 12000, 1);

  addPayment(2, 15000, 50000);

  $elements = duplicate(2);
  addDetail($elements);

  viewShowDetail();
