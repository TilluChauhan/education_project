<?php include "../config/config.php";

$image=$_FILES['T_image'];
$date=rand(1,10000000);
 $imagename=('pic'.$date.'.jpg');
//print_r($imagename);
$imagemove=move_uploaded_file($image['tmp_name'],'../image/promotion_img/'.$imagename);
$url=$_POST['T_url'];
$status=$_POST['T_status'];
//print_r($img);
//print_r($imagemove);
//print_r($imagename);
 if($imagemove!=1){
		
		 echo 3;
 
	 }else{
	$sql="insert into promotion (id,image,url,status) value ('','".$imagename."','".$url."','".$status."')";
	//print_r($sql);
	$result=mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
}
//print_r($image);
// print_r($url);
// print_r($status);




?>