<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn_obj = new mysqli($servername, $username, $password, "myDatabase");

    if($conn_obj->connect_error)
        die("Connection Failed : " . conn_obj->connect_error);

    $sql = "INSERT INTO studentInfo VALUES (1002, 5, 'Rahul Burghate',
        'BCS', 'TY', 'B'), (1003, 21, 'Bhushan Kale', 'BCS', 'TY', 'B')";

    $sql = "ALTER TABLE studentInfo MODIFY id INT AUTO_INCREMENT";

    $sql = "INSERT INTO subject VALUES (1001, 101, 'PHP', 'BCS',
        'TY'), (1002, 102, 'JAVA', 'BCS', 'TY'), (1003, 103, 
        'WPC', 'BCS', 'TY')";

    if($conn_obj->query($sql) === TRUE)
        echo "Queries execute successfully ";
    else
        echo "Error executing queries : " . $conn_obj->error;

    $sql = "INSERT INTO exam VALUES (1001, 'End Term', 100),
        (1002, 'Mid Term', 100), (1003, 'Class Test', 20)";

    
    if($conn_obj->query($sql) === TRUE)
        echo "Queries execute successfully ";
    else
        echo "Error executing queries : " . $conn_obj->error;

?>