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
                background-color: white;

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
                width:100px;
                height: 70px;
            }
            .as{
                border:1px solid black;
                border-radius:8px;
            }
            form select{
                border: 1px solid #E1E1E1;
                width: 130px;
                float:left;
                margin-bottom:3px;
                color: #505050;
                margin-right:5px;
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

 
        </style>
    </head>
    <body>
        <div class="codrops-top clearfix">
                <a class="codrops-icon codrops-icon-prev" href="MainBackground2.html"><span>Home</span></a>
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