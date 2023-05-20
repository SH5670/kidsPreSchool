<?php

require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


$fname = $_POST["fathername"];
$mname = $_POST["mothername"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$cname = $_POST["cname"];
$gender = $_POST["gender"];
$eprogram = $_POST["enrollprogram"];


Database::iud("INSERT INTO  `enrollments` (`fatherName`,`motherName`,`mobile`,`email`,`address`,`childName`,`gender_id`,`classType_id`,`enrollStatus_id`) 
VALUES ('".$fname."','".$mname."','".$mobile."','".$email."','".$address."','".$cname."','".$gender."','".$eprogram."','1')");


$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'supunsupun5670@gmail.com';
$mail->Password = 'jybyfgzwzopinjaw';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('supunsupun5670@gmail.com', 'Enroll Details Saved');
$mail->addReplyTo('supunsupun5670@gmail.com', 'Enroll Details Saved');
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = 'Kids PreSchool Enrollment Program';
$bodyContent = '<h1 style="color:green">Your application saved successfully. We will inform you later</h1>';
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo 'Email sending failed';
} else {
    echo 'Success';
}
?>

   