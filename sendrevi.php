<?php
include("db.php");
$a=$_POST['user'];
$b=$_POST['email'];
$c=$_POST['phon'];
$d=$_POST['review'];

$to="abcd@gmail.com";
$from="from".$b;
$e=mail('$to','$d','$c','$from');
?>