<?php

require_once __DIR__ . "/../Model/ParkingSystem.php";

/**
 * add Duration Parking, return int
 */
function addDurationParking (int $duration) : bool
{
    global $parkingSystem;

    if($duration)
    {
        $parkingSystem = $parkingSystem * $duration;
        return true;
    }
    else{
        return false;
    }
}

?>