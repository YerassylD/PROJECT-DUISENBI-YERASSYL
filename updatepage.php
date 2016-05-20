<?php
session_start();
$con = new mysqli("localhost","Yerassyl","87053163124","SF");
$con ->query("SET NAMES utf8");
// $id	= $_REQUEST["id"];
$email = $_SESSION["email"];
$username = $_REQUEST["username"];
// $photo = $_REQUEST["photo"];
$surname = $_REQUEST["surname"];
$birthdate = $_REQUEST["birthdate"];
$monthdate = $_REQUEST["monthdate"];
$yeardate = $_REQUEST["yeardate"];
$password = $_REQUEST["password"];
	$query = "UPDATE `SF` SET `Username`='$username',`Surname`='$surname',`Birthdate`=$birthdate,`Monthdate`='$monthdate',`Yeardate`=$yeardate,`Password`='$password' WHERE Email = '$email'";
	mysqli_query($con, $query);
	 header("location: user.php");
	$con->close();
?>