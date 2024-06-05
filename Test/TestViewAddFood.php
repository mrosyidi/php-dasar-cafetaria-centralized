<?php

  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../View/ViewAddFood.php";

  addFood("Mie Ayam", 7000);
  addFood("Soto Ayam", 12000);
  addFood("Rawon", 15000);

  showFood();

  viewAddFood();

  showFood();
