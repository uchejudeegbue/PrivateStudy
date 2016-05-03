<?php

define ('DB_SERVER', "ap-cdbr-azure-east-c.cloudapp.net");
define ('DB_USERNAME', "b53af31c1763b4");
define ('DB_PASSWORD', "25b4cd41");
define ('DB_DATABASE', "acsm_5da9df19e183e3e");

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>