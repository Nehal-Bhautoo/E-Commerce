function edit() {
    // Create request object
    let request = new XMLHttpRequest();

    // Event Handler
    request.onload = () => {
        if(request.status === 200) {
            // get data from server
            let responseData = request.responseText;
            alert(responseData);
        } else {
            alert("Error communicating with server: ");
        }
    };

    // set up request with http method and url
    request.open("POST", "../php/replace_customer.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    let usrName = document.getElementById("newUsrName").value;
    let fName = document.getElementById("fName").value;
    let lName = document.getElementById("lName").value;
    let address = document.getElementById("addres").value;
    let phone = document.getElementById("phon").value;
    let email = document.getElementById("mail").value;
    let newPassword = document.getElementById("newPass").value;

    if(usrName === "" || usrName == null) {
        alert("Enter User Name");
        return false;
    } else if(fName === "" || fName == null) {
        alert("Enter first Name");
        return false;
    } else if(lName === "" || lName == null) {
        alert("Enter Last Name");
        return false;
    } else if(address === "" || address == null) {
        alert("Enter Address");
        return false;
    } else if(phone === "" || phone == null) {
        alert("Enter Phone Number");
        return false;
    } else if(email === "" || email == null) {
        alert("Enter Email");
        return false;
    } else if(newPassword === "" || newPassword == null) {
        alert("Enter Password");
        return false;
    } else {
        request.send("newUsrName=" + usrName +
            "&fName=" + fName +
            "&lName=" + lName +
            "&addres=" + address +
            "&phon=" + phone +
            "&mail=" + email +
            "&newPass=" + newPassword);
    }
}