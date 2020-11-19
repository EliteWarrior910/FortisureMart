<?php
    include './update-cart.php';
    include './modal-display.php';

    $itemCount = 0;
    for($index = 0; $index < count($_SESSION['cart']); $index++){
        $itemCount += $_SESSION['cart'][$index]['quantity'];
    }

    echo "<script> document.getElementById('items-in-cart').innerHTML = {$itemCount}</script>";
?>