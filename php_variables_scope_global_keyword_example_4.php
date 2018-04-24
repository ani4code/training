<!DOCTYPE html>
<html>
<body>

<?php

$a=10;
$b=15;

function myFunction(){
global $a, $b;
$b=$a+$b;
echo $b."<br>";

}

myFunction();

echo $b;

?>

</body>
</html>