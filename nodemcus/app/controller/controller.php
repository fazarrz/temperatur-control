<?php

include(__DIR__ . '/../model/model.php');

class Controller{


    public function __construct()
    {
        
        $this->model = new Model();
    }

    public function showDataJSON()
    {
      
        $data = $this->model->showJSON();

        if ($data == 0 || $data == null) {
            
            echo "Cannot read data from database because data is null";
        }else{
            echo $data;
        }

    }

    public function readData()
    {
        
        $data = $this->model->showData();

        if ($data < 0 ) {
            
            echo "Cannot read data from database because data is null";
        }else{
            
            return $data;
        }
    }

    
    public function updateData($switchAction,$dataValue)
    {

        if ($dataValue < 0) {
    
            echo "Data Value is not valid";
            return false;

        }else{

            $this->model->updateJSON($switchAction, $dataValue);

        }
        
        header("Location: ../resources/views/index.php");
    }

    
}



?>