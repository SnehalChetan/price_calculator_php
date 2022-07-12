<?php

//include 'Model/Product.php';
class Cart extends HomePageController
{
    /*protected $cartProduct;

    public function __construct()
    {
        HomePageController::__construct();
        $this->cartProduct = HomePageController::getProductData();
    }

    public function addToCart()
    {

        $productList = $this->productData->getProductList();
        include 'View/cartView.php';
        include 'View/homepageView.php';

    }*/


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