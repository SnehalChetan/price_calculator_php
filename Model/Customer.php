<?php

class Customer

{
    protected $conn;
    protected $dbConnect;
    public function __construct()
    {
        $this->dbConnect = new DbConnection();
    }

    public function getCustomerList() : array{
        $this->conn = $this->dbConnect->makeConnection();
        $sqlResult = $this->conn->query("SELECT * FROM customer");
//        $numRows = $sqlResult->num_rows;
//        if ($numRows > 0) {
//
//        }
        return $sqlResult->fetchAll();

    }
}