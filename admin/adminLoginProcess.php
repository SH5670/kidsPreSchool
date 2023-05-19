<?php
session_start();
require "../connection.php";

$user = $_POST["user"];
$password = $_POST["pw"];


if (empty($user)) {
    echo ("Please enter your UserName.");
}  else if (empty($password)){
    echo ("Please enter your password.");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Pasword must have between 5-20 characters.");
} else {
    $rs =  Database::search("SELECT * FROM `admin` WHERE `userName` = '".$user."' AND `password` = '".$password."'");
    $n = $rs->num_rows;

    if ($n == 1) {

        echo ("Success");
        
        $d = $rs->fetch_assoc();
        $_SESSION["a"] = $d;

    }else{
        echo("Invalid Username or Password");
    }
}
