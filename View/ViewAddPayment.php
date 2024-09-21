<?php

  require_once __DIR__ . "/../Model/Payments.php";
  require_once __DIR__ . "/../BusinessLogic/AddPayment.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Find.php";
  require_once __DIR__ . "/../Helper/Pay.php";

  function viewAddPayment(): void
  {
    global $payments;

    echo "PEMBAYARAN PESANAN" . PHP_EOL;
    $code = input("Kode Pesanan (x untuk batal)");

    if($code == "x")
    {
      echo "Batal memproses pesanan" . PHP_EOL;
    }else
    {
      $codeOrder = find($code);

      if($codeOrder)
      {
        $pay = pay($code);
        echo "Total yang harus dibayar : Rp." . $pay . PHP_EOL;

        $money = input("Jumlah uang (x untuk batal)");

        if($money == "x")
        {
          echo "Batal memproses pesanan" . PHP_EOL;
        }else if(!is_numeric($money))
        {
          echo "Gagal memproses pesanan, jumlah uang harus bilangan" . PHP_EOL;
        }else if($money < $pay)
        {
          echo "Gagal memproses pesanan, jumlah uang yang digunakan tidak cukup" . PHP_EOL;
        }else
        {
          $change = $money - $pay;
          addPayment($code, $pay, $money);

          echo "Kembalian : Rp." . $change . PHP_EOL;
        }
      }else
      {
        echo "Kode pesanan tidak ditemukan" . PHP_EOL;
      }
    }
  }
