<?php

//Include the PHP common to be used on the page
include('Common.php');

//Output the head opening tags
output_head("Delete Product");

//Output the Header and Navigation Bar
output_header("Delete Product");

?>

<!--Container/ Contents of the page-->

<div id="container4">

 	<form onsubmit="deleteproduct()">

 		<label for="ProductId">Enter Product ID:</label>
        <input type="text" id="productid" name="addproduct">
         
		<div id="lower">
 			<input type="submit" value="DELETE">
        </div>
         
    </form>
     
</div>

<script>
	function deleteproduct() {
		var xhttp = new XMLHttpRequest();
	
		xhttp.open("POST", "deleteproductServer.php");
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	
		var id = document.getElementById("productid");
		
		xhttp.send("id=" + id);
	
		xhttp.onreadystatechange = function() {
			console.log(xhttp.responseText);
		}
	}
</script>

<?php

//Output the footer of the page
output_footer("Delete Product")

?>