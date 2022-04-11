<?php
include('includes/function.php')
?>

<!--
       Name: Vuong Dang
       Date: 04/11/2022
       URL:https://vdang.greenriverdev.com/328/cupcakes/
       Description: In this assigment, I create a form for selecting flavors and a field for asking name of customers
       After, the customers choose flavors and fill out the Name, then click submit you will receive a thank you form with your Name, and your chosen flavors with the Order Total of below.
       If, customer did not select the flavors after submitting, you will get announcement for Please select the flavor you want.

-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
<div id="main" class="container">

    <h2>Cupcake Fundraiser</h2>

    <form id="cupcake-form" action="confirm.php" method="post">

        <div class="nameForm">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" value="" placeholder="Please input your name..">
        </div>
        <!--
        <div class="flavors" id="cupcakeFlavors">
            <label for="cupcake">Cupcake Flavors</label>

            $flavors = getCupCakes();
            foreach ($flavors as $flavor) {
                echo "<div class='form-check'>
                        <label class='form-check-label'>
                            <input type='checkbox' class='form-check-input' value='$flavor' name='flavors[]'>".ucfirst($flavor).
                    "</label>
                       </div>";
            }
            ?>
        </div>
        -->
        <div class="boxCupCake">
            <h3 for="cupcake">Cupcake Flavors</h3>
            <label> <input  type="checkbox" value="The Grasshopper" name="flavors[]"> The Grasshopper</label>
            <label> <input  type="checkbox" value="Whiskey Maple Bacon" name="flavors[]"> Whiskey Maple Bacon </label>
            <label> <input  type="checkbox" value="Carrot Walnut" name="flavors[]"> Carrot Walnut </label>
            <label> <input  type="checkbox" value="Salted Caramel Cupcake" name="flavors[]"> Salted Caramel Cupcake </label>
            <label> <input  type="checkbox" value="Red Velvet" name="flavors[]"> Red Velvet </label>
            <label> <input  type="checkbox" value="Lemon Drop" name="flavors[]"> Lemon Drop </label>
            <label> <input  type="checkbox" value="Tiramisu" name="flavors[]"> Tiramisu </label>


        </div>

        <button type="submit"  id="button" class="btn btn-primary">Order</button>
    </form>
</div>
</body>
</html>
