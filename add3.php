<?php
session_start();
 $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
 if($conn->connect_error){
 	die($conn->connect_error);
 }
$photo = $_REQUEST['photo'];
$title = $_REQUEST['title'];
$subhead = $_REQUEST['subhead'];
$parag = $_REQUEST['paragraph'];
$a = 0;
if(!empty($photo)){
	if(!empty($title)){
		if(!empty($subhead)){
			if(!empty($parag)){
				$a = 1;
			}	
		}
	}
}
if($a==1){
		$sql = "INSERT INTO `news`(`photo`, `title`, `subhead`, `para`) VALUES ('".$photo."','".$title."','".$subhead."','".$parag."')";
		mysqli_query($conn, $sql);
		header("location: home.php");
}
else{
	echo "error.<a href='add_news.php'>Back to Main</a>"; 
}
$conn->close();
?>