<?php
include 'Model/DbConnection.php';
class HomePageController
{
    public function __construct()
    {
        new DbConnection();
    }
}