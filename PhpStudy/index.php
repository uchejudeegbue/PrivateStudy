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
//$ - is used to make input variables
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
Also note that we use the dot sign , "." , to concantenate*/
$color = "red";
echo "My car is " . $color . "<br>";
echo "My car is " . $COLOR . "<br>";
echo "My car is " . $coLOR . "<br>";
?>