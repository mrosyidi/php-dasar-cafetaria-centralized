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
      foreach($details as $number => $detail)
      {
        if($detail['code'] == $code)
        {
          echo "$number. " . $detail['code'] . " " . $detail['name'] . " Rp." . $detail['price'] . " (x"
          . $detail['qty'] . ") " . $detail['sub_total'] . PHP_EOL;
        }
      }
    }
  }
