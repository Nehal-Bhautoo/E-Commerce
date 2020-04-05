<?php
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceDB;
$search = filter_input(INPUT_POST, 'findProduct', FILTER_SANITIZE_STRING);

//PHP array with search text
$find = [
    "ProductName" => $search
    ];

// find all product that match search text
$collection = $db->Product->find($find);

foreach($collection as $product) {
    echo "Product Found " . $product["ProductName"];
    echo " Price at " . $product["Price"];
}

?>