<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceDB;

$username = filter_input(INPUT_POST, 'newUsrName', FILTER_SANITIZE_STRING);
$firstName = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'addres', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phon', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'newPass', FILTER_SANITIZE_STRING);

$replace = [
    "UserName" => $username
];

$customerData = [
    "UserName" => $username,
    "FirstName" => $firstName,
    "LastName" => $lastName,
    "Address" => $address,
    "Phone" => $phone,
    "Email" => $email,
    "Password" => $password,
];

$update = $db->UserDetails->replaceOne($replace, $customerData);

if($update->getModifiedCount() == 1) {
    echo 'Customer document successfully replaced';
} else {
    echo 'Customer replacement error.';
}
?>