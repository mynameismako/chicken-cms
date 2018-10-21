<?php

$dbservername = "192.168.1.59";
$dbusername = "chickencms";
$dbpassword = "chicken123";
$database = "chickencms";

$connection = new mysqli($dbservername, $dbusername, $dbpassword, $database);

if (!$connection){
    die('Database connection failed' . $connection->connect_error);
}

?>