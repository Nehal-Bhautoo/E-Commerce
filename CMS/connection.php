<?php
//Establish a connection to the MongoDB Database
    $connection = new MongoClient();
    $database = $connection->ecommerceDB;
    //loading the library to allow connection
    require __DIR__ . '/vendor/autoload.php';
?>