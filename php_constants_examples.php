<!DOCTYPE html>
<html>
<body>

<?php

//PHP constant defined using keyword define
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

//PHP constant with case-insensitive set to true
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
echo "<br>";


//Constants are global
define("HELLO", "Welcome to W3Schools.com!");

function myTest() {
    echo HELLO;
}
 
myTest();


?>

</body>
</html>