<?php

  function check($name, $category): bool
  {
    global $foods;
    global $drinks;

    $collections = $category == "food" ? $foods : $drinks;

    $found = false;

    foreach($collections as $key => $collection)
    {
      $collection_name = preg_replace('/\s+/', '', strtolower($collection["name"]));
      $name = preg_replace('/\s+/', '', strtolower($name));

      if($collection_name === $name)
      {
        $found = true;
      }
    }

    return $found;
  }
