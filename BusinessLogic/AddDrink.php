<?php 

    function addDrink(string $name, int $price): void 
    {
        global $drinks;

        $index = is_array($drinks) ? sizeof($drinks) : 0;
        $index = $index + 1;

        $drinks[$index]["name"] = $name;
        $drinks[$index]["price"] = $price;
    }