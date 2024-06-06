<?php

  function removeFood(int $number): bool
  {
    global $foods;

    $elements = is_array($foods) ? sizeof($foods) : 0;

    if($number <= 0)
    {
      return false;
    }

    if($number > $elements)
    {
      return false;
    }

    for($index = $number; $index < $elements; $index++)
    {
      $foods[$index]["name"] = $foods[$index+1]["name"];
      $foods[$index]["price"] = $foods[$index+1]["price"];
    }

    unset($foods[$elements]);
    return true;
  }
