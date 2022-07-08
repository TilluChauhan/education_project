<?php
include "../config/config.php";
$id=$_POST['F_id'];
$name=$_POST['F_name'];
	 $status=$_POST['F_status'];
	 $description=$_POST['F_description'];
	 $imagename=$_POST['F_imagename'];
	 print_r($imagename);
 // if(isset($_FILES['F_image'])){
	// $image=$_FILES['F_image'];
	// $reimage=move_uploaded_file($image['tmp_name'],'../image/'.$imagename);
 // //print_r($image);
// //print_r($reimage); 
 // }
	  // print_r($name);
	 // // print_r($imagename);
	  // print_r($status);
	  // print_r($description);
	 // print_r($id);
$sql="UPDATE testinomial SET name='".$name."',image='".$imagename."' , description='".$description."', status='".$status."' Where id='".$id."'";
$result=mysqli_query($conn,$sql);
if($result){
	echo 1;
}else{
	echo 0;
}
?>