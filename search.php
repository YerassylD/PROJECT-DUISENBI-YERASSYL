<html>
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
  width: 230px;
  border: 1px solid #ccc;
  border-radius: 20px;
  font-size: 14px;
  background-color: #efefef;
  padding: 3px 25px 3px 75px;
  height:20px;
  float: right;
  margin-bottom: 9px;
  right: 50px;
  top:18px;
  color: black;
  outline: none;

}

form input[type="text"]:focus {
  width: 230px;
  background-color: white=;
  color:black;
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
    margin-top: 8px;
    display: inline-block;
    margin-right: 105px;
    text-decoration: none;

}

.logout a{
    text-decoration: none;
    font-weight: bold;
    font-size: 17px;
}
.logout a:hover{
  text-decoration: none;
}
#livesearch{
	position: absolute;
	top:80px;
	left:0px;
	width: 100%;
}
</style>
<script>
function showUser(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<nav class="menu">
    <ul class="clearfix">
        <li class="logo"><a href="home.html"><img src="sdufaces.png" width="130px" height="40px"></a></li>
        <form>
			<input type="text" size="30" name="users" onkeyup="showUser(this.value)" placeholder="Search users...">
		</form>
    </ul>
</nav>
<nav class="menu2">
    <ul class="rights">
        <li class="logout"><a href="user.php">BACK</a></li>
    </ul>
</nav>
<div id="livesearch"></div>

</body>
</html>