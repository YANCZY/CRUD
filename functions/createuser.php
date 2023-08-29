<?php

class CreateUser Extends Database{
    
    protected function createUsers($submit,$name,$email,$username,$password,$mobile,$phone)
    {
        if(isset($_POST['submit'])){
    
            $name =  $_POST['name'];
            $email =  $_POST['email'];
            $username =  $_POST['username'];
            $password =  $_POST['password'];
            $mobile =  $_POST['mobile'];
            $phone =  $_POST['phone'];
        
            $sqlQuery = "INSERT INTO users (name,email,username,mobile,phone,password) VALUES(?,?,?,?,?,?)";
            
            $result = $this->connect()->query($sqlQuery);
        }
    } 
}
