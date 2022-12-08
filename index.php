<?php


session_start();
//hair product store

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/data/hair_product_dao.php";

//probably don't need these but better safe than sorry
require_once __DIR__ . "/config/database_configure.php";
require_once __DIR__ . "/model/classes.php";

// DAO and Database Config objects
$database_config = new database_config();
$Combs_DAO = new Combs_DAO($database_config);
$Mousse_DAO = new Mousse_DAO($database_config);
$Sealant_DAO = new Sealant_DAO($database_config);
$Accessory_DAO = new Accessory_DAO($database_config);

// remove session assignment and load in car data from Database
$Combs_Data = $Combs_DAO->readAll();
$Mousse_Data = $Mousse_DAO->readAll();
$Sealant_Data = $Sealant_DAO->readAll();
$Accessory_Data = $Accessory_DAO->readAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Store</title>
    <link rel="stylesheet" href="/static/styles.css">
</head>

<body>
    <section id="headBanner">
        <h1>Hair Product Shop</h1>
    </section>
    <hr>


    <section id="navBar">
        <select name="menu" id="menu"> Menu
            <option value="comb">Comb and brush </option>
            <option value="mousse">Mousse and moisturiser</option>
            <option value="sealant">Sealant and styler</option>
        </select>

        <h5>ZAR</h5>
        <img src="" alt="ZAR_flag">
        <p>cart</p>
        <!--replace with icon-->
    </section>
    <hr>

    <h3 style="color:red ;">!!!!!WRITE IN YOUR TABLE!!!!!</h3>

    <section id="combs"> <!--should these be drop downs? is that too mcuh work?-->
        <h3> COMBS AND BRUSHES </h3>

        <section id="combs_products">
            <img src="" alt="">
            <!--pcture of the type of comb-->
            <h5>
                <!--name-->
            </h5>
            <p>
                <!--name of type of comb/ brush-->
            </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
            <p>
                <!--price-->
            </p>
            <form action='./view/' method='get'>
                <input type='hidden' name='' value='" . //$car->getModel() . "'>
                <button type='submit' name='view_product' value='true'>View Product</button>
            </form>
        </section>
    </section>
    <hr>

    <section id="mousse">
        <h3> MOUSSES AND MOISTURISERS </h3>

        <section id="mousse_products">
            <img src="" alt="">
            <!--pcture of the type of comb-->
            <h5>
                <!--name-->
            </h5>
            <p>
                <!--name of type of comb/ brush-->
            </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
            <p>
                <!--price-->
            </p>
            <form action='./view/' method='get'>
                <input type='hidden' name='' value='" . //$car->getModel() . "'>
                <button type='submit' name='view_product' value='true'>View Product</button>
            </form>
        </section>
    </section>
    <hr>

    <section id="seals">
        <h3> SEALANTS AND STYLERS </h3>

        <section id="seals_products">
            <!--should be coded for in view page-->
            <img src="" alt="">
            <!--pcture of the type of comb-->
            <h5>
                <!--name-->
            </h5>
            <p>
                <!--name of type of comb/ brush-->
            </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
            <p>
                <!--price-->
            </p>
            <form action='./view/' method='get'>
                <input type='hidden' name='' value='" . //$car->getModel() . "'>
                <button type='submit' name='view_product' value='true'>View Product</button>
            </form>
        </section>
    </section>
    <hr>

    <section id="accessories">
        <h3> HAIR ACCESSORIES </h3>

        <section id="accessories_products">
            <!--should be coded for in view page-->
            <img src="" alt="">
            <!--pcture of the type of comb-->
            <h5>
                <!--name-->
            </h5>
            <p>
                <!--name of type of comb/ brush-->
            </p> <!-- in individual page views, I'd like this further explained, e.g. what it's good for-->
            <p>
                <!--price-->
            </p>
            <form action='./view/' method='get'>
                <input type='hidden' name='' value='" . //$car->getModel() . "'>
                <button type='submit' name='view_product' value='true'>View Product</button>
            </form>
        </section>
    </section>
    <hr>

    <section id="footer">
        <p>Contact Us: </p> <a href="+27 11 665 27 17"> 011 PRODUCT </a>
        <p>Email Us: </p> <a href="lauren@hairProducts.com"> lauren@hairProducts.com </a>
        <input type="radio">
        <!--make options so you can have a "rate us"-->
    </section>
</body>

</html>