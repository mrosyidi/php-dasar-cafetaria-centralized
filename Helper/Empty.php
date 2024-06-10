<?php

  function isEmpty(int $numberOrder): bool
  {
    global $foods;
    global $drinks;

    $order = $numberOrder == 1 ? $foods : $drinks;
    $result = empty($order) ? true : false;
    return $result;
  }
