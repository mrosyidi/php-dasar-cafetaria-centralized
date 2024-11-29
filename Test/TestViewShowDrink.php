<?php

    require_once __DIR__ . "/../Model/Drinks.php";
    require_once __DIR__ . "/../View/ViewShowDrink.php";

    $drinks[1]["name"] = "Es Coklat";
    $drinks[1]["price"] = 12000;

    $drinks[2]["name"] = "Jus Alpukat";
    $drinks[2]["price"] = 8000;
    
    viewShowDrink();