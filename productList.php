<?php
    include('common.php');
    outputHeader();
?>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/productList.css">
    <script src="js/basket.js"></script>
    <script src="js/viewDetails.js"></script>
    <script src="js/checkout.js"></script>
    <main>
        <div class="container">
            <h1 class="text-center">Electronics</h1>
            <hr>
            <div class="row" id="viewProducts">
               <?php
                    include('php/viewAllProducts.php');
                    listAll();
               ?>
            </div>
        </div>
    </main>
<?php
    outputFooter();
?>