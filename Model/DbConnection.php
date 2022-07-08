<?php

class DbConnection{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;


    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), 'config.env.local');
        $dotenv->load();
        $this->host = $_ENV['DATABASE_HOST'];
        $this->dbname = $_ENV['DATABASE_NAME'];
        $this->username = $_ENV['DATABASE_USER'];
        $this->password = $_ENV['DATABASE_PASSWORD'];
        $this->port = $_ENV['DATABASE_PORT'];
      // echo $this->password;
        $this->makeConnection();
    }
    public function makeConnection(){
        try {
            $dsn='mysql:host=' . $this->host .';port='.$this->port .';dbname=' . $this->dbname.';';
           // echo $dsn;
            //$conn = new PDO('mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
            $conn = new PDO($dsn, $this->username, $this->password);
           return $conn;
        } catch (PDOException $pe) {
            die("Could not connect to the database  $this->dbname :" . $pe->getMessage());
        }
    }

    public function getConn() {
        return $this->conn;
    }
}