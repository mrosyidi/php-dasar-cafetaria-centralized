<?php

  function removeOrder(int $code): void
  {
    global $orders;

    $counter = 0;
    $temporary = [];
    $count = is_array($orders) ? sizeof($orders) : 0;

    for($index = 1; $index <= $count; $index++)
    {
      if($orders[$index]['code'] != $code)
      {
        $counter++;
        $temporary[$counter] = $orders[$index];
      }
    }

    $orders = $temporary;
  }
  
