<?php

  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../View/ViewAddPayment.php";

  addOrder(1, "Mie Ayam", 6000, 2);
  addOrder(1, "Es Teh", 3000, 2);
  addOrder(2, "Es Coklat", 12000, 1);

  showOrder();

  viewAddPayment();
