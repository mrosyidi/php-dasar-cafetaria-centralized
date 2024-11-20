<?php 

    require_once __DIR__ . "/../Model/Foods.php";
    require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
    require_once __DIR__ . "/../BusinessLogic/AddFood.php";
    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../Helper/Check.php";

    showFood();

    $name = input("Name");
    $result = check($name);
    var_dump($result);

    addFood("Mie Ayam", 7000);
    addFood("Rawon", 12000);

    showFood();

    $name = input("Name");
    $result = check($name);
    var_dump($result);
    
    