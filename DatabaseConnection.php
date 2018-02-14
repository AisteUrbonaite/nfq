<?php

class DatabaseConnection
{
    private $server = 'localhost';
    private $username ='root';
    private $password ='';
    private $db = 'nfq';

    public function getPdoConnection()
    {
       try{
           $connection = new PDO("mysql:dbname:$this->db;host= $this->server;",$this->username, $this->password);
           $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           echo 'Connected successfully';
       }
       catch(PDOexception $e){
           echo $e->getMessage();
           die();
       }

       return $connection;
    }
}