<?php include "../config/config.php";
	$category=$_POST['T_category'];
	$name=$_POST['T_name'];
	//image start
	$image=$_FILES['T_image'];
	
	$date=date('y-m-d-h-i-s').rand(1,10000000);
	$imagename=('pic'.$date.'.jpg');
	//print_r($imagename);
	$imagemove=move_uploaded_file($image['tmp_name'],'../image/course/'.$imagename);
	// $downimage=move_uploaded_file($imagename['tmp_name'],'../image/upload/'.$down);
	//print_r($imagemove);
	
	//image closed
	//dimage start 
	
	$dimage=$_FILES['T_dimage'];
	$date1=date('y-m-d-h-i-s').rand(1,1000000);
	$dimagename=('pic'.$date1.'.jpg');
	$dimagemove=move_uploaded_file($dimage['tmp_name'],'../image/course_detail/'.$dimagename);
	//$dimagemove=move_uploaded_file($dimage['tmp_name'],'../image/course_detail/	'.$dimagename);
	//print_r($dimagename);
	//print_r($dimagemove);
	
	$trainername=$_POST['T_trainername'];
	$price=$_POST['T_price'];
	$seat=$_POST['T_seat'];
	$starttime=$_POST['T_starttimne'];
	$closedtime=$_POST['T_closedtime'];
	$status=$_POST['T_status'];
	$description=$_POST['T_description'];
	
	
	// print_r($category);
	// print_r($name);
	// print_r($image);
	// print_r($dimage);
	// print_r($trainername);
	// print_r($price);
	// print_r($starttime);
	// print_r($closedtime);
	// print_r($status);
	// print_r($description);
	
 $sql="insert into course (course_id,category,course_name,image,dimage,trainer_name,price,seat,start_time,closed_time,status,description) Value('','".$category."','".$name."','".$imagename."','".$dimagename."','".$trainername."','".$price."','".$seat."','".$starttime."','".$closedtime."','".$status."','".$description."')";
	// print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	
	
?>