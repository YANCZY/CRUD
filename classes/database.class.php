<?php

class Database {

    private $host = "localhost";
    private $username = "yanz";
    private $password = "raksotyancy";
    private $database = "crud";


    protected function connect(){

        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->database ; // What type of database we are using. (Data Source Name)
        $pdo = new PDO($dsn, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }


}