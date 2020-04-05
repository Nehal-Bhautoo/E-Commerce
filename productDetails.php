<?php
    include('common.php');
    outputHeader();
?>
    <link rel="stylesheet" href="css/products.css">
    <script src="js/basket.js"></script>
    <script src="js/viewDetails.js"></script>
     <script src="js/buyItem.js"></script>
    <main>
        <div class="container">
            <div class="product-image">
                <img src="assets/setting_icon/ecommerce.png" alt="logo" class="product-logo">
                <img alt="product" class="product-pic" id="imageLocation">
            </div>
            <div class="product-details">
                <div class="top">
                    <h1 class="title" id="itemName"></h1>
                    <span class="colorCat" id="itemModel"></span>
                    <div class="price">
                        <span class="before" id="itemPrice"></span>
                    </div>
                </div>
                <article>
                    <h5>Description</h5>
                    <p id="itemDescription"></p>
                </article>
                <div class="controls">
                    <div class="size">
                        <h5>Size</h5>
                    <a href="#" class="option" id="itemSize">Medium</a>
                    </div>
                    <div class="quantity">
                        <h5>Type</h5>
                        <a href="#" class="option" id="itemType"></a>
                    </div>
                </div>
                <div class="footer">
                    <button type="button" class="btnBuy" onclick="buy()">
                        <img src="assets/setting_icon/buy.png" alt="buy">
                        <span>Buy</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
<?php
    outputFooter();
?>