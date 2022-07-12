<?php	include "../config/config.php";
	$delete=$_GET['delete'];
	//print_r($delete);
	$sql="delete from contactus Where id='".$delete."'";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('location:../contactUs_page_list.php');
		
	}else{
		echo "not delete";
	}

?>