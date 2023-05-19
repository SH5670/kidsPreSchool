<?php

require "connection.php";

$fname = $_POST["fathername"];
$mname = $_POST["mothername"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$cname = $_POST["cname"];
$gender = $_POST["gender"];
$eprogram = $_POST["enrollprogram"];


Database::iud("INSERT INTO  `enrollments` (`fatherName`,`motherName`,`mobile`,`email`,`address`,`childName`,`gender_id`,`classType_id`) 
VALUES ('".$fname."','".$mname."','".$mobile."','".$email."','".$address."','".$cname."','".$gender."','".$eprogram."')");


echo("Success");
?>