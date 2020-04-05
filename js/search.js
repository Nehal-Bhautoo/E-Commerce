import {findProduct} from "./displayRecommen.js";

document.getElementById("btnSearch").onclick = search;

function search() {
    let request = new XMLHttpRequest();
    request.onload = () => {
        if(request.status === 200) {
            let responseData = request.responseText;
            alert(responseData);
        } else {
            alert("Error communicating with server: ");
        }
    };

    request.open("POST", "../php/find_product.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    let search = document.getElementById("findProduct").value;
    if(search === "" || search == null) {
        alert("Enter Product Name");
        return false;
    } else {
        request.send("findProduct=" + search);
        findProduct();
    }
}