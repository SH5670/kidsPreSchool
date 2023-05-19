<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

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

    echo ("Success");}


}else{

    echo("Error");
}