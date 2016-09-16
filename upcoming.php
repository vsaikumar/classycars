<?php
include("db.php");
?>
<html>
<head>
<title>UPCOMING</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" type="text/css" href="styles/style.css">
 <link rel="stylesheet" type="text/css" href="styles/styles.css">
<style>
body{
	background-image:url("images/s.jpg");
}
#sw:hover{
	transition:ease 0.3s;
}
#cent,#cente,#centn{
	background-color:white;
	padding:10px;
	border-radius:10px;
}
#cent{
	position:absolute;
	top:20%;
	left:10%;
	right:70%;
}
#cente{
	position:absolute;
	top:20%;
	left:5%;
	right:40%;
}
#centn{
	position:absolute;
	top:20%;
	left:70%;
	right:10%;
}
</style>
</head>
<body>

<div id="downheader">

<a style="font-size:35px;color:white;margin-left:2%;" href="index.php"><span>CLASSYCARS</span></a>
<a href="index.php"><b><label id="home" class="dropbtn" style="margin-left:30%; cursor: pointer;font-size:14px;">HOME</label></b></a>
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
<div id="cente">
<?php
echo "<div>";
$sp=mysqli_query($con,"select * from upcoming")or die("err");
$s=mysqli_num_rows($sp);
for($w=1;$w<=$s;$w++){
$sa=mysqli_query($con,"select * from upcoming where sno=$w")or die("error");
while($f=mysqli_fetch_array($sa)){
	echo "<a href='images/upcoming/$f[3]'><img src='images/upcoming/$f[3]' width='100%' height='50%' style='cursor:pointer;' id='sw'></a>";
	echo "<h1 style='color:black;cursor:pointer;margin-top:1%;'>$f[1]</h1><br><br><br>";
	echo "<p style='color:white;padding-top:0%;background-color:black;opacity:0.5;'>$f[4]</p>";
}
}
echo "</div>";
?>
</div>
<div style="position:absolute;top:15%;right:1%;left:60%;">
<?php
$sp=mysqli_query($con,"select * from upcoming")or die("err");
$s=mysqli_num_rows($sp);
for($w=1;$w<=$s;$w++){
$sa=mysqli_query($con,"select * from upcoming where sno=$w")or die("error");
while($f=mysqli_fetch_array($sa)){
	echo "<p style='color:white;padding-top:2%;padding-left:2%;border-radius:2%;background-color:black;'>$f[4]</p><br><<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>br><br><br><br><br>";
}
}

?>
</div>
<div style="padding-top:2%;padding-bottom:2%;position:absolute;left:0%;right:0%;top:280%;background-color:#1abc9c !important;">
	<div style="position:absolute;bottom:5%;left:1%;">
		<p style="color:white; font-size:25px; font-family:Brush Script MT;">Follow us </p>
			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true" id="fb"></i></a>
			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true" id="tw"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true" id="yt"></i></a>
	</div>
	<span style="position:absolute;left:3%;bottom:80%;">More info @ <a href="index.php" style="color:white;"> CLASSYCARS</a></span>
<center><p style="color:white;font-size:25px;position:absolut;bottom:5%;right:5%;">CLASSYCARS</p>
 <b style="font-size:13px;color:white;margin-left:15%;">The online car searching</b></center> <hr color=black;>
 
 <center><pre style="color:white;font-size:15px;margin-top:1%;">Developed by</pre>
 <b style="font-size:20px;color:white;">CLASSY TEAM</b><br></center>
<center><p style="font-size:12px;position:absolute;left:5%;bottom:5%;color:white;">While using this site, you have to agree read and accept our terms and conditions of use, cookie and privacy policy.</p></center>
 <p style="font-size:12px; position:absolute; bottom:5%;right:10%;color:white;">Copyright 2016. All Rights Reserved.</p>
</div>
</body>
</html>