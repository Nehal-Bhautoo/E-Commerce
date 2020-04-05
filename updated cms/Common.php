<?php //PHP tag for Common functions

//Outputing head tag from html
function output_head($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo 	'<head>';
    echo 		'<title>' .$title. '</title>';
    //Stylesheet links
    echo 		'<link rel="stylesheet" type="text/css" href="cms.css"/>';
    echo 	'</head>';
    echo 	'<body>';
}

//Outputing the Header and nav bar
function output_header($pageName){
    echo 		'<header>';
    echo 			'<div class="main">';
    echo 			'</div>';
    echo 				'<ul>';
    //Array of pages to link to
    //$linkNames Names of the pages
    $linkNames = array("Home", "Staff Login", "Edit Product", "Add Product", "Delete Product", "View Orders");
    //$linkAddresses where the array needs to search the pages
    $linkAddresses = array ("Home.php", "staff.php", "editproduct.php", "addproduct.php", "deleteproduct.php", "vieworder.php");

    //Output dynamic navigation bar
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li>';
        echo 	'<a href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
        echo '</li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</header>';
}

//Outputting the Footer and Copyright
function output_footer($pageName){
    echo 		'<div class="footer-main-div">';
    echo 		'</div>';
    echo 		'<div class="footer-bottom">';
    echo 			'<p> Copyright© E-Commerce Website.All rights reserved</p>';
    echo 		'</div>';
    echo 	'</body>';
    echo '</html>';
}