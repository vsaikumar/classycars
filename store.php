<?php 
include("db.php");
$tye=$_POST['tye'];	
echo $tye;
if($tye=="normal"){
$bran=$_POST['brand'];
$model=$_POST['model'];
$cost=$_POST['cost'];
$millage=$_POST['millage'];
$engine=$_POST['engine'];
$cruis=$_POST['cruis'];
$parkisen=$_POST['parkisen'];
$duaration=$_POST['duaration'];
$perfor=$_POST['perfor'];
$comfort=$_POST['comfort'];
$safety=$_POST['safety'];
$automat=$_POST['automat'];
$reaac=$_POST['reaac'];
$abs=$_POST['abs'];
$draibag=$_POST['draibag'];
$roof=$_POST['roof'];
$dex=$_POST['desc'];
$folder="images/cars/"	;
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $new_file_name = strtolower($file);
 $final_file=str_replace(' ','-',$new_file_name);
 
 $file1 = rand(1000,100000)."-".$_FILES['exp1']['name'];
 $file_loc1 = $_FILES['exp1']['tmp_name'];
 $new_file_name1 = strtolower($file1);
 $final_file1=str_replace(' ','-',$new_file_name1);
 
 $file2 = rand(1000,100000)."-".$_FILES['exp2']['name'];
 $file_loc2 = $_FILES['exp2']['tmp_name'];
 $new_file_name2 = strtolower($file2);
 $final_file2=str_replace(' ','-',$new_file_name2);
 
 $file3 = rand(1000,100000)."-".$_FILES['exp3']['name'];
 $file_loc3 = $_FILES['exp3']['tmp_name'];
 $new_file_name3 = strtolower($file3);
 $final_file3=str_replace(' ','-',$new_file_name3);
 
 $file4 = rand(1000,100000)."-".$_FILES['exp4']['name'];
 $file_loc4 = $_FILES['exp4']['tmp_name'];
 $new_file_name4 = strtolower($file4);
 $final_file4=str_replace(' ','-',$new_file_name4);
 
 $file5 = rand(1000,100000)."-".$_FILES['exp5']['name'];
 $file_loc5 = $_FILES['exp5']['tmp_name'];
 $new_file_name5 = strtolower($file5);
 $final_file5=str_replace(' ','-',$new_file_name5);
 
 $file6 = rand(1000,100000)."-".$_FILES['exp6']['name'];
 $file_loc6 = $_FILES['exp6']['tmp_name'];
 $new_file_name6 = strtolower($file6);
 $final_file6=str_replace(' ','-',$new_file_name6);
 
 $file7 = rand(1000,100000)."-".$_FILES['exp7']['name'];
 $file_loc7 = $_FILES['exp6']['tmp_name'];
 $new_file_name7 = strtolower($file7);
 $final_file7=str_replace(' ','-',$new_file_name7);

if((move_uploaded_file($file_loc,$folder.$final_file)) and (move_uploaded_file($file_loc1,$folder.$final_file1)) and (move_uploaded_file($file_loc2,$folder.$final_file2)) and (move_uploaded_file($file_loc3,$folder.$final_file3)) and (move_uploaded_file($file_loc4,$folder.$final_file4)) and (move_uploaded_file($file_loc5,$folder.$final_file5)) and (move_uploaded_file($file_loc6,$folder.$final_file6))){
	$ql=mysqli_query($con,"INSERT INTO `pahiye`.`$bran` (`sno`, `model`, `cost`, `photo`, `millege`, `Engine`, `Cruisecontrol`, `parkingsensor`, `Duration`, `performance`, `comfort`, `safety`, `Automatic`, `rearacvents`, `abs`, `driverairbag`, `roof`, `car1`, `car2`, `car3`, `car4`, `car5`, `car6`,`browcher`, `desc`) VALUES (NULL, '$model', '$cost', '$file', '$millage', '$millage', '$cruis', '$parkisen', '$duaration', '$perfor', '$comfort', '$safety', '$automat', '$reaac', '$abs', '$draibag', '$roof', '$file1', '$file2', '$file3', '$file4', '$file5', '$file6', '$file7', '$dex')")or die("errorre");
   echo "<script>alert('successfully uploaded');
        window.location.href='admin.html?success';</script>";
}
}
else if($tye=="upcom"){
$bran=$_POST['brand'];
$model=$_POST['model'];
$folder="images/upcoming/";
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $new_file_name = strtolower($file);
 $final_file=str_replace(' ','-',$new_file_name);
 $dex=$_POST['desc'];
 if((move_uploaded_file($file_loc,$folder.$final_file))){
  mysqli_query($con,"INSERT INTO `pahiye`.`upcoming` (`sno`, `brand`, `model`, `photo`, `desc`) VALUES (NULL, '$bran', '$model', '$file', '$dex')")or die("erro");
  echo "<script>alert('success..!');window.location='admin.html';</script>";
 }
}else{
$bran=$_POST['brand'];
$model=$_POST['model'];
$folder="images/videos/";
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $new_file_name = strtolower($file);
 $final_file=str_replace(' ','-',$new_file_name);
 if((move_uploaded_file($file_loc,$folder.$final_file))){
  mysqli_query($con,"INSERT INTO `pahiye`.`vids` (`sno`, `brand`, `model`, `video`) VALUES (NULL, '$bran', '$model', '$file')")or die("erro");
  echo "<script>alert('success..!');window.location='admin.html';</script>";
 }
}
?>