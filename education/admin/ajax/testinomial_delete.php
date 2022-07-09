<?php 
include "../config/config.php";
$delete=$_GET['delete'];
//print_r($delete);
$sql="delete from testinomial Where  id='".$delete."'";
$result=mysqli_query($conn,$sql);
if($result){
	header('Location:../testinomial_list.php');
}else{
	echo "something get wrong";
}


?>