<?php
session_start();
if (isset($_SESSION["a"])) {

    require "../connection.php";
    $id = $_GET["id"];

    $p_rs = Database::search("SELECT * FROM `student` WHERE sid='" . $id . "'");
    $p_data = $p_rs->fetch_assoc();

    Database::iud("DELETE FROM `student` WHERE sid = '" . $id . "'");
    Database::iud("DELETE FROM `parent` WHERE pid='" . $p_data["parent_id"] . "'");

    echo ("Success");
} else {
    echo ("Error");
}
