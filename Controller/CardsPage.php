<?php
$Column2 = 2;

for($index = 0; $index < count($ProductInfo); $index++)
{
    echo"
        <div class='product-card-grid' style='grid-column: {$Column2}; grid-row: 1;'>
            <p class='product-header-text'> 
                <span>Fortisure</span> <span>{$ProductInfo[$index][0]}</span>
            </p>
            
            <img src='./View/Public/Images/Products/{$ProductInfo[$index][1]}.jpg'>
            
            <p class='product-card-desc'>
                {$ProductInfo[$index][2]}
            </p>

            <button class='btn-add-to-cart btn btn-success'>
                Add to Cart | <span>\${$ProductInfo[$index][3]}</span>
            </button>
        </div>
    ";
    $Column2++;
}


?>