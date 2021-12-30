<html>
    <head>
        <title>Student Registration</title>
    </head>

    <body>
        <form action="studentRegistration.php" method="POST">
            Student ID : <input type="text" name="studentID"><br><br>
            Name : <input type="text" name="studentName"><br><br>
            Course : <input type="text" name="studentCourse"><br><br>
            Class : <input type="text" name="studentClass"><br><br>
            DOB : <input type="text" name="studentDOB"><br><br>
            Email : <input type="text" name="studentEmail"><br><br>
            Mobile Number : <input type="text" name="studentMobile"><br><br>
            <button>Submit</button><br><br>
        </form>
    </body>
</html>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDatabase";
    $conn_obj = new mysqli($servername, $username, $password, $dbname);

    if($conn_obj->connect_error){
        die("Connection Failed : " . $conn_obj->connect_error);
    }

    if ($conn_obj->query( "DESCRIBE studentRegistration" ) === FALSE ) {
        $sql = "CREATE TABLE studentRegistration (
            studentID INT PRIMARY KEY,
            studentName VARCHAR(50),
            studentCourse VARCHAR(50),
            studentClass VARCHAR(50),
            studentDOB VARCHAR(50),
            studentEmail VARCHAR(50),
            studentMobile VARCHAR(50)
        )";
        if($conn_obj->query($sql)===TRUE){
            echo "<br>Table Created..//";
        }
        else
        {
            echo "<br>The Following Error Occured:".$conn_obj->error;
        }
    }

    if (!empty($_POST)){
        
        $studentID = $_POST["studentID"];
        $studentName = $_POST["studentName"];
        $studentCourse = $_POST["studentCourse"];
        $studentClass = $_POST["studentClass"];
        $studentDOB = $_POST["studentDOB"];
        $studentEmail = $_POST["studentEmail"];
        $studentMobile = $_POST["studentMobile"];

        $sql = "INSERT INTO studentRegistration VALUES('$studentID' , '$studentName', '$studentCourse', 
        '$studentClass', '$studentDOB', '$studentEmail', '$studentMobile')";

        if($conn_obj->query($sql)===TRUE){
            echo "<br>Student Registration Successful";
        }
        else
        {
            echo "<br>The Following Error Occured:".$conn_obj->error;
        }
    }
    
?>
