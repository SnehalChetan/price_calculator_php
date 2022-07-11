<?php require 'includes/header.php';
include_once 'Controller/Cart.php';
$cartController = new Cart();?>
<div class="container ">
    <div class=""row">
    <div class="col-md-6 summary">
    <div class="title">
        <div class="row">
            <div class="col p-0"><h4><b>Shopping Cart</b></h4></div>
            <div class="col align-self-center text-right text-muted"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo 0;}?>  items</div>
        </div>
    </div>
    <?php //session_unset();
    //echo "<pre/>";print_r($_SESSION['cart']);
    if (!empty($_SESSION['cart'])) { ?>
        <div class="row main align-items-center border-top border-bottom">
            <div class="col">
                <div class="row fw-bold"> ProductName</div>
            </div>
            <div class="col fw-bold">Qty</div>
            <div class="col fw-bold">Price</div>
            <!--<span class="close">&#10005;</span>-->
        </div>
        <?php
        foreach ($_SESSION['cart'] as $product) {        ?>
            <div class="row main align-items-center border-top border-bottom">
                <div class="col">
                    <div class="row"><?= $product['name'];// ProductName    ?></div>
                </div>
                <div class="col"><?= $product['qty'];// Product Price     ?></div>
                <div class="col">&euro; <?= $product['price'];// Product Price     ?></div>
                <!--<span class="close">&#10005;</span>-->
            </div>
            <?php
        }
    } ?>
    <div class="btn border-primary"><a href="<?php $_SERVER['PHP_SELF']; ?>"><span
                class="text-muted">Back to shop</span></a></div>
    </div>
    <div class="col-md-4 summary">
        <div><h5><b>Summary</b></h5></div>
        <hr>
        <div class="row">
            <div class="col" style="padding-left:0;">ITEMS <?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo 0;}?> </div>
            <div class="col text-right ">TOTAL <span class="fw-bold"> &euro; <?php if(!empty($_SESSION['cart'])){echo $cartController->priceSum();} else {echo 0;}?></span></div>
        </div>
        <button class="btn border-success ">CHECKOUT</button>
    </div>
</div>

</div></div>