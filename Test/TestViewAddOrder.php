<?php

  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../View/ViewAddOrder.php";

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  addFood("Mie Goreng", 6000);
  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);

  showOrder();
  viewAddOrder(1, false);
  showOrder();

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  addFood("Es Teh", 3000);
  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);

  showOrder();
  viewAddOrder(2, false);
  showOrder();
