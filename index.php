<?php
    include './View/Header.php';
    include './View/Navbar.php';

?>
        <!-- Informational Section - Internal styles -->
            <div class='our-info-grid'>
                <!-- Left Text -->
                    <div class="info-text-left">
                        <p>Reasons to Choose FortisureMart:</p>

                        <!-- Un-ordered List -->
                            <ul>
                                <li>
                                    Provides quality goods at affordable prices
                                </li>
                                <li>
                                    We internally train our employees so they are the highest quality
                                </li>
                                <li>
                                    We use the latest technologies to surpass the competition
                                </li>
                            </ul>
                        <!-- Un-ordered List -->
                    </div>
                <!-- Left Text -->
                
                <!-- Right Text -->
                    <div class="info-text-right">
                        <h4>Mission Statement:</h4>
                        <p>To build a nationally respected marketplace that utilizes the latest technologies to add great value to our customers</p>
                    </div>
                <!-- Right Text -->
            </div>
        <!-- Informational Section -->

        <!-- Trending Section - External Styles -->
            <div class='trending-container-grid'>
                <h2>Trending Products</h2>
                <?php
                    $ProductInfo = array (
                        array("Shoes", "shoes-white", "The best shoes around.", 64.20),
                        array("Shirt", "t-shirt-black", "The best shirt around.", 14.20),
                        array("Jeans", "jeans-black", "The best pants around.", 19.69),
                    );
                    
                    include './Controller/CardsPage.php';
                ?> 
            </div>
        <!-- Trending Section -->
<?php
include './View/Footer.php';
include './Controller/SubmitForm.php';
?>
