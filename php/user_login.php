<?php
    //Start session management
    session_start();

    //Get name and address strings - need to filter input to reduce chances of SQL injection
    $inputName = filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_STRING);
    $inputPass = filter_input(INPUT_POST, 'pass2', FILTER_SANITIZE_STRING);

    //Connect to MongoDB and select database
    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerceDB;
    $collection = $db->UserDetails;

    $criteria = [
        "UserName" => $inputName
    ];

    //Find all of the customers that match  this criteria
    $cursor = $collection->find($criteria);

    if($collection->count($criteria) == 0) {
        echo "Invalid username";
    } elseif ($collection->count($criteria) > 1) {
        echo 'Multiple user account found';
    }

    foreach ($cursor as $item) {
        $customer = $item;
    }

    //Start session for this user
    $_SESSION['loggedInUserName'] = $inputName;

    //Inform web page that login is successful
    echo 'Welcome' + $inputName;

    //Close the connection
    $mongoClient->close();

?>