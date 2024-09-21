<?php

  function pay(int $code): int
  {
    global $orders;

    $total = 0;

    for($index = 1; $index <= sizeof($orders); $index++)
    {
      if($orders[$index]["code"] == $code)
      {
        $total = $total + $orders[$index]["sub_total"];
      }
    }

    return $total;
  }
