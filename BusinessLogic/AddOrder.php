<?php 

    function addOrder(int $code, string $name, int $price, int $qty): void 
    {
        global $orders;

        $index = is_array($orders) ? sizeof($orders) : 0;
        $index = $index + 1;

        $orders[$index]["code"] = $code;
        $orders[$index]["name"] = $name;
        $orders[$index]["price"] = $price;
        $orders[$index]["qty"] = $qty;
        $orders[$index]["sub_total"] = $price*$qty;
    }
