<?php

  function code(bool $exit): int
  {
    global $orders;

    if(empty($orders))
    {
      $code = 1;
    }else if(!empty($orders) && !$exit)
    {
      $code = $orders[sizeof($orders)]["code"];
    }else if(!empty($orders) && $exit)
    {
      $code = $orders[sizeof($orders)]["code"] + 1;
    }

    return $code;
  }
