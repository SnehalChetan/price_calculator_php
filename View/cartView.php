<?php
include_once 'Controller/Cart.php';
$cartController = new Cart(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col px-4 mx-5"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted"><?php if (!empty($_SESSION['cart'])) {
                            echo count($_SESSION['cart']);
                        } else {
                            echo 0;
                        } ?>  items</div>
                </div>
            </div>
            <?php //session_unset();
            //echo "<pre/>";print_r($_SESSION['cart']);
            if (!empty($_SESSION['cart'])) { ?>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"></div>
                        <div class="col">
                            <div class="row text-muted"><?php echo 'ProductName';     ?></div>
                        </div>
                        <div class="col">
                            <?php echo 'Product qty';      ?>
                        </div>
                        <div class="col"> <?php echo 'Product Price';      ?></div>
                    </div>
                </div>
            <?php
            foreach ($_SESSION['cart'] as $product) { ?>
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"></div>
                    <div class="col">
                        <div class="row text-muted"><?= $product['name'];// ProductName     ?></div>
                    </div>
                    <div class="col">
                        <?= $product['qty'];// Product qty      ?>
                    </div>
                    <div class="col">&euro; <?= $product['price'];// Product Price  ?></div>
                </div>
            </div>
            <?php }
            } ?>
            <div class="btn border-primary my-4"><a href="<?php $_SERVER['PHP_SELF']; ?>"><span
                            class="text-muted">Back to shop</span></a></div>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col px-3" style="padding-left:0;">ITEMS <?php if (!empty($_SESSION['cart'])) {
                    echo count($_SESSION['cart']);
                    } else {
                    echo 0;
                    } ?> </div>
                <div class="col text-right">&euro; <?php if (!empty($_SESSION['cart'])) {
                        echo $cartController->priceSum();
                    } else {
                        echo 0;
                    } ?></div>
            </div>

            <div class="row" style=" padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; <?php if (!empty($_SESSION['cart'])) {
                        echo $cartController->priceSum();
                    } else {
                        echo 0;
                    } ?>
                </div>
                <button class="btn border-success my-3">CHECKOUT</button>
            </div>
        </div>

    </div>

