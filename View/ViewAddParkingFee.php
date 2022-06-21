<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddDurationParking.php";
require_once __DIR__ . "/../BusinessLogic/AddVehiclesType.php";
require_once __DIR__ . "/../Model/ParkingSystem.php";

function viewAddParkingFee()
{
    $inputVehiclesType = input("Masukan Tipe kendaraan");

    $vehiclesType = addVehiclesType((int)$inputVehiclesType);

    if ($vehiclesType){
        $inputDurationParking = input("Masukan Durasi parkir");

        $durationParking = addDurationParking((int)$inputDurationParking);

        if ($durationParking){
            global $parkingSystem;

            echo "Biaya parkir Anda sebesar Rp. $parkingSystem" . PHP_EOL;
        } 

        else {
            echo "Durasi yang Anda masukan salah" . PHP_EOL;

            $durationParking;
        }

    } else {
        echo "Tipe yang Anda masukan salah" . PHP_EOL;

        $vehiclesType = addVehiclesType((int)$inputVehiclesType);
    }
}

?>