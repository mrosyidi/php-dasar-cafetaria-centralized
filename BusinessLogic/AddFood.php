<?php

    function addFood(string $name, int $price): void 
    {
        global $foods;

        $index = is_array($foods) ? sizeof($foods) : 0;
        $index = $index + 1;

        $foods[$index]["name"] = $name;
        $foods[$index]["price"] = $price;
    }