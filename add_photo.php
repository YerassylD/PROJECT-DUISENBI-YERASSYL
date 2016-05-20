<!DOCTYPE html>
<html>
<head>
	<title>Add Photo</title>
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
		left: 80px;
		top:0px;
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

	.comment{
		position: absolute;
		margin-top: 140px;
		margin-left: 20px;
	}
	input[type="submit"]{
		position: absolute;
		margin-top: 85px;
		margin-left: 20px;
	}
</style>
</head>

<body>
<a href="user.php">Back</a>
	<form enctype="multipart/form-data" action="add.php">
		Email: <input type="text" name="email"></br>
		Username: <input type="text" name="username"></br>
		Photo: <input type="file" name="photo"></br>
		Comment: <textarea class="comment" name="comment">Enter comment...</textarea>
		<input type="submit">
	</form>
</body>
</html>