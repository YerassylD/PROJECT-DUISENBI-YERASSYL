<!DOCTYPE html>
<html>
<head>
	<title>About University</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery-2.2.1.min.js"></script>

 <style>
  body{
	background-color: #efefef;
	font-family: sans-serif;
}
div .about{

}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
  	position: relative;
      width: 100%;
      height: 600px;
      background-color:white; 

  }
.menu ul{
  	position: relative;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #002248;
}
.menu ul li {
    float: left;
}

.menu ul li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
}

.menu ul li a:hover {
    color: silver;
    font-weight: bold;
}
input[type=text] {
    position: absolute;
    width: 100px;
    border: 1px solid white;
    border-radius: 6px;
    font-size: 16px;
    background-color: rgba(0,0,0,0.7);
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px 10px 10px 10px;
    height:10px;
    float: right;
    margin: 5px;
    right: 5px;
    color:white;

}
input[type=text]:hover{
	background-color: white;
	color: black;
}
.mainbor{
	position: relative;
	border: 2px solid white;
	width: 80%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto; 
	background-color: white;
	margin-bottom: 10px;
	float: center;
}

input[type=text]:focus {
    width: 20%;
    background-color: white;
    color:black;
}
div .history{
	position: relative;
	margin: 10px;
	font-family: sans-serif;
}
.history h1{
	position: relative;
	padding: 10px;
}
.history h3{
	position: relative;
	padding: 10px;
}.history h3{
	position: relative;
	padding-left: 10px;
}
.history img{
	position: relative;
	left: 10px;
}

.history p{
	position: relative;
	font-size: 14px;
	padding: 10px;
}
div .faculties{
	border-top:3px solid #efefef;
	position: relative;
	margin:5px; 
}
div .faculties ul{
	position:relative;
	background-color: white;
	display: block;
	padding-top:5px;
	}
div .faculties li a{
	display: block;
	color: black;
	position:relative;
	background-color: white;
	padding-top:6px;
	font-size: 15px;
	font-weight: bold;
	}
div .faculties li a:hover{
	color: black;
	position:relative;
	background-color: white;
	}
div .faculties h1{
	position: relative;
	left:25px;
}
div .law{
	position: relative;
	border-top: 3px solid #efefef;
	margin-top: 20px;
	margin-right: 10px;
}
div .law h2{
	position: relative;
	left:25px;
	font-weight: bold;
}
div .law img{
	position: relative;
	left: 25px;
}
div .law p{
	position: relative;
	font-size: 14px;
	left: 25px;
	padding-right: 10px;
}
div .phil h2{
	position: relative;
	left:25px;
	font-weight: bold;
}
div .phil img{
	position: relative;
	left: 25px;
	width: 600px;
	height: 350px;
}
div .phil p{
	position: relative;
	font-size: 14px;
	left: 25px;
	padding-right: 10px;
}
div .phil{
	position: relative;
	border-top: 3px solid #efefef; 
	margin-right: 10px;
}
div .en h2{
	position: relative;
	left:25px;
	font-weight: bold;
}
div .en img{
	position: relative;
	left: 25px;
	width: 600px;
	height: 350px;
}
div .en p{
	position: relative;
	font-size: 14px;
	left: 25px;
	padding-right: 10px; 
}
div .en{
	position: relative;
	border-top: 3px solid #efefef; 
	margin-right: 10px;
}
div .eco h2{
	position: relative;
	left:25px;
	font-weight: bold;
}

div .eco img{
	position: relative;
	left: 25px;
	width: 800px;
	height: 250px;
}
div .eco p{
	position: relative;
	font-size: 14px;
	left: 25px;
	padding-right: 10px; 
}
div .eco{
	position: relative;
	border-top: 3px solid #efefef; 
	margin-right: 10px;
}
div .understat{
	margin-top: 20px;
	position: relative;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 245px;
    background-color: #002248;
}
div .understat-centered {
	margin: auto;
    width: 1150px;
    height: auto;
}
div .list_left{
	float: left;
    width: 200px;
    padding: 0px;
    margin: 0px 0px 0px 0px;
    list-style-type: none;
    text-align: right;
    opacity: 0.9;
    margin-top: 30px;
    padding-right: 20px;
    border-right: 1px solid rgba(48,83,123,0.4);
    margin-right: 20px;
}
.list_left li a, .list_left li a:visited {
    font-family: 'OpenSans-Light';
    color: white;
    font-weight: normal;
    font-style: normal;
    font-size: 13px;
}
.list_right {
    float: left;
    width: 200px;
    padding: 0px;
    margin: 0px 0px 0px 0px;
    list-style-type: none;
    text-align: left;
    opacity: 0.9;
    margin-top: 30px;
    padding-left: 20px;
    border-left: 1px solid rgba(48,83,123,0.4);
    margin-right: 30px;
}
.list_right li a, .list_right li a:visited {
    font-family: 'OpenSans-Light';
    color: white;
    font-weight: normal;
    font-style: normal;
    font-size: 13px;
}
.list_right li  {
    font-family: 'OpenSans-Light';
    color: white;
    font-weight: normal;
    font-style: normal;
    font-size: 13px;
    margin-right: 30px
}
.img {
    float: left;
    width: 150px;
    height: 20px;
    opacity: 0.4;
    margin-right: 30px;
    margin-left: 20px;
}
.img_link {
    float: left;
    width: 116px;
    height: auto;
    margin: 40px 30px 50px 17px;
}
.understat_divider {
	position: relative;
    float: left;
    width: 100%;
    height: 1px;
    background-color: #224b77;
    margin-top: 40px;
    opacity: 0.3;
}
.understat_social {
    float: left;
    width: 100%;
    height: auto;
    text-align: center;
    padding-top: 15px;
}
.understat_text {
    float: left;
    width: 100%;
    text-align: center;
    padding-top: 15px;
    color: rgba(255,255,255,0.4);
    font-family: 'OpenSans-Light';
    font-weight: normal;
    font-style: normal;
    font-size: 13px;
}
.ss{
	position: fixed;
	width: 10%;
	height: auto;
	border: 2px solid #002248;
	z-index: 10;
	background-color: rgba(0,0,0,0.4);
	padding-left: 0px;
}
.ss a{
	/*margin-right: 20px;*/
	padding-left: 20px;
	color: white;
}
.ss li:hover,.ss li:focus{
	background-color: #002248;
}
.ss a:hover{
	color: white;
	text-decoration: none;
	font-weight: bold;
}


</style>
</head>
<body>
<div class="menu">
<ul>
  <li><a class="active" href="home.php">Home</a></li>

</ul>
</div>
<div class="bar"> 
	<ul class="ss">
		<li class="fac" type="none"><a href="#faculties">Faculties</a></li>
		<li type="none"><a href="#law">Law</a></li>
		<li type="none"><a href="#phil">Phil</a></li>
		<li type="none"><a href="#en">En</a></li>
		<li type="none"><a href="#eco">Eco</a></li>
	</ul>
</div>

<div class="about">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="image/slider-2.jpg" alt="Suleiman Demirel University">
        <div class="carousel-caption">
          <h3>Suleiman Demirel University</h3>
          <p>Our university one of the top universities in Kazakhstan.</p>
        </div>
      </div>	

      <div class="item">
        <img src="image/slider-3.jpg" alt="Superman">
        <div class="carousel-caption">
          <h3>SDU</h3>
          <p>The atmosphere in SDU is very friendly.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/z1.jpg" alt="Deadpool">
        <div class="carousel-caption">
          <h3>Suleiman Demirel University(inside)</h3>
          <p>Beatiful design inside our university.</p>
        </div>
      </div>

      <div class="item">
        <img src="image/z2.jpg" alt="Deadpool">
        <div class="carousel-caption">
          <h3>Suleiman Demirel University(inside)</h3>
          <p>Gives great knowledge qualification for students.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="mainbor">
	<div class="history">
		<h1>About University</h1>
		<h3>History</h3>
			<img src="image/history2.jpg" width="470px" height="300px">
			<p>Suleyman Demirel University was opened in 1996, the President of Kazakhstan, Nursultan Nazarbayev, and the former President of Turkey, Suleyman Demirel. Suleyman Demirel University is a private co-educational institution with a mission to change the entire world for the better. The main CDS commitments are quality programs of undergraduate, continuing education, research and public service provided for students at the most reasonable cost. University programs meet the needs of people, community groups and agencies in the community; quickly adapt to changes in social, political and economic environment of the country.</p>
	</div>
	<div id="faculties" class="faculties">
	<h1>Faculties</h1>
			<ul>
				<li type="square"><a href="#law">Law and Social Scince faculty</a></li>
				<li type="square"><a href="#phil">Philology faculty</a></li>
				<li type="square"><a href="#en">Engineering faculty</a></li>
				<li type="square"><a href="#eco">Facylty of Economics</a></li>
			</ul>
	<div id ="law" class="law" name="law">
		<h2>Law and Social Scince faculty</h2>
		<img src="image/faculty 1.png">
		<p> Our Faculty builds strong relationships with business and legal professions, the criminal justice system and the third sector.</p>
	</div>
	<div id="phil"class="phil">
		<h2>Faculty of Philology</h2>
		<img  src="image/faculty 2.jpg">
		<p>The Faculty of Philology actively cooperates with science, education and cultural institutions in Kazakhstan, and supports a variety of educational, research and cultural incentives. 700 students may choose from a range of areas and graduate as teachers, translators, librarians, editors, reporters, journalists, press spokesmen, media experts, PR specialists and information brokers. There are over 340 Faculty members and over 40 PhD students.</p>
	</div>
	<div id="en" class="en">
		<h2>Faculty of Engineering</h2>
		<img src="image/faculty 3.jpg">
		<p>Engineering is the application of mathematics, empirical evidence and scientific, economic, social, and practical knowledge in order to invent, innovate, design, build, maintain, research, and improve structures, machines, tools, systems, components, materials, and processes.

		The discipline of engineering is extremely broad, and encompasses a range of more specialized fields of engineering, each with a more specific emphasis on particular areas of applied science, technology and types of application.</p>
	</div>
	<div id="eco" class="eco">
		<h2>Faculty of Economics</h2>
		<img src="image/faculty 4.jpg">
		<p>An economist is a professional in the social science discipline of economics.

		The individual may also study, develop, and apply theories and concepts from economics and write about economic policy. Within this field there are many sub-fields, ranging from the broad philosophical theories to the focused study of minutiae within specific markets, macroeconomic analysis, microeconomic analysis or financial statement analysis, involving analytical methods and tools such as econometrics, statistics, economics computational models, financial economics, mathematical finance and mathematical economics. A generally accepted interpretation in academia is that an economist is one who has attained a Ph.D. in economics, teaches economic science, and has published literature in a field of economics.</p>
	</div>

	</div>
</div>
<div class="understat">
	<div class="understat_centered">
	<ul class="list_left">
		<li type="none"><a href="#">Undergraduate</a></li>
		<li type="none"><a href="#">Graduate</a></li>
		<li type="none"><a href="#">International students</a></li>
		<li type="none"><a href="#">Grants & Discounts</a></li>
		<li type="none"><a href="#">Tution Fee</a></li>
	</ul>
	<ul class="list_left">
		<li type="none"><a href="#">Portal</a></li>
		<li type="none"><a href="#">Intranet Service</a></li>
		<li type="none"><a href="#">Contacts</a></li>
		<li type="none"><a href="#">About SDU</a></li>
		<li type="none"><a href="#">Social ife</a></li>
	</ul>
	<div class="img">
		<a class="img_link" href="http://sdu.edu.kz/ru/">
			<img width="116" src="http://sdu.edu.kz//images/general/logofootersdu.png">
		</a>
	</div>
	<ul class="list_right">
		<li type="none"><a href="#">Facebook</a></li>
		<li type="none"><a href="#">VK</a></li>
		<li type="none"><a href="#">Twitter</a></li>
		<li type="none"><a href="#">Instagram</a></li>
		<li type="none"><a href="#">Youtube</a></li>
	</ul>
	<ul class="list_right">
		<li>1/1 ул.Абылай Хан</li>
		<li>Каскелен, Алматы</li>
		<li>Казахстан, 040900</li>
		<li>Тел: +7 727 307 95 65,</li>
		<li>+7 727 307 95 69,</li>
		<li>+7 727 307 95 58</li>
		<li>Факс: +7 727 307 95 58</li>
	</ul>
	<div class="understat_divider"></div>
        <p class="understat_text">© 2016 Университет имени Сулеймана Демиреля.</p>
</div>
	</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="bootstrap/js/jquery.easing.min.js"></script>	
	<script src="bootstrap/js/jquery.scrollTo.js"></script>
	<script src="bootstrap/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/js/custom.js"></script>

</body>
</html>