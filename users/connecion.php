<?php
/**
 * Created by PhpStorm.
 * User: UCHE EGBUE BENDAC
 * Date: 4/2/2016
 * Time: 9:48 PM
 */
define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b70bf26a0e51fe');
define (DB_PASSWORD, '408b52f1');
define (DB_DATABASE, 'acsm_581c9d4a8ca6f21');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
