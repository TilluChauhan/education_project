<?php
include "../config/config.php";
$image=$_FILES['T_image'];
$img=rand(1,1000);
$imagename=('pic'.$img.'.jpg');
//print_r($imagename);
$imgmove=move_uploaded_file($image['tmp_name'],'../image/about/'.$imagename);
$status=$_POST['T_status'];
$description=$_POST['T_description'];

//print_r($imgmove);
if($imgmove!=1){
	echo 3;
	
}else{
	$sql="insert into about (id,image,status,description) value('','".$imagename."','".$status."','".$description."')";
	
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
}
// print_r($status);

// print_r($description);


?>