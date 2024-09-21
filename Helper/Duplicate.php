<?php

  function duplicate(int $code): array
  {
    global $orders;

    $elements = [];
    $count = is_array($orders) ? sizeof($orders) : 0;

    for($index = 1; $index <= $count; $index++)
    {
      if($orders[$index]['code'] == $code)
      {
        $elements[] = $orders[$index];
      }
    }

    return $elements;
  }
