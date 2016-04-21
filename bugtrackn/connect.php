<?php

define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b80e99e6f82373');
define (DB_PASSWORD, 'c005973d');
define (DB_DATABASE, 'acsm_892771a76e00455');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>