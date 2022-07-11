
<?php require 'includes/header.php' ?>
<div class="container">
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>
            <?php //session_unset();
        //echo "<pre/>";print_r($_SESSION['cart']);
        if(!empty($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $product){
                echo '<div class="row" style="width:400px;">';
               /*
                echo '<div class="col">'.$product['qty'].'</div>';
                echo '<div class="col">'.$product['price'].'</div>';*/
                ?>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col">
                        <div class="row"><?= $product['name'];// ProductName?></div>
                    </div>
                    <div class="col"><?= $product['qty'];// Product Price ?><span class="close">&#10005;</span></div>
                    <div class="col"><?= $product['price'];// Product Price ?><span class="close">&#10005;</span></div>
                </div>
            </div>
        </div><?php
        echo '</div>';
    }
    }?>
    <div class="back-to-shop"><a href="<?php // Product dropdown Page?>">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS <?php // Product Qty?></div>
                <div class="col text-right"><?php // Product calculated price?></div>
            </div>
            <button class="btn">CHECKOUT</button>
        </div>
    </div>

</div></div>