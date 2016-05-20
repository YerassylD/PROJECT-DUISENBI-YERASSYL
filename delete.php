<?php
session_start();
$con = new mysqli("localhost","Yerassyl","87053163124","SF");
$con ->query("SET NAMES utf8");
$id = $_REQUEST["id"];
$query = "DELETE FROM `Add_photo` WHERE `id`='$id'";

mysqli_query($con, $query);
header("location: delp.php");
$con->close();

?>