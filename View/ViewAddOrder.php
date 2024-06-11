<?php

  require_once __DIR__ . "/../Model/Foods.php";
  require_once __DIR__ . "/../Model/Drinks.php";
  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/ShowFood.php";
  require_once __DIR__ . "/../BusinessLogic/ShowDrink.php";
  require_once __DIR__ . "/../BusinessLogic/AddOrder.php";
  require_once __DIR__ . "/../Helper/Input.php";
  require_once __DIR__ . "/../Helper/Range.php";
  require_once __DIR__ . "/../Helper/Code.php";
  require_once __DIR__ . "/../Helper/Data.php";

  function viewAddOrder(int $numberOrder, bool $exit): void
  {
    global $orders;

    if($numberOrder == 1)
    {
      showFood();
      $order = "makanan";
    }else if($numberOrder == 2)
    {
      showDrink();
      $order = "minuman";
    }

    echo "MENAMBAH PESANAN" . PHP_EOL;
    $number = input("Nomor $order (x untuk batal)");

    if($number == "x")
    {
      echo "Batal menambah pesanan" . PHP_EOL;
    }else if(!is_numeric($number))
    {
      echo "Gagal menambah pesanan, nomor $order harus bilangan" . PHP_EOL;
    }else if(!inRange($numberOrder, $number))
    {
      echo "Gagal menambah pesanan, tidak ada $order dengan nomor $number" . PHP_EOL;
    }else
    {
      $qty = input("Jumlah (x untuk batal)");

      if($qty == "x")
      {
        echo "Batal menambah $order" . PHP_EOL;
      }else if(!is_numeric($qty))
      {
        echo "Gagal menambah makanan, nomor $order harus bilangan" . PHP_EOL;
      }else if($qty <= 0)
      {
        echo "Gagal menambah makanan, jumlah $order minimal satu" . PHP_EOL;
      }else
      {
        $code = code($exit);
        $data = data($numberOrder, $number);
        addOrder($code, $data["name"], $data["price"], $qty);
      }
    }
  }
