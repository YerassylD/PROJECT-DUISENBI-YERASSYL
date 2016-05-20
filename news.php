<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
<style>
*{
	background-color: #efefef;
}
.up{
	border:1px solid lightgrey;
	background-color: white;
	position: absolute;
	top:0px;
	left: 0px;
	width: 100%;
	height:75px;
}
.menu {
    width:60%;
    left: 50px;
    z-index: 10;
    position: relative;
    top: 8px;
	float:left;
	background-color: white;
}
.menu li {
    list-style:none;
    z-index: 11;
}
.menu img {
	position: absolute;
	top:11px;
}
		 
.menu a:hover {
	color:white;
}

.main{
	border:1px solid lightgrey;
	border-radius: 1px;
	position: absolute;
	top:75px;
	left:0px;
	width:100%;
	height: auto;
	background-color:transparent;
}
.main_border{
	position: absolute;
	width: 50%;
	height: 670px;
	top:50px;
	left: 300px;
	border:1px solid lightgrey;
	border-radius: 3px;
	background-color: white;
	box-shadow: 1px grey;
}
.name_person{
	background-color: white;
	position: absolute;
	height: 60px;
	width:100%;
	border-bottom:1px solid lightgrey;
	top:0px;
}
.name_person a{
	background-color: white;
}
figure.profile-img {
    border: 2px #efefef solid;
    border-radius: 50%;
    top:-5px;
    box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3);
    height: 34px;
  	left: -25px;
  	position: absolute;
  	width: 34px;
  	z-index: 3;
  	background: transparent;
}
.username{
	text-decoration: none;
	position: absolute;
	color: darkblue;
	font-size: 18px;
	top:19px;	
	left: 70px;

}
.time{
	text-decoration: none;
	position: absolute;
	color: darkgrey;
	font-size: 18px;
	top:19px;	
	right: 20px;
}
.time:hover{
	color: grey;
	cursor: pointer;
}
.person_photo{
	border-bottom: 1px solid lightgrey;
	position: absolute;
	top:60px;
	left: 0px;
	width: 100%;
	height:auto;
}
.likes p{
	position: absolute;
	top:435px;
	left: 40px;
	width: 100%;
	height:20px;
	text-decoration: none;
	font-weight: bold;
	font-size: 18px;
	color:#666666;
	background-color: transparent;
}
.comments{
	position: absolute;
	border-bottom: 2px solid #efefef;
	width: 90%;
	height: 200px;
	top:455px;
	left: 25px;
	background-color: transparent;
}
.comments p{
	position: absolute;
	margin-top: 140px;
	font-size: 20px;
	background-color: white;
}
.ss a{
	position: absolute;
	border:2px solid grey;
	border-radius: 5px;
	text-decoration: none;
	padding:5px;
	width: 70px;
	float: right;
	right: -390px;
	color: black;
	background-color: white
}
.ss a:hover{
	color:darkblue;
	border:2px solid darkblue;
}
</style>
</head>
<body>
<div class="all">
	<div class="up">
		<nav class="menu">
        <ul class="clearfix">
            <li class="logo"><a href="home.html"><img src="sdufaces.png" width="130px" height="40px"></a></li>
            <form>
            	<div class="ss"><a href="search.php">Search...</a></div>
			</form>
		</ul>
		</nav>
	</div>
	
	<div class="main">
		<div class="main_border">
			<?php
			$conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
            $query = "SELECT * FROM `Add_photo` ORDER BY `id`";
            $result = mysqli_query($conn, $query);
            $num = $result->num_rows;
            for ($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
			?>
			<div class="name_person">
				<figure class="profile-img"><a href="#"><img src="profile-picture.png" width="34px" height="34px"></a></figure> <a class="username" href="#"><?php echo $row["Username"]?></a></p>
			</div>
			<div class="person_photo">
				<img src=<?php echo $row["photo"]?> width="600px" height="500px" style="margin-left:5px">
			</div>
			<div class="comments">
				<p><?php echo $row["comment"]?></p>
			</div>
			<?php
        	}
     		?>
		</div>
	</div>
	 
</div>
</body>
</html>