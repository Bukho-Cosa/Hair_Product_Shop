<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/model/classes.php";
require_once __DIR__ . "/data/hair_product_dao.php";

$database_config = new database_config();
$Accessory_DAO = new Accessory_DAO($database_config);
$Accessory_Data = $Accessory_DAO->readAll();

?>



<section id="accessories_products">
    <?php
    foreach ($Accessory_DAO as $key => $Accessory_Data) {
        echo "
        
        <img src='". $Accessory_Data->getImage() ."' alt='seals_image'>
        <h5> ". $Accessory_Data->getName() ." </h5>
        <p> ". $Accessory_Data->getName_of_type() ." </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
        <p> ". $Accessory_Data->getPrice() ." </p>
        <form action='./view//individual_page_view.php' method='get'>
        <input type='hidden' name='product_name' value='". $Accessory_Data->getId() ."'>
        <button type='submit' name='view_product' value='". $Accessory_Data ."'>View Product</button>
        </form>
        
        ";
        # code...
    }
    ?>
    
</section>