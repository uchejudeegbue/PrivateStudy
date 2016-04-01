<!Doctype html>
<html>
<head>

</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: UCHE EGBUE BENDAC
 * Date: 4/1/2016
 * Time: 11:22 AM
 */
$x = "Hello World";
echo $x;
echo "<br>";
echo "Hello, " . " " . "World" . "!"; //the period . is used to concanate the strings
echo "<br>";
//Consider this example from the lab
$name = "Uju Uche-Egbue";
if ($name == "Uju Uche-Egbue"){
    echo "You are my lovely wife";
}
else {
    echo "I dont know you";
}
echo "<br>";
/*Consider and do this exercise from the lab
Aberdeen is the home of specs,  ugs and sussage rolls. You are allowed to:
- buy specs if you are over 16,
- buy mugs if you are over 18,
- and buy sussage if you are over 21.
Create a web page that stores a person's age at the top in a variable called $myage. The page will then use
PHP to print out their name and use an if/elseif/else statement to print out which of the three items they are
allowed to buy*/

$myage = "16";


if ($myage > "16"){
    echo "buy specs";
}
else if ($myage > 18) {
    echo "buy mugs";
}
else if ($myage > 21){
    echo "buy sussage rolls";
}

?>
</body>
</html>
