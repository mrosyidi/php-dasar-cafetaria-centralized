<?php

    require_once __DIR__ . "/../Model/Foods.php";
    require_once __DIR__ . "/../Model/Drinks.php";
    require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
    require_once __DIR__ . "/../BusinessLogic/AddFood.php";
    require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
    require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../Helper/Check.php";

    showFood();

    $name = input("Name");
    $category = input("Category (food/drink)");
    $result = check($name, $category);
    var_dump($result);

    addFood("Mie Goreng", 7000);
    addFood("Soto Ayam", 12000);
    addFood("Rawon", 15000);

    showFood();

    $name = input("Name");
    $category = input("Category (food/drink)");
    $result = check($name, $category);
    var_dump($result);

    showDrink();

    $name = input("Name");
    $category = input("Category (food/drink)");
    $result = check($name, $category);
    var_dump($result);

    addDrink("Es Teh", 3000);
    addDrink("Jus Wortel", 8000);
    addDrink("Es Coklat", 12000);

    showDrink();

    $name = input("Name");
    $category = input("Category (food/drink)");
    $result = check($name, $category);
    var_dump($result);
