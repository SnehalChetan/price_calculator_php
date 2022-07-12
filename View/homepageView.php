<?php // include_once 'Controller/Cart.php'; ?>
<?php
//$cartController = new Cart();
// $cartController->addToCart();
?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>
        <!--<h4>Hello <?php /*//echo $user->getName()*/ ?>,</h4>-->

        <!--<p><a href="index.php?page=info">To info page</a></p>-->

        <?php //session_unset();
        //echo "<pre/>";print_r($_SESSION['cart']);
        if (!empty($_SESSION['cart'])) {
            /*$cartController->addToCart();
              foreach ($_SESSION['cart'] as $product) {
                 echo '<div class="row" style="width:400px;">';
                 echo '<div class="col">' . $product['name'] . '</div>';
                 echo '<div class="col">' . $product['qty'] . '</div>';
                 echo '<div class="col">' . $product['price'] . '</div>';
                 echo '</div>';
             }*/
        } else {
            echo "cart has 0 products";
           // $cartController->addToCart();
        }
        /**/
        ?>

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col"><h4><b>Products </b></h4></div>
                </div>
                <?php
                $numOfCols = 4;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols; ?>
                <!-- <form method="POST">-->
                <?php
                $rand = rand();
                $_SESSION['rand'] = $rand;
                ?>

                <?php foreach ($productList as $product) {
                    if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                    $rowCount++; ?>
                    <div class="border p-3 col-md-<?php echo $bootstrapColWidth; ?>">

                        <form method="POST">
                            <input type="hidden" value="<?php echo $rand; ?>" name="randcheck"/>
                            <h5 class="card-title"><?= $product['name'] ?></h5>
                            <p class="card-text">
                                &euro; <?= number_format(($product['price'] / 100), 2, '.', ' '); ?></p>
                            <button type="submit" class="btn border-success" name="submit"
                                    value="<?= $product['id'] ?>">Add To Cart
                            </button>
                        </form>
                    </div>
                    <?php
                    if ($rowCount % $numOfCols == 0) { ?>
                        </div>
                    <?php }
                } ?> <!--</form>-->
            </div>
        </div>
        <p>Put your content here.</p>



        <?php require 'includes/customerDropdown.php'?>
        <?php require 'includes/footer.php'?>
    </section>
<?php include 'includes/footer.php' ?>
