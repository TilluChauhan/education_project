<?php
include "../config/config.php";
	$id=$_POST['F_id'];
	$url=$_POST['F_googleurl'];
	$location=$_POST['F_location'];
	$email=$_POST['F_email'];
	$mobile=$_POST['F_callus'];
	// print_r($url);
	// print_r($location);
	// print_r($email);
	// print_r($mobile);
	$sql="Update contactus SET url='".$url."',location='".$location."', email='".$email."', mobile='".$mobile."'
	Where id='".$id."' ";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	


?>