<?php

require_once 'database.class.php';

class UpdateUser extends Database {

    public function updateUser($data) {
        if (isset($data['update'])) {
            // Retrieve user data from the AJAX request
            $userId = $data['userId'];
            $name = $data['name'];
            $email = $data['email'];
            $username = $data['username'];
            $mobile = $data['mobile'];
            $phone = $data['phone'];

            // Update user data in the database
            $query = "UPDATE users SET name = :name, email = :email, username = :username, mobile = :mobile, phone = :phone WHERE id = :userId";

            $connection = $this->connect();
            $statement = $connection->prepare($query);

            $statement->bindParam(':userId', $userId);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':mobile', $mobile);
            $statement->bindParam(':phone', $phone);

            if ($statement->execute()) {
                $response = array('status' => 'success', 'message' => 'User updated successfully');
            } else {
                $response = array('status' => 'error', 'message' => 'User update failed');
            }


            // Send the JSON response back to the AJAX request
            echo json_encode($response);
        }
    }
}

$data = $_POST;

$updateUser = new UpdateUser();
$updateUser->updateUser($data);

?>
