//Global variables
let request = new XMLHttpRequest();
let loggedInStr = "Logged in <button onclick='logout()'>Logout</button>";

//Check login when page loads
window.onload = checkLogin;

//Checks whether user is logged in.
function checkLogin() {
    request.onload = function() {
        //Create event handler that specifies what should happen when server responds
        if(request.responseText === "ok") {

        } else {
            console.log(request.responseText);
        }
    };

    //Set up and send request
    request.open("GET", "../php/user_login.php");
    request.send();
}

//Attempts to log in user to server
function login() {
    //Create event handler that specifies what should happen when server responds
    request.onload = function () {
        //Check HTTP status code
        if(request.status === 200) {
            //Get data from server
            let responseData = request.responseText;
            if(responseData === "ok") {
                alert(responseData);
            } else {
                alert(responseData);
            }
        } else {
            alert("Error communicating with server");
        }
    };

    //Extract login data
    let inputName = document.getElementById("name1").value;
    let inputPass = document.getElementById("pass2").value;

    //Set up and send request
    request.open("POST", "../php/user_login.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    if(inputName === "" || inputName == null) {
        alert("Enter User Name");
        return false;
    } else if(inputPass === "" || inputPass == null) {
        alert("Enter Password");
    } else {
        request.send("name1=" + inputName +
            "&pass2=" + inputPass);
    }
}