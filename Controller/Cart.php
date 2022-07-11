<?php
//include 'Model/Product.php';
class Cart
{
     public function addToCart(){
         echo "Inside Cart.php";
         /*print_r($_GET);*/
         include 'View/cartView.php';
     }
}