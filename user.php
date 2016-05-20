<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
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
  top:75px;
  left:0px;
  width:100%;
  height: auto;
  background-color:transparent;
}
.profile-info{
  position: absolute;
  border-bottom: 1px solid darkblue;
  width: 90%;
  height: 290px;
  left:60px;
}
figure.profile-img {
  border: 5px #efefef solid;
  border-radius: 50%;
  top:40px;
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3);
  height: 150px;
  left: 60px;
  position: absolute;
  width: 150px;
  z-index: 3;
  background: transparent;
}
figure.profile-img:hover {
    background: rgba(0,0,0,0.7);
}
.user{
  position: absolute;
  left:400px;
  margin-top:60px;
  color:#666666;
  background-color: transparent;
  font-size: 5px;
}
.edit{
  border: 2px solid grey;
  border-radius: 5px;
  font-weight: bold;
  position: absolute;
  margin-left: 70px;
  margin-top: 25px;
  padding: 5px;
  text-decoration: none;
  color: grey;
}
.edit:hover{
  border: 2px solid darkblue;
  color: darkblue;
  text-decoration: none;
}
.add{
  font-size: 35px;
  font-weight: bold;
  position: absolute;
  margin-left: 50px;
  margin-top: 40px;
  padding: 5px;
  text-decoration: none;
  color: grey;
}
.add:hover{
  color: darkblue;
  text-decoration: none;
}
.name_s{
  font-size: 19px;
  font-weight: bold;
  position: absolute;
  left: 395px;
  margin-top: 42px;
  padding: 5px;
  text-decoration: none;
  color: #666666;
  background-color: transparent;
}
.date{
  font-size: 19px;
  position: absolute;
  left: 595px;
  margin-top: 42px;
  padding: 5px;
  text-decoration: none;
  color: #666666;
  background-color: transparent;
}
.public{
  font-size: 19px;
  position: absolute;
  left: 400px;
  margin-top: 40px;
  padding: 5px;
  text-decoration: none;
  color: #666666;
  background-color: transparent;
}
.public a{
  font-size: 19px;
  font-weight: bold;
  text-decoration: none;
  color:#4c4c4c;
  background-color: transparent;
}
.f{
  font-size: 19px;
  position: absolute;
  left: 565px;
  margin-top: 40px;
  text-decoration: none;
  color: #666666;
  background-color: transparent;
}
.f a{
  font-size: 19px;
  font-weight: bold;
  text-decoration: none;
  color:#4c4c4c;
  background-color: transparent;
}
.follows{
  font-size: 19px;
  position: absolute;
  left: 705px;
  margin-top: 40px;
  text-decoration: none;
  color: #666666;
  background-color: transparent;
}
.follows a{
  font-size: 19px;
  font-weight: bold;
  text-decoration: none;
  color:#4c4c4c;
  background-color: transparent;
}
.profile-photo{
  position: absolute;
/*  border-bottom: 1px solid darkblue;*/
  width: 90%;
  height: auto;
  top: 300px;
  left:60px;
}
.add_p .addp{
  font-size: 18px;
  font-weight: bold;
  position: absolute;
  left: 120px;
  top: -46px;
  padding: 3px 5px 3px 5px;
  text-decoration: none;
  color: grey;
  background-color: white;
  border:2px solid grey;
  border-radius: 10px;
}
.add_p a:hover{
  background-color: white;
  color: darkblue;
  border:2px solid darkblue;
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
.add_p .delp{
  font-size: 18px;
  font-weight: bold;
  position: relative;
  float: left;
  left: 230px;
  top: -46px;
  padding: 3px 5px 3px 5px;
  text-decoration: none;
  color: grey;
  background-color: white;
  border:2px solid grey;
  border-radius: 10px;
}
.ss a{
  position: absolute;
  border:2px solid grey;
  border-radius: 5px;
  text-decoration: none;
  padding:5px;
  width: 70px;
  float: right;
  top:10px;
  right: -300px;
  color: black;
  background-color: white
}
.ss a:hover{
  color:darkblue;
  border:2px solid darkblue;
}
</style>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>SDUFACES</title>
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
    $email=$_SESSION['email'];
    $id = $_SESSION["id"];
    ?>
    <div class="all">
    <div class="up">
        <nav class="menu">
        <ul class="clearfix">
            <li class="logo"><a href="news.php"><img src="sdufaces.png" width="130px" height="40px"></a></li>
            <form>
              <div class="ss"><a href="search.php">Search...</a></div>
            </form>
        </ul>
        </nav>
        <nav class="menu2">
            <ul class="rights">
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <?php
            $sql = "SELECT * FROM SF WHERE Email='$email'";
            $res = mysqli_query($conn, $sql);
            $number = $res->num_rows;
              $myrow = $res->fetch_assoc();
        ?>
        <div class="profile-info" method="post">
            <figure class="profile-img"><a rel="lightbox[group]" href="addph.php"><img src="profile-picture.png" width="148px" height="148px"></a></figure>
            <h6 class="user" name="username" style="font-size:23px;"><?php echo $myrow["Email"]?></h6>
            <a class="edit" href="editpage.php">EDIT PROFILE</a>
            <p class="name_s" name="name_s"><?php echo $myrow["Username"]." ".$myrow["Surname"]?></p>
            <p class="date" name="date_of_bday"><?php echo $myrow['Birthdate'].".".$myrow['Monthdate'].".".$myrow['Yeardate']?></p>
        </div>


        <div class="profile-photo" style=" margin-left:-100px;">
            <div class="add_p">
                <a class="addp" href="add_photo.php">Add photo</a>
                <a class="delp" href="delp.php">Delete Photo</a>
            </div>
            <?php
            $query = "SELECT * FROM `Add_photo` WHERE Email='$email'";
            $result = mysqli_query($conn, $query);
            $num = $result->num_rows;
            if($num != 0){
              $SESSION["email"] = $email;
            }
            for ($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
            ?>

        <div class="col-xs-12 col-sn-4 col-nd-3 col-lg-3" style="display:inline-block; float:left; margin:10px; height:auto;">
                <ul class="thumbnails">
                    <li class="span3">
                            <a class="thumbnail" rel="lightbox[group]" href=<?php echo $row["photo"]?>>
                            <img class="group1" src=<?php echo $row["photo"]?> title="Image Title" height="400px" width="350px" /></a>
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
