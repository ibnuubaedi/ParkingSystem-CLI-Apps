<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/ViewShowParkingFee.php";
require_once __DIR__ . "/ViewAddParkingFee.php";

function viewParkingSystem(){
    while(true){
        echo "Selamat datang di Inayah's Parking System" . PHP_EOL;
        echo "1. Tarif parkir" . PHP_EOL;
        echo "2. Bayar parkir" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $choiceMenu = input("Masukan menu yang Anda pilih(1/2/3)");

        if($choiceMenu == "1")
        {
            viewShowParkingFee();
        } 
        elseif ($choiceMenu == "2")
        {
            viewAddParkingFee();
        }
        elseif ($choiceMenu == "3"){
            break;
        }
        else {
            echo "Menu tidak Ada" . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi" . PHP_EOL;
}

?>