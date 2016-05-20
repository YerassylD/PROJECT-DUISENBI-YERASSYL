<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
<style>
	form{
		border:2px solid grey;
		border-radius: 5px;
		padding: 20px;
		width: 50%;
		position: absolute;
		left: 270px;
		top: 100px;
		height:220px;
	}
	form:hover{
		border:2px solid darkblue;
		color:darkblue;
	}
	input{
		margin: 10px;
	}
	textarea{
		position: absolute;
		left: 95px;
		top:148px;
		height: 60px;
		width: 300px;
	}
	p{
		position: absolute;
		top: 70px;
	}
	a{
		position: absolute;
		top:20px;
		left: 20px;
		text-decoration: none;
		color:grey;
		font-size: 22px;
		font-weight: bold;
	}
	a:hover{
		color:darkblue;
	}	
    input[type="submit"]{
        position: absolute;
        top:220px;
        left:10px;
    }
</style>
</head>

<body>
<a href="admin.php">Back</a>
	<?php
		$con = new mysqli("localhost","Yerassyl","87053163124","SF");
		$con ->query("SET NAMES utf8");
		$id=$_REQUEST['id'];
		$query = "SELECT * FROM `news` WHERE `id`='$id'";
		$result = mysqli_query($con, $query);
			$row = mysqli_fetch_array($result);
	?>
	<form action="updatenews.php">
        Photo: <input type="file" name="photo"></br>
		Title: <input type="text" name="title"></br>
		Subheading: <input type="text" name="subhead"></br>
		Paragraph:<textarea name="paragraph"></textarea>
		<input type="submit"></br>
	</form>
</body>
</html>