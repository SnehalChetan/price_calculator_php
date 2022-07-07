<?php

class DbConnection{
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), 'config.env.local');
        $dotenv->load();
        $this->host = $_ENV['DATABASE_HOST'];
        $this->dbname = $_ENV['DATABASE_NAME'];
        $this->username = $_ENV['DATABASE_USER'];
        $this->password = $_ENV['DATABASE_PASSWORD'];
        $this->makeConnection();
    }
    public function makeConnection(){
        try {
            // $conn = new PDO('mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            echo "Connected to  successfully.";
            $sqlResult = $conn->query("select * from product");
            print_r($sqlResult);
            while ($row = $sqlResult->fetch()) {
                print "<p>Name: {$row[0]} {$row[1]}</p>";
            }
        } catch (PDOException $pe) {
            die("Could not connect to the database  $this->dbname :" . $pe->getMessage());
        }
    }
}