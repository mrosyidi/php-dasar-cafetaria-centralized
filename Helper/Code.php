<?php

  function code(bool $exit): int
  {
    global $orders;
    global $payments;

    if(empty($orders) && empty($payments))
    {
      $code = 1;
    }else if(empty($orders) && !empty($payments))
    {
      $max = max(array_column($payments, 'code'));
      $code = $max + 1;
    }else if(!empty($orders) && !$exit)
    {
      $code = $orders[sizeof($orders)]["code"];
    }else if(!empty($orders) && $exit)
    {
      $max = max(array_column($orders, 'code'));

      if(!empty($payments))
      {
        $paymentMax = max(array_column($payments, 'code'));
        $max = $max < $paymentMax ? $paymentMax : $max;
      }

      $code = $max + 1;
    }

    return $code;
  }
