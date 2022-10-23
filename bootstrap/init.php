<?php

include '/config.php';

try{
$pdo = new PDO("mysql:host={$database_config->host};dbname=$database_config->db", $database_config->user, $database_config->pass);
}
catch(PDOException $e){
    echo 'connection is failed '. $e->getmessage();
    die();
}
echo "connection is sucssesfully";
