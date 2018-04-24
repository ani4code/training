<!DOCTYPE html>
<html>
<body>

<?php
//if statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
	echo "<br>";
}

// if-else clause
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
	echo "<br>";
} else {
    echo "Have a good night!";
	echo "<br>";
}

//if..else..elseif 
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


?>

</body>
</html>