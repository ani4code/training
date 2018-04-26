<!DOCTYPE html>
<html>
<body>


<?php

//declaring, initializing and outputting an array
$cars = array("BMW","VOLVO","TOYOTA");
echo "I Like ".$cars[0].", ".$cars[1]." and ".$cars[2];
echo "<br>";

//getting the length of an array
echo count($cars);

//looping through indexed arrays
$arrlength = count($cars);
for ($i=0;$i<$arrlength;$i++){
	echo "<br>";
	echo $cars[$i];
}
//associative arrays
echo "<br>";
$age=array("john"=>"24","james"=>"26","jack"=>"28");
echo "Johns age is ".$age["john"];	

for ($i=0;$i<$arrlength;$i++){
	echo "<br>";
	echo $cars[$i];
}	



?>

</body>
</html>
