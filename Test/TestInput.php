<?php

    require_once __DIR__ . "/../Helper/Input.php";

    $name = input("Nama makanan");
    $price = input("Harga makanan");

    echo "DAFTAR MAKANAN" . PHP_EOL;
    echo "1." . $name . " Rp." . $price . PHP_EOL;