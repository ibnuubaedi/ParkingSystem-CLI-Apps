<?php

require_once __DIR__ . "/Model/ParkingFee.php";
require_once __DIR__ . "/Model/ParkingSystem.php";
require_once __DIR__ . "/BusinessLogic/AddDurationParking.php";
require_once __DIR__ . "/BusinessLogic/AddVehiclesType.php";
require_once __DIR__ . "/BusinessLogic/ShowParkingFee.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/View/ViewAddParkingFee.php";
require_once __DIR__ . "/View/ViewParkingSystem.php";
require_once __DIR__ . "/View/ViewShowParkingFee.php";

echo "Parking System App" . PHP_EOL;
viewParkingSystem();


?>