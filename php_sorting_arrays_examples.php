<!DOCTYPE html>
<html>
<body>


<?php

//declaring, initializing and outputting an array
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);


$clength=count($cars);
for($i=0;$i<$clength;$i++){
	echo $cars[$i];
	echo "<br>";
}

rsort($cars);


for($i=0;$i<$clength;$i++){
	echo $cars[$i];
	echo "<br>";
}





?>

</body>
</html>
