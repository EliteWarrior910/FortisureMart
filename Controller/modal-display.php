<?php
    if(count($_SESSION['cart']) > 0){
        $cartArray = $_SESSION['cart'];
        $totalPrice = 0;
        for($index = 0; $index <count($cartArray); $index++){
            echo "
            <h4>{$cartArray[$index]['name']}</h4>
            <img src='./View/Public/Images/Products/{$cartArray[$index]['img']}.png' style='max-height: 100px;'>
            <p>Quantity: {$cartArray[$index]['quantity']}<br> \${$cartArray[$index]['price']}</p>
            <hr>
            ";

            $totalPrice += $cartArray[$index]['price'] * $cartArray[$index]['quantity'];
        }
        echo "<p style='float: right;'>Total: \${$totalPrice}</p>";
    }
    else{
        echo "<h2>They aint nothin here boo.</h2>";
    }
?>