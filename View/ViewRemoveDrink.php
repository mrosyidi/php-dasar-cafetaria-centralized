<?php

  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../BusinessLogic/RemoveDrink.php";
  require_once __DIR__ . "/../Helper/Input.php";

  function viewRemoveDrink(): void
  {
    echo "MENGHAPUS MINUMAN" . PHP_EOL;

    $number = input("Nomor (x untuk batal)");

    if($number == "x")
    {
      echo "Batal menghapus minuman" . PHP_EOL;
    }else if(!is_numeric($number))
    {
      echo "Gagal menghapus minuman, nomor harus bilangan" . PHP_EOL;
    }else
    {
      $success = removeDrink($number);

      if($success)
      {
        echo "Berhasil menghapus minuman nomor $number" . PHP_EOL;
      }else
      {
        echo "Gagal menghapus minuman nomor $number" . PHP_EOL;
      }
    }
  }
