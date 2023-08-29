<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
  



    $sqlQuery = "INSERT INTO users(name,email,username,mobile,phone,password) VALUES(?, ?, ?, ?, ?, ?)";
    $result = $this->connect()->prepare($sqlQuery);
    $result->execute([$name,$email,$username,$mobile,$phone,$password]);
}