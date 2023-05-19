<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

    $cpw = $_POST["cpw"];
    $newpw1 = $_POST["npw1"];
    $newpw2 = $_POST["npw2"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE id='" . $_POST["id"] . "'");
    $admin_data = $admin_rs->fetch_assoc();
  
    if (empty($cpw)) {
        echo ("Please enter Current Password.");
    } else if ($admin_data["password"] != $cpw) {
        echo ("Please enter your Old Password.");
    } else if (empty($newpw1)) {
        echo ("Please enter New Password.");
    } else if (strlen($newpw1) < 5 || strlen($newpw1) > 20) {
        echo ("Pasword must have between 5-20 characters.");
    } else if (empty($newpw2)) {
        echo ("Please enter New Password Again.");
    } else if (strlen($newpw2) < 5 || strlen($newpw1) > 20) {
        echo ("Pasword must have between 5-20 characters.");
    }else if ($newpw1 != $newpw2) {
        echo ("Passwords does not match.");
    } else {
        Database::iud("UPDATE `admin` SET password='" . $newpw1 . "' WHERE id ='" . $_POST["id"] . "'");
        echo("Success");
    }
}
