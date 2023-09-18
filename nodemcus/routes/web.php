<?php

    include(__DIR__ . '/../app/controller/controller.php');

    $controller = new Controller();

    $actionRoute = $_GET['action'];

    if($actionRoute == 'update'){

        $switchAction = $_GET['switch'];
        $dataValue = $_GET['value'];

        $controller->updateData($switchAction, $dataValue);

        
    }



?> 