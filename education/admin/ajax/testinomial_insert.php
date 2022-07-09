 <?php  include "../config/config.php";

 $name=$_POST['T_name'];
$imagename=$_FILES['T_image'];
	$genno=rand(200,1000);
	$down=('pic'.$genno.'.jpg');	
	$downimage=move_uploaded_file($imagename['tmp_name'],'../image/testinomial_img/'.$down);
	//print_r($down);
	//print_r($downimage);
	
	
	 $status=$_POST['T_status'];
	  $description=$_POST['T_description'];
	 // // print_r($name);
	 // // print_r($imagename);
	 // // print_r($status);
	 // // print_r($description);
	 
	 if($downimage!=1){
		  echo 2;
	  }else{
		  $sql="insert into testinomial (id,name,image,description,status) value ('','".$name."','".$down."','".$description."','".$status."')";
		 // //print_r($sql);
		   $result=mysqli_query($conn,$sql);
	if($result){
	 echo 1;
	 }else{
		 echo 0;
	 }
	  }
	 
	 
 ?>