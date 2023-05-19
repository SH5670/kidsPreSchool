<?php

require "connection.php";

$gname = $_POST["gname"];
$gemail = $_POST["gemail"];
$gmobile = $_POST["gmobile"];
$cname = $_POST["cname"];
$age = $_POST["agegroup"];
$time = $_POST["time"];
$message = $_POST["message"];

Database::iud("INSERT INTO `visitors` (`guardianName`,`guardianEmail`,`guardianMobile`,`childName`,`age`,`date_time`,`message`,`status_id`) 
VALUES ('".$gname."','".$gemail."','".$gmobile."','".$cname."','".$age."','".$time."','".$message."','1')");

echo("Success");


?>