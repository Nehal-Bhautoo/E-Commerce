<?php
    include('common.php');
    outputHeader();
?>
<link rel="stylesheet" href="css/indexCSS.css">
<main>
<!--Section 1-->
    <section class="section-1">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="pray">
                        <img src="assets/images/pray.jpg" alt="Pray">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel text-left">
                        <h1>Looking for Electronics?</h1>
                        <p class="pt-4">Find new items now, with great deals and offers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section 2-->
    <section class="section-2 container-fluid p-0">
        <div class="cover">
            <div class="content text-center">
                <h1>Spend little, Choose from hundreds</h1>
                <p>Check out deal at unreal prices</p>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect">
                    <h1>Earphone</h1>
                    <p>Up to 30% off</p>
                </div>
                <div class="rect">
                    <h1>Smart</h1>
                    <p>Up to 30% off</p>
                </div>
                <div class="rect">
                    <h1>Camera</h1>
                    <p>Up to 30% off</p>
                </div>
                <div class="rect">
                    <h1>Video Games</h1>
                    <p>Up to 30% off</p>
                </div>
            </div>
        </div>
        <div class="offer text-center">
            <h1>Limited Offers</h1>
            <p>Big deals. small quantity1 Time to act fast!</p>
            <div class="cards">
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <!--First Card-->
                    <div class="card">
                        <img src="assets/product-images/HP001.jpg" class="card-img-top" alt="items">
                        <div class="card-body">
                            <h5 class="card-title">Earphone</h5>
                            <p class="card-text">
                                Up to 30% off
                            </p>
                            <a href="productList.php" class="btn btn-dark px-5 py-2 mb-5">Shop now</a>
                        </div>
                    </div>
                    <!--Second Card-->
                    <div class="card">
                        <img src="assets/product-images/HP002.png" class="card-img-top" alt="items">
                        <div class="card-body">
                            <h5 class="card-title">Headphones</h5>
                            <p class="card-text">
                                Up to 30% off
                            </p>
                            <a href="productList.php" class="btn btn-dark px-5 py-2 mb-5">Shop now</a>
                        </div>
                    </div>
                    <!--Third Card-->
                    <div class="card">
                        <img src="assets/product-images/HA002.jpg" class="card-img-top" alt="items">
                        <div class="card-body">
                            <h5 class="card-title">Speakers</h5>
                            <p class="card-text">
                                Up to 30% off
                            </p>
                            <a href="productList.php" class="btn btn-dark px-5 py-2 mb-5">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section 3-->
    <section class="section-3 container-fluid p-0 text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>Check at your Cart and orders</h1>
                <p>
                    Some product might have limited offers, get them quick!
                </p>
            </div>
        </div>
        <div class="platform row">
            <div class="col-md-6 col-sm-12 text-right">
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="fas fa-shopping-cart fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                            <h3 class="pt-1 m-0">My Cart</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-left">
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="fas fa-thumbs-up fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                            <h3 class="pt-1 m-0">Orders</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section 4-->
    <section class="section-4">
        <div class="container text-center">
            <h1 class="text-dark">Some categories might interest you</h1>
            <p class="text-secondary">Check them out!</p>
        </div>
        <div class="items row">
            <div class="col-md-4 col-12 text-center">
                <!--Card 1-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                        <img src="assets/product-images/HA001.jpg" alt="item" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Speakers</h3>
                        <p class="card-text">
                            Insert product description
                        </p>
                        <a href="productList.php" class="text-secondary text-decoration-none">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <!--Carousel Start-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <!--Card 2-->
                            <div class="card mr-2 d-inline-block shadow-lg">
                                <div class="card-img-top">
                                    <img src="assets/product-images/CP001.jpg" alt="item" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Drone</h3>
                                    <p class="card-text">
                                        Insert product description
                                    </p>
                                    <a href="productList.php" class="text-secondary text-decoration-none">Shop</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <!--Card 3-->
                            <div class="card mr-2 d-inline-block shadow-lg">
                                <div class="card-img-top">
                                    <img src="assets/product-images/PCA003.jpg" alt="item" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Chromebook 3</h3>
                                    <p class="card-text">
                                        Insert product description
                                    </p>
                                    <a href="productList.php" class="text-secondary text-decoration-none">Shop</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <!--Card 4-->
                            <div class="card mr-2 d-inline-block shadow-lg">
                                <div class="card-img-top">
                                    <img src="assets/product-images/HP001.jpg" alt="item" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">EarPods</h3>
                                    <p class="card-text">
                                        Insert product description
                                    </p>
                                    <a href="productList.php" class="text-secondary text-decoration-none">Shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center">
                <!--Card 5-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top">
                        <img src="assets/product-images/PCA001.jpg" alt="item" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Laptops</h3>
                        <p class="card-text">
                            Insert product description
                        </p>
                        <a href="productList.php" class="text-secondary text-decoration-none">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    outputFooter();
?>