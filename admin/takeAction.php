<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";
require "../SMTP.php";
require "../PHPMailer.php";
require "../Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


    Database::iud("UPDATE `enrollments` SET message='".$_POST["message"]."',enrollStatus_id='".$_POST["status"]."'");
    
if($_POST["status"]==1){

    $enroll_rs = Database::search("SELECT * FROM `enrollments` WHERE eid='".$_POST["id"]."'");
    $enroll_data = $enroll_rs->fetch_assoc();

    Database::iud("INSERT INTO  `parent` (`fatherName`,`motherName`,`email`,`mobile`,`address`) 
    VALUES ('" . $enroll_data["fatherName"] . "','" . $enroll_data["motherName"] . "',
    '" . $enroll_data["email"] . "','" . $enroll_data["mobile"] . "','" . $enroll_data["address"] . "')");

    $p_rs = Database::search("SELECT * FROM `parent` WHERE email='" . $enroll_data["email"] . "'");
    $p_data = $p_rs->fetch_assoc();

    Database::iud("INSERT INTO  `student` (`sname`,`gender_id`,`parent_id`) 
    VALUES ('" . $enroll_data["childName"] . "','" . $enroll_data["gender_id"] . "','" . $p_data["pid"] . "')");


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
$mail->addAddress($enroll_data["email"]);
$mail->isHTML(true);
$mail->Subject = 'Kids PreSchool Enrollment Program';
$bodyContent = '<h1 style="color:green">We are happy to inform you that your child has been selected to our Kids PreSchool. We will contact you later.</h1>';
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo 'Email sending failed';
} else {
    echo 'Success';
}



}else{

    echo("Error");
}
}
