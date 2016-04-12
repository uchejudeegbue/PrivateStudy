<?php

define ("SERVER", 'ap-cdbr-azure-east-c.cloudapp.net');
define ("USERNAME", 'b1463873078bfe');
define ("PASSWORD", 'b3b9d9ca');
define ("DATABASE", 'superH');

$db = mysqli_connect(SERVER, USERNAME, PASSWORD, DB);

// test if connection was established and print any errors

if (!db){
    die ("connection failed:" . mysqli_connect_error ());
}else {

}
?>