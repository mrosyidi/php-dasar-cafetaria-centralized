<?php

  function addOrder(int $code, string $name, int $price, int $qty): void
  {
    global $orders;

    $number = is_array($orders) ? sizeof($orders) : 0;
    $number = $number + 1;

    $orders[$number]["code"] = $code;
    $orders[$number]["name"] = $name;
    $orders[$number]["price"] = $price;
    $orders[$number]["qty"] = $qty;
    $orders[$number]["sub_total"] = $orders[$number]["price"]*$orders[$number]["qty"];
  }
