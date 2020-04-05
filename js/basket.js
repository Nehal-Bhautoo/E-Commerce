window.onload = loadBasket;

//Get basket from session storage or create one if it does not exist
function getBasket() {
    let basket;
    if(sessionStorage.basket === undefined || sessionStorage.basket === "") {
        basket = [];
    } else {
        basket = JSON.parse(sessionStorage.basket);
    } return basket;
}

//Displays basket in page.
function loadBasket() {
    let basket = getBasket(); //Load or create basket
    let htmlStr='';
    for(let i=0; i<basket.length; ++i) {
        htmlStr += '<div class="col-12">';
        htmlStr += '<div class="card">';
        htmlStr += '<img alt="img" id="imageLocation" src="' + basket[i].image +'">';
        htmlStr += '<h3 id="productName">' + basket[i].name + '"</h3>';
        htmlStr += '<p id="productPrice">' + basket[i].price + '"</p>';
        htmlStr += '<p id="color">' + basket[i].color + '</p>';
        htmlStr += '<div class="description">';
        htmlStr += '<h2>Product Description</h2>';
        htmlStr += '<p id="productDescription">' + basket[i].description + '</p>';
        htmlStr += '</div>';
        htmlStr += '</div>';
    }
    //Display number of products in basket
    document.getElementById("basketDiv").innerHTML = htmlStr;
}

//Adds an item to the basket
function addItem(productName, productPrice, productDescription, imageLocation, productColor) {
    let basket = getBasket();

    //Add product to basket
    basket.push({image: imageLocation, name: productName, price: productPrice, description: productDescription, color: productColor});
    sessionStorage.basket = JSON.stringify(basket);
    //alert(JSON.stringify(basket));
    alert("Added to cart");
}

//Deletes all products from basket
function emptyBasket(){
    sessionStorage.clear();
    loadBasket();
}