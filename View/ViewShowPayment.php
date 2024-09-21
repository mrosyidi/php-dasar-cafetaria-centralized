<?php

  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/ViewMainMenu.php";

  function viewShowPayment(): void
  {
    showOrder();

    while(true)
    {
      echo "Menu Pembayaran" . PHP_EOL;
      echo "1. Bayar Pesanan" .  PHP_EOL;
      echo "x. Kembali" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
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
