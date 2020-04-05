<?php
    include('common.php');
    outputHeader();
?>
<link rel="stylesheet" href="css/cart.css">
 <script src="js/basket.js" async></script>
 <script src="js/checkout.js"></script>
<script src="js/displayRecommen.js" type="module"></script>
    <main>
        <div class="container">
            <div class="row" id="basketDiv">
            </div>
            <div class="checkout">
                <button class="buyAll" onclick="checkout()">Checkout</button>
                <button class="remove" id="remove" onclick="emptyBasket()">Remove</button>
            </div>
        </div>
        <div id="RecommendationDiv" class="container" style="padding: 8px">

        </div>
    </main>
<?php
    outputFooter();
?>