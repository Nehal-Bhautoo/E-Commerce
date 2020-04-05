<?php
include_once("connection.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$database->Product->remove(array('_id' => new MongoId($id)));
echo 'Product deleted: ' . $id;
?>