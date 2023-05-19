<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

Database::iud("UPDATE `admin` SET name='".$_POST["name"]."',
email='".$_POST["email"]."',mobile='".$_POST["mobile"]."' WHERE id='".$_POST["id"]."'");

echo("Success");

}else{
    echo("Please Login First.");
}