<?php  include "../config/config.php";
		$id=$_POST['T_id'];
		$name=$_POST['T_name'];
		$status=$_POST['T_status'];
		// print_r($id);
		// print_r($name);
		// print_r($status);
		$sql="Update cat_course  SET cat_name='".$name."', status='".$status."' ";
		$result=mysqli_query($conn,$sql);
		//$row=mysqli_fetch_array($result);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
		
?>