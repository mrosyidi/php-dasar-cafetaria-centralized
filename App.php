<?php

  require_once __DIR__ . "/Model/Foods.php";
  require_once __DIR__ . "/Model/Drinks.php";
  require_once __DIR__ . "/Model/Orders.php";
  require_once __DIR__ . "/BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/BusinessLogic/AddFood.php";
  require_once __DIR__ . "/BusinessLogic/RemoveFood.php";
  require_once __DIR__ . "/BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/BusinessLogic/RemoveDrink.php";
  require_once __DIR__ . "/BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/View/ViewShowFood.php";
  require_once __DIR__ . "/View/ViewAddFood.php";
  require_once __DIR__ . "/View/ViewRemoveFood.php";
  require_once __DIR__ . "/View/ViewMainMenu.php";
  require_once __DIR__ . "/View/ViewShowDrink.php";
  require_once __DIR__ . "/View/ViewAddDrink.php";
  require_once __DIR__ . "/View/ViewRemoveDrink.php";
  require_once __DIR__ . "/View/ViewShowOrder.php";

  echo "Cafetaria App" . PHP_EOL;

  viewMainMenu();
