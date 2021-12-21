<?php
    include_once('connection.php');

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = test_input($_POST["user_name"]);
        $password = test_input($_POST["password"]);
        $sql = "SELECT * FROM logininfo";
        $result = $conn_obj->query($sql);

        if($result->num_rows > 0){
            $flag = 0;
            foreach($result as $user){
                if(($user["username"] == $username) &&
                    ($user["password"] == $password)){
                        header("Location: studentInfoPage.php");
                        $flag = 1;
                }

            }
            if($flag == 0){
                echo "<script language='javascript'>";
                echo "alert('WRONG INFORMATION')";
                echo "</script>";
                header("Location: loginPage.php");
            }


        }
    }

?>
