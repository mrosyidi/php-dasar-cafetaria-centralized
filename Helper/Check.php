<?php

  function check(string $name): bool
  {
    global $foods;

    $found = false;

    foreach($foods as $key => $food)
    {
      $food_name = preg_replace('/\s+/', '', strtolower($food["name"]));
      $name = preg_replace('/\s+/', '', strtolower($name));
      if($food_name === $name) $found = true;
    }

    return $found;
  }
