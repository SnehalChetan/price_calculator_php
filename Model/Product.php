<?php
include 'DbConnection.php';

class Product
{
    protected $conn;
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DbConnection();

    }

    public function getProductList(): array
    {
        $this->conn = $this->dbConnect->makeConnection();
        $sqlResult = $this->conn->query("select * from product");
        return $sqlResult->fetchAll();

    }

    public function getProductById($productId)
    {
        if (!isset($this->conn)) {
            $this->conn = $this->dbConnect->makeConnection();
        }
        $query = "select * from product where id = " . $productId;
        $sqlResult = $this->conn->query($query);
        return $sqlResult->fetchAll();
    }
}