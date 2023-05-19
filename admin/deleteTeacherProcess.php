<?php
session_start();
if(isset($_SESSION["a"])){

    require "../connection.php";
    $id = $_GET["id"];

    Database::iud("DELETE FROM `teachers` WHERE id = '".$id."'");

    echo ("Success");

}else{
    echo("Error");
}



?>