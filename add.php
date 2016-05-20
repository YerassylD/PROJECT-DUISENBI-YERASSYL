<?php
session_start();
 $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
 if($conn->connect_error){
 	die($conn->connect_error);
 }
$id = $_REQUEST['id'];
$photo = $_REQUEST['photo'];
$comment = $_REQUEST['comment'];
$email = $_SESSION['email'];
$username = $_REQUEST['username'];
$a = 0;
if(!empty($photo)){
	if(!empty($comment)){
				$a = 1;
		}
	}
if($a==1){
	if($email==$_SESSION["email"]){
		$sql = "INSERT INTO `Add_photo`(`photo`, `comment`, `Email`, `Username`) VALUES ('".$photo."','".$comment."','".$email."','".$username."')";
		mysqli_query($conn, $sql);
	header("location: user.php");
}
}
else{
	echo "error.<a href='add_photo.php'>Back to Main</a>"; 
}
$conn->close();
?>