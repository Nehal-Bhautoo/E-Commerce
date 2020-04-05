
//create session to add brought product to session storage
function getBroughtItem() {
    let buy;
    if(sessionStorage.buy === undefined || sessionStorage.buy === "") {
        buy = [];
    } else {
        buy = JSON.parse(sessionStorage.buy);
    } return buy;
}

//Adds an item to the array
function buyProduct(productName, productPrice, productDescription, imageLocation, productColor) {
    let buy = getBroughtItem();

    //Add product to basket
    buy.push({image: imageLocation, name: productName, price: productPrice, description: productDescription, color: productColor});
    sessionStorage.buy = JSON.stringify(buy);
    buyItem();
}

//Deletes all products from session storage
function emptyBasket(){
    sessionStorage.clear();
}

// add brought product to database
function buyItem() {
    let request = new XMLHttpRequest();
    let sessionData = sessionStorage.buy;
    request.open("POST", "../php/checkout.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("sessionData=" + sessionData);
    alert("Product added to orders");
    emptyBasket();
}