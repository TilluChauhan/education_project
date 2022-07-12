<?php include '../config/config.php';
	 session_start();
	$email=$_POST['T_email'];
	$pass=$_POST['T_pass'];
	$mobile=$_POST['T_mobile'];
	if(isset!(filter_var($email,FILTER_VALIDATE_EMAIL))){
		echo "sfef";
	}
	// print_r($email);
	// print_r($pass);
	// print_r($mobile);
// $sql= "select * from user_register Where email='".$email."' && password='".$pass."'";
// //print_r($sql);
// $result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($result);


// if($row){
	// $_SESSION['user_id']=$row['id'];
	// echo 1;
// }else{
	// echo 0;
// }

?>