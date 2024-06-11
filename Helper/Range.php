<?php

  function inRange(int $numberOrder, int $number): bool
  {
    global $foods;
    global $drinks;

    $order = $numberOrder == 1 ? $foods : $drinks;
    $result = $number <= sizeof($order) && $number > 0 ? true : false;
    return $result;
  }
