<?php

include("connect.php");

if (empty($firstname)||(empty($lastname))){
    echo "Both fields are required";

}
    else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
    }


        $sql = "INSERT INTO users (firstname, lastname) VALUES ('$firstname', '$lastname')";

        if (mysqli_query($db,$sql)){

        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error ($db);
        }
header ("location: display.php");


?>