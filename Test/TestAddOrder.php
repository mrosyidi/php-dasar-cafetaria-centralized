<?php

  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";

  showOrder();

  $code = input("Code");
  $name = input("Name");
  $price = input("Price");
  $qty = input("Qty");

  addOrder($code, $name, $price, $qty);

  showOrder();

  addOrder(1, "Es Teh", 3000, 1);
  addOrder(1, "Es Coklat", 12000, 1);
  addOrder(2, "Soto Ayam", 12000, 2);
  addOrder(2, "Es Teh", 3000, 2);

  showOrder();

  $code = input("Code");
  $name = input("Name");
  $price = input("Price");
  $qty = input("Qty");

  addOrder($code, $name, $price, $qty);

  showOrder();
