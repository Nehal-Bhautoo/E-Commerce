<?php

function outputHeader($title){
    
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<link rel ="stylesheet" type="text/css" href="Style/Login.css">';
    echo '<link rel ="stylesheet" type="text/css" href="Style/View.css">';
    echo '</head>';
}

function outputNavigation(){
    
	echo '<header>';
    echo '<div class="nav_bar">';
    echo '<nav>';
    echo '<ul>';

    $linkName = array ("Home", "View Products", "Add Product", "Edit Product", "Delete Product", "Customer");
    $linkAddress = array("Login.php", "View.php", "Add.php", "Edit.php", "Delete.php", "Customer.php");

    for($x = 0; $x < count($linkName); $x++){
        echo '<a';
        echo ' href="' . $linkAddress[$x] . '">' . $linkName[$x] . '</a>';
    }

	echo '</ul>';
    echo '</nav>';
    echo '</div>';
	echo '</header>';
}

function outputFooter(){
    echo '<div class="footer_section">';
    echo '<p>Copyright 2020 All rights reserved | This website is made by
    <span>Vishan | Sheenah | Nehal</span></p>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
?>