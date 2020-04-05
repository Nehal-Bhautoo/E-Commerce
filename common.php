<?php
function outputHeader() {
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>E-commerce</title>';
    echo '<script src="https://kit.fontawesome.com/e8e8a4666c.js" crossorigin="anonymous"></script>';
    echo '<script src="js/showLoginForm.js" type="module"></script>';
    echo '<script src="js/showProfile.js" type="module"></script>';
    echo '<script src="js/showEditProfile.js" type="module"></script>';
    echo '<script src="js/search.js" type="module"></script>';
    echo '<script src="js/login.js"></script>';
    echo '<script src="js/editCustomer.js"></script>';
    echo '<script src="js/recommender.js" type="module"></script>';
    echo '<script src="js/displayRecommen.js" type="module"></script>';
    echo '<link rel="stylesheet" href="css/header.css">';
    echo '<link rel="stylesheet" href="css/footer.css">';
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                    crossorigin="anonymous">';
    echo '</head>';
    echo '<body>';
    echo '<header>';
    echo '<div class="container-fluid p-0">';
    echo '<nav class="navbar navbar-expand-lg">';
    echo '<a class="navbar-brand" href="index.php">';
    echo '<i class="fas fa-cart-arrow-down fa-3x mx-3"></i>';
    echo 'E-Commerce';
    echo '</a>';
    echo '<button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>';
    echo '<div class="collapse navbar-collapse" id="navbarNav">';
    echo '<div class="mr-auto"></div>';
    echo '<ul class="navbar-nav">';
    echo '<li class="nav-item active">';
    echo '<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="productList.php">Products</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="#" id="loginBtn">Sign-In</a>';
    echo '</li>';
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
          </a>';
    echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
    echo '<a class="dropdown-item" href="orders.php">Orders</a>';
    echo '<a class="dropdown-item" href="cart.php">Cart</a>';
    echo '<a class="dropdown-item" href="#" id="profileBtn">Profile</a>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '<form class="form-inline my-2 my-lg-0" method="get">';
    echo '<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="findProduct">';
    echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnSearch">Search</button>';
    echo '</form>';
    echo '</div>';
    echo '</nav>';
    echo '</div>';
    echo '<div class="container con text-center">';
    echo '<div class="row newRow">';
    echo '<div class="col-md-7 col-sm-12">';
    echo '<div class="col-md-5 col-sm-12">';
    echo '<h6>WELCOME</h6>';
    echo '<h1>Smarter Shopping, Better Living</h1>';
    echo '<p> Find new items now, with great deals and limited time offers <p>';
    echo '</div>';
    echo '<div class="img col-md-5 col-lg-2 h-25">';
    echo '<img src="assets/images/header.png" alt="header"/>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="popup">';
    echo '<div class="popup-content">';
    echo '<div class="loginBox">';
    echo '<img src="assets/setting_icon/login.png" class="avatar" alt="avatar">';
    echo '<img src="assets/setting_icon/close.png" class="close" alt="close">';
    echo '<h1>Login</h1>';
    echo '<p>UserName</p>';
    echo '<label>';
    echo '<input type="text" placeholder="Enter Username" onkeypress="return restrictSpace()" id="name1">';
    echo '</label>';
    echo '<p>Password</p>';
    echo '<label>';
    echo '<input type="password" placeholder="Enter Password" onkeypress="return restrictSpace()" id="pass2">';
    echo '</label>';
    echo '<button value="Login" id="login-1" onclick="login()">Login</button>';
    echo '<a href="signup.php">Create an account?</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="popup2">';
    echo '<div class="popup-content2">'; 
    echo '<div class="wrapper">';
    echo '<img src="assets/setting_icon/close.png" class="close2" alt="close">';
    echo '<div class="left">';
    echo '<img src="assets/setting_icon/user.png" alt="user">';
    echo '<h4>Elle001</h4>';
    echo '<h2>Elle</h2>';
    echo '<h2>Kelley</h2>';
    echo '</div>';
    echo '<div class="right">';
    echo '<div class="info">';
    echo '<h4>Profile</h4>';
    echo '<div class="info-data">';
    echo '<div class="data">';
    echo '<p>Address: ';
    echo '<span>England</span?';
    echo '</p>';
    echo '<p>Phone: ';
    echo '<span>23057856690</span?';
    echo '</p>';
    echo '<p>Email: ';
    echo '<span>ellekelley01@gmail.com</span?';
    echo '</p>';
    echo '</div>';
    echo '<div class="data">';
    echo '<p>Payment Method: ';
    echo '<span>Paypal</span?';
    echo '</p>';
    echo '<a class="edit" id="editBtn">Edit Profile</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="popup3">';
    echo '<div class="popup-content3">';
    echo '<div class="editProfile">';
    echo '<img src="assets/setting_icon/close.png" class="close3" alt="close">';
    echo '<form>';
    echo '<h2>Edit Profile</h2>';
    echo '<label>';
    echo '<input type="text" placeholder="Username" id="newUsrName">';
    echo '</label>';
    echo '<label>';
    echo '<input type="text" placeholder="First Name" id="fName">';
    echo '</label>';
    echo '<label>';
    echo '<input type="text" placeholder="Last Name" id="lName">';
    echo '</label>';
    echo '<label>';
    echo '<input type="text" placeholder="Address" id="addres">';
    echo '</label>';
    echo '<label>';
    echo '<input type="number" placeholder="Phone" id="phon">';
    echo '</label>';
    echo '<label>';
    echo '<input type="email" placeholder="Email" id="mail">';
    echo '</label>';
    echo '<label>';
    echo '<input type="password" placeholder="New Password" id="newPass">';
    echo '</label>';
    echo '<button onclick="edit()">Change Profile Details</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</header>';
}

function outputFooter() {
    echo '<footer>
            <div class="container-fluid p-0">
                <div class="row text-left">
                    <div class="col-md-5 col-md-5">
                        <h1 class="text-light">About Us</h1>
                        <p class="text-muted">Unda virtualiter ducunt ad secundus fluctus.</p>
                        <p class="pt-4 text-muted">
                            Copyright 2019 All rights reserved | This website is made by
                            <span>Vishan | Sheenah | Nehal</span>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <h4 class="text-light">Newsletter</h4>
                        <p class="text-muted">Stay Updated</p>
                        <form class="form-inline">
                            <div class="col pl-0">
                                <div class="input-group pr-5">
                                    <label>
                                        <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                                    </label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <h4 class="text-light">Follow Us</h4>
                        <p class="text-muted">Social Media</p>
                        <div class="column">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
    </body>
    </html>';
}
?>