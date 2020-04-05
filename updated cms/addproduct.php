<?php

//Include the PHP common to be used on the page
include('Common.php');

//Output the head opening tags
output_head("Add Product");

//Output the Header and Navigation Bar
output_header("Add Product");

?>

<!--Container/ Contents of the page-->
<div id="container3">
 	<form onsubmit="addproduct()">

	    <label for="productid">Enter product ID:</label>
 		<input type="text" id="productid">
		<label for="productname">Enter product name:</label>
 		<input type="text" id="productname">
		<label for="productmodel">Enter product model:</label>
 		<input type="text" id="productmodel">
		<label for="productsize">Enter product size:</label>
 		<input type="text" id="productsize">
		<label for="productprice">Enter product price:</label>
 		<input type="text" id="productprice">
		<label for="productcolour">Enter product colour:</label>
 		<input type="text" id="productcolour">
		<label for="producttype">Enter product type:</label>
 		<input type="text" id="producttype">
		
		<div id="lower">
		 	<input type="submit" value="ADD">
			<p id="message" style="height:50px"></p>
 		</div>

	</form>
</div>

<script>
	function addproduct() {
		var xhttp = new XMLHttpRequest();
	
		xhttp.open("POST", "addproductServer.php");
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	
		var id = document.getElementById("productid");
		var name = document.getElementById("productname");
		var model = document.getElementById("productmodel");
		var size = document.getElementById("productsize");
		var price = document.getElementById("productprice");
		var colour = document.getElementById("productcolour");
		var type = document.getElementById("producttype");

		xhttp.send("id=" + id + "name=" + name + "model=" + model + "size=" + size + "price=" + price + "colour=" + colour + "type=" + type);
	
		xhttp.onreadystatechange = function() {
			var response = xhttp.responseText;
			console.log(response);
			document.getElementById("message").innerHTML = response;
		}
	}
</script>

<?php

//Output the footer of the page
output_footer("Add Product")

?>