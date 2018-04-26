<!DOCTYPE html>
<html>
<body>

<?php

$a=10;
$b=15;

function myFunction(){
$GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
echo $b."<br>";

}

myFunction();

echo $b;

?>

</body>
</html>