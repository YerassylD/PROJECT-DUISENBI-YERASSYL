<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Photo</title>
<style type="text/css">
.all{
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
  background-color: transparent;
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
form input[type="text"] {
  position: absolute;
  width: 100px;
  border: 1px solid #ccc;
  border-radius: 20px;
  font-size: 14px;
  background-color: #efefef;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 3px 25px 3px 75px;
  height:20px;
  float: right;
  margin-bottom: 9px;
  right: 50px;
  top:14px;
  color: white;
  outline: none;

}

form input[type="text"]:focus {
  width: 100px;
  background-color: white;
  color:black;
}
.main{
  border:1px solid lightgrey;
  border-radius: 1px;
  position: absolute;
  margin-top: -250px;
  left:0px;
  width:100%;
  height: auto;
  background-color:transparent;
}
.menu2{
    position: absolute;
    float: right;
    width: 35%;
    right: 0px;
}
.menu2 li{
    position: relative;
    float: right;
    margin-top: 25px;
    display: inline-block;
    margin-right: 25px;
    text-decoration: none;

}
.home a{
    text-decoration: none;
    color: navy;
    font-weight: bold;
    font-size: 17px;
}

.logout a{
    text-decoration: none;
    font-weight: bold;
    font-size: 17px;
}
.logout a:hover{
	text-decoration: none;
}
.back a{
    text-decoration: none;
    font-weight: bold;
    font-size: 17px;
}
.back a:hover{
	text-decoration: none;
}
.close{
	position: relative;
}
.gallery{
	position: relative;
	display: inline-block;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main1.css">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
<body>
    <?php
    $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
    
            $id=$_REQUEST['id'];
    ?>
    <div class="all">
    <div class="up">
        <nav class="menu">
        <ul class="clearfix">
            <li class="logo"><a href="home.html"><img src="sdufaces.png" width="130px" height="40px"></a></li>
        </ul>
        </nav>
        <nav class="menu2">
            <ul class="rights">
                <li class="logout"><a href="home.php">LOGOUT</a></li>
                <li class="back"><a href="user.php">BACK</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="profile-photo">
            <?php
            $query = "SELECT * FROM Add_photo ORDER BY id";
            $result = mysqli_query($conn, $query);
            $num = $result->num_rows;
            for ($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
            ?>

        <div class="col-xs-12 col-sn-4 col-nd-3 col-lg-3" style="display:inline-block;">


                <ul class="thumbnails">
                    <li class="span3" style="display:inline-block;">
                    	<a class="close" href="delete.php?id= <?= $row['id']?>"><img src="close.png" width="30px;" height="30px;"></a>
                        <a class="thumbnail" rel="lightbox[group]" href=<?= $row["photo"]?>>
                        <img class="group1" src=<?= $row["photo"]?> title="Image Title" /></a>
                    </li> <!--end thumb -->
                </ul><!--end thumbnails -->
            </div> <!-- /container -->
                <?php
            }
            ?>
        </div>
    </div>
    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));

            // Colorbox Call

            $(document).ready(function(){
                $("[rel^='lightbox']").prettyPhoto();
            });
        </script>
</body>
</html>