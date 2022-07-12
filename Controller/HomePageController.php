<?php
include 'Model/Product.php';

class HomePageController
{
    protected $productData;

    public function __construct()
    {
        $this->productData = new Product();
    }

    /**
     * @return mixed
     */
    public function getProductData()
    {
        return $this->productData;
    }

    /**
     * get products name from database and display them to homepage view
     */
    public function render():void
    {
        $productList = $this->productData->getProductList();
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
            include 'View/cartView.php';
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        } else {
            include 'View/cartView.php';
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        }

    }

    /**
     * @return void
     */
    public function addProductToCartSesstion($qty): void
    {
        $productDetails = $this->productData->getProductById($_POST['submit']);
        $product = array(
            "id" => $productDetails[0]["id"],
            "name" => $productDetails[0]["name"],
            "qty" => $qty + 1,
            "price" => number_format(($productDetails[0]["price"] / 100), 2, '.', ' ')
        );
        $_SESSION['cart'][] = $product;
    }
    /**
     * @return void
     * make summation of price of all products in cart
     **/
    public function priceSum()
    {
        $cartPrice = array_column($_SESSION['cart'], 'price');
        $total = array_sum($cartPrice);
        return $total;
    }
}