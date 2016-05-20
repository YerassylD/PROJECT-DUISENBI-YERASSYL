<?php
session_start();
	include "conection.php";
	$Username = $_POST['username'];
	$Surname = $_POST['surname'];
	$Password = $_POST['password'];
	$Email = $_POST['email'];
	$Birthdate = $_POST['birthdate'];
	$Monthdate = $_POST['monthdate'];
	$Yeardate = $_POST['yeardate'];
	$a = 0;
if(!empty($Username)){
	if(!empty($Email)){
		if(!empty($Surname)){
			if(!empty($Surname)){
				if(!empty($Password)){
					if(preg_match('/^[1-4][0-9]{0,15}$/',$Yeardate))
					$a = 1;
				}
			}
		}
	}
}
if($a==1){
	$SESSION["email"] = $Email;
	$sql = "INSERT INTO `SF`(`ID`, `Username`, `Surname`, `Password`, `Email`, `Birthdate`, `Monthdate`, `Yeardate`) VALUES(null,'".$Username."','".$Surname."','".$Password."','".$Email."','".$Birthdate."','".$Monthdate."','".$Yeardate."')";
	mysqli_query($conn, $sql);
	header("location:index4.php");
}
else{
	echo "error.<a href='index4.php'>Back to Main</a>"; 
}
$conn->close();
 ?>
