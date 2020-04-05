//clear session storage when window closes
window.onclose = clearStorage;
window.history.back = clearStorage;

// create session storage for product details
function getProduct() {
    let product;
    if(sessionStorage.product === undefined || sessionStorage.product === "") {
        product = [];
    } else {
        product = JSON.parse(sessionStorage.product);
    } return product;
}

//add product details to product array
function addViewProduct(productImage, productName, productModel, productPrice, productDescription, productSize, productType) {
    let product = getProduct();
    //Add product to basket
    product.push({image: productImage, name: productName, model: productModel, price: productPrice, description: productDescription, size: productSize, type: productType });
    sessionStorage.product = JSON.stringify(product);
    //openPage();
}

// display product details onto page
function loadProductDetails() {
    let product = getProduct();
    for(let i=0; i<product.length; i++) {
        document.getElementById("imageLocation").src = product[i].image;
        document.getElementById("itemName").innerText = product[i].name;
        document.getElementById("itemModel").innerText = product[i].model;
        document.getElementById("itemPrice").innerText = product[i].price;
        document.getElementById("itemDescription").innerText = product[i].description;
        document.getElementById("itemSize").innerText = product[i].size;
        document.getElementById("itemType").innerText = product[i].type;
    }
}

//clear session storage
function clearStorage() {
    sessionStorage.clear();
}

function openPage() {
    window.location = "http://localhost/productDetails.php";
    window.onload = loadProductDetails;
}