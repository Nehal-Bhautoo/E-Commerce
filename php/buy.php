<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceDB;
$collection = $db->OrderDetails;

session_start();

$basket = json_decode($_POST['sessionProduct'], true);

for($i=0; $i<count($basket); $i++){
  $insertResult = $collection->insertOne($basket[$i]);
}
?>