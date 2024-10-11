<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(!empty($_POST)&&!empty($_POST['fname'])&&!empty($_POST['fcomments'])&&!empty($_POST['femail'])&&!empty($_POST['rating'])){
    $name = $_POST['fname'];
    $comments = $_POST['fcomments'];
    $email = $_POST['femail'];
    $rating = $_POST['rating'];

    $mail = new PHPMailer();

    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "ssl://mail.adm.tools";    // SMTP server example
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;               // enable SMTP authentication
    $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "admin@dm-prof.com.ua";            // SMTP account username example
    $mail->Password   = "!^.)Ai}J';XA8YC";            // SMTP account password example

    // Content
    $mail->setFrom('admin@dm-prof.com.ua');   
    $mail->addAddress('dm-prof@outlook.com');

    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'Mail from page';
    $mail->Body = 'Name: ' . $name . '<br>' . 'Comment: ' . $comments . '<br>' . 'Email: ' . $email . '<br>' . 'Rating: ' . $rating;
    
    $mail->send();
}
?>