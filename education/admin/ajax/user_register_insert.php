<?php include "../config/config.php";
	$gender=$_POST['T_gender'];
	$fname=$_POST['T_fname'];
	$lname=$_POST['T_lname'];
	$image=$_FILES['T_image'];
	
	$gen=rand(1,10000);
	$img=('pic'.$gen.'.jpg');
	$down=move_uploaded_file($image['tmp_name'],'../image/user_image/'.$img);
	
	$email=$_POST['T_email'];
	$pass=$_POST['T_pass'];
	$address=$_POST['T_address'];
	$mobile=$_POST['T_mobile'];
	
	//print_r($down);
	// print_r($gender);
	// print_r($fname);
	// print_r($lname);
	// print_r($image);
	// print_r($img);
	// print_r($email);
	// print_r($pass);
	// print_r($address);
	// print_r($mobile);
	
	$xsql="select * from  user_register  where email='".$email."'";
	$result=mysqli_query($conn,$xsql);
	$row=mysqli_fetch_array($result);
	
	
	if($row>0){	
		echo 3;
	}else{
		//echo "sdgdf";
		$sql="insert into user_register(id,gender,first_name,last_name,image,email,password,address,mobile) value('','".$gender."','".$fname."','".$lname."','".$img."','".$email."','".$pass."','".$address."','".$mobile."');";

 $result=mysqli_query($conn,$sql);

	///		 print_r($result);
	 if($result){
		  echo 1;
	  }else{
		 // echo 0;
	 }
	}

  


?>