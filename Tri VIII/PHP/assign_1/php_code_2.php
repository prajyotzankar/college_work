<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn_obj = new mysqli($servername, $username, $password, "myDatabase");
    
    if($conn_obj->connect_error)
        die("Connection Failed : " . $conn_obj->connect_error);

    //mysql_select_db($conn_obj, "myDatabase") or die(mysql_error());

    $sql = "CREATE TABLE studentInfo (id INT PRIMARY KEY, 
        rollNo INT, studentName varchar(255), course 
        varchar(255), class varchar(255), division varchar(255))";

    $sql = "CREATE TABLE subject (id INT primary key, subCode 
        varchar(255), subName varchar(255), course varchar(255),
        class varchar(255))";

    $sql = "CREATE TABLE exam (id INT primary key, examType varchar(255),
        scoreOutOf INT NOT NULL)";


    if($conn_obj->query($sql) === TRUE)
        echo "Queries execute successfully ";
    else
        echo "Error executing queries : " . $conn_obj->error;

    

?>