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
<div id="topheader">
<a href="loginsignup.html" style="margin-left:15%;font-family:Calibri (Body);color:white;"><span class="glyphicon glyphicon-user"></span><span style="font-size:12px;"> SIGN/SIGN UP</span></a>
<a href="language.html" style="margin-left:30px;font-family:Calibri (Body);color:white;"><span class="glyphicon glyphicon-cd"></span><span style="font-size:12px;"> LANGUAGE</span></a>
<a href="search.html" style="margin-left:30px;font-family:Calibri (Body);color:white;"><span class="glyphicon glyphicon-search"></span><span style="font-size:12px;"> SEARCH</span></a>
<span class="glyphicon glyphicon-earphone" style="margin-left:25%;color:white;"></span><span style="color:white; font-family:Calibri (Body);font-size:12px;"> 9123456789</span>
<span class="glyphicon glyphicon-map-marker" style="margin-left:30px;color:white;"></span><span style="color:white;font-family:Calibri (Body);font-size:12px;">abc@gmail.com</span>
</div>
</div>
<div id="downheader">
<img src="images/pahiye_logo.png" width="10%" height="5%" style="position:absolute;top5%;left:12%;">
<a style="font-size:35px;color:white;margin-left:2%;"><span>PAHIYE</span></a>
<a href="index.php"><b><label id="home" class="dropbtn" style="margin-left:35%; cursor: pointer;font-size:14px;">HOME</label></b></a>
<div class="dropdown">
<a style="margn-left:4%;"><label id="new" class="dropbtn"style=" pointer;font-size:14px;">  NEW <span class="glyphicon glyphicon-menu-down"></span></label></a>
 <div class="dropdown-content">
    <a href="index.php"><label> SEARCH CARS </label></a>
    <a href="upcoming.php"><label> UPCOMING CARS </label></a>
	<a href="#"><label> ON ROAD PRICE </label></a>
  </div>
</div>
<a href="comparewith.html"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> COMPARE </label></b></a>
<a href="topmodel.php"><b><label id="tm" class="dropbtn" style="margin-left:0.2%; padding:right:-10px; cursor: pointer; pointer;font-size:14px;"> TOP MODELS </label></b></a>
<a href="newsrevi.php"><b><label id="compare" class="dropbtn" style="margin-left:0%; cursor: pointer; pointer;font-size:14px;"> NEWS & REVIEW </label></b></a>
<a href="http://sbhagavan.blogspot.in"><b><label id="nr" class="dropbtn" style="margin-left:0.2%; padding:right:-10px; cursor: pointer; pointer;font-size:14px;"> BLOG </label></b></a>
<a href="about.php"><b><label id="nr" class="dropbtn" style="margin-left:0.2%; padding:right:-10px; cursor: pointer; pointer;font-size:14px;"> ABOUT </label></b></a>
</div>
<?php
$a=$_POST['brand'];
$b=$_POST['model'];
$_SESSION['bra']=$a;
$_SESSION['mod']=$b;
if(($a==-1) or ($b==-1)){
	echo "<script>alert('Please select any options');
	 window.location='index.php'</script>";
}
$sea=mysqli_query($con,"SELECT * FROM `$a` WHERE 	model='$b'")or die("error");
while($fet=mysqli_fetch_array($sea)){
	echo "<div>";
		echo "<img src='images/cars/$fet[3]' width='70%' style='margin-top:8%;margin-left:30%;border-radius:0.2%;cursor:pointer;'>";
		echo "<h1 style='color: #1abc9c !important;position:absolute;top:35%;margin-left:8%;'>$a</h1>";
		echo "<h1 style='color: blue;position:absolute;top:42%;left:5%;'>$fet[1]</h1>";
	echo "</div>";
?>
<script>
	$(document).ready(function(){
	$("#com").click(function(){
		$(".carsp").fadeIn("fast");
		$("#new").fadeIn("fast");
		$("#pho").hide();
		});
		$("#spe").click(function(){
		$("#pho").fadeIn("fast");
		$(".carsp").fadeout("fast");
		$("#new").fadeIn("fast");
	});
	$("#news").click(function(){
		$("#pho").fadeout("fast");
		$("#compare").fadeOut("fast");
		$("#new").fadeIn("fast");
	});
});
</script>
<div style="position:absolute;top:11%;right:79.5%;" id="specipi">
<?php
	echo "<table border='1' cellpadding='15px' style='opacity:0.6;padding-left:30%;padding-right:30%;background-color:black;color: white;cursor:pointer;font-family:calibri;font-size:20px;border:2px solid blue;box-shadow:3px 3px 3px rgba(0,0,0,1);	opacity:0.8px;'>";
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
	<div id="new" style="background-color:black;opacity:0.8;margin-top:5%;padding-right:-50%; border-radius:5px;padding:5%;">
<p style="color:white;"><?php echo $fet[24] ?></p>
</div>
	<?php
?>
</div>
<div style="margin-top:3%;margin-left:30%;">
<button id="spe" style="">SPECIFICATIONS</button>
<button id="com">COMPARE WITH</button>
<button id="news">NEWS ABOUT CAR</button>
</div>
<div id="pho">
<?php
echo "<table>";
echo "<tr id='fir'><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[22]'><center><img src='images/cars/$fet[22]' width='60%' height='50%'></center></a></td><td style='padding:5px;border-radius:5px;'><span style='margin-top:5%;'><h3>CAR</h3></sapn><br><br><p>Its internal cabin is bestowed with an improved fabric upholstery, which gives it a refined look. The modifications inside include the new faux wood finish on the dashboard.</p></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr id='sec'><td style='padding:5px;border-radius:5px;'><span><h3>ENGINE</h3></sapn><br><p>The advanced D-4D engine has a common rail fuel injection technology. It has the ability to produce a minimum mileage of 20.32 Kmpl on city roads.</p></td><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[19]'><center><img src='images/cars/$fet[19]' width='50%' height='45%'></center></a></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr id='thi'><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[20]'><center><img src='images/cars/$fet[20]' width='60%' height='50%'></center></a></td><td style='padding:5px;border-radius:5px;'><span style='margin-top:5%;'><h3>EXTERIER</h3></sapn><br><br><p>This is currently available with both petrol and diesel engine options. It has a 1.4-litre D-4D diesel engine, which is integrated with common rail fuel injection technology.</p></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr id='for'><td style='padding:5px;border-radius:5px;'><span><h3>SAFETY</h3></sapn><br><p>Both the drive trains have been mated with an advanced five speed manual transmission gearbox. The 1197cc motor allows it to accelerate from 0 to 100 kmph .</p></td><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[21]'><center><img src='images/cars/$fet[21]' width='50%' height='45%'></center></a></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr id='fif'><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[17]'><center><img src='images/cars/$fet[17]' width='60%' height='50%'></center></a></td><td style='padding:5px;border-radius:5px;'><span><h3>COMFORT</h3></sapn><br><p>The limited edition variants have been offered with a modish set of 15 inch, diamond cut alloy wheels that brings its sides a sporty appeal.</p></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
	echo "<tr id='six'><td style='padding:5px;border-radius:5px;'><span><h3>MILLEGE</h3></sapn><br><p>It is equipped with a sophisticated 2-DIN music system that includes a CD player and radio.socket along with Bluetooth function.</p></td><td style='padding:5px;border-radius:5px;'><a href='images/cars/$fet[18]'><center><img src='images/cars/$fet[18]' width='50%' height='45%'></center></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
echo "</table>";
}
	?>
	</div>
		<div class="carsp" style="display:none;text-align:right;">
	<center>
	<form action="compare.php" method="post">
	<h2 style="color:#1abc9c !important; font-family:Arial; top:15px; position: relative;"><b>Compare with</b></h2>
	<p style="position:relative; padding:0px; top:40px;color:white;"><b>Select Brand :</b></p>
	<select name="brands" class="form-control" style="position: relative; top:50px;width:80%;height:12%;">
 		 <option value="">---Select One---</option>
		 <option value="AUDI">BENZ</option>
	</select>	
	<p style="position:relative; padding:0px; top:60px;color:white;"><b>Select Modal :</b></p>
	<select name="models" class="form-control" style="position: relative; top:70px;width:80%;height:12%;">
 		 <option value="-1">---Select One---</option>
		 <option value="spencers">CARR</option>
		 <option value="asa">asa</option> 
	</select>
	<button class="carsh">Search</button>
	</form>
	</center>
	</div>	
<div style="padding-top:2%;padding-bottom:2%;position:absolute;left:0%;right:0%;top:400%;;background-color:#1abc9c !important;">
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