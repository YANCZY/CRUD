<?php


if(isset($_POST['submit'])){

    // Grab Data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $mobile = $_POST["mobile"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Instantiate Signup Controll Class
    
    include "../class/create.class.php";
    include "../class/create.controller.php";

    $createUser = new CreateUser($name,$email,$username,$mobile,$phone,$password);

    echo $name;



}