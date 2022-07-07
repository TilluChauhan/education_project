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
 $dimagename=$_POST['F_dimagename'];
 if(isset($_FILES['F_dimage'])){
	 $dimage=$_FILES['F_dimage'];
	 $redimage=move_uploaded_file($dimage['tmp_name'],'../image/course_detail/'.$dimagename);
 }
 
 //print_r($imagename);
 $trainername=$_POST['F_trainername'];
 $price=$_POST['F_price'];
 $seat=$_POST['F_seat'];
 $starttime=$_POST['F_starttimne'];
 $closedtime=$_POST['F_closedtime'];
 $status=$_POST['F_status'];
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
$sql="UPDATE course SET category='".$course_cat."',course_name='".$name."',image='".$imagename."', dimage='".$dimagename."',trainer_name='".$trainername."', price='".$price."' ,seat='".$seat."' , start_time='".$starttime."', closed_time='".$closedtime."', status='".$status."', description='".$description."' Where course_id='".$id."'";
//print_r($sql);
$result=mysqli_query($conn,$sql);
if($result){
	echo 1;
}else{
	echo 0;
}
?>