<?php

  function showDrink(): void
  {
    global $drinks;

    echo "DAFTAR MINUMAN" . PHP_EOL;

    if(empty($drinks))
    {
      echo "Tidak ada daftar minuman" . PHP_EOL;
    }else
    {
      foreach($drinks as $number => $drink)
      {
        echo "$number. " . $drink["name"] . "   Rp." . $drink["price"] . PHP_EOL;
      }
    }
  }
