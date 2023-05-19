<?php
session_start();

if (isset($_SESSION["a"])) {
    require "../connection.php";

    Database::iud("UPDATE `visitors` SET message='" . $_POST["remarks"] . "',status_id='" . $_POST["state"] . "' WHERE id='".$_POST["id"]."'");

    echo ("Success");
} else {
    echo ("Error");
}
