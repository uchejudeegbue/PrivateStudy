<?php
/**
 * Created by PhpStorm.
 * User: UCHE EGBUE BENDAC
 * Date: 4/2/2016
 * Time: 11:45 PM
 */
include ("connection.php");

if (empty ($_POST["username"])|| empty ($_POST["password"])){
    echo "Both fields are required.";
}
else {
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$sql="SELECT* FROM users WHERE username = '$username' and password=$'password'";
$result=mysqli_query($db,$sql);

if(mysqli_num_rows($result)== 1){
    header ("location:home.php");
}
else{
    echo "Incorrect username or password.";
}
?>