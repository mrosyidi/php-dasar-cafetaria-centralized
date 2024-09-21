<?php

  function find(int $code): bool
  {
    global $orders;

    $found = false;
    $index = 1;
    $elements = is_array($orders) ? sizeof($orders) : 0;

    while($index <= $elements && !$found)
    {
      if($orders[$index]['code'] == $code)
      {
        $found = true;
      }else
      {
        $index = $index + 1;
      }
    }

    return $found;
  }
