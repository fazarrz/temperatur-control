<?php


class Database{

    
    public function databases()
    {

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_modulmcu";


        $connection = mysqli_connect($host, $user, $pass, $db);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            return $connection;
        }
    }
    
}


?>