<?php
 $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
 if($conn->connect_error){
 	die($conn->connect_error);
 }
$photo = $_REQUEST['photo'];
$comment = $_REQUEST['comment'];
$email = $_REQUEST['Email'];
$a = 0;
if(!empty($photo)){
	if(!empty($comment)){
				$a = 1;
		}
	}
if($a==1){
	if($email==$_REQUEST["Email"]){
		$sql = "INSERT INTO `SF`(`photo`) VALUES ('".$photo."')";
		mysqli_query($conn, $sql);
		header("location: user.php");
	}
}
else{
	echo "error.<a href='add_photo.php'>Back to Main</a>"; 
}
$conn->close();
?>