<?php


//tbh I think this might be out of my skill set...
//let's f### around and find out

session_start();

//I shouldn't require the page if it is posted onto here

//how does a page hold info? say whoever is buying leaves the purchase page to go buy more, how can I ensure the info stays on here about previous purchases?

if (isset($GET['purchase_product'])){

    //this would be the perfect time to save the data

};

". get_class().getName() ."
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <section> <!--write in the php (!!)-->
        <table>
            <tr>
                <td><p> <?php  //get_class().getName()  ?> </p></td>
                <td><p> <?php  //get_class().getPrice()  ?> </p></td>
                <td><button> !! purchase </button></td>
                <td><button> !! remove from cart </button></td> <!--I only know how to code for this in JS-->
            </tr>
        </table>
    </section>
</body>
</html>