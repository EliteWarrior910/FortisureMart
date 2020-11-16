<div class='navbar-grid'>
    <button class='btn-shop btn btn-primary'
            onclick="location.href='?'">
    Shop</button>
            
    <h1 class='fortisuremart-logo'>
        <span style='color: #3B3A6D;'>Fortisure</span><span style='color: #9F1224;'>Mart</span>
    </h1>


    <div class='cart-container'>
        <?php
            $itemCount = 0;
            for($index = 0; $index < count($_SESSION['cart']); $index++){
                $itemCount += $_SESSION['cart'][$index]['quantity'];
            }

            echo "<sub class='items-in-cart' style='color:white; font-size: 25px;'>{$itemCount}</sub>"
        ?>  
        <img class='shopping-cart-img' src='./View/Public/Images/shopping-cart.png' data-toggle='modal' data-target='#modal-users-cart'>
    </div>
</div>

<div class='modal fade' id='modal-users-cart' role='dialog' >
    <div class='modal-dialog'>
        <div class='modal-content'>


            <div class='modal-header'>
                <h4 class='modal-title'>Your Cart</h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>

            <div class='modal-body'>
                <?php
                    include './Controller/modal-display.php';
                ?>
            </div>

            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
            </div>


        </div>
    </div>
</div>