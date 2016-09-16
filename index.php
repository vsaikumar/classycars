<html>
<head>
<title>Classycars</title>
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
</head>
<style>
body{
	background-image: url("images/bg.jpg");
	background-size: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>

<div id="downheader">
	
<a style="font-size:35px;color:white;margin-left:2%;" href="index.php"><span style="text-decoration:none;">Classycars</span></a>
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
</div>
<h1 style="margin-top:30%;margin-left:300px;color:orange;">FIND YOUR ROAD PARTNER</h1>
<br>
<div class="container">
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:500px;">Search Here</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p><div  style="position:relative;top:0px">
	
	<form action="indi.php" method="post">
	<h2 style="color:#1abc9c !important; font-family:Arial; top:15px; position: relative;"><b>SEARCH</b></h2>
	<p style="position:relative; padding:0px; top:40px;color:white;"><b>Select Brand :</b></p>
	<select name="brand" class="form-control" style="position: relative; top:50px;width:80%;height:12%;">
 		 <option value="-1">---Select Brand---</option>
		 <option value="audi">audi</option>
		  <option value="mercedes-benz">MERCEDES-BENZ</option>
	</select>	
	<p style="position:relative; padding:0px; top:60px;color:white;"><b>Select Modal :</b></p>
	<select name="model" class="form-control" style="position: relative; top:70px;width:80%;height:12%;">
 		 <option value="-1">---Select Model---</option>
		 <option value="a3">CARR</option>
		 <option value="a3">mercedes-benz-a-class</option>
		 <option value="a3">mercedes-benz-b-class</option>
	</select>
	<button class="carsh">Search</button>
	</form>
	</center>
</div>

</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>





<div id="container" class="containeri" style="z-index:0;margin-top:11.5%;">
		<ul id="scene" class="scene" style="z-index:0;">
			<li  class="layer" data-depth="0.00">
			<div style="width:100%;height:1%;">	
			<li id="car" class="layer" data-depth="0"><img style="margin-top: 0%;" src="images/v1.png"></li>
		</ul>
	</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.parallax.min.js"></script>
<script>
$('#scene').parallax();
$(window).scroll(function() {
var ratio = $(window).scrollTop()*1;
	$('#car').css('left', ratio);
});
</script>

	<div class="parallax">
		<div class="txt">
			<h2>Those brands are the best top models. These are the top models in <br> their looking, performance, status etc.. We have collected<br></h2>
		</div>
		<center>
		<div id="parallaxi" class="cont">
			<div class="mat sha"><a data-toggle="modal" data-target="#mercedes"><img src="images/3.png"></a></div>
			<div class="mat2 sha"><a data-toggle="modal" data-target="#audi"><img src="images/4.png"></a></div>
			<div class="mat3 sha"><a data-toggle="modal" data-target="#lomborgini"><img src="images/5.png"></a></div>
			<div class="mat4 sha"><a data-toggle="modal" data-target="#bmw"><img src="images/6.png"></a></div>
			<div class="mat5 sha"><a data-toggle="modal" data-target="#sj"><img src="images/7.png"></a></div>
			<div class="mat6 sha"><a data-toggle="modal" data-target="#bugatti"><img src="images/8.png"></a></div>
			<div class="mat7 sha"><a data-toggle="modal" data-target="#ducati"><img src="images/9.png"></a></div>
			<div class="mat8 sha"><a data-toggle="modal" data-target="#bentley"><img src="images/10.png"></a></div>
			<div class="mat9 sha"><a data-toggle="modal" data-target="#rollsroyce"><img src="images/11.png"></a></div>
		</div>
		</center>
	</div>
	<div class="container">
	<div class="modal fade" id="mercedes" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/3.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="audi" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/4.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="lomborgini" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/5.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="bmw" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/6.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="sj" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/7.jpg">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="bugatti" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/8.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="ducati" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/9.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="bentley" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/10.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<div class="container">
	<div class="modal fade" id="rollsroyce" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content"> 
			<div class="modal-header">
			</div>
				<img src="images/11.png">
				<p style="color:black;">It an one of the model benzAside from these,<br> no more changes have been made thus, indicating to<br> the availability of all other regular stuff.</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
	</div>
	</div>
	<center>


</body>
</html>