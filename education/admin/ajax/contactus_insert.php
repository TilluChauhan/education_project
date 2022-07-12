<?php 
	include "../config/config.php";
	$url=$_POST['T_googleurl'];
	$location=$_POST['T_location'];
	$email=$_POST['T_email'];
	$mobile=$_POST['T_callus'];
	// print_r($url);
	// print_r($location);
	// print_r($email);
	// print_r($mobile);
	
	$sql="insert into contactus (id,url,location,email,mobile) value ('','".$url."','".$location."','".$email."','".$mobile."')";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}

?>