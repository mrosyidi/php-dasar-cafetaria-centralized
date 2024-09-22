<?php

  require_once __DIR__ . "/../BusinessLogic/ShowPayment.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDetail.php";
  require_once __DIR__ . "/ViewMainMenu.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Find.php";

  function viewShowDetail(): void
  {
    global $payments;

    while(true)
    {
      showPayment();

      echo "Menu Detail" . PHP_EOL;
      echo "1. Tampilkan Detail" . PHP_EOL;
      echo "x. Kembali" . PHP_EOL;

      $pilihan = input("Pilih");

      if($pilihan == "1")
      {
        $code = input("Kode Pesanan (x untuk batal)");

        if($code == "x")
        {
          echo "Batal melihat detail pesanan" . PHP_EOL;
        }else if(empty($payments))
        {
          echo "Tidak ada daftar pembayaran" . PHP_EOL;
        }else if(!find($code, 'payment'))
        {
          echo "Tidak ada kode pesanan yang sesuai dengan data pembayaran" . PHP_EOL;
        }else
        {
          showDetail($code);
        }
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
