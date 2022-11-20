<?php


$name = $_POST["name"];
$email = $_POST["email"];
$subject = "subject"." - ".$_POST["name"];
$contact = $_POST["contact"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "website.inquiry21@gmail.com";
$mail->Password = "w3bp@ss21";

$mail->setFrom($email, $name);
$mail->addAddress("website.inquiry21@gmail.com", "Website Inquiry");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");