<?php
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
?>
<?php
$cookie_name = "class";
$cookie_expire = time()+60*60*24*2;
$cookie_value = "BSC1";
if($birth>1990&&$birth<1992){
    setcookie($cookie_name,$cookie_value,$cookie_expire);
    if(isset($cookie_name))
    {
        echo "<br>Cookie with name $cookie_name with value $cookie_value is set..//";
    }
    else
    {
        echo "<br>Cookie $cookie_name is not set";
    }
}
else
{
    echo "<br>Birthyear is above 1992 so cant set cookie $cookie_name";
}
?>