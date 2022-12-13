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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Store</title>
    <link rel="stylesheet" href="/static/styles.css">
    <style>

        * {
            margin: 0;
            /*background-color: rgba(130, 44, 7, 0.93);*/
            
        }

        #headBanner{
            padding: 2rem;
            font-size: larger;
            text-align: center;
            background-color: #F3510B;
            /*background-color: rgba(130, 44, 7, 0.93);*/
        }

        #navBar{
            float: right;
            display: flex;
            margin-top: 1rem;
            margin-right: 3rem;
           /* background-color: rgba(188, 125, 15, 0.9);*/
            
        }
        #navBar img{
            border-radius: 1rem;
            width: 30px;
            height: 30px;
            margin-right: 1.5rem;
        }
        #navBar #menu{
            margin-right: 1.5rem;
        }

        #combs{
            margin-top: 4rem;
            width: 100%;
        }
        #combs h3{
            padding-top: 1.5rem;
            padding-left: 1rem;
        }
        #combs_products{
            border-radius: 1rem;
            border: solid black;
            padding: 0.5rem;
        }

        #mousse h3{
            padding-top: 1.5rem;
            padding-left: 1rem;
        }
        #mousse_products{
            border-radius: 1rem;
            border: solid black;
            padding: 0.5rem;
        }

        #seals h3{
            padding-top: 1.5rem;
            padding-left: 1rem;
        }
        #seals_products{
            border-radius: 1rem;
            border: solid black;
            padding: 0.5rem;
        }

        #accessories h3{
            padding-top: 1.5rem;
            padding-left: 1rem;
        }
        #accessories_products{
            border-radius: 1rem;
            border: solid black;
            padding: 0.5rem;
        }

        #footer{
            padding: 5rem;
            text-align: center;
            background-color: #F3510B;
            color: white;
        }

    </style>
</head>

<body>
    <section id="headBanner">
        <h1>Hair Product Shop</h1>
    </section>
    <hr>


    <section id="navBar">
        <select name="menu" id="menu"> Menu
            <option value="menu">Menu</option>
            <option value="comb"><a href="#combs">Comb and brush </a></option>
            <option value="mousse"><a href="#mousse"> Mousse and moisturiser</a></option>
            <option value="sealant"><a href="seals"> Sealant and styler</a></option>
        </select>

        <h5>ZAR</h5>
        <img src="Flag-South-Africa.jpg" alt="ZAR_flag">
        <img src="cart.png" alt="cart">
    </section>


    <section id="combs">
        <!--should these be drop downs? is that too mcuh work?-->
        <hr>
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
        <p>Contact Us: </p> <a href="+27 11 665 27 17"> (011) PRODUCT </a>
        <p>Email Us: </p> <a href="lauren@hairProducts.com"> lauren@hairProducts.com </a>
        <input type="radio">
        <!--make options so you can have a "rate us"-->
    </section>
</body>

</html>