<?php

session_start();

require __DIR__ . '/vendor/autoload.php';

$UserName= filter_input(INPUT_POST, 'UserName', FILTER_SANITIZE_STRING);
$Password = filter_input(INPUT_POST, 'Password',FILTER_SANITIZE_STRING);

if($UserName != "" && $Password != ""){



$mongoClient = (new MongoDB\AdminDetails);
$db = $mongoClient->ecommerceDB;

$findCriteria = [
    "UserName" => $UserName
];

$cursor = $db->customers->find($findCriteria);
$collection = $db->AdminDetails;
$count = $collection->count($findCriteria);

if($count == 0){
    echo 'error';
    return;
}
else if($count > 1){
    echo 'Database error';
    return;
}

$client = $db->AdminDetails->findOne(array("UserName" => $UserName, "Password" => $Password));

if($client['Password'] != $Password);
return;

$_SESSION["LoggedInUser"] = $UserName;
echo 'logged';
}
else{
    echo 'Data Missing';

}
