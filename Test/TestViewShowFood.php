<?php

    require_once __DIR__ . "/../Model/Foods.php";
    require_once __DIR__ . "/../View/ViewShowFood.php";

    $foods[1]["name"] = "Mie Ayam";
    $foods[1]["price"] = 7000;

    $foods[2]["name"] = "Soto Ayam";
    $foods[2]["price"] = 10000;
    
    viewShowFood();