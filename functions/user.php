<?php

class User extends Database{

    protected function getAllUsers(){
        
        $sqlQuery = "SELECT * FROM users";
        $result = $this->connect()->query($sqlQuery);
        
        $numRows = $result->num_rows;

        if($numRows > 0)
        {

            while($row = $result->fetch_assoc()){

                $data[]  = $row;   
            
            }

            return $data;

        }

    }


}