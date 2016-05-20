<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
.row{
    position: relative;
    left:15px;
    width: 100%;
    padding-bottom:20px; 
    background-color: white;
}
.menu{
    width: 100%;
    position: absolute;
    margin: 0;
    padding: 0;
    overflow: hidden;
    top:0px;
    background-color: transparent; 
}

.menu li {
    float: left;
}

.menu li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    list-style:none;
    font-family:'Ek Mukta';
    font-size: 17px;
}

.menu li a:hover, .dropdown:hover .dropbtn {
    background:rgba(61, 178, 225, 1);
    text-decoration: none;
    color:white;
}

.menu li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    background-color: transparent;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: block;
    display: none;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {
    display:block;
}


.background-wrap{
    position: fixed;
    z-index: -1000;
    width: 100%;
    overflow: hidden;
    top: 0;
    left: 0;
    background: rgba();
}
#video-bg-elem{
    position: absolute;
    top: 0;
    left: 0;
    min-height: 500px;
    min-width: 100%;
} 
.content{
    position: absolute;
    width: 100%;
    height: 660px;
    z-index: 1;
}
.content h1{
    position: relative;
    text-align: center;
    font-size: 60px;
    text-transform: uppercase;
    font-weight: 300;
    color: #fff;
    padding-top: 10%;
    margin-bottom: 10px;
    top: 10px;
    bottom: 10px;
}
.content p{
    text-align: center;
    font-size: 17px;
    letter-spacing: 3px;
    color: white;
}
.clearfix:after {
display:block;
clear:both;
}

/*----- Menu Outline -----*/
.menu-wrap {
    width:100%;
    background:transparent;

}

.page-scroll{
    position: relative;
    top:150px;
    z-index: 1000;
    margin-top:100px;
    text-align: center;
}
.btn-circle {
    width: 70px;
    height: 70px;
    margin-top: 25px;
    padding: 7px 7px;
    border: 2px solid #fff;
    border-radius: 50%;
    font-size: 40px;
    color: #fff;
}
.btn-circle:hover,
.btn-circle:focus {
    outline: 0;
    color: #fff;
    background: rgba(255,255,255,0.1);
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SDUFACES</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <script src="js/bootstrap.min.js"></script>
    <!-- Header -->
    <header id="top" class="header">
        <div class="background-wrap">
            
            <video id="video-bg-elem"  controls autoplay muted loop="true" >
                <source src="nature.mp4" type="video/mp4">
                Video not supported
            </video>

        </div>

        <div class="content">
            <h1>SDUFaces</h1>
            <p>We are always with you!</p>
            <div id="form_wrapper" class="form_wrapper">
            </div>
        <div class="menu-wrap">
            <ul class="menu">
                <li><a class="active" href="home.php">SDU FACES</a></li>
                <li class="logins"><a href="index4.php">Log in/Sign Up</a></li>
                <li class="dropdown">
                 <a href="javascript:void(0)" class="dropbtn" onclick="dropFunction()">About<span class="arrow">&#9660;</span></a>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="aboutun.php">About University</a><br>
                        <a href="index7.php">About Us</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="page-scroll">
            <a href="#about" class="btn btn-circle" style="background:transparent;">
                <i class="fa fa-arrow-down animated" style="font-size: 52px; margin-top:12px;"></i>
            </a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about" style="background-color:white;" height="900px">
         <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                    <small>Today in SDU</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
         <?php
            $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
            $query = "SELECT * FROM `news` ORDER BY `id`";
            $result = mysqli_query($conn, $query);
            $num = $result->num_rows;
            for ($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
            ?>

        <!-- Project One -->
        <div class="row" height="auto" style="background-color:white;">
            <div class="col-md-7">
                    <img class="img-responsive" src=<?php echo $row["photo"]?> alt="">
            </div>
            <div class="col-md-5">
                <h3><?php echo $row["title"]?></h3>
                <h4><?php echo $row["subhead"]?></h4>
                <p><?php echo $row["para"]?></p>
            </div>
        </div>
    </section>
    <?php
    }
    ?>
<!-- between -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Study is way to future!</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio" style="background-color:white;">
        <div class="container">
            <div class="row" style="left:-50px;">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Gallery</h2>
                    <hr class="small">
                    <div class="row" style="left:-10px;">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color:skyblue;">
        <div class="container">
            <div class="row" style="left:-105px; margin-left:0px; width:107.5%;">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>SDUFACES</strong>
                    </h4>
                    <p>Suleyman Demirel University<br>Almaty, Kaskelen</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 8(775) 227 2347</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:yerassyl.d97@example.com">yerassyl.d97@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100010724767306"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Maded by &copy; Yerassyl 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    function dropFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>

</body>

</html>