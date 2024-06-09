<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../BusinessLogic/ShowOrder.php";

  $orders[1]["code"] = 1;
  $orders[1]["name"] = "Mie Goreng";
  $orders[1]["price"] = 7000;
  $orders[1]["qty"] = 2;
  $orders[1]["sub_total"] = $orders[1]["price"]*$orders[1]["qty"];

  $orders[2]["code"] = 1;
  $orders[2]["name"] = "Es Teh";
  $orders[2]["price"] = 3000;
  $orders[2]["qty"] = 1;
  $orders[2]["sub_total"] = $orders[2]["price"]*$orders[2]["qty"];

  $orders[3]["code"] = 1;
  $orders[3]["name"] = "Es Coklat";
  $orders[3]["price"] = 12000;
  $orders[3]["qty"] = 1;
  $orders[3]["sub_total"] = $orders[3]["price"]*$orders[3]["qty"];

  $orders[4]["code"] = 2;
  $orders[4]["name"] = "Soto Ayam";
  $orders[4]["price"] = 12000;
  $orders[4]["qty"] = 1;
  $orders[4]["sub_total"] = $orders[4]["price"]*$orders[4]["qty"];

  $orders[5]["code"] = 2;
  $orders[5]["name"] = "Es Teh";
  $orders[5]["price"] = 3000;
  $orders[5]["qty"] = 1;
  $orders[5]["sub_total"] = $orders[5]["price"]*$orders[5]["qty"];

  $orders[6]["code"] = 3;
  $orders[6]["name"] = "Jus Wortel";
  $orders[6]["price"] = 8000;
  $orders[6]["qty"] = 1;
  $orders[6]["sub_total"] = $orders[6]["price"]*$orders[6]["qty"];

  showOrder();

  $numberOfOrders = count($orders);

  for($index = 1; $index <= $numberOfOrders; $index++)
  {
    unset($orders[$index]);
  }

  $orders[1]["code"] = 1;
  $orders[1]["name"] = "Rawon";
  $orders[1]["price"] = 15000;
  $orders[1]["qty"] = 1;
  $orders[1]["sub_total"] = $orders[1]["price"]*$orders[1]["qty"];

  $orders[2]["code"] = 1;
  $orders[2]["name"] = "Es Teh";
  $orders[2]["price"] = 3000;
  $orders[2]["qty"] = 1;
  $orders[2]["sub_total"] = $orders[2]["price"]*$orders[2]["qty"];

  $orders[3]["code"] = 2;
  $orders[3]["name"] = "Mie Goreng";
  $orders[3]["price"] = 7000;
  $orders[3]["qty"] = 1;
  $orders[3]["sub_total"] = $orders[3]["price"]*$orders[3]["qty"];

  $orders[4]["code"] = 2;
  $orders[4]["name"] = "Es Coklat";
  $orders[4]["price"] = 12000;
  $orders[4]["qty"] = 1;
  $orders[4]["sub_total"] = $orders[4]["price"]*$orders[4]["qty"];

  showOrder();

  $numberOfOrders = count($orders);

  for($index = 1; $index <= $numberOfOrders; $index++)
  {
    unset($orders[$index]);
  }

  $orders[1]["code"] = 1;
  $orders[1]["name"] = "Soto Ayam";
  $orders[1]["price"] = 12000;
  $orders[1]["qty"] = 2;
  $orders[1]["sub_total"] = $orders[1]["price"]*$orders[1]["qty"];

  $orders[2]["code"] = 1;
  $orders[2]["name"] = "Es Teh";
  $orders[2]["price"] = 3000;
  $orders[2]["qty"] = 2;
  $orders[2]["sub_total"] = $orders[2]["price"]*$orders[2]["qty"];

  showOrder();

  $numberOfOrders = count($orders);

  for($index = 1; $index <= $numberOfOrders; $index++)
  {
    unset($orders[$index]);
  }

  showOrder();
