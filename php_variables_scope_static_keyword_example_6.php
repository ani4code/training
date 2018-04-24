<!DOCTYPE html>
<html>
<body>

<?php

$a=10;
$b=15;

function myFunction(){
static $x=0;
echo $x;
$x++;

}

myFunction();
echo "<br>";
myFunction();
echo "<br>";
myFunction();


?>

</body>
</html>