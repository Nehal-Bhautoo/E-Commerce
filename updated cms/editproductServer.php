<?php
include_once("connection.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
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
if (empty($id)) {
    $message = 'Id is empty';
}

if ($message) {
    echo $message;
} else {
    $database->Product->update(
        array('_id' => new MongoId($id)),
        array('$set' => $productArray)
    );
    echo 'Product edited: ' . $id . ' - ' . $name;
}
?>