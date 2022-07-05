
<?php
	include "../config/config.php";
	$id=$_GET['delete'];
	//print_r($id);
	$sql="delete from cat_course Where cat_id='".$id."'";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
	header('location: ../cat_course_list.php');
		
		//echo 1;
	}else{
		echo 'Something Get Wrong';
	}

?>