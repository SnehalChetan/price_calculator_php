<?php
declare(strict_types=1);
require 'View/includes/header.php';

require('vendor/autoload.php');
require 'Controller/HomePageController.php';
require 'Model/CustomerLoader.php';
require 'View/homepageView.php';
require 'Model/Customer.php';

session_start();
if (!isset($_SESSION)) {
    $_SESSION["cart"] = [];
}



$controller = new HomePageController();
$controller->render();

?>