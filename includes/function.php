<?php


function getCupCakes()
{
    $flavors = array('The Grasshopper', 'Whiskey Maple Bacon', 'Carrot Walnut', 'Salted Caramel Cupcake'
    , 'Red Velvet', 'Lemon Drop', 'Tiramisu');

    return $flavors;
}


function validCupCakes($userCupCakes)
{
    $availableCupCake = getCupCakes();

    foreach($userCupCakes as $flavor) {
        if (!in_array($flavor, $availableCupCake)) {
            return false;
        }
    }
    return true;
}

?>