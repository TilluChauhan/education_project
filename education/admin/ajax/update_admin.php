<?php 
	include "../config/config.php";
	$id=$_POST['T_id'];
	
	$name=$_POST['T_name'];
	$email=$_POST['T_email'];
	$pass=$_POST['T_pass'];
	$mobile=$_POST['T_mobile'];
	// print_r($id);
	// print_r($name);
	// print_r($email);
	// print_r($pass);
	// print_r($mobile);
	$sql="update admin_login SET name='".$name."',  email='".$email."' ,password='".$pass."', mobile='".$mobile."' where id='".$id."' ";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	

?>