<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../model/classes.php";
require_once __DIR__ . "/../data/hair_product_dao.php";

$database_config = new database_config();
$Combs_DAO = new Combs_DAO($database_config);

?>



<section id="combs_products">
    <?php
    foreach ($_SESSION['Combs'] as $key => $Combs) {
        echo "
        
        <img src='". $Combs->getImage() ."' alt='comb_image'>
        <h5> ". $Combs->getName() ." </h5>
        <p> ". $Combs->getName_of_type() ." </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
        <p> ". $Combs->getPrice() ." </p>
        <form action='./view//individual_page_view.php' method='get'>
        <input type='hidden' name='product_name' value='". $Combs->getId() ."'>
        <button type='submit' name='view_product' value='true'>View Product</button>
        </form>
        
        ";
        # code...
    }
    ?>
    
</section>