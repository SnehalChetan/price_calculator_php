<?php

class DbConnection{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;

    public function __construct()
    {

        $this->host = $_ENV['DATABASE_HOST'];
        $this->port = $_ENV['DATABASE_PORT'];
        $this->dbname = $_ENV['DATABASE_NAME'];
        $this->username = $_ENV['DATABASE_USER'];
        $this->password = $_ENV['DATABASE_PASSWORD'];

      // echo $this->password;
        $this->makeConnection();
    }
    public function makeConnection(){
        try {
            $connect = new PDO('mysql:host=' . $this->host .';dbname=' . $this->dbname.';port ='.$this->port, $this->username, $this->password);
            echo "Connected to  successfully.";
            return $connect;
            /*$connect = new PDO('mysql:host=' . $this->host .';dbname=' . $this->dbname.';port ='.$this->port, $this->username, $this->password);
            //echo "Connected to  successfully.";
            return $connect;*/

        } catch (PDOException $pe) {
            die("Could not connect to the database  $this->dbname :" . $pe->getMessage());
        }
    }

}