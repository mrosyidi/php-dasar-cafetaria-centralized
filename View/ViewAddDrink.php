<?php

  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../BusinessLogic/AddDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Check.php";

  function viewAddDrink(): void
  {
    echo "MENAMBAH MINUMAN" . PHP_EOL;

    $name = input("Nama minuman (x untuk batal)");

    if($name == "x")
    {
      echo "Batal menambah minuman" . PHP_EOL;
    }else
    {
      $price = input("Harga minuman (x untuk batal)");

      if($price == "x")
      {
        echo "Batal menambah minuman" . PHP_EOL;
      }else if(!is_numeric($price))
      {
        echo "Gagal menambah minuman, harga minuman harus bilangan" . PHP_EOL;
      }else if($price < 0)
      {
        echo "Harga minuman harus bilangan positif" . PHP_EOL;
      }else if(check($name, "drink"))
      {
        echo "Gagal menambah minuman, nama minuman sudah ada" . PHP_EOL;
      }else
      {
        addDrink($name, $price);
      }
    }
  }
