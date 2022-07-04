<?php include "../config/config.php";
session_start();
	$email=$_POST['T_email'];
	$password=$_POST['T_password'];
	// print_r($email);
	// print_r($password);

$sql="select * from  admin_login Where email='".$email."' && password='".$password."' ";
//print_r($sql);
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if($row){
	
	$_SESSION['adminlog']=$row['id'];
	$sid=$_SESSION['adminlog'];
	//print_r($sid);
	echo 1;
}else{
	echo 0;
}
?>