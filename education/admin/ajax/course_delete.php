<?php
	include "../config/config.php";

//print_r($delete);
if(isset($_GET['delete'])){
	$delete=$_GET['delete'];
	$sql="delete from course Where course_id='".$delete."'";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	//print_r($result);
	if($result){
		 header('Location:../course_list.php');
	}else{
		 echo 0;
	}
}

?>
