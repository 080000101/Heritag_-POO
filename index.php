<?php

require_once 'car.php';

$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);


require_once 'truck.php';

$truck = new Truck('red', 2, 'Fuel', 8, 100);
$truck->IsFull();
$truck->setCurrentSpeed(15);
var_dump($truck);

echo $truck->IsFull();
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h ' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h ' . '<br>';