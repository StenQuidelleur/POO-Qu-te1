<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';

    $bike = new Bicycle('red');
    $bike->setCurrentSpeed(0);
    $bike->dump();

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




