<?php

  require_once __DIR__ . "/../Model/Payments.php";
  require_once __DIR__ . "/../BusinessLogic/ShowPayment.php";

  $payments[1]['code'] = 1;
  $payments[1]['total'] = 28000;
  $payments[1]['pay'] = 50000;
  $payments[1]['change'] = $payments[1]['pay'] - $payments[1]['total'];

  showPayment();

  $numberOfFoods = count($payments);

  for($index = $numberOfFoods; $index >= 1; $index--)
  {
    unset($payments[$index]);
  }

  showPayment();
