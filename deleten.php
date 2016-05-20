<?php
$con = new mysqli("localhost","Yerassyl","87053163124","SF");
$id = $_REQUEST["id"];
$query = "DELETE FROM `news` WHERE `id`='$id'";

mysqli_query($con, $query);
header("location: delete_news.php");
$con->close();

?>