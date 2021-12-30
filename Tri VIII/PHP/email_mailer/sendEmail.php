<html>
    <head>
        <title>Send Email</title>
    </head>
    <body>
        <form action="sendEmail.php" method="Get">
            From Name: <input type="text" name="fromName"><br>
            From Email: <input type="text" name="fromEmail"><br>
            To Name : <input type="text" name="toName"><br>
            To Email : <input type="text" name="toEmail"><br>
            Subject : <input type="text" name="subject"><br>
            Body : <input type="textarea" name="body" row="5" cols="50"><br><br>
            <input type="Submit"><br>
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
 
 
$mail = new PHPMailer; 
$mail->From = $_GET["fromEmail"]; 
$mail->FromName = $_GET["fromName"]; 

$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = '1132190399@mitwpu.edu.in';   // SMTP username 
$mail->Password = 'paaword';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
$mail->addAddress($_GET["toEmail"], $_GET["toName"]); 

//Provide file path and name of the attachments 
$mail->addAttachment("file.txt", "File.txt");    
$mail->addAttachment("image/profile.png"); 

//Filename is optional 
$mail->isHTML(true); 
$mail->Subject = $_GET["subject"]; 
$mail->Body = $_GET["body"]; 
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{ 
echo "Message has been sent successfully"; 
}