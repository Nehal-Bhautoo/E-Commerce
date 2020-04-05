//Import recommendation class
import {Recommendation} from "./recommender.js";

//Create recommendation object - it loads its state from local storage
let recommend = new Recommendation();

let request = new XMLHttpRequest();

//Searches for products in database
export function findProduct() {
    //Extract the search text
    let searchText = document.getElementById("findProduct").value;

    //Add the search keyword to the recommend
    recommend.addKeyword(searchText);
    showRecommendation();
}

function showRecommendation() {
   let recomm = recommend.getTopKeyword();
   let request = new XMLHttpRequest();

   if(request.responseText != undefined) {
       request.onload = function () {
           document.getElementById("RecommendationDiv").innerHTML = this.responseText;
       }
   }

    //PERFORM SEARCH FOR PRODUCTS
    request.open("POST", "../php/recommend.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("findProduct=" + recomm);
}
