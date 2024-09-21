<?php

  function addPayment(int $code, int $total, int $pay): void
  {
    global $payments;

    $number = is_array($payments) ? sizeof($payments) : 0;
    $number = $number + 1;

    $payments[$number]['code'] = $code;
    $payments[$number]['total'] = $total;
    $payments[$number]['pay'] = $pay;
    $payments[$number]['change'] = $pay-$total;
  }
