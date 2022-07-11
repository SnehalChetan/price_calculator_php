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
/*function to make
groups[]= group_id FROM customer + parent_id FROM customer group (if exist)
    + parent_id FROM customer group (if exist)

From this array, sum of all fixed disount and highest variabel discount)
Then compare with the personal discounts
*/

$groups=[];
$group= "SELECT group_id FROM customer";
$groups[]=$group;
while (isset("SELECT parent_id FROM customer_group WHERE ))
