<?php
    mysqli_report(MYSQLI_REPORT_STRICT);

    try{
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn_obj = new mysqli($servername, $username, 
            $password, "myDatabase");
    }
    catch(Exception $error){
        echo "Service unavailable";
        echo "Error Message : " . $error->message;
        exit;
    }

?>