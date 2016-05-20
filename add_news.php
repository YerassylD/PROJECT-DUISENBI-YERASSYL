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
		height:200px;
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
	input[type="submit"]{
		position: absolute;
		top:199px;
		left: 8px;
	}
	textarea{
		position: absolute;
		top:139px;
		left:100px;
	}
</style>
</head>

<body>
<a href="admin.php">Back</a>
	<form action="add3.php">
		Photo: <input type="file" name="photo"></br>
		Title: <input type="text" name="title"></br>
		Subheading: <input type="text" name="subhead"></br>
		Paragraph: <textarea name="paragraph"></textarea></br>
		<input type="submit">
	</form>
</body>
</html>