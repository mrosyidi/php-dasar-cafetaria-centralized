<?php

  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/ViewMainMenu.php";
  require_once __DIR__ . "/ViewAddDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewShowDrink(): void
  {
    while(true)
    {
      showDrink();

      echo "Menu Minuman" . PHP_EOL;
      echo "1. Tambah Minuman" . PHP_EOL;
      echo "2. Hapus Minuman" . PHP_EOL;
      echo "x. Kembali" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
      {
        viewAddDrink();
      }else if($pilihan == "2")
      {

      }else if($pilihan == "x")
      {
        viewMainMenu();
        exit();
      }else
      {
        echo "Pilihan tidak dimengerti" . PHP_EOL;
      }
    }
  }
