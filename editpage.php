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
</style>
</head>

<body>
<a href="user.php">Back</a>
	<?php
		$con = new mysqli("localhost","Yerassyl","87053163124","SF");
		$con ->query("SET NAMES utf8");
		$email=$_SESSION['email'];
		$query = "SELECT * FROM SF WHERE Email='$email'";
		$result = mysqli_query($con, $query);
			$row = mysqli_fetch_array($result);
		$con->close();
	?>
	<form action="updatepage.php">
		Username: <input type="text" name="username"></br>
		Surname: <input type="text" name="surname"></br>
		BirthDate:<select name="birthdate" class="date">
                                <option value="1">01
                                </option>
                                <option value="2">02
                                </option>
                                <option value="3">03
                                </option>
                                <option value="4">04
                                </option>
                                <option value="5">05
                                </option>
                                <option value="6">06
                                </option>
                                <option value="7">07
                                </option>
                                <option value="8">08
                                </option>
                                <option value="9">09
                                </option>
                                <option value="10">10
                                </option>
                                <option value="11">11
                                </option>
                                <option value="12">12
                                </option>
                                <option value="13">13
                                </option>
                                <option value="14">14
                                </option>
                                <option value="15">15
                                </option>
                                <option value="16">16
                                </option>
                                <option value="17">17
                                </option>
                                <option value="18">18
                                </option>
                                <option value="19">19
                                </option>
                                <option value="20">20
                                </option>
                                <option value="21">21
                                </option>
                                <option value="22">22
                                </option>
                                <option value="23">23
                                </option>
                                <option value="24">24
                                </option>
                                <option value="25">25
                                </option>
                                <option value="26">26
                                </option>
                                <option value="27">27
                                </option>
                                <option value="28">28
                                </option>
                                <option value="29">29
                                </option>
                                <option value="30">30
                                </option>
                                <option value="31">31
                                </option>
                            </select>
                            <select class="date" name="monthdate">
                                <option value="1">January
                                </option>
                                <option value="2">February
                                </option>
                                <option value="3">March
                                </option>
                                <option value="4">April
                                </option>
                                <option value="5">May
                                </option>
                                <option value="6">June
                                </option>
                                <option value="7">July
                                </option>
                                <option value="8">August
                                </option>
                                <option value="9">September
                                </option>
                                <option value="10">October
                                </option>
                                <option value="11">November
                                </option>
                                <option value="12">December
                                </option>
                            </select>
                            <select class="date" name="yeardate" >
                                <option value="0">
                                <option value="1960">1960
                                </option>
                                <option value="1961">1961
                                </option>
                                <option value="1962">1962
                                </option>
                                <option value="1963">1963
                                </option>
                                <option value="1964">1964
                                </option>
                                <option value="1965">1965
                                </option>
                                <option value="1966">1966
                                </option>
                                <option value="1967">1967
                                </option>
                                <option value="1968">1968
                                </option>
                                <option value="1969">1969
                                </option>
                                <option value="1970">1970
                                </option>
                                <option value="1971">1971
                                </option>
                                <option value="1972">1972
                                </option>
                                <option value="1973">1973
                                </option>
                                <option value="1974">1974
                                </option>
                                <option value="1975">1975
                                </option>
                                <option value="1976">1976
                                </option>
                                <option value="1977">1977
                                </option>
                                <option value="1978">1978
                                </option>
                                <option value="1979">1979
                                </option>
                                <option value="1980">1980
                                </option>
                                <option value="1981">1981
                                </option>
                                <option value="1982">1982
                                </option>
                                <option value="1983">1983
                                </option>
                                <option value="1984">1984
                                </option>
                                <option value="1985">1985
                                </option>
                                <option value="1986">1986
                                </option>
                                <option value="1987">1987
                                </option>
                                <option value="1988">1988
                                </option>
                                <option value="1989">1989
                                </option>
                                <option value="1990">1990
                                </option>
                                <option value="1991">1991
                                </option>
                                <option value="1992">1992
                                </option>
                                <option value="1993">1993
                                </option>
                                <option value="1994">1994
                                </option>
                                <option value="1995">1995
                                </option>
                                <option value="1996">1996
                                </option>
                                <option value="1997">1997
                                </option>
                                <option value="1998">1998
                                </option>
                                <option value="1999">1999
                                </option>
                                <option value="2000">2000
                                </option>
                                <option value="2001">2001
                                </option>
                                <option value="2002">2002
                                </option>
                                <option value="2003">2003
                                </option>
                                <option value="2004">2004
                                </option>
                                <option value="2005">2005
                                </option>
                                <option value="2006">2006
                                </option>
                                <option value="2007">2007
                                </option>
                                <option value="2008">2008
                                </option>
                                <option value="2009">2009
                                </option>
                                <option value="2010">2010
                                </option>
                                <option value="2011">2011
                                </option>
                                <option value="2012">2012
                                </option>
                                <option value="2013">2013
                                </option>
                                <option value="2014">2014
                                </option>
                                <option value="2015">2015
                                </option>
                                <option value="2016">2016
                                </option>
                    </select></br>
            Password: <input type="password" name="password"></br>
		<input type="submit"></br>
	</form>
</body>
</html>