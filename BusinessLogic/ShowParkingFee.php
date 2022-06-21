<?php

require_once __DIR__ . "/../Model/ParkingFee.php";

/**
 * Show parking fee from database
 */
function showParkingFee()
{
    global $parkingFee;

    echo "Tipe Kendaraan:" . PHP_EOL;
    echo "1. {$parkingFee[1]["Tipe"]} Rp.{$parkingFee[1]["Tarif"]}/jam" . PHP_EOL;
    echo "2. {$parkingFee[2]["Tipe"]} Rp.{$parkingFee[2]["Tarif"]}/jam" . PHP_EOL;
    echo "3. {$parkingFee[3]["Tipe"]} Rp.{$parkingFee[3]["Tarif"]}/jam" . PHP_EOL;
}

?>