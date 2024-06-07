<?php

  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../View/ViewAddDrink.php";

  addDrink("Es Teh", 3000);
  addDrink("Jus Wortel", 8000);
  addDrink("Es Coklat", 12000);

  showDrink();

  viewAddDrink();

  showDrink();
