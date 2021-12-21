<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn_obj = new mysqli($servername, $username, $password, "myDatabase");

    if($conn_obj->connect_error)
        die("Connection Failed : " . $conn_obj->connect_error);

    $sql = "SELECT * FROM studentInfo WHERE rollNo = 5";
    $result = $conn_obj->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            foreach ($row as $item){
                echo "$item ";
            }
            echo "<br>";
        }
            
    }
?>