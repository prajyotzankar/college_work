<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('studentInfoPage.php');
		
	}
	include('connection.php');
	

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn_obj = new mysqli($servername, $username, $password, "myDatabase");

    if($conn_obj->connect_error)
        die("Connection Failed : " . $conn_obj->connect_error);

    $sql = "SELECT * FROM studentInfo WHERE studentName = '".$_COOKIE."'";
    $result = $conn_obj->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            foreach ($row as $item){
                echo "$item ";
            }
            echo "<br>";
        }
            
    }
    else    
        echo "Row not found '".$_COOKIE."' ";
?>

