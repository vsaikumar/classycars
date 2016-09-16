<?php
include('db.php');
session_start();
?>
<html>
<head>
<title>Result cars</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" type="text/css" href="styles/styles.css">
 <link rel="stylesheet" type="text/css" href="styles/1140.css">
 <link rel="stylesheet" href="styles/indi.css"> 
 <link rel="stylesheet" type="text/css" href="styles/style.css">
<script src="js/jquery-1.12.1.min.js"></script>
 <style>
 body{
	 background-image:url("images/ss.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
 }
 #spe:hover,#com:hover,#news:hover,#phos:hover{
	 color:gray;
	 }
 </style>
</head>
<body>
<div>
<div id="downheader">
<a style="font-size:35px;color:white;margin-left:2%;"><span>Classycars</span></a>
<a href="index.php"><b><label id="home" class="dropbtn" style="margin-left:35%; cursor: pointer;font-size:14px;">HOME</label></b></a>
<div class="dropdown">

<a style="margn-left:4%;"><label id="new" class="dropbtn"style=" pointer;font-size:14px;">  cars <span class="glyphicon glyphicon-menu-down"></span></label></a>
 <div class="dropdown-content">
    <a href="index.php"><label> SEARCH CARS </label></a>
    <a href="upcoming.php"><label> UPCOMING CARS </label></a>
	<a href="#"><label> ON ROAD PRICE </label></a>
  </div>
</div>
<a href="comparewith.html"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> COMPARE </label></b></a>


<a href="about.php"><b><label id="nr" class="dropbtn" style="margin-left:0.2%; padding:right:-10px; cursor: pointer; pointer;font-size:14px;"> ABOUT </label></b></a>
</div>

<?php
$a=$_POST['brands'];
$b=$_POST['models'];
$c=$_SESSION['bra'] or $_POST['brands'];
$d=$_SESSION['mod'] or $_POST['models'];
if(($a==-1) or ($b==-1) or ($c==-1) or ($d==-1)){
	echo "<script>alert('Please select any opoptions');
		window.location='comparewith.html';</script>";
}
$sea=mysqli_query($con,"SELECT * FROM `$a` WHERE 	model='$b'")or die("error");
$com=mysqli_query($con,"SELECT * FROM `$c` WHERE 	model='$d'")or die("erro");
echo "<div>";
while($fet=mysqli_fetch_array($sea)){
	echo "<div>";
		echo "<img src='images/cars/$fet[3]' width='50%' style='margin-top:6%;margin-left:3%;border-radius:0.2%;cursor:pointer;'>";
		echo "<h1 style='color: #1abc9c !important;position:absolute;top:35%;margin-left:8%;'>$a</h1>";
		echo "<h1 style='color: blue;position:absolute;top:42%;left:5%;'>$fet[1]</h1>";
	echo "</div>";
?>

<div style="margin-top:2%;position:absolute;left:3%;">
<?php
	echo "<table border='1' cellpadding='15px' style='opacity:0.6;padding-left:15%;padding-right:15%;background-color:black;color: white;cursor:pointer;font-family:calibri;font-size:20px;border:2px solid blue;box-shadow:3px 3px 3px rgba(0,0,0,1);	opacity:0.8px;'>";
	echo "<th><center>TYPE</center><hr></th><th style='font-size:20px;'><center>Information<hr></center><th></th>";
	echo "<tr><td>Company</td><td>$a</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Model</td><td>$b</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>GET ON ROAD PRICE</td><td>$fet[2]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Mileage</td><td>$fet[4]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Engine</td><td>$fet[5]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Cruise Control</td><td>$fet[6]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Parking Sensor</td><td>$fet[7]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Duration</td><td>$fet[8]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>PERFORMANCE</td><td>$fet[9]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>COMFORT</td><td>$fet[10]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>SAFETY</td><td>$fet[11]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Automatic</td><td>$fet[12]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Rear AC Vents</td><td>$fet[13]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>ABS</td><td>$fet[14]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Driver Airbag</td><td>$fet[15]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Roof</td><td>$fet[16]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "</table>";
?>
</div>
<div style="margin-top:2%;position:absolute;right:40%;">
<?php
	echo "<a href='images/cars/$fet[22]'><center><img src='images/cars/$fet[22]' width='25%' height='25%></center></a><br>";
	echo "<a href='images/cars/$fet[18]'><center><img src='images/cars/$fet[18]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fet[19]'><center><img src='images/cars/$fet[19]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fet[20]'><center><img src='images/cars/$fet[20]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fet[21]'><center><img src='images/cars/$fet[21]' width='25%' height='25%'></center></a>>br>";
	echo "<a href='images/cars/$fet[18]'><center><img src='images/cars/$fet[18]' width='25%' height='25%'></center></a><br>";
}
	?>
	</div>
	<?php
echo "</div>";
echo "<div>";
while($fetc=mysqli_fetch_array($com)){
	echo "<div>";
		echo "<img src='images/cars/$fetc[3]' width='40%' style='position:absolute;top:11%;right:3%;border-radius:0.2%;cursor:pointer;'>";
		echo "<h1 style='color: #1abc9c !important;position:absolute;top:35%;margin-left:8%;'>$a</h1>";
		echo "<h1 style='color: blue;position:absolute;top:42%;left:5%;'>$fetc[1]</h1>";
	echo "</div>";
?>
<div style="margin-top:2%;position:absolute;right:6%;">
<?php
	echo "<table border='1' cellpadding='15px' style='opacity:0.6;padding-left:15%;padding-right:15%;background-color:black;color: white;cursor:pointer;font-family:calibri;font-size:20px;border:2px solid blue;box-shadow:3px 3px 3px rgba(0,0,0,1);	opacity:0.8px;'>";
	echo "<th><center>TYPE</center><hr></th><th style='font-size:20px;'><center>Information<hr></center><th></th>";
	echo "<tr><td>Company</td><td>$a</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Model</td><td>$b</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>GET ON ROAD PRICE</td><td>$fetc[2]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Mileage</td><td>$fetc[4]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Engine</td><td>$fetc[5]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Cruise Control</td><td>$fetc[6]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Parking Sensor</td><td>$fetc[7]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Duration</td><td>$fetc[8]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>PERFORMANCE</td><td>$fetc[9]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>COMFORT</td><td>$fetc[10]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>SAFETY</td><td>$fetc[11]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Automatic</td><td>$fetc[12]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Rear AC Vents</td><td>$fetc[13]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>ABS</td><td>$fetc[14]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Driver Airbag</td><td>$fetc[15]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr><td>Roof</td><td>$fetc[16]</td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "</table>";
?>
</div>
<div style="margin-top:2%;position:absolute;right:20%;">
<?php
	echo "<a href='images/cars/$fetc[18]'><center><img src='images/cars/$fetc[18]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fetc[19]'><center><img src='images/cars/$fetc[19]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fetc[20]'><center><img src='images/cars/$fetc[20]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fetc[21]'><center><img src='images/cars/$fetc[21]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fetc[17]'><center><img src='images/cars/$fetc[17]' width='25%' height='25%'></center></a><br>";
	echo "<a href='images/cars/$fetc[22]'><center><img src='images/cars/$fetc[22]' width='25%' height='25%'></center></a><br>";
}
	?>
	</div>
	<?php
echo "</div>";
?>
<div style="padding-top:2%;padding-bottom:2%;position:absolute;left:0%;right:0%;top:180%;background-color:#1abc9c !important;">
	<div style="position:absolute;bottom:5%;right:10%;">
		<p style="color:white; font-size:25px; font-family:Brush Script MT;">Follow us </p>
			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true" id="fb"></i></a>
			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true" id="tw"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true" id="yt"></i></a>
	</div>
	<span style="position:absolute;left:3%;bottom:80%;">More info @ <a href="index.php" style="color:white;"> CLASSYCARS</a></span>
<center><p style="color:white;font-size:25px;position:absolut;bottom:5%;right:5%;">CLASSYCARS</p>
 <b style="font-size:13px;color:white;margin-left:15%;">The online car searching</b></center> <hr color=black;>
 
 <center><pre style="color:white;font-size:15px;margin-top:1%;">Developed by</pre>
 <b style="font-size:20px;color:white;">Classy TEAM</b><br></center>
<center><p style="font-size:12px;position:absolute;left:5%;bottom:5%;color:white;">While using this site, you have to agree read and accept our terms and conditions of use, cookie and privacy policy.</p></center>
 <p style="font-size:12px; position:absolute; bottom:5%;right:10%;color:white;">Copyright 2016. All Rights Reserved.</p>
</div>
</body>
</html>