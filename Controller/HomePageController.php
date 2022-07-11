<?php
include 'Model/Product.php';

class HomePageController
{
    protected $productData;
    protected string $display = 'home';
    /*  public function __construct()
      {

      }*/
    /**
     * get products name from database and display them to homepage view
     */
    public function render()
    {
        $this->productData = new Product();

        if(isset($_GET['submit'])) {
            if ($_GET['submit'] == 'product') {
                if (!empty($_SESSION['cart'])) {
                        // if no duplicate product in cart then make new entry
                    $test =0;
                    foreach($_SESSION['cart'] as $cart){
                        if($cart['id'] == $_GET['productId']){
                            //echo "Available";exit;
                            $qty = $cart['qty'] + 1;
                            $this->addProductToCartSesstion($qty);
                        } /*else{
                            $test=1;
                        }*/
                    }
                    /*if($test>0){
                        $qty = 1;
                        $this->addProductToCartSesstion($qty);
                    }*/
                }else{
                    // for first time adding product to cart array
                    $qty = 0;
                    $this->addProductToCartSesstion($qty);
                }
                $_SESSION['cart'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart'])));
            }
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        } else {
            /*$productData = new Product();*/
            $productList = $this->productData->getProductList();
            include 'View/homepageView.php';
        }
    }

    /**
     * @param $searchVal
     * @param $array
     * @param $key
     * @return bool
     * Check does selected product already exist in cart.
     */
    public function checkValueExist($searchVal, $array, $key)
    {
        if (array_search($searchVal, array_column($array, $key)) !== FALSE) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return void
     */
    public function addProductToCartSesstion($qty): void
    {
        $productDetails = $this->productData->getProductById($_GET['productId']);
        $product = array(
            "id" => $productDetails[0]["id"],
            "name" => $productDetails[0]["name"],
            "qty" => $qty + 1,
            "price" => number_format(($productDetails[0]["price"] / 100), 2, '.', ' ')
        );
        $_SESSION['cart'][] = $product;
    }

}