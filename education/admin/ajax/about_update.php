<?php include "../config/config.php";
	$id=$_POST['F_id'];
	 $imagename=$_POST['F_imagename'];
	 //print_r($imagename);
 if(isset($_FILES['F_image'])){
	 $image=$_FILES['F_image'];
	 $reimage=move_uploaded_file($image['tmp_name'],'../image/about/'.$imagename);
 // //print_r($image);
// //print_r($reimage); 
  }
	$status=$_POST['F_status'];
	$description=$_POST['F_description'];
	//print_r($id);
	//print_r($imagename);
	// print_r($status);
	 //print_r($description);
	$sql="update  about SET image='".$imagename."', status='".$status."',description='".$description."' Where id='".$id."' ";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}

?>