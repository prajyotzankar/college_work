<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo "The Following Error Occured:".$conn->connect_error;
}
else
{
    echo "Connection to $dbname Successfull..//";
    $sql = "CREATE TABLE STUDENT(
        ROLLNO INT PRIMARY KEY,
        FIRSTNAME VARCHAR(50),
        MIDDLENAME VARCHAR(50),
        LASTNAME VARCHAR(50),
        BIRTHDATE VARCHAR(50),
        PRN VARCHAR(50),
        USERID VARCHAR(50),
        PASS VARCHAR(50)
    )";
    if($conn->query($sql)===TRUE){
        echo "<br>Table Created..//";
    }
    else
    {
        echo "<br>The Following Error Occured:".$conn->error;
    }
    $conn->close();
}
?>