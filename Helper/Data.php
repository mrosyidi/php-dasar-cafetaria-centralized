<?php

  function data(int $numberOrder, int $numberIndex): array
  {
    global $foods;
    global $drinks;

    $data = $numberOrder == 1 ? $foods : $drinks;

    return [
      "name" => $data[$numberIndex]["name"],
      "price" => $data[$numberIndex]["price"]
    ];
  }
