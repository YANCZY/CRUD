<?php

require_once 'database.class.php';
class CreateUser extends Database{

    public function create($data){

        if (isset($data['submit'])) {
           // Gather the data from the AJAX request
           $name = $data['name'];
           $email = $data['email'];
           $username = $data['username'];
           $password = $data['password'];
           $mobile = $data['mobile'];
           $phone = $data['phone'];

        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the data into the database
        $query = "INSERT INTO users (name, email, username, password, mobile, phone) 
                VALUES (:name, :email, :username, :password, :mobile, :phone)";

        $connection = $this->connect();
        $statement = $connection->prepare($query);

        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $hashedPassword);
        $statement->bindParam(':mobile', $mobile);
        $statement->bindParam(':phone', $phone);

        if ($statement->execute()) {
            $response = array('status' => 'success', 'message' => 'User created successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'User creation failed');
        }

        // Send the JSON response back to the AJAX request
        echo json_encode($response);

        }


    }

}

// Assuming the data from the AJAX request is sent as POST data
$data = $_POST;

$createUser = new CreateUser();
$createUser->create($data);