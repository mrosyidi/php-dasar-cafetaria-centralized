<?php

  require_once __DIR__ . "/ViewShowFood.php";
  require_once __DIR__ . "/ViewShowDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewMainMenu(): void
  {
    while(true)
    {
      echo "MENU UTAMA" . PHP_EOL;
      echo "1. Daftar Makanan" . PHP_EOL;
      echo "2. Daftar Minuman" . PHP_EOL;
      echo "3. Pemesanan" . PHP_EOL;
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
        echo "Pemesanan" . PHP_EOL;
      }else if($pilihan == "x")
      {
        break;
      }else
      {
        echo "Pilihan tidak dimengerti" . PHP_EOL;
      }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
  }
