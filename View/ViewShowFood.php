<?php

  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/ViewMainMenu.php";
  require_once __DIR__ . "/ViewAddFood.php";
  require_once __DIR__ . "/ViewRemoveFood.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewShowFood(): void
  {
    while(true)
    {
      showFood();

      echo "Menu Makanan" . PHP_EOL;
      echo "1. Tambah Makanan" . PHP_EOL;
      echo "2. Hapus Makanan" . PHP_EOL;
      echo "x. Kembali" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
      {
        viewAddFood();
      }else if($pilihan == "2")
      {
        viewRemoveFood();
      }else if($pilihan == "x")
      {
        viewMainMenu();
        exit;
      }else
      {
        echo "Pilihan tidak dimengerti" . PHP_EOL;
      }
    }
  }
