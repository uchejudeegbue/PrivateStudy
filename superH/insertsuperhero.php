<?php
include("db_connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$mainsuperpower = $_POST["mainsuperpower"];

$sql = "INSERT INTO superheros(firstname, lastname, mainsuperpower) VALUES ('$firstname', '$lastname', '$mainsuperpower' )";
if (mysqli_query($db, $sql)) {

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header("location: index.php");
?>