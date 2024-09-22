<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../Model/Details.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDetail.php";
  require_once __DIR__ . "/../Helper/Duplicate.php";

  showDetail(1);

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(1, "Es Campur", 10000, 1);
  addOrder(1, "Es Oyen", 12000, 1);
  addOrder(2, "Pastel", 5000, 2);

  $elements = duplicate(1);
  addDetail($elements);

  showDetail(1);
