<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>
        <!--<h4>Hello <?php /*//echo $user->getName()*/ ?>,</h4>-->

        <!--<p><a href="index.php?page=info">To info page</a></p>-->


        <?php //session_unset();
        //echo "<pre/>";print_r($_SESSION['cart']);
        if(!empty($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $product){
                echo '<div class="row" style="width:400px;">';
                echo '<div class="col">'.$product['name'].'</div>';
                echo '<div class="col">'.$product['qty'].'</div>';
                echo '<div class="col">'.$product['price'].'</div>';
                echo '</div>';
            }
        } else{
            echo "cart has 0 products";
        }


        include 'productsdropdown.php';
        ?>

        <p>Put your content here.</p>
    </section>
<?php require 'includes/footer.php' ?>