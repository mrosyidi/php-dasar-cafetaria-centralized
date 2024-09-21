<?php

  function showPayment(): void
  {
    global $payments;

    echo "DAFTAR PEMBAYARAN" . PHP_EOL;

    if(!empty($payments))
    {
      $counter = 0;
      foreach($payments as $payment)
      {
        $counter++;
        echo "$counter. Kode: " . $payment["code"] . "  Total: " . $payment["total"] .
        "  Jumlah Bayar: " . $payment["pay"] . "  Kembalian: " . $payment["change"] . PHP_EOL;
      }
    }else
    {
      echo "Tidak ada daftar pembayaran" . PHP_EOL;
    }
  }
