<?php

require_once __DIR__ . "/../Model/ParkingFee.php";
require_once __DIR__ . "/../Model/ParkingSystem.php";


/**
 * Add vehicle type(int), return fee parking(int)
 */
function addVehiclesType(int $vehiclesType) : bool
{
    global $parkingFee;
    global $parkingSystem;

    if($vehiclesType)
    {
        if($vehiclesType == 1){
            $parkingSystem = $parkingFee[1]["Tarif"];
        }
        elseif ($vehiclesType == 2){
            $parkingSystem = $parkingFee[2]["Tarif"];
        }
        elseif ($vehiclesType == 3){
            $parkingSystem = $parkingFee[3]["Tarif"];
        }
        return true;
    }
    else {
        $parkingSystem = 0;
        return false;
    }
}
?>