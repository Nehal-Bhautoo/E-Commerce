function register() {
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
    request.open("POST", "../php/add_user.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //Extract registration data
    let usrName = document.getElementById("username").value;
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let address = document.getElementById("address").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("pass").value;
    let payment = document.getElementById("select").value;

    // checking user inputs != null
    if(usrName === "" || usrName == null) {
        alert("Enter User Name");
        return false;
    } else if(firstName === "" || firstName == null) {
        alert("Enter first Name");
        return false;
    } else if(lastName === "" || lastName == null) {
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
    } else if(password === "" || password == null) {
        alert("Enter Password");
        return false;
    } else {
        //Send request
        request.send("username=" + usrName +
            "&firstName=" + firstName +
            "&lastName=" + lastName +
            "&address=" + address +
            "&phone=" + phone +
            "&email=" + email +
            "&pass=" + password +
            "&select=" + payment);
    }
}