<?php

//include 'Model/Product.php';
class Cart extends HomePageController
{
    protected $cartProduct;
    public function __construct()
    {
        HomePageController::__construct();
        $this->cartProduct = HomePageController::getProductData();
    }

    public function addToCart()
    {
        echo "Inside Cart.php";
       // include 'View/cartView.php';
        /*print_r($_GET);*/
        if (isset($_POST['submit']) && $_POST['randcheck'] == $_SESSION['rand']) {
            /*  if ($_GET['submit'] == 'product') {*/
            if (!empty($_SESSION['cart'])) {
                // if no duplicate product in cart then make new entry
                $test = 0;
                foreach ($_SESSION['cart'] as $cartIndex => $cart) :
                    if ($cart['id'] == $_POST['submit']) {
                        $qty = $cart['qty']++;

                        $this->addProductToCartSesstion($qty);
                    } else {
                        $test++;
                    }
                endforeach;
                if ($test > 0) {
                    $qty = 0;
                    $this->addProductToCartSesstion($qty);
                }
            } else {
                // for first time adding product to cart array
                $qty = 0;
                $this->addProductToCartSesstion($qty);
            }
            /*$_SESSION['cart'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart'])));
             }*/
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        } else {
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        }
        include 'View/cartView.php';
    }


    /**
     * @return void
     */
    public function addProductToCartSesstion($qty): void
    {
        $productDetails = $this->cartProduct->getProductById($_POST['submit']);
        $product = array(
            "id" => $productDetails[0]["id"],
            "name" => $productDetails[0]["name"],
            "qty" => $qty + 1,
            "price" => number_format(($productDetails[0]["price"] / 100), 2, '.', ' ')
        );
        $_SESSION['cart'][] = $product;
        // array_push($_SESSION['cart'],$product);
    }

    /**
     * @return void
     * make summation of price of all products in cart
     */
    public function priceSum(){
        $cartPrice = array_column($_SESSION['cart'], 'price');
        $total = array_sum($cartPrice);
        return $total;
    }
}