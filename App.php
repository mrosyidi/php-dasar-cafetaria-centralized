<?php

    require_once __DIR__ . "/Model/Foods.php";
    require_once __DIR__ . "/Model/Drinks.php";
    require_once __DIR__ . "/BusinessLogic/ShowFood.php";
    require_once __DIR__ . "/BusinessLogic/AddFood.php";
    require_once __DIR__ . "/BusinessLogic/RemoveFood.php";
    require_once __DIR__ . "/View/ViewShowFood.php";
    require_once __DIR__ . "/View/ViewAddFood.php";
    require_once __DIR__ . "/View/ViewRemoveFood.php";
    require_once __DIR__ . "/Helper/Input.php";

    echo "Cafetaria App" . PHP_EOL;

    while(true)
    {
        echo "MENU UTAMA" . PHP_EOL;
        echo "1. Daftar Makanan" . PHP_EOL;
        echo "2. Daftar Minuman" . PHP_EOL;
        echo "3. Pemesanan" . PHP_EOL;
        echo "4. Pembayaran" . PHP_EOL;
        echo "5. Detail" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if($pilihan == "1")
        {
            viewShowFood();
        }else if($pilihan == "2")
        {

        }else if($pilihan == "3")
        {

        }else if($pilihan == "4")
        {

        }else if($pilihan == "5")
        {

        }else if($pilihan == "x")
        {
            break;
        }else 
        {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;