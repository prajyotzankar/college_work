<html>
    <head>
        <title>Student Login</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            Enter User ID:<input type="text" name="userID" ><br><br>
            Enter Password: <input type="text" name="userPassword"><br><br>
            <button>Submit</button><br><br>
        </form>
    </body>
</html>

<?php
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


    require 'PHPMailer/Exception.php'; 
    require 'PHPMailer/PHPMailer.php'; 
    require 'PHPMailer/SMTP.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDatabase";
    $conn_obj = new mysqli($servername, $username, $password, $dbname);

    if($conn_obj->connect_error){
        die("Connection Failed : " . $conn_obj->connect_error);
    }

    if (!empty($_POST)){
        $userID =$_POST ["userID"];
        $userPassword =$_POST ["userPassword"];
        if($userID == $userPassword){
            $sql = "SELECT * FROM studentRegistration WHERE studentID = '$userID'";
            
            $result = $conn_obj->query($sql);

            if( $result !== false && $result->num_rows > 0 ){

                $studentInfo = $result->fetch_assoc();
                $mail = new PHPMailer; 
                $mail->From = '1132190399@mitwpu.edu.in'; 
                $mail->FromName = 'Admin' ;  

                $mail->isSMTP();                      // Set mailer to use SMTP 
                $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
                $mail->SMTPAuth = true;               // Enable SMTP authentication 
                $mail->Username = '1132190399@mitwpu.edu.in';   // SMTP username 
                $mail->Password = 'password';   // SMTP password 
                $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
                $mail->Port = 587;                    // TCP port to connect to 
                $mail->addAddress($studentInfo["studentEmail"], $studentInfo["studentName"]); 

                //Provide file path and name of the attachments 
                $mail->addAttachment("file.txt", "File.txt");    
                $mail->addAttachment("image/profile.png"); 

                //Filename is optional
                $body = "<br> Name : " .$studentInfo['studentName'].
                        "<br> Course : ".$studentInfo['studentCourse'].
                        "<br> Class : ".$studentInfo['studentClass'].
                        "<br> DOB : ".$studentInfo['studentDOB'].
                        "<br> Mobile : ".$studentInfo['studentMobile']
                        ;
                $mail->isHTML(true); 
                $mail->Subject = "Login Successful"; 
                $mail->Body = $body; 
                $mail->AltBody = "This is the plain text version of the email content"; 
                if(!$mail->send()) 
                    echo "Mailer Error: " . $mail->ErrorInfo;
                else 
                    echo "Message has been sent successfully"; 
            }
            else{
                echo "Wrong Student ID/Password <br>";
            }
        }
        else{
            echo "Wrong Student ID/Password <br>";
        }
    }

?>