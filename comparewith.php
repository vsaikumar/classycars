<?php
session_start();
?>
<html>
<head>
<title>COMPARE</title>
</head>
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
body{
	background-image: url("images/sss.jpg");
	background-size: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>

<div id="downheader">
<a style="font-size:35px;color:white;margin-left:2%;"><span>ClassyCars</span></a>
<a href="index.php"><b><label id="home" class="dropbtn" style="margin-left:35%; cursor: pointer;font-size:14px;">HOME</label></b></a>
<div class="dropdown">
<a style="margn-left:4%;"><label id="new" class="dropbtn"style=" pointer;font-size:14px;">  CARS <span class="glyphicon glyphicon-menu-down"></span></label></a>
 <div class="dropdown-content">
    <a href="index.php"><label> SEARCH CARS </label></a>
    <a href="upcoming.php"><label> UPCOMING CARS </label></a>
	<a href="#"><label> ON ROAD PRICE </label></a>
  </div>
</div>
<a href="comparewith.html"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> COMPARE </label></b></a>

<a href="about.php"><b><label id="nr" class="dropbtn" style="margin-left:0.2%; padding:right:-10px; cursor: pointer; pointer;font-size:14px;"> ABOUT </label></b></a>
</div>

<div class="carsp" style="text-align:right;">
	<center>
	<form action="compare.php" method="post">
	<h2 style="color:#1abc9c !important; font-family:Arial; top:15px; position: relative;"><b>SELECT A CAR</b></h2>
	<p style="position:relative; padding:0px; top:40px;color:white;"><b>Select Brand :</b></p>
	<select name="brand" class="form-control" style="position: relative; top:50px;width:80%;height:12%;">
 		 <option value="">---Select One---</option>
		 <option value="AUDI">BENZ</option>
	</select>	
	<p style="position:relative; padding:0px; top:60px;color:white;"><b>Select Modal :</b></p>
	<select name="model" class="form-control" style="position: relative; top:70px;width:80%;height:12%;">
 		 <option value="-1">---Select One---</option>
		 <option value="spencers">CARR</option>
		 <option value="asa">asa</option>
	</select>
<h2 style="color:white;background-color:#1abc9c !important;position:absolute;top:38%;left:48%;padding:10px;border-radius:2%;">AND </h2>
<div class="carsps" style="text-align:right;">
	<center>
	<h2 style="color:#1abc9c !important; font-family:Arial; top:15px; position: relative;"><b> COMPARE WITH</b></h2>
	<p style="position:relative; padding:0px; top:40px;color:white;"><b>Select Brand :</b></p>
	<select name="brand" class="form-control" style="position: relative; top:50px;width:80%;height:12%;">
 		 <option value="">---Select One---</option>
		 <option value="AUDI">BENZ</option>
	</select>	
	<p style="position:relative; padding:0px; top:60px;color:white;"><b>Select Modal :</b></p>
	<select name="model" class="form-control" style="position: relative; top:70px;width:80%;height:12%;">
 		 <option value="-1">---Select One---</option>
		 <option value="spencers">CARR</option>
		 <option value="asa">asa</option>
	</select>
	<button class="carsh">Search</button>	
	</form>
	</center>
</div>
<div style="padding-top:2%;padding-bottom:2%;position:absolute;left:0%;right:0%;margin-top:5%;background-color:#1abc9c !important;">
	<div style="position:absolute;bottom:5%;right:10%;">
		<p style="color:white; font-size:25px; font-family:Brush Script MT;">Follow us </p>
			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true" id="fb"></i></a>
			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true" id="tw"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true" id="yt"></i></a>
	</div>
	<span style="position:absolute;left:3%;bottom:80%;">More info @ <a href="index.php" style="color:white;"> PAHIYE</a></span>
<center><p style="color:white;font-size:25px;position:absolut;bottom:5%;right:5%;">PAHIYE</p>
 <b style="font-size:13px;color:white;margin-left:15%;">The online car searching</b></center> <hr color=black;>
 
 <center><pre style="color:white;font-size:15px;margin-top:1%;">Developed by</pre>
 <b style="font-size:20px;color:white;">PAHIYE TEAM</b><br></center>
<center><p style="font-size:12px;position:absolute;left:5%;bottom:5%;color:white;">While using this site, you have to agree read and accept our terms and conditions of use, cookie and privacy policy.</p></center>
 <p style="font-size:12px; position:absolute; bottom:5%;right:10%;color:white;">Copyright 2016. All Rights Reserved.</p>
</div>
</body>
</html>