<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];

    if (empty($name)) {
        echo ("Please enter Name.");
    } else if (empty($email)) {
        echo ("Please enter your Email.");
    } else if (strlen($email) > 100) {
        echo ("Email must have less than 100 characters.");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ("Invalid Email !!!");
    } else if (empty($mobile)) {
        echo ("Please enter Mobile.");
    }  else {
        Database::iud("INSERT INTO  `teachers` (`tname`,`email`,`mobile`,`gender_id`) 
VALUES ('" . $name . "','" . $email . "','" . $mobile . "','".$gender."')");

        echo ("Success");
    }
}
