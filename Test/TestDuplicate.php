<?php

  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Duplicate.php";

  $elements = duplicate(1);
  var_dump($elements);

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(1, "Es Campur", 10000, 1);
  addOrder(1, "Es Oyen", 12000, 1);
  addOrder(2, "Soto Ayam", 10000, 1);
  addOrder(2, "Es Teh", 3000, 2);
  addOrder(3, "Es Coklat", 12000, 2);

  $elements = duplicate(4);
  var_dump($elements);

  $elements = duplicate(2);
  var_dump($elements);
