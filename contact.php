<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" type="text/css" href="styles/style.css">
 <link rel="stylesheet" type="text/css" href="styles/styles.css">
 <link rel="stylesheet" type="text/css" href="styles/1140.css">
 <link rel="stylesheet" href="styles/style.css">
<style>
body
{
	background-color:#3399cc;
}
#fb:hover,#tw:hover,#yt:hover{
	padding:20px;
}

.con
{
	position:absolute;
	top:35%;
	left:45%;
}
input[type="text"]
{
	padding-right:258px;
	padding-left:10px;
}
input[type="submit"],input[type="reset"]
{
	color:white;
	background-color:black;
	border:2px solid #0099FF;
	cursor:pointer;
}
.div1
{
	color:white;
	position:absolute;
	left:15%;
	top:9%;
}
h3
{
	letter-spacing:1px;
	word-spacing:4px;
	font-family:calibri;
}
h1
{
	font-size:50px;
}
#phon
{
	color:white;
	font-size:20px;
	position:absolute;
	top:40%;
	left:15%;
	font-weight:bold;
}

</style>
<title>CONTACT</title>
</head>
<body>


<div id="downheader">

<a style="font-size:35px;color:white;margin-left:2%;" href="index.php"><span>CLASSYCARS</span></a>
<a href="index.php"><b><label id="home" class="dropbtn" style="margin-left:35%; cursor: pointer;font-size:14px;">HOME</label></b></a>
<div class="dropdown">
<a style="margn-left:4%;"><label id="new" class="dropbtn"style=" pointer;font-size:14px;">  CARS <span class="glyphicon glyphicon-menu-down"></span></label></a>
 <div class="dropdown-content">
    <a href="index.php"><label> SEARCH CARS </label></a>
    <a href="upcoming.php"><label> UPCOMING CARS </label></a>
  </div>
</div>
<a href="comparewith.html"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> COMPARE </label></b></a>

<a href="contact.php"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> CONTACT </label></b></a>
</div>


<div class="div1">
	<h1>contact</h1>
	<h2><small style="color:#2f2f2f">Sometimes</small> <b>magic</b><small style="color:#2f2f2f"> is just someone </small><b>spending</b><small style="color:#2f2f2f"> more time on <br>something than anyone else might reasonably
	expect.</small></h2>
</div>
<div id="phon">
	<br>
	<address>
      <p><span class="glyphicon glyphicon-map-marker"></span> ANDHRA PRADESH INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span>9010614125</p>
      <p><span class="glyphicon glyphicon-envelope"></span> abc@gmail.com</p>
	</address>		
</div>
<div class="con">
	<form action="sendmsg.php" method="post">
		<input type="text" placeholder="Name" name="user"><br><br>
		<input type="text" placeholder="Email" name="email"><br><br>
		<input type="text" placeholder="Subject" name="sub"><br><br>
		<textarea rows="5" cols="60" placeholder="Message" name="msg"></textarea><br><br>
		<input type="submit" value="SUBMIT">
		<input type="reset" value="RESET">
	</form>
</div>

<div style="padding-top:2%;padding-bottom:2%;position:absolute;left:0%;right:0%;bottom:0%;background-color:#1abc9c !important;">
	<div style="position:absolute;bottom:5%;right:10%;">
		<p style="color:white; font-size:25px; font-family:Brush Script MT;">Follow us </p>
			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true" id="fb"></i></a>
			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true" id="tw"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true" id="yt"></i></a>
	</div>
	<span style="position:absolute;left:3%;bottom:80%;">More info @ <a href="index.php" style="color:white;"> CLASSYCARS</a></span>
<center><p style="color:white;font-size:25px;position:absolute;bottom:5%;right:5%;">CLASSYCARS</p>
 <b style="font-size:13px;color:white;margin-left:15%;">The online car searching</b></center> <hr color=black;>
 
 <center><pre style="color:white;font-size:15px;margin-top:1%;">Developed by</pre>
 <b style="font-size:20px;color:white;">CLASSY TEAM</b><br></center>
<center><p style="font-size:12px;position:absolute;left:5%;bottom:5%;color:white;">While using this site, you have to agree read and accept our terms and conditions of use, cookie and privacy policy.</p></center>
 <p style="font-size:12px; position:absolute; bottom:5%;right:10%;color:white;">Copyright 2016. All Rights Reserved.</p>
</div>
</body>
</html>