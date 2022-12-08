<?php

session_start();

// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../model/classes.php";

// ---------------- Request Handlers ---------------------

// view product
if (isset($_GET['view_product'])) {

    // loop and filter through car data and save selected car to session variable

    foreach ($_SESSION['Hair_Product'] as $i => $Hair_Product) { //this doesn't work anymore becaause I made each table an individual class... ask Justin if this has to be individual pages depending, is there no way to code this all on one page for all of the different classes?

        if ($Hair_Product->getId() == $_GET['id']) {

            $_SESSION['selected_product'] = $Hair_Product;

        }
    }
}


// ip = individual page


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['selected_product']->getName() . " " . $_SESSION['selected_product']->getId() ?></title>

    <link rel="stylesheet" href="/static/styles.css">
</head>

<body>
    <div id="container"> <!--make bubble-->
        <section> </section> <!-- off-white bubble reflection -->
        <section id="combs_products"> <!--make inner bubble-->
            <?php
            foreach ($_SESSION['Hair_Product'] as $key => $Hair_Product) {
                echo "
                
                <img src='" . $Hair_Product->getImage() . "' alt='blown_up_image' class='ip_image'>


                <h2 class='ip_name'> " . $Hair_Product->getName() . " </h2>
                <h4 class='ip_name_of_type'> " . $Hair_Product->getName_of_type() . " </h4> 
                
                <p class='ip_description'> THIS PRODUCT: <br>
                ". $Hair_Product->getDescription() ."
                </p>


                <p class='ip_price'> " . $Hair_Product->getPrice() . " </p>
                <form action='./view/purchsed_product.php' method='post'>
                <input type='hidden' name='product_name' value='" . $Hair_Product->getName() . "'>
                <button class='ip_button' type='submit' name='purchase_product' value='true'>Add To Cart</button>
                </form>
                
                ";
                # code...
            }

            //is there a way to redirect the information to the cart but the page to purchased_product.php... basically so the customer can go to the cart themself

            //after having your questions answered don't forget to write up a protocol for if there is no availability



            ?>

        </section>
    </div>
</body>

</html>