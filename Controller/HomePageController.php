<?php
include 'Model/DbConnection.php';
class HomePageController
{
    public function __construct()
    {
        new DbConnection();
    }
    public function render(){
        $customerData = new Customer();
        $customerList = $customerData->getCustomerList();
        include 'View/homepageView.php';
    }
}