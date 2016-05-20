<?php
session_start();
$conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
if(isset($_REQUEST["email"])){
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];
	$query1 = "SELECT * FROM SF WHERE (email ='$email' AND password='$password')";
	$result = mysqli_query($conn, $query1);
	$num = mysqli_num_rows($result);
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			if ($row['Email']=="admin@gmail.com") {
				$_SESSION['email'] = $row['Email'];
				header("location:admin.php");
			}
			else{
				$_SESSION['email'] = $row['Email'];
				header("location:user.php");
			}
		}

	}
}

// 	if($num != 0){

// 		$_SESSION['email'] = $email;
// 		if($email="admin@gmail.com"){
//     		header("location:admin.php");
// 		}else{
// 	    	header("location:user.php");
// 		}
// 	}
// 	else{
// 	    header("location: index4.php");
// 	}
// }
// $conn.close();
?>