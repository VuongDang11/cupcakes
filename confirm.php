<?php
include("includes/function.php");
$name = $_POST['name'];
$flavors = "";


$isValid = true;

//Flavors have been selected
if(!isset($_POST['flavors'])) {

    echo "<p> Please select the flavor you want!  </p>";
    $isValid = false;
}
else {
    $flavors = implode("," , $_POST['flavors']);
}

// If the data is not valid, stop processing
if (!$isValid) {
    return;
}

$flavors = implode(", ", $_POST['flavors']);


if(isset($_POST['flavors'])) {
    $cupCake = $_POST['flavors'];
    $c = count($cupCake);
    $price = 0.0;

    for($i = 0; $i < $c; $i ++) {
        if($cupCake[$i] == "The Grasshopper") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Whiskey Maple Bacon") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Carrot Walnut") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Salted Caramel Cupcake") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Red Velvet") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Lemon Drop") {
            $price = $price + 3.5;
        }
        if($cupCake[$i] == "Tiramisu") {
            $price = $price + 3.5;
        }
        else {

        }

    }

}

thanks($name);


echo "<h4> Order Summary: </h4>";
foreach ($_POST['flavors'] as $flavor) {
    echo "<li>". $flavor . "</li>";
}

echo "<h4>" . "Order Total: " . $price . "$" ."</h4>";



function thanks($name) {
    $msg = "<h2>" . "Thank you " . $name . " for your order !" . "</h2>";
    echo $msg;
}

?>