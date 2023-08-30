<?php
require_once 'database.class.php';

class DeleteUser extends Database {
    public function deleteUser($userId) {
        try {
            $query = "DELETE FROM users WHERE id = ?";
            
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$userId]);

            if ($stmt->rowCount() > 0) {
                $response = array('status' => 'success', 'message' => 'User deleted successfully');
                http_response_code(200);
            } else {
                $response = array('status' => 'error', 'message' => 'User deletion failed');
                http_response_code(400);
            }
        } catch (PDOException $e) {
            $response = array('status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }

        echo json_encode($response);
    }
}

if (isset($_POST['delete'])) {
    $userId = $_POST['userId'];
    $deleteUser = new DeleteUser();
    $deleteUser->deleteUser($userId);
}
