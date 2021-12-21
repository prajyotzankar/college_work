<?php
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
        die("Connection Failed : " . $conn_obj->connect_error);

    else{

        echo "Connected to $dbname database..//";
        $result1 =  $conn->query("SELECT username, password FROM logininfo WHERE 
        username='".$user."' AND password='".$pass."'");
        if($result1->num_rows > 0 ){
            while($row = $result1->fetch_assoc())
                echo "<br>Welcome " .$row['username']." to the Student Dashboard..//";
                  
?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Student Dashboard!!</title>
                </head>
                <body>
                    <form action="display.php" method="post">
                        <br><a href="profile.php"><input type="submit" value="View Profile"></a>
                        <br><a href="update.php">Want to Update Details?<input type="submit" value="Click Here"></a>
                    </form>
                </body>
                </html>
<?php
        }
        else
            echo "<br>Password Is Incorrect..//";
    }
    $conn->close();
?>