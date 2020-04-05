<?php
// display recommended product onto page
// find the most searched product from database
require __DIR__ . '/vendor/autoload.php';
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->ecommerceDB;
$collection = $db->Product;
foreach ($_POST as $post) {
    $recommend = [
        '$text' => ['$search' => $post]
    ];

    $cursor = $collection->find($recommend);

    //display recommended product
    foreach($cursor as $product) {
        echo '<p style="font-size: 15px">' . $product["ProductName"] . '</p>';
        echo '<div style="display: inline-block">';
        echo '<img width="150 height=150 src="' . $product["ImageLocation"] . '">';
        echo '</div>';
        echo '<p>' . $product["ProductName"] . '</p>';
        echo '<p>' . $product["Model"] . '</p>';
        echo '<p>' . $product["Description"] . '</p>';
        echo '<p>' . $product["Price"] . '</p>';
        echo '<p>' . $product["Type"] . '</p>';
        echo '<p>' . $product["Small"] . '</p>';
    }
}