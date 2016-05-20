<?php
session_start();
$con = new mysqli("localhost","Yerassyl","87053163124","SF");
$con ->query("SET NAMES utf8");
$photo = $_REQUEST["photo"];
$title = $_REQUEST["title"];
$subhead = $_REQUEST["subhead"];
$parag = $_REQUEST["paragraph"];
	$query = "UPDATE `news` SET `title`='$title',`subhead`='$subhead',`para`='$parag',`photo`='$photo' WHERE `id` = 2";
	mysqli_query($con, $query);
	header("location: editnews.php");
?>