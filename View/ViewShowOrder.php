<?php

  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../View/ViewMainMenu.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewShowOrder(): void
  {
    while(true)
    {
      showOrder();

      echo "Menu Pemesanan" . PHP_EOL;
      echo "1. Pesan Makanan" . PHP_EOL;
      echo "2. Pesan Minuman" . PHP_EOL;
      echo "x. Kembali" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
      {

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
