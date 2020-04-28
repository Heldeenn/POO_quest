<?php
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'Residentialway.php';
require_once 'Residentialway.php';
require_once 'PedestrianWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Speedometer.php';

$bike = new Bike('blue', 2);
$car = new Car('orange', 5, 'electric');
$skateboard = new Skateboard('black', 0);
//var_dump($bike);
//var_dump($car);
//var_dump($skateboard);

$tangentielle = new MotorWay([], 4, 130);
$tangentielle->addVehicle($bike);
$tangentielle->addVehicle($skateboard);
$tangentielle->addVehicle($car);
//var_dump($tangentielle);

$rue = new ResidentialWay([], 2, 50);
$rue->addVehicle($bike);
$rue->addVehicle($skateboard);
$rue->addVehicle($car);
//var_dump($rue);

$petiteRue = new PedestrianWay([],1,10);
$petiteRue->addVehicle($bike);
$petiteRue->addVehicle($skateboard);
$petiteRue->addVehicle($car);
//var_dump($petiteRue);

// -------------- POO Basics Part 4 -----------------// ?>

<b>Cas où le frein à main est actif :</b> <br/><br/>

<?php
$newCar = new Car('yellow', 4, 'electric');
$newCar->setParkBrake(true);
try {
    $newCar->start();
} catch(Exception $e) {
    echo "Exception received : " . $e->getMessage() . "<br/>";
    $newCar->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
//var_dump($newCar); ?>


<b>Cas où le frein à main n'est pas actif :</b> <br/><br/>
<?php
$newCar = new Car('yellow', 4, 'electric');
$newCar->setParkBrake(false);
try {
    $newCar->start();
} catch(Exception $e) {
    echo "Exception received : " . $e->getMessage() . "<br/>";
    $newCar->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
//var_dump($newCar);

// -------------- POO Basics Part 5 -----------------//
$bike->setCurrentSpeed(2);
$bike->switchOn();
$car->switchOff();

// -------------- POO Basics Part 6 -----------------//
?>
<br/><br/><br/><b>POO part 6 :</b><br/>
<?php
echo "</br>" . Speedometer::convertKmToMiles(10);
echo "</br>" . Speedometer::convertMilesToKm(10);
