<?php

include ("db_connect.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO names (firstname, lastname) VALUES ('$firstname', '$lastname')";

if (mysqli_query($db, $sql)){

}
else {
    echo "ERROR: " . $sql . $mysqli_error($db);
}
header("location: index.php");

?>