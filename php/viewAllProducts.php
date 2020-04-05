<?php
function listAll() {
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerceDB;
    $product = $db->Product->find();

    foreach($product as $document) {
        echo '<div class="col-md-4 product-grid">';
        echo '<div class="product-img">';
        echo '<a href="#">';
        echo '<img src = "' . $document["ImageLocation"] . '" alt="product-image" class="w-100">';
        echo '<div class="overlay">';
        echo '<button class="detail" onclick=\'addViewProduct("'. $document["ImageLocation"] . '", "' . $document["ProductName"] . '", "' . $document["Model"] . '", "' . $document["Price"] . '", "' . $document["Description"] . '", "' . $document["Size"] . '", "' . $document["Type"] . '")\'>';
        echo '<span>View Details</span></button>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
        echo '<h4 class="text-center">' . $document["ProductName"] . '</h4>';
        echo '<h5 class="text-center">' . $document["Price"] . '</h5>';
        echo '<a href="#" class="btn buy" onclick=\'checkout("' . $document["ProductName"] . '", "' . $document["Price"] . '", "' . $document["Description"] . '", "' . $document["ImageLocation"] .'", "' . $document["Colour"] . '")\'>';
        echo 'BUY</a>';
        echo '<a href="#" class="btn buy" onclick=\'addItem("' . $document["ProductName"] . '", "' . $document["Price"] . '", "' . $document["Description"] . '", "' . $document["ImageLocation"] .'", "' . $document["Colour"] . '")\'>';
        echo 'Add to cart</a>';
        echo '</div>';
    }
}
?>