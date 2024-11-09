<?php

    require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
    require_once __DIR__ . "/../Helper/Input.php";

    $foods[1]['name'] = "Mie Ayam";
    $foods[1]['price'] = 7000;

    $foods[2]['name'] = "Soto Ayam";
    $foods[2]['price'] = 10000;

    $foods[3]['name'] = "Rawon";
    $foods[3]['price'] = 12000;

    showFood();

    $numberFood = count($foods);

    for($index = $numberFood; $index >= 1; $index--)
    {
        unset($foods[$index]);
    }

    showFood();