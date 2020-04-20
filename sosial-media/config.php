<?php

$db_host = "database-production.cvlhrayg50qw.ap-southeast-1.rds.amazonaws.com";
$db_user = "devopscilsy";
$db_pass = "1234567890";
$db_name = "production";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
