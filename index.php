<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Camion.php';
    require_once 'Skateboard.php';
    require_once 'MotorWay.php';
    require_once 'PedestrianWay.php';
    require_once 'ResidentialWay.php';
    require_once 'Speedometer.php';

    echo Speedometer::convertKmToMiles(10);


/*
$parkBrake = false;


$car = new Car('green', 4, 'electric');
$car->setHasParkBrake($parkBrake);
echo $car->start();
var_dump($car);

$car2 = new Car('red', 4, 'electric');
echo $car->forward();
var_dump($car2);

$motorway = new MotorWay();
$motorway->addVehicule($car);
$motorway->addVehicule($car2);
var_dump($motorway);

$pedestrianway = new PedestrianWay();
$pedestrianway->addVehicule($skate);
var_dump($pedestrianway);

$residentialway = new ResidentialWay();
$residentialway->addVehicule($camion);
var_dump($residentialway);
*/
















