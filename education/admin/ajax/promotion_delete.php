<?php include "../config/config.php";
	$delete=$_GET['delete'];
	//print_r($delete);
	$sql="delete from promotion Where id='".$delete."'";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		header('Location:../promotion_list.php');
	}else{
		echo "something Get Wrong";
	}
?>