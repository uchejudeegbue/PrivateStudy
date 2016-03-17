<?php
/**
 * Created by PhpStorm.
 * User: UCHE EGBUE BENDAC
 * Date: 3/16/2016
 * Time: 2:49 AM
 */
echo "Print <br>";

// This is a single line comment. Single Line Comments do not print
/* This is a multiple line comment.
comments that span into multiple lines.
Multiple line comments do not print.
It is a good programming practice to put comments in your codes
to enable you remember what you have done sometime after*/

echo "Print Again";

// echo - is used to print out things
//$ - is used to make declare variables
// Numerical variables are not declared inside parenthesis
//use semi colon to end any line in php
//<br> is used for line break as it is done in html
// Note that you can use comments to leave out parts of a code line

$x = 5 /* + 15 */ + 5;
echo "<br>";
echo "$x";
echo "<br>";

/* In php, all keys - echo, if, else, while etc
classes, functions and user defined functions
are not case sensitive. See examples below*/

ECHO "Printing <br>";
Echo "Printing <br>";
echo "Printing <br>";

/* All variables are case sensitive
Below, only the first statement will display the $color variable
because $color, $COLOR and $coLOR are treated as different variables
Note that we use the dot sign , "." , to concantenate*/
// Also note that Alphabetical variables are declared inside parenthesis

$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

/*A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)*/

$txt = "W3Schools.com";
echo "I love $txt!";
echo "<br>";

//The example below will produce the same result with the above

$txt = "W3Schools.com";
echo "I love" . $txt . "!";
echo "<br";

//The following example will output the sum of two variables:

$x = 5;
$y = 4;
echo $x + $y;
echo "<br>";

/*The following example shows how to output text with the echo
command (notice that the text can contain HTML markup):*/

echo "<h2>PHP is Fun!</h2>";
echo "Hello World! <br>";
echo "I am learning PHP! <br>";
echo "This " . "string " . "was ", "made ", "with multiple ", "parameters.";

/*Notice in the above that you can use full stop sign "." or
comma sign "," to concantenate strings of data*/
//Example below shows how to output text and variables with the echo statement:

$txt1 = "Learning PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Studying PHP at $txt2";
echo "<br>";
echo $x + $y;
echo "<br>";

/*Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators*/

//The PHP assignment operators are used with numeric values to write a value to a variable.
$x = 20;
$x += 100;

echo $x;
echo "<br>";

$x = 10;
$x /= 5;

echo $x;
echo "<br>";

$x = 15;
$x %= 4;

echo $x;
echo "<br>";

//The PHP comparison operators are used to compare two values (number or string)

$x = 100;
$y = "100";

var_dump($x != $y); // returns false because values are equal
echo "<br>";
var_dump ($y);

echo"<br>";

//The PHP increment operators are used to increment a variable's value.

$x = 10;
echo ++$x; //Pre-increment	Increments $x by one, then returns $x
echo "<br>";

$x = 10;
echo $x++; //Post-increment	Returns $x, then increments $x by one

//The PHP decrement operators are used to decrement a variable's value.

$x = 10;
echo --$x; //Pre-decrement	Decrements $x by one, then returns $x
echo "<br>";

//The PHP logical operators are used to combine conditional statements.

$x = 100;
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
    } //logical AND 	$x && $y	True if both $x and $y are true
echo "<br>";

$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "HELLO WORLD!";
}// logical OR $x || $y	True if either $x or $y is true
echo "<br>";

$x = 100;

if ($x !== 90) {
    echo "Hello world!";
} //logical NOT !$x	True if $x is not true

/*In PHP we have the following conditional statements:
if statement - executes some code if one condition is true*/

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";
//if...else statement - executes some code if a condition is true and another code if that condition is false

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

//if...elseif....else statement - executes different codes for more than two conditions

$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t <  "10") {
    echo "Have a good morning!";
} elseif ($t <  "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

//switch statement - selects one of many blocks of code to be executed

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
?>