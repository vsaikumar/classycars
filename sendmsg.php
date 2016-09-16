<?php
include 'db.php';
$user=$_POST['user'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];


$to="abcd@gmail.com";
$from="From:".$email;

$a=mail('$to','$sub','$msg','$from');
?>