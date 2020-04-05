<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
include_once("connection.php");


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$colour = filter_input(INPUT_POST, 'colour', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

$productArray = array (
  
    "ProductName" => $name,
    "Model" => $model,
    "Size" => $size,
    "Price" => $price,
    "Colour" => $colour,
    "Type" => $type
);

$message = '';
foreach ($productArray as $field => $val) {
    if (empty($val)) {
        $message = $field . ' is empty'
    }
}
//will display
if ($message) {
    echo $message;
} else {
    $database->Product->insert($productArray);
    echo 'Product added: ' . $name . ' - ' . $model . ' - ' . $size . ' - ' . $price . ' - ' . $colour . ' - ' . $type ;
}
?>