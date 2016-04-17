<?php

define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'bbdc7d2af7a00e');
define (DB_PASSWORD, '9a474846');
define (DB_DATABASE, 'uchenna');

$db = $mysqli_connection(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>