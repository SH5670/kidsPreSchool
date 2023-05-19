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
    $gender = $_POST["gender"];

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
        Database::iud("INSERT INTO  `parent` (`fatherName`,`motherName`,`email`,`mobile`,`address`) 
        VALUES ('" . $fname . "','" . $mname . "','" . $email . "','" . $mobile . "','" . $address . "')");

        $p_rs = Database::search("SELECT * FROM `parent` WHERE email='" . $email . "'");
        $p_data = $p_rs->fetch_assoc();

        Database::iud("INSERT INTO  `student` (`sname`,`gender_id`,`parent_id`) 
        VALUES ('" . $sname . "','" . $gender . "','" . $p_data["pid"] . "')");

        echo ("Success");
    }
}
