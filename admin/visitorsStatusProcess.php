<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";
require "../SMTP.php";
require "../PHPMailer.php";
require "../Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

    Database::iud("UPDATE `visitors` SET message='" . $_POST["remarks"] . "',status_id='" . $_POST["state"] . "' WHERE id='".$_POST["id"]."'");
$visitors_rs = Database::search("SELECT * FROM `visitors` WHERE id=".$_POST["id"]."'");
$visitors_data = $visitors_rs->fetch_assco();

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yashliebe@gmail.com';
    $mail->Password = 'jybyfgzwzopinjaw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('yashliebe@gmail.com', 'Enrolling Students');
    $mail->addReplyTo('yashliebe@gmail.com', 'Enrolling Students');
    $mail->addAddress($visitors_data["guardianEmail"]);
    $mail->isHTML(true);
    $mail->Subject = 'Kids PreSchool Enrollment Program';
    $bodyContent = '<h1 style="color:green">We are happy to inform you that your child has been selected to our Kids PreSchool. We will contact you later.</h1>';
    $mail->Body    = $bodyContent;
    
    if (!$mail->send()) {
        echo 'Email sending failed';
    } else {
        echo 'Success';
    }} else {
    echo ("Error");
}

