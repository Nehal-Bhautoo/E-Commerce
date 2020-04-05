//display product when page loads
window.onload = loadProducts;

//download JSON products from server
function loadProducts() {
    // create request object
    let request = new XMLHttpRequest();

    request.onload = () => {
        if(request.status === 200) {
            displayProducts(request.responseText);
        } else {
            alert("Server ERROR!");
        }

        //set up request
        request.open("GET", "../php/viewAllProducts.php");
        request.send();
    }
}

//load products onto page
function displayProducts(jsonProducts) {
    //convert JSON to array of objects
    let array = JSON.parse(jsonProducts);

    //create product card with product data
    let htmlStr = "";
    for(let i=0; i<array.length; ++i) {
        let image = array[i].ImageLocation;
        htmlStr += '<div class="col-md-4 product-grid">';
        htmlStr += '<div class="product-img">';
        htmlStr += '<a href="#">';
        htmlStr += '<img src = ' + array[i].ImageLocation + '  + alt="product-image" class="w-100">';
        htmlStr += '<div class="overlay">';
        htmlStr += '<button class="detail" onclick="addViewProduct(array[i].ImageLocation, array[i].ProductName, array.[i].Model, array[i].Price, array[i].Description, array[i].Size, array[i].Type)">';
        htmlStr += '<span>View Details</span></button>';
        htmlStr += '</div>';
        htmlStr += '</a>';
        htmlStr += '</div>';
        htmlStr += '<h4 class="text-center">' + array[i].ProductName + '</h4>';
        htmlStr += '<h5 class="text-center">' + array[i].Price + '</h5>';
        htmlStr += '<a href="#" class="btn buy">BUY</a>';
        htmlStr += '<a href="#" class="btn buy" onclick="addItem(array[i].ProductName, array[i].Price, array[i].Description , array[i].ImageLocation, array[i].Colour)">';
        htmlStr += 'Add to cart</a>';
        htmlStr += '</div>';
    }

    //display products ot page
    document.getElementById("viewProducts").innerHTML = htmlStr;
}