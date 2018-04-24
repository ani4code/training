<!DOCTYPE html>
<html>
<body>

<?php

//String Length or Count of number of letters in a string
echo strlen("Hello world!"); // outputs 12
echo "<br>";

//Count of number of words in a string
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";


//Reverse a String
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";


//Search for a specific text within the string
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";

//Replace text within a string
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!


?>

</body>
</html>