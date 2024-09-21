<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../BusinessLogic/RemoveOrder.php";

  removeOrder(1);
  var_dump($orders);

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(1, "Es Teh", 3000, 2);
  addOrder(2, "Es Coklat", 12000, 1);
  addOrder(3, "Es Campur", 10000, 1);

  var_dump($orders);

  removeOrder(1);
  var_dump($orders);
