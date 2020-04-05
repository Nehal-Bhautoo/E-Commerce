// get product-basket from session storage
function checkout() {
    let request = new XMLHttpRequest();
    let sessionData = sessionStorage.basket;
    request.open("POST", "../php/checkout.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("sessionData=" + sessionData);
    alert("Product added to orders");
}

// get product from session storage
function buy() {
    let request = new XMLHttpRequest();
    let sessionProduct = sessionStorage.product;
    request.open("POST", "../php/buy.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("sessionProduct=" + sessionProduct);
    alert("Product added to orders");
}