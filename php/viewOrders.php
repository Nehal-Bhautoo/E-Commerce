<?php
function listOrders() {
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerceDB;
    $orders = $db->OrderDetails->find();

    foreach($orders as $document) {
        echo '<div class="orders-card">';
        echo '<div class="prod-img">';
        echo '<img src="' . $document["image"] . '" alt="img">';
        echo '</div>';
        echo '<div class="info">';
        echo '<h1 class="title-order">'. $document["name"] . '</h1>';
        echo '<p class="description-order">' . $document["description"] . '</p>';
        echo '<p class="price-item">Item Price: ';
        echo '<span>' . $document["price"] . '</span>';
        echo '</p>';
        echo '<a href="#" class="viewProduct" onclick="">View Product</a>';
        echo '</div>';
        echo '</div>';
    }
}
?>