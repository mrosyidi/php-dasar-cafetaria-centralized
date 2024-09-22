<?php

  function find(int $code, string $category): bool
  {
    global $orders;
    global $payments;

    $found = false;
    $index = 1;
    $items = $category == 'order' ? $orders : $payments;
    $elements = is_array($items) ? sizeof($items) : 0;

    while($index <= $elements && !$found)
    {
      if($items[$index]['code'] == $code)
      {
        $found = true;
      }else
      {
        $index = $index + 1;
      }
    }

    return $found;
  }
