<?php

    include(__DIR__.'/../../app/controller/controller.php');


    $dataControllerRead = new Controller();
    $dataDB = $dataControllerRead->readData();

    foreach ($dataDB as $value) {
        
        $dataValues[] = $value;
    }

    echo $dataValues[0], $dataValues[1], $dataValues[2];

    if ($dataValues[0] == 1) {

        $switchValue = "OFF";

    }else if($dataValues[0] == 0){
            
        $switchValue = "ON";
    }

    if ($dataValues[1] == 1) {
            
        $switchValue2 = "OFF";

    }else if ($dataValues[1] == 0){
                
        $switchValue2 = "ON";
    }

    if ($dataValues[2] == 1) {
                
        $switchValue3 = "OFF";

    }else if ($dataValues[2] == 0){
                    
         $switchValue3 = "ON";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <section class="section-class">
        <h1>SWITCH LED IN DATABASE</h1>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>Switch 1</h1>
                </div>
                <div class="card-body">
                    <?php       
                        if ($dataValues[0] == 1) {

                            echo "<div class='imgled1'>
                                    <img src='../img/lighton.jpg'>
                                </div>";

                        }else if ($dataValues[0] == 0){

                            echo "<div class='imgled1'>
                                    <img src='../img/lightoff.jpg'>
                                </div>";

                        }
                    ?>
                </div>
                <div class="card-footer">
                    <input type="button" value="<?php echo $switchValue?>" id="myButton" onclick="store(1)">
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1>Switch 2</h1>
                </div>
                <div class="card-body">
                    <?php       
                        if ($dataValues[1] == 1) {

                            echo "<div class='imgled1'>
                                    <img src='../img/lighton.jpg'>
                                </div>";

                        }else if ($dataValues[1] == 0){

                            echo "<div class='imgled1'>
                                    <img src='../img/lightoff.jpg'>
                                </div>";

                        }
                    ?>
                </div>
                <div class="card-footer">
                    <input type="button" value="<?php echo $switchValue2?>" id="myButton2" onclick="store(2)">
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1>Switch 3</h1>
                </div>
                <div class="card-body">
                    <?php       
                        if ($dataValues[2] == 1) {

                            echo "<div class='imgled1'>
                                    <img src='../img/lighton.jpg'>
                                </div>";

                        }else if ($dataValues[2] == 0){

                            echo "<div class='imgled1'>
                                    <img src='../img/lightoff.jpg'>
                                </div>";

                        }
                    ?>
                </div>
                <div class="card-footer">
                    <input type="button" value="<?php echo $switchValue3?>" id="myButton3" onclick="store(3)">
                </div>
            </div>
        </div>
    </section>

    

    
    

    <script src="../js/index.js"></script>

</body>
</html>