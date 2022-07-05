<?php include "../config/config.php";
	$name=$_POST['T_name'];
	$status=$_POST['T_status'];
	// print_r($name);
	// print_r($status);
	$sql="insert into cat_course (cat_id,cat_name,status)value ('','".$name."','".$status."')";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	

?>