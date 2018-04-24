<!DOCTYPE html>
<html>
<body>

<?php

//String types
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
echo "<br>";

//Integers
$z = 5985;
var_dump($z);
echo "<br>";


//Floats
$w = 10.365;
var_dump($w);
echo "<br>";


//Arrays
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

//objects
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

?>

</body>
</html>