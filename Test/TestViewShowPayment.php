<?php

  require_once __DIR__ . "/../Model/Orders.php";
  require_once __DIR__ . "/../View/ViewShowPayment.php";

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
  $orders[4]["qty"] = 2;
  $orders[4]["sub_total"] = $orders[4]["price"]*$orders[4]["qty"];

  viewShowPayment();
