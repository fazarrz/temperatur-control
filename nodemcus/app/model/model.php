<?php

include(__DIR__ . '/../../database/database.php');

class Model {


    public function __construct() {
        
        $this->db = new Database();
        $this->connection = $this->db->databases();


    }

    public function showJSON(){

        $sql = "SELECT led1, led2, led3 FROM tbl_mcu";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            $dataJSON =  json_encode($row);

            return $dataJSON;
        

        } else {
            echo "0 results"; 
        }
    
    }

    public function showData()
    {
        $sql = "SELECT led1, led2, led3 FROM tbl_mcu";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            return $row;
        

        } else {
            echo "0 results"; 
        }
    }
    
    public function updateJSON($switchAction, $dataValue){
        
        $sql = "UPDATE `tbl_mcu` SET `$switchAction` = '$dataValue' WHERE `id` = 1";

        if (mysqli_query($this->connection, $sql)) {

            echo "Record updated successfully";

        } else {

            echo "Error updating record: " . mysqli_error($this->connection);

        }
        
    }

}


?>