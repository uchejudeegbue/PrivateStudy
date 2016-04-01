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
$cars = array("Volvo", "BMW", "Toyota", "Peugeot"); //declares the array
echo $cars[0];
echo "<br>";
echo $cars [1];
echo "<br>";
echo "I like " . $cars[0] . " and " . $cars[2] . ".";
echo "<br>";
$cars [1] = "Honda";// modifies position 1 (BMW) to (Honda)
echo "<br>";
echo $cars [1];
echo"<br>";
$x = 6;
echo $x;
echo "<br>";
unset($cars[2]); // removes the array in index position 2
echo $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "," . $cars[3];
echo "<br>";

//Consider and do this exercise below from the lab
/* n an attempt to stop the chaos that is engulfing Aberdeen, the provision of specs, mugs, and sausage rolls is
being examined. Create a web page then initiate an array called $provisionedActivities. In this array store the
stings Specs, Drugs, and Rock and Roll.*/

$provisionedActivities = array ("Specs", "Mugs", "Suasage Roll");
echo $provisionedActivities [2];
echo "<br>";

//Print out the array using code similar to the following:
foreach ($provisionActivities as $x){
    echo $x;
}
echo "<br>";

// The above printing code is the same as the one below

foreach ($provisionedActivities as $x){
    print "<p> $x </P>";
}
echo "<br>";
/* Create a line of code that does each of the following, followed
by a print statement of the array as a whole*/

//1. Mugs are being modified to the friendly alternative of hugs
$provisionedActivities [1] = "hugs";
echo "Mugs are being modified to the friendly alternative of " . $provisionedActivities [1];
echo "<br>";

//2. Suasage Rolls are to be removed.
unset ($provisionedActivities [2]);
echo $provisionedActivities [0] . ", " . $provisionedActivities [1] . ", " . [2];
echo "<br>";


//Array Functions

//The array count
// This used to return the length (the number of elements) of an array
$alpha = array ("A", "B", "C", "D");
echo count ($alpha);

?>
</body>
</html>
