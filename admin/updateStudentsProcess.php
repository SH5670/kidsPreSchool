<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $sname = $_POST["sname"];

    if (empty($fname)) {
        echo ("Please enter Name.");
    } else if (empty($mname)) {
        echo ("Please enter Name.");
    } else if (empty($email)) {
        echo ("Please enter your Email.");
    } else if (strlen($email) > 100) {
        echo ("Email must have less than 100 characters.");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ("Invalid Email !!!");
    } else if (empty($mobile)) {
        echo ("Please enter Mobile.");
    } else if (empty($address)) {
        echo ("Please enter Address.");
    } else if (empty($sname)) {
        echo ("Please enter Student's Name.");
    } else {

        Database::iud("UPDATE  `student` SET sname='" . $sname . "' WHERE sid='".$_POST["id"]."'");

$s_rs = Database::search("SELECT * FROM `student` WHERE sid='" . $_POST["id"] . "'");
        $s_data = $s_rs->fetch_assoc();

        Database::iud("UPDATE  `parent` SET fatherName='" . $fname . "',motherName='" . $mname . "',
        email='" . $email . "',mobile='" . $mobile . "',address='" . $address . "' WHERE pid='".$s_data["parent_id"]."'");

        


        echo ("Success");
    }
}
