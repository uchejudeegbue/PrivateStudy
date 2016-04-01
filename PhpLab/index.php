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
//Consider this example on if else statement from the lab
$name = "Uju Uche-Egbue";
if ($name == "Uju Uche-Egbue"){
    echo "You are my lovely wife";
}
else {
    echo "I dont know you";
}
echo "<br>";
/*Consider and do this if else statement exercise from the lab
Aberdeen is the home of specs,  ugs and sussage rolls. You are allowed to:
- buy specs if you are over 16,
- buy mugs if you are over 18,
- and buy sussage if you are over 21.
Create a web page that stores a person's age at the top in a variable called $myage. The page will then use
PHP to print out their name and use an if/elseif/else statement to print out which of the three items they are
allowed to buy*/

$myage = "22";


if (($myage > "16")&& ($myage <= "18")){
    echo "buy specs";
}
else if (($myage > 18)&& ($myage <= "21")) {
    echo "buy mugs";
}
else if ($myage > 21){
    echo "buy sussage rolls";
}
echo "<br>";
echo "<br>";
//Consider this example on switch statement from the lab

$numberOfHobbits = 1;
switch ($numberOfHobbits){
    case 1:
        echo "1 sad Hobbit";
        break;
    case 2:
        echo "2 happy Hobbits";
        break;
    case 3:
        echo "3 hobbits are crowd";
        break;
    default:
        echo "All the hobbits have gone home";
}
echo "<br>";
/* Consider and do this switch statement from the lab
The people of Aberdeen are still struggling to understand at what age they are allowed to have specs, mugs an sussage
rolls. Make a webpage that stores a variable called $wantedGood. Create a switch statement that takes this variable
and prints out how old you have to be.*/

$wantedGood = mugs;

switch ($wantedGood){
    case specs:
        echo "You have to be 16 to buy specs";
        break;
    case mugs:
        echo "You have to be 18 to buy mugs";
        break;
    case sussagerolls:
        echo "You have to be 21 to buy sussage rolls";
        break;
    default:
        echo "There is nothing to buy";
}
echo "<br>";

// Arrays:
$cars = array("Volvo", "BMW", "Toyota"); //declares the array
echo $cars[0];
echo "<br>";
echo $cars [1];
echo "<br>";
echo "I like " . $cars[0] . " and " . $cars[2] . ".";
echo "<br>";
$cars [1] = Honda;
echo "<br>";
echo $cars [1];

$x = 6;
echo $x;
echo "<br>";


?>
</body>
</html>
