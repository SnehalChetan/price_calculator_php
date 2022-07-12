<?php
declare(strict_types=1);

require ('vendor/autoload.php');
require 'Controller/HomePageController.php';
require 'Model/CustomerLoader.php';
require 'View/homepageView.php';

$controller = new HomePageController();