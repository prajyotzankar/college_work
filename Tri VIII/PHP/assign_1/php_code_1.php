<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn_obj = new mysqli($servername, $username, $password);

    if($conn_obj->connect_error){
        die("Connection Failed : " . $conn_obj->connect_error);
    }
    
    $sql = "CREATE DATABASE myDatabase";

    if($conn_obj->query($sql) === TRUE)
        echo "Database created successfully";
    
    else
        echo "Error creating database : " . $conn_obj->error;
    

   
    
    $conn_obj->close();

?>