<?php

    require_once __DIR__ . "/../BusinessLogic/RemoveFood.php";
    require_once __DIR__ . "/../Helper/Input.php";

    function viewRemoveFood(): void
    {
        echo "MENGHAPUS MAKANAN" . PHP_EOL;

        $number = input("Nomor (x untuk batal)");

        if($number == "x")
        {
            echo "Batal menghapus makanan" . PHP_EOL;
        }else if(!is_numeric($number))
        {
            echo "Gagal menghapus makanan, nomor harus bilangan" . PHP_EOL;
        }else
        {
            $success = removeFood($number);

            if($success)
            {
            echo "Berhasil menghapus makanan nomor $number" . PHP_EOL;
            }else
            {
            echo "Gagal menghapus makanan nomor $number" . PHP_EOL;
            }
        }
    }