<?php

require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
$gname = $_POST["gname"];
$gemail = $_POST["gemail"];
$gmobile = $_POST["gmobile"];
$cname = $_POST["cname"];
$age = $_POST["agegroup"];
$time = $_POST["time"];
$message = $_POST["message"];

Database::iud("INSERT INTO `visitors` (`guardianName`,`guardianEmail`,`guardianMobile`,`childName`,`age`,`date_time`,`message`,`status_id`) 
VALUES ('".$gname."','".$gemail."','".$gmobile."','".$cname."','".$age."','".$time."','".$message."','1')");

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'supunsupun5670@gmail.com';
$mail->Password = 'jybyfgzwzopinjaw';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('supunsupun5670@gmail.com', 'Schedule a Metting');
$mail->addReplyTo('supunsupun5670@gmail.com', 'Schedule a Metting');
$mail->addAddress($gemail);
$mail->isHTML(true);
$mail->Subject = 'Kids PreSchool Enrollment Program';
$bodyContent = '<h1 style="color:green">Your have scheduled a meeting. We will inform you later</h1>';
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo 'Email sending failed';
} else {
    echo 'Success';
}

?>