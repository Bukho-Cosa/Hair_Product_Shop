<?php
//remember to leave a link to the cart page

session_start();

// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../classes.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added To Cart</title>
</head>

<body>

    <?php
    foreach ($_SESSION['Hair_Product'] as $key => $Hair_Product) {
        echo "
        
        <h1>YOU PURCHASED A " . $Hair_Product->getName() . " FROM HAIR PRODUCT SHOP!!</h1>
        
        <h2> Your product is waiting for you in your cart!!! </h2>
        <br>
        <br>
        <br>
        <br>
        <h2>Have a lovely day!</h2>
        ";
    }
    ?>   

</body>

</html>