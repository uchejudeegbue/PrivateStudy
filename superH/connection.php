<?php

define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b57245e3f63dc9');
define (DB_PASSWORD, '2782074b');
define (DB_DATABASE, 'superheros');

$db = $mysqli_connection (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>