<!doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css1/component.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css1/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css1/component.css" />
        <style type="text/css">
 
            body {
                border: 0px;
                font-family:Arial, Sans-Serif;
                z-index: -100;
                background-color: rgba(0,0,0,0.1);
                margin-right:200px;  
                }
        .background-wrap{
            position: fixed;
            z-index: -1000;
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0;
            left: 0;
            background: rgba();
        }
        #video-bg-elem{
            position: absolute;
            top: 0;
            left: 0;
            min-height: 100%;
            min-width: 100%;
        } 
 
            #container {width:300px; margin:0 auto;}

 
            /* Nicely lines up the labels. */
            form{  
                position: relative;
                top: 15px;
                left:0px ;
                bottom:0px;
                right:0px; 
                padding-left:30px;
                padding-right:30px;
                border:3px solid black;
                width: 400px; 
                border-radius: 10px;
                padding-top:10px;
                padding-bottom: 10px; 
                z-index: 100;
                background-color: rgba(0,0,0,0.6);
                color: silver;

            }
            form input{
                border-radius: 5px;
                outline: none;
                background-color: silver;
                font-size: 13px;
            }
            form input:hover{
                background-color: #efefef;
            }
            form input:focus{
                background-color: #efefef;
            }
            body p{
                position: relative;
                top:10px;
            }
            form > .linesubmit{
                position: relative;
                top: 15px;
                left: 170px;

            }
            form .submit{
                width:70px;
                height: 30px;
            }
            .as{
                border:1px solid silver;
                border-radius:8px;
            }
            form select{
                border: 1px solid silver;
                width: 130px;
                float:left;
                margin-bottom:3px;
                color: #505050;
                margin-right:5px;
                background-color: silver;
                }
            form select:hover{
                background-color: white;
            }
            form select:focus{
                background-color: white;
            }
            form select .date{
                width:  0px;
                }

            form label {display:inline-block; width:140px;}
 
            /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {
                width:160px;
                height: 15px;
            }
            form .as:hover{
                border-color:#3db2e1;
                color:#3db2e1;
            }
 
            form .line {clear:both;}
            form .line.submit {text-align:right;}
            form h1:hover{
                color:#3db2e1;
            }
            form p:hover{
                color:#3db2e1;
            }
            .menu-wrap {
                width:100%;
                background:transparent;
            }
            .menu {
                width:100%;
                margin:0px auto;
                z-index: 10;
                position: fixed;
                top: 0px;
                left: 0px;
                right: 0px;
                float:left;
            }
            .menu li {
                margin:0px;
                list-style:none;
                font-family:'Ek Mukta';
                z-index: 11;
            }   
            .menu a {
                color:#efefef;
                text-decoration: none
            }
            .menu li:hover > a {
                text-decoration:none;
                color:white;
            }
            .menu > ul > li {
                float:left;
                display:inline-block;
                position:relative;
                font-size:19px;
            }
            .menu > ul > li > a {
                padding:10px 40px;
                display:inline-block;
                text-shadow:0px 1px 0px rgba(0,0,0,0.4);
            }
            .menu > ul > li:hover {
                background:rgba(61, 178, 225, 1);
            }
            .clearfix > ul{
                position: relative;
                top:10px;
            }

        </style>
    </head>
    <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="#">Home</a></li>
        </ul>
    </nav>
    </div>
        <div class="background-wrap">
            
            <video id="video-bg-elem"  controls autoplay muted loop="true" >
                <source src="Nature.mp4" type="video/mp4">
                Video not supported
            </video>

        </div>
        <div class="codrops-top clearfix">
        </div>
        <div id="container">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                <div class="line"><fieldset class="as"><legend>Username * </legend><label for="username"></label><input required="your username" name="username" type="text" id="username" /></fieldset> </div>
                <div class="line"><fieldset class="as"><legend>Surname * </legend><label for="surname"></label><input required="your surname" name="surname" type="text" id="surname" /></fieldset></div>
                <div class="line"><fieldset class="as"><legend>Password * </legend><label for="pwd"></label><input required="your password" name="password" type="password" id="pwd" /></fieldset></div>
                <!-- You may want to consider adding a "confirm" password box also -->
                <div class="line"><fieldset class="as"><legend>Email * </legend><label for="email"></label><input required="your email" name="email" type="email" id="email" /></fieldset></div>
                <div class="line"><fieldset class="as"><legend>Birthdate * </legend>
                    <select required="your birthdate" name="birthdate" class="date">
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
                    <select name="monthdate">
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
                    <select class="year" name="yeardate" >
                        <option value="0">
                        <option value="1">1960
                        </option>
                        <option value="2">1961
                        </option>
                        <option value="3">1962
                        </option>
                        <option value="4">1963
                        </option>
                        <option value="5">1964
                        </option>
                        <option value="6">1965
                        </option>
                        <option value="7">1966
                        </option>
                        <option value="8">1967
                        </option>
                        <option value="9">1968
                        </option>
                        <option value="10">1969
                        </option>
                        <option value="11">1970
                        </option>
                        <option value="12">1971
                        </option>
                        <option value="13">1972
                        </option>
                        <option value="14">1973
                        </option>
                        <option value="15">1974
                        </option>
                        <option value="16">1975
                        </option>
                        <option value="17">1976
                        </option>
                        <option value="18">1977
                        </option>
                        <option value="19">1978
                        </option>
                        <option value="20">1979
                        </option>
                        <option value="21">1980
                        </option>
                        <option value="22">1981
                        </option>
                        <option value="23">1982
                        </option>
                        <option value="24">1983
                        </option>
                        <option value="25">1984
                        </option>
                        <option value="26">1985
                        </option>
                        <option value="27">1986
                        </option>
                        <option value="28">1987
                        </option>
                        <option value="29">1988
                        </option>
                        <option value="30">1989
                        </option>
                        <option value="31">1990
                        </option>
                        <option value="32">1991
                        </option>
                        <option value="33">1992
                        </option>
                        <option value="34">1993
                        </option>
                        <option value="35">1994
                        </option>
                        <option value="36">1995
                        </option>
                        <option value="37">1996
                        </option>
                        <option value="38">1997
                        </option>
                        <option value="39">1998
                        </option>
                        <option value="40">1999
                        </option>
                        <option value="41">2000
                        </option>
                        <option value="42">2001
                        </option>
                        <option value="43">2002
                        </option>
                        <option value="44">2003
                        </option>
                        <option value="45">2004
                        </option>
                        <option value="46">2005
                        </option>
                        <option value="47">2006
                        </option>
                        <option value="48">2007
                        </option>
                        <option value="49">2008
                        </option>
                        <option value="50">2009
                        </option>
                        <option value="51">2010
                        </option>
                        <option value="52">2011
                        </option>
                        <option value="53">2012
                        </option>
                        <option value="54">2013
                        </option>
                        <option value="55">2014
                        </option>
                        <option value="56">2015
                        </option>
                        <option value="57">2016
                        </option>
                    </select>
                    <!-- <input class="year" type="text" size="4" maxlength="4"/> -->
                </p></fieldset></div>
                
                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <div class="line"><fieldset class="as"><legend>Telephone </legend><label for="tel"></label><input name="telephone" type="text" id="tel" /></fieldset></div>
                <div class="linesubmit"><input class="submit" type="submit" value="Submit   " /></div>
                
                <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
            </form>
        </div>
    </body>
</html>