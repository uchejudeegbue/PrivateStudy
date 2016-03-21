<?php
/**
 * Created by PhpStorm.
 * User: UCHE EGBUE BENDAC
 * Date: 3/21/2016
 * Time: 4:48 AM
 */
include("connect.php");//Establishing connection with our database
if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) == 1) {
    header("location: home.php");// Redirecting to another page
} else {
    echo "Incorrect username or password.";
}
?>
