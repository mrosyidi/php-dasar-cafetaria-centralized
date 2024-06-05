<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../View/ViewShowFood.php";

  $foods[1]["name"] = "Mie Goreng";
  $foods[1]["price"] = 7000;

  $foods[2]["name"] = "Soto Ayam";
  $foods[2]["price"] = 12000;

  $foods[3]["name"] = "Rawon";
  $foods[3]["price"] = 15000;

  viewShowFood();
