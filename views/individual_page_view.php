<?php

session_start();

// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/model/classes.php";
require_once __DIR__ . "/data/hair_product_dao.php";
require_once __DIR__ . "/config/database_configure.php";

// ---------------- Request Handlers ---------------------

// view product
// DAO and Database Config objects
$database_config = new database_config();
$Combs_DAO = new Combs_DAO($database_config);
$Mousse_DAO = new Mousse_DAO($database_config);
$Sealant_DAO = new Sealant_DAO($database_config);
$Accessory_DAO = new Accessory_DAO($database_config);

// remove session assignment and load in data from Database
$Combs_Data = $Combs_DAO->readAll();
$Mousse_Data = $Mousse_DAO->readAll();
$Sealant_Data = $Sealant_DAO->readAll();
$Accessory_Data = $Accessory_DAO->readAll();

//if (isset($GET('view_product'))) {
//    isset($GET('view_product'));
//    # code...
//}

get_class();

//switch (isset($GET('view_product'))) {
//    case $Combs_Data:
//        return $Combs_Data;
//        break;
//    case $Mousse_Data:
//        return $Mousse_Data;
//        break;
//    case $Sealant_Data:
//        return $Sealant_Data;
//        break;
//    default:
//        # code...
//        return $Accessory_Data;
//        break;
//}

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
    <div id="container">
        <!--make bubble-->
        <section> </section> <!-- off-white bubble reflection -->
        <section id="combs_products">
            <!--make inner bubble-->
            <?php
            foreach ($_SESSION['Hair_Product'] as $key => $Hair_Product) {
                echo "
                
                <img src='" . $Hair_Product->getImage() . "' alt='blown_up_image' class='ip_image'>


                <h2 class='ip_name'> " . $Hair_Product->getName() . " </h2>
                <h4 class='ip_name_of_type'> " . $Hair_Product->getName_of_type() . " </h4> 
                
                <p class='ip_description'> THIS PRODUCT: <br>
                " . $Hair_Product->getDescription() . "
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