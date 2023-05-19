<?php
session_start();

if (isset($_SESSION["a"]) & isset($_POST["id"])) {
    require "../connection.php";

    $user = $_POST["user"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["pw"];

    if (empty($user)) {
        echo ("Please enter User Name.");
    } else if (empty($name)) {
        echo ("Please enter Name.");
    } else if (empty($email)) {
        echo ("Please enter your Email.");
    } else if (strlen($email) > 100) {
        echo ("Email must have less than 100 characters.");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ("Invalid Email !!!");
    } else if (empty($mobile)) {
        echo ("Please enter Mobile.");
    } else if (empty($password)) {
        echo ("Please enter your password.");
    } else if (strlen($password) < 5 || strlen($password) > 20) {
        echo ("Pasword must have between 5-20 characters.");
    } else {
        Database::iud("UPDATE  `admin` SET userName='".$user."',name='".$name."',
        email='".$email."',mobile='".$mobile."',password='".$user."' WHERE id='".$_POST["id"]."'");

        echo ("Success");
    }
}else{
    echo("Error");

}
