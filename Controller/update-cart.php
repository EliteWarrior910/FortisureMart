<?php
    session_start();

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    if(isset($_POST['code'])){
        $prodCode = $_POST['code'];
        $prodName = $_POST['name'];
        $prodImage = $_POST['img'];
        $prodPrice = $_POST['price'];

        $cartArray = $_SESSION['cart'];
        $storeIndex = count($cartArray);
        for($index = 0; $index < count($cartArray); $index++){
            if($cartArray[$index]['code'] == $prodCode){
                $storeIndex = $index;
            }
        }

        if(!isset($cartArray[$storeIndex]['code'])){
            $cartArray[$storeIndex]['code'] = $prodCode;
            $cartArray[$storeIndex]['name'] = $prodName;
            $cartArray[$storeIndex]['img'] = $prodImage;
            $cartArray[$storeIndex]['price'] = $prodPrice;

            $cartArray[$storeIndex]['quantity'] = 1;
        }
        else{
            $cartArray[$storeIndex]['quantity'] += 1;
        }

        $_SESSION['cart'] = $cartArray;

    }

?>