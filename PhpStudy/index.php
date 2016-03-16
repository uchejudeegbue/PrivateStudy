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
echo "<h2>PHP is Fun!<h2>";
echo "Hello World! <br>";
echo "I am learning PHP! <br>";
echo "This ", "string ", "was ", "made ", "with multiple ", "parameters.";
?>