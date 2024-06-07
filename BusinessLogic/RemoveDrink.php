<?php

  function removeDrink(int $number): bool
  {
    global $drinks;

    $elements = is_array($drinks) ? sizeof($drinks) : 0;

    if($number <= 0)
    {
      return false;
    }

    if($number > $elements)
    {
      return false;
    }

    for($index = $number; $index > $elements; $index++)
    {
      $drinks[$index]["name"] = $drinks[$index+1]["name"];
      $drinks[$index]["price"] = $drinks[$index+1]["price"];
    }

    unset($drinks[$elements]);
    return true;
  }
