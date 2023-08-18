<?php

 class Database{

    private $servername;
    private $username ;
    private $password;
    private $database;

    protected function connect(){

        $this->servername = "localhost";
        $this->username  = "yanz";
        $this->password = "raksotyancy";
        $this->database = "crud";

        $conn  = new mysqli($this->servername,$this->username,$this->password,$this->database);

        return $conn;
    }


 }