<?php include "../config/config.php";

$id=$_POST['F_id'];
 $course_cat=$_POST['F_cat'];
 $name=$_POST['F_name'];
 
 $imagename=$_POST['F_imagename'];
 if(isset($_FILES['F_image'])){
	$image=$_FILES['F_image'];
	$reimage=move_uploaded_file($image['tmp_name'],'../image/course/'.$imagename);
 //print_r($image);
//print_r($reimage); 
 }

 
 //print_r($imagename);

 $price=$_POST['F_price'];

 $status=$_POST['F_status'];
 $shortdescription=$_POST['F_shortdescription'];
 $description=$_POST['F_description'];

// print_r($id);
// print_r($course_cat);
// print_r($name);
// print_r($trainername);
// print_r($price);
// print_r($seat);
// print_r($starttime);
// print_r($closedtime);
// print_r($status);
// print_r($description);
$sql="UPDATE course SET category='".$course_cat."',course_name='".$name."',image='".$imagename."', price='".$price."', status='".$status."', short_description='".$shortdescription."',description='".$description."' Where course_id='".$id."'";
//print_r($sql);
$result=mysqli_query($conn,$sql);
if($result){
	echo 1;
}else{
	echo 0;
}
?>