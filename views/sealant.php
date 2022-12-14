<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/model/classes.php";
require_once __DIR__ . "/data/hair_product_dao.php";

$database_config = new database_config();
$Sealant_DAO = new Sealant_DAO($database_config);
$Sealant_Data = $Sealant_DAO->readAll();

?>



<section id="seals_products">
    <?php
    foreach ($Sealant_DAO as $key => $Sealant_Data) {
        echo "
        
        <img src='". $Sealant_Data->getImage() ."' alt='seals_image'>
        <h5> ". $Sealant_Data->getName() ." </h5>
        <p> ". $Sealant_Data->getName_of_type() ." </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
        <p> ". $Sealant_Data->getPrice() ." </p>
        <form action='./view//individual_page_view.php' method='get'>
        <input type='hidden' name='product_name' value='". $Sealant_Data->getId() ."'>
        <button type='submit' name='view_product' value='". $Sealant_Data ."'>View Product</button>
        </form>
        
        ";
        # code...
    }
    ?>
    
</section>