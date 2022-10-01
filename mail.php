<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "umangpathakp@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Clicker+Script&family=Poppins:wght@200;300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thankyou for writting to me, i will get back to you AS SOON AS POSSIBLE!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body> 
</html>

';

?>