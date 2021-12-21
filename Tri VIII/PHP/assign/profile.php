<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert into table!!</title>
    </head>
    <body>
        <form action="Q2.php" method="post">
            <br>Enter Firstname: <input type="text" name="fname" id="">
            <br>Enter Middlename: <input type="text" name="mname" id="">
            <br>Enter Lastname: <input type="text" name="lname" id="">
            <br>Enter Birthyear: <input type="text" name="birthyear" id="">
            <br>Enter Rollno: <input type="text" name="roll" id="">
            <br>Enter PRN: <input type="text" name="prn" id="">
            <br><button>Submit</button>
        </form>
    </body>
</html>

<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$birth = $_POST['birthyear'];
$prn = $_POST['prn'];
$userid = "$fname.$lname";
$pass = "$fname$birth";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo "Couldn't Connect..//:".$conn->connect_error;
}
else{
    echo "Connection Successfull..//";
    $sql = "INSERT INTO STUDENT(ROLLNO,FIRSTNAME,MIDDLENAME,LASTNAME,BIRTHDATE,PRN,USERID,PASS)VALUES('$roll','$fname','$mname','$lname','$birth','$prn','$userid','$pass')";
    if($conn->query($sql)===TRUE){
        echo "<br>Values Inserted in Student table..//";
    }
    else
    {
        echo "<br>The Following Error Occured:".$conn->error;
    }
    $conn->close();
}
*/
?>