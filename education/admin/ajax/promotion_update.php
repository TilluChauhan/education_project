<?php include "../config/config.php";
	$id=$_POST['F_id'];
	$imagename=$_POST['F_imagename'];
	 //print_r($imagename);
 if(isset($_FILES['F_image'])){
	 $image=$_FILES['F_image'];
	 $reimage=move_uploaded_file($image['tmp_name'],'../image/promotion_img/'.$imagename);
 // //print_r($image);
// //print_r($reimage); 
  }
	$url=$_POST['F_url'];
	$status=$_POST['F_status'];
	
	// print_r($id);
	// print_r($url);
	// print_r($status);
	
	$sql="Update promotion SET image='".$imagename."',url='".$url."',status='".$status."' Where id='".$id."'";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
		
	}
	


?>