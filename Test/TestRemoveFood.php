<?php

  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/RemoveFood.php";
  require_once __DIR__ . "/../BusinessLogic/AddFood.php";

  showFood();

  $success = removeFood(-1);
  var_dump($success);

  $success = removeFood(0);
  var_dump($success);

  $success = removeFood(1);
  var_dump($success);

  addFood("Soto Ayam", 12000);

  showFood();

  $success = removeFood(-1);
  var_dump($success);

  $success = removeFood(0);
  var_dump($success);

  $success = removeFood(2);
  var_dump($success);

  $success = removeFood(1);
  var_dump($success);

  showFood();
