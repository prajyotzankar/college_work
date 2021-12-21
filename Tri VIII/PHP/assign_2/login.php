<?php
	if(isset($_POST['login'])){
 
		session_start();
		include('connection.php');
 
		$username=$_POST['username'];
		$password=$_POST['password'];
 
		$sql = "SELECT * FROM logininfo";
        $result = $conn_obj->query($sql);

		if ($result->num_rows == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:index.php');
		}
		else{
            foreach($result as $user){
                if(($user["username"] == $username) &&
                    ($user["password"] == $password)){
                        if (isset($_POST['remember'])){
                            //set up cookie
                            setcookie("user", $user['username'], time() + (86400 * 30)); 
                            setcookie("pass", $user['password'], time() + (86400 * 30)); 
                        }

                        $_SESSION['id']=$user['username'];
			            header('location:studentInfoPage.php');
                        
                }

            }
			
		}
	}
	else{
		header('location:loginPage.php');
		$_SESSION['message']="Please Login!";
	}
?>