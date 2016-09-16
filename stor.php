<?php
include("db.php");
$a=$_POST['user']; 	
$b=$_POST['pass'];
$c=$_POST['phone'];
$d=$_POST['email'];
if((isset($a)) and (isset($b)) and (isset($c)) and (isset($d))){
$sss=mysqli_query("INSERT INTO `pahiye`.`regis` (`sno`, `user`, `pass`, `phone`, `email`) VALUES (NULL, '$a', '$b', '$c', '$d')")or die("errorrr");
echo "<script>alert('success');</script>";
}else{
	echo "<script>alert('pleas`e provide all');
	  window.location='loginsignup.html'</script>";
}
?>