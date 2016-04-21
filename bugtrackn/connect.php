<?php

define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b70bf26a0e51fe');
define (DB_PASSWORD, '408b52f1');
define (DB_DATABASE, 'acsm_581c9d4a8ca6f21');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>