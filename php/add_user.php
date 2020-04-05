<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceDB;
$collection = $db->UserDetails;

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
$payment = filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING);

// Convert to PHP array
$dataArray = [
    "UserName" => $username,
    "FirstName" => $firstName,
    "LastName" => $lastName,
    "Address" => $address,
    "Phone" => $phone,
    "Email" => $email,
    "Password" => $password,
    "PaymentMethod" => $payment
];

// Add new user to database
$insertResult = $collection->insertOne($dataArray);
echo 'Thank you for registering ';
?>