<?php

require_once __DIR__ . "/../BusinessLogic/AddDurationParking.php";
require_once __DIR__ . "/../BusinessLogic/AddVehiclesType.php";
require_once __DIR__ . "/../Model/ParkingSystem.php";

addVehiclesType(1);
addDurationParking(5);
var_dump($parkingSystem);


?>