<?php  include "../config/config.php";

$name=$_POST['T_name'];
$timage=$_FILES['T_image'];
	 $date=date('y-m-d-h-i-s');
	 $timagename=('pic'.$date.'.jpg');
	 //print_r($imagename);
	 $timagemove=move_uploaded_file($timage['tmp_name'],'../image/'.$timagename);
	 $status=$_POST['T_status'];
	 $description=$_POST['T_description'];
	 // print_r($name);
	 // print_r($imagename);
	 // print_r($status);
	 // print_r($description);
	 
	 if($timagemove!=1){
		 echo 2;
	 }else{
		 $sql="insert into testinomial (id,name,image,description,status) value ('','".$name."','".$timagename."','".$description."','".$status."')";
		 //print_r($sql);
		  $result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	 }
	 
	 
?>