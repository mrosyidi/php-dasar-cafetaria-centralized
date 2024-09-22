<?php

  function showDetail(int $code): void
  {
    global $details;

    echo "DAFTAR DETAIL" . PHP_EOL;

    if(empty($details))
    {
      echo "Tidak ada daftar detail" . PHP_EOL;
    }else
    {
      $counter = 0;
      foreach($details as $detail)
      {
        if($detail['code'] == $code)
        {
          $counter++;
          echo "$counter. " . $detail['code'] . " " . $detail['name'] . " Rp." . $detail['price'] . " (x"
          . $detail['qty'] . ") " . $detail['sub_total'] . PHP_EOL;
        }
      }
    }
  }
