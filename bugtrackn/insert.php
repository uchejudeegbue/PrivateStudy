<?php

include("connect.php");

if (empty($_POST['firstname'])||(empty($_POST['lastname']))){
    echo "Both fields are required";

}
    else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $sql = "INSERT INTO users ('firstname', 'lastname') VALUES ('$firstname', '$lastname')";
        mysqli_query ($db, $sql);
    }



        if (mysqli_query($db,$sql)){
            header ("location:display.php");
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error ($db);
        }



?>