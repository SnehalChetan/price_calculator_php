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
        $sqlResult = $this->conn->query("select * from customer");
        var_dump($sqlResult); exit;
        return $sqlResult->fetchAll();

    }
}