<?php
//print_r($productList);
require 'includes/header.php';
// toatal cart element $len = isset($cOTLdata['char_data']) ? count($cOTLdata['char_data']) : 0;
include 'Controller/Cart.php';
$cartController = new Cart();
$cartController->addToCart();
?>
<div class="wrapper">
    <div class="container">
        <?php
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($productList as $product) {
            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
            $rowCount++; ?>
            <div class="border p-3 col-md-<?php echo $bootstrapColWidth; ?>">
                <form method="GET">
                <!-- <form method="GET">-->
                    <input type="hidden" id="productId" name="productId" value="<?= $product['id'] ?>"/>
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text">
                        &euro; <?= number_format(($product['price'] / 100), 2, '.', ' '); ?></p>
                    <button type="submit" class="btn border-success" name="submit" value="product">Add To Cart</button>
                </form>
            </div>
            <?php
            if ($rowCount % $numOfCols == 0) { ?>
                </div>
            <?php }
        } ?>
    </div>
</div>