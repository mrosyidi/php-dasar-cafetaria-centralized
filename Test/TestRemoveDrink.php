<?php

  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/RemoveDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";

  showDrink();

  $success = removeDrink(-1);
  var_dump($success);

  $success = removeDrink(0);
  var_dump($success);

  $success = removeDrink(1);
  var_dump($success);

  addDrink("Soto Ayam", 12000);

  showDrink();

  $success = removeDrink(-1);
  var_dump($success);

  $success = removeDrink(0);
  var_dump($success);

  $success = removeDrink(2);
  var_dump($success);

  $success = removeDrink(1);
  var_dump($success);

  showDrink();
