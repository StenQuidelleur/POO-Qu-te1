<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Camion.php';


    $bicycle = new Bicycle('blue', 1);
    echo $bicycle->forward();
    var_dump($bicycle);

    $car = new Car('green', 4, 'electric');
    echo $car->forward();
    var_dump($car);

    $camion = new Camion(30,'red',3,'fuel');
    echo $camion->forward();
    echo $camion->levelCharge();
    echo $camion->brake();
    var_dump($camion);

    $bike = new Bicycle('red',1);
    $bike->setCurrentSpeed(0);

    echo $bike->forward();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();

    $car = new Car("red", 5,"Sans Plomb");
    echo '<br>'.$car->start();
    echo '<br> La voiture à ' . $car->getNbWheels() .' roues et de couleur'. $car->getColor() .'.<br>';
    echo $car->forward();
    echo '<br> On est actuellement à '.$car->getCurrentSpeed() .'km/h tu vas trop vite. <br>';
    echo $car->brake();
    echo '<br> La vitesse de la voiture: '.$car->getCurrentSpeed(). 'km/h.<br>';
    echo $car->brake();




