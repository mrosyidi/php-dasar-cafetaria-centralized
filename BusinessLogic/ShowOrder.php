<?php

  function showOrder(): void
  {
    global $orders;

    echo "DAFTAR PESANAN" . PHP_EOL;

    if(!empty($orders))
    {
      foreach($orders as $number => $order)
      {
        echo "$number. " . $order["code"] . " " . $order["name"] . " Rp." . $order["price"] . " (x" . $order["qty"] . ") Rp." . $order["sub_total"] . PHP_EOL;
      }
    }else
    {
      echo "Tidak ada daftar pesanan" . PHP_EOL;
    }
  }
