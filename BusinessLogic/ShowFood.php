<?php

  function showFood(): void
  {
    global $foods;

    echo "DAFTAR MAKANAN" . PHP_EOL;

    if(!empty($foods))
    {
      foreach($foods as $number => $food)
      {
        echo "$number. " . $food["name"] . "   Rp." . $food["price"] . PHP_EOL;
      }
    }else
    {
      echo "Tidak ada daftar makanan" . PHP_EOL;
    }
  }
