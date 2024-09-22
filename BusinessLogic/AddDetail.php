<?php

  function addDetail(array $elements): void
  {
    global $details;

    $number = is_array($details) ? sizeof($details) : 0;
    $number = $number + 1;

    for($index = 0; $index < count($elements); $index++)
    {
      $details[$number]['code'] = $elements[$index]['code'];
      $details[$number]['name'] = $elements[$index]['name'];
      $details[$number]['price'] = $elements[$index]['price'];
      $details[$number]['qty'] = $elements[$index]['qty'];
      $details[$number]['sub_total'] = $elements[$index]['sub_total'];
      $number++;
    }
  }
