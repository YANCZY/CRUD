<?php

class ViewUser extends Database{

    public function getUsers(){
        $sqlQuery = "SELECT * FROM users";

        $result = $this->connect()->query($sqlQuery);

        
        while($data = $result->fetch())
        {
            echo"
                <tr>
                    <td>
                        <div class='form-check font-size-16'>
                            <input class='form-check-input' type='checkbox' id='orderidcheck01'>
                            <label class='form-check-label' for='orderidcheck01'></label>
                        </div>
                    </td>
                    <td><a href='javascript: void(0);' class='text-body fw-bold'>" .$data['id'] . "</a> </td>
                    <td>" .$data['name'] . "</td>
                    <td>" .$data['email'] . "</td>
                    <td>" .$data['username'] . "</td>
                    <td>" .$data['mobile'] . "</td>
                    <td>" .$data['phone'] . " </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-primary btn-sm btn-rounded' data-bs-toggle'modal' data-bs-target='.orderdetailsModal'>
                            View Details
                        </button>
                    </td>
                    <td>
                        <div class='d-flex gap-3'>
                            <a href='javascript:void(0);' class='text-success edit-user' data-bs-toggle='modal' data-bs-target='#updateModal' data-bs-user-id='". $data['id'] ."' data-bs-user-name= '" . $data['name'] . "'  data-bs-user-email= '" . $data['email'] . "'  data-bs-user-username='" . $data['username'] . "' data-bs-user-mobile= '" . $data['mobile'] . "' data-bs-user-phone= '" . $data['phone'] . "' ><i class='mdi mdi-pencil font-size-18'></i></a>
                            <a href='javascript:void(0);' class='text-danger delete-user' data-user-id=". $data['id'] ."><i class='mdi mdi-delete font-size-18'></i></a>
                        </div>
                    </td>
                </tr>";
        }

    }

}
?>
