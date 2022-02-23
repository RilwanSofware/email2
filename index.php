
<?php

if(isset ($_POST['submit']))

{

$name = $_POST['name'];
$email = $_POST['mail'];


$to = 'rilwanridwan@gmail.com';
$subject = "Login Details";
$message = "$name  with $email Just logged to the family hub";

$headers = 'From: Family Hub <noreply@familyhub.com>';

mail($to,$subject,$message,$headers);

echo " Login Successfull";

echo " <a href='testmail.php'> HOME </a> ";
    
}
else{

echo "";

}

?>

    <title> Mailer </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<center>

<h3 style="margin-top:70px"> Mailer </h3>

<div class="row">

<div class="col-xs-1 center-block">

    <form action="" method="POST">
    <label> Name </label>
    <br>
    <input type="text" name="name" required><br>
    <label> Email </label>
    <br>
    <input type="email" name="mail" required><br>
    <label> Password </label>
    <br>
    <input type="password" name="pass" required><br>
    
    <input type="submit" name="submit" value="Send" class="btn btn-primary"> 

    </form>

</div>

</div>
</center>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>