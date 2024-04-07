<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail ->isSMTP();
$mail->SMTPAuth = true; 

$mail ->Host = "smtp.gmail.com";
$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail ->Port = 587;

$mail->Username = "andersknudsen98@gmail.com";
$mail->Password = "ujfm nilt byjh cymf";

$mail->setFrom($email,$name);
$mail->addAddress("andersknudsen98@gmail.com", "anders");

$mail ->Body = $message;

$mail->send();

echo "email sent";

?>