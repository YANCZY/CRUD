<?php


class CreateUser{

    private $name ;
    private $email ;
    private $username ;
    private $mobile ;
    private $phone ;
    private $password;

    public function __construct($name,$email,$username,$mobile,$phone,$password){

        $this->$name = $name;
        $this->$email = $email;
        $this->$username = $username;
        $this->$mobile = $mobile;
        $this->$phone = $phone;
        $this->$password = $password;
    }

    // Check Empty String

    private function emptyInput(){

        $result = true;
        
        if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->mobile) || empty($this->phone) || empty($this->password))
        {
            $result = false;
        }

        return $result;
    }

    // Check Email Address

    private function invalidEmail(){

        $result = true;

        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }

        return $result;

    }

    

}