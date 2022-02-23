<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail System</title>
</head>
<body>
    
<?php

if(isset ($_POST['submit']))

{

$name = $_POST['name'];
$email = $_POST['mail'];


$to = 'rilwanridwan@gmail.com';
$subject = "Registration Details";
$message = '$name , with $email'.'Just logged to the family hub.';

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Family Hub <noreply@familyhub.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail($to,$subject,$message,$headers);

echo " Login Successfull";

echo " <a href='mail.php'> HOME </a> ";
    
}
else{

echo "Login Failed due to Error";

}


?>
</body>
</html>
