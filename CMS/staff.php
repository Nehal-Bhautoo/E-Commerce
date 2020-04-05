<?php

//Include the PHP common to be used on the page
include('Common.php');

//Output the head opening tags
output_head("Staff");

//Output the Header and Navigation Bar
output_header("Staff");

?>

<!--Container/ Contents of the page-->
<div id="container">

    <form onsubmit="login()">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <div id="lower">
            <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
            <input type="submit" value="LOGIN">
        </div>
    </form>
</div>

<script>
	function login() {
		//this creating a request to fetched data from a server
		var xhttp = new XMLHttpRequest();
	
	//this will specify the type of request we need from the server
		xhttp.open("POST", "staffServer.php"); //will server page
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	
	//type of information needed
		var username = document.getElementById("username");
		var password = document.getElementById("password");
		
		xhttp.send("username=" + username + "password=" + password);
	
		xhttp.onreadystatechange = function() {
			console.log(xhttp.responseText);
		}
	}
</script>

<?php

//Output the footer of the page
output_footer("Staff")

?>