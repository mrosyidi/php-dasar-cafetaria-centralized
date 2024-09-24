<?php

  require_once __DIR__ . "/Model/Foods.php";
  require_once __DIR__ . "/Model/Drinks.php";
  require_once __DIR__ . "/Model/Orders.php";
  require_once __DIR__ . "/Model/Payments.php";
  require_once __DIR__ . "/Model/Details.php";
  require_once __DIR__ . "/BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/BusinessLogic/AddFood.php";
  require_once __DIR__ . "/BusinessLogic/RemoveFood.php";
  require_once __DIR__ . "/BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/BusinessLogic/RemoveDrink.php";
  require_once __DIR__ . "/BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/BusinessLogic/RemoveOrder.php";
  require_once __DIR__ . "/BusinessLogic/ShowPayment.php";
  require_once __DIR__ . "/BusinessLogic/AddPayment.php";
  require_once __DIR__ . "/BusinessLogic/ShowDetail.php";
  require_once __DIR__ . "/BusinessLogic/AddDetail.php";
  require_once __DIR__ . "/View/ViewShowFood.php";
  require_once __DIR__ . "/View/ViewAddFood.php";
  require_once __DIR__ . "/View/ViewRemoveFood.php";
  require_once __DIR__ . "/View/ViewShowDrink.php";
  require_once __DIR__ . "/View/ViewAddDrink.php";
  require_once __DIR__ . "/View/ViewRemoveDrink.php";
  require_once __DIR__ . "/View/ViewShowOrder.php";
  require_once __DIR__ . "/View/ViewAddOrder.php";
  require_once __DIR__ . "/View/ViewShowPayment.php";
  require_once __DIR__ . "/View/ViewAddPayment.php";
  require_once __DIR__ . "/View/ViewShowDetail.php";

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
      viewShowDrink();
    }else if($pilihan == "3")
    {
      viewShowOrder();
    }else if($pilihan == "4")
    {
      viewShowPayment();
    }else if($pilihan == "5")
    {
      viewShowDetail();
    }else if($pilihan == "x")
    {
      break;
    }else
    {
      echo "Pilihan tidak dimengerti" . PHP_EOL;
    }
  }

  echo "Sampai Jumpa Lagi" . PHP_EOL;
