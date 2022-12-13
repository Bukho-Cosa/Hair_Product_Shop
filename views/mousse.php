<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/model/classes.php";
require_once __DIR__ . "/data/hair_product_dao.php";

$database_config = new database_config();
$Mousse_DAO = new Mousse_DAO($database_config);
$Mousse_Data = $Mousse_DAO->readAll();

?>



<section id="mousse_products">
    <?php
    foreach ($Mousse_DAO as $key => $Mousse_Data) {
        echo "
        
        <img src='". $Mousse_Data->getImage() ."' alt='mousse_image'>
        <h5> ". $Mousse_Data->getName() ." </h5>
        <p> ". $Mousse_Data->getName_of_type() ." </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
        <p> ". $Mousse_Data->getPrice() ." </p>
        <form action='./view//individual_page_view.php' method='get'>
        <input type='hidden' name='product_name' value='". $Mousse_Data->getId() ."'>
        <button type='submit' name='view_product' value='". $Mousse_Data ."'>View Product</button>
        </form>
        
        ";
        # code...
    }
    ?>
    
</section>