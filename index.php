<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Motorway.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';



?>
    <br>
    <br>
    <br>
<?php


$iveco = new Truck('white', 3, 'fuel', 2200);
$renaultruck = new Truck('blue', 5, 'gasoline', 2400);
$man = new Truck('black', 3, 'gasoline', 30450);

var_dump($iveco);
var_dump($renaultruck);
var_dump($man);

$iveco -> setLoading(360);
$renaultruck -> setLoading(2400);
$man -> setLoading(5300);

echo $iveco -> start();
echo $iveco -> forward();
echo $iveco -> brake();
echo $iveco -> isFull();

echo $renaultruck -> start();
echo $renaultruck -> forward();
echo $renaultruck -> brake();
echo $renaultruck -> isFull();

echo $man -> start();
echo $man -> forward();
echo $man -> brake();
echo $man -> isFull();


$bike = new Bicycle('blue', 1);
$twingo = new Car('blue', 4, 'fuel');
$francilienne = new Motorway();
$treck = new PedestrianWay();
$countrysideRoad = new ResidentialWay();
echo $francilienne -> addVehicle($bike);
echo $treck -> addVehicle($man);
$countrysideRoad -> addVehicle($twingo);
$countrysideRoad -> addVehicle($man);
$countrysideRoad -> addVehicle($iveco);
$countrysideRoad -> addVehicle($bike);
$francilienne -> addVehicle($twingo);
$francilienne -> addVehicle($man);
$treck -> addVehicle($bike);
var_dump($countrysideRoad);
var_dump($francilienne);
var_dump($treck);

$twingo -> setParkPBrake(true);
try
{
    echo $twingo -> start();
}
catch (Exception $exception)
{
    echo 'Impossible de démarrer : ' . $exception->getMessage();
    $twingo -> setParkPBrake(false);
}
finally
{
    echo 'Ma voiture roule comme un donut';
}



var_dump($twingo);




