<?php include "admin/config/config.php";
 
 $sql="select * from user_register";
 $result=mysqli_query($conn,$sql);
 // while($row=mysqli_fetch_array($result)){
	 // $email=$row['email'];
	 // print_r($email); 
 // }
 while($regrow=mysqli_fetch_array($result)){
 
 
     //$demail=$regrow['email'];
	 // print_r($regrow);
	 $demail=$regrow['email'];
	 echo $demail."<br>";
	 
	 
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--head start-->	
  <?php include "common/head.php";?>
  <!--head end<!--head start-->
</head>

<body>


 <section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="q1">
				  <h1>Education Courses</h1>
				</div>
			</div>
		</div>
		<div class="row row2">
			<div class="col-lg-6 col-md-6 qa">
				<div class="qq1">
					<img src="image/edc.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 qa1">
				<div class="qq1 qw">
				<div class="qq33">
					<i class="fa-solid fa-user-graduate"></i>
				</div>
				<h2 class="qq2">Register User</h2>
				<form>
				<div class="form-group ">
					  <label for="name" style="font-weight:bold;">Gender:</label>
						<select name="cars" id="gender">
						 <option value="">Gender</option>
						  <option value="Mr.">Mr.</option>
						  <option value="Mr.">Mrs.</option>
						  
						</select><span id="emptygender" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
				</div>
				<div class="form-group wq2">
					<div class="row">
						
						<div class="col-lg-6 col-md-6">
							<label for="name" class="wq1">First Name:<span id="emptyfname" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
							<input type="text" class="form-control" placeholder="Enter first name" id="fname">
						</div>
						<div class="col-lg-6 col-md-6">
							<label for="name" class="wq1">Last Name:<span id="emptylname" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
							<input type="text" class="form-control" placeholder="Enter last name" id="lname">
						</div>
					</div>
				</div>
				<div class="form-group wq2">
					  <label for="usr" class="wq1">Image:</label>
					  <input type="file" class="form-control" id="image" required>
				</div>
				<div class="form-group wq2">
					<label for="email" class="wq1">Email address:<span id="emptyemail" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span><span id="dubemail" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
					<input type="text" class="form-control" placeholder="email@gmail.com" id="email">
				 </div>
				 <div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="form-group wq2">
							<label for="pwd" class="wq1">Password:<span id="emptypass" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
							<input type="text" class="form-control" placeholder="Enter password" id="pwd">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group wq2">
							<label for="pwd" class="wq1"> confirm Password:<span id="cemptypass" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span><span id="conemptypass" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
							<input type="text" class="form-control" placeholder="Enter password" id="cpwd">
						 </div>
					</div>
				 </div>
				 <div class="form-group wq2" >
					<label for="name" class="wq1">Address:<span id="emptyaddress" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
					<input type="text" class="form-control" placeholder="Enter address" id="address">
				 </div>
				 
				 <div class="form-group wq2" >
					<label for="name" class="wq1">Enter Mobile:<span id="emptyno" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
					<input type="number" class="form-control" placeholder="Enter mobile" id="mobile">
				 </div>
				 <div class="mp66">
						 <button type="button"  id="sign" style="background-color:#5fcf80; font-weight:bold; border:1px solid #5fcf80;" class="btn btn-success">Sign Up</button>
						
				</div>
				 <p>Do not have account?<a  href="signup.php">register<span>/</span><span><a href="user_login.php">Login</a></span></a></p>
				</form>
				</div>
			</div>
		</div>
	</div>
 </section>



  <!-- Vendor JS Files -->
  <!--script start-->
 <?php include "common/script.php";?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!--script end-->
<script>
	$(document).ready(function(){
		$('#sign').click(function(){
			$('#gender').change(function(){
				$('#emptygender').html('');
			});
			$('#fname').keyup(function(){
				$('#emptyfname').html('');
			});
			$('#lname').keyup(function(){
				$('#emptylname').html('');
			});
			
			
			$('#email').keyup(function(){
				$('#emptyemail').html('');
			});
			$('#email').keyup(function(){
				$('#dublicateemail').html('');
			});
			$('#pwd').keyup(function(){
				$('#emptypass').html('');
			});
			$('#cpwd').keyup(function(){
				$('#cemptypass').html('');
			});
			$('#address').keyup(function(){
				$('#emptyaddress').html('');
			});
			$('#mobile').keyup(function(){
				$('#emptyno').html('');
			});
			
			var gender=$('#gender').val();
			var fname=$('#fname').val();
			var lname=$('#lname').val();
			var image =$('#image')[0].files[0];
			var email=$('#email').val();
			var pass=$('#pwd').val();
			var cpass=$('#cpwd').val();
			var address=$('#address').val();
			var mobile=$('#mobile').val();
			var dataemail="<?php echo $demail;?>";
			 console.log(dataemail);
			 
			// console.log(gender);
			// console.log(fname);
			// console.log(lname);
			// console.log(image);
			// console.log(email);
			// console.log(pass);
			// console.log(cpass);
			 //console.log(address);
			// console.log(mobile);
			if( dataemail == email){
				 //console.log('Tushar');
				 $('#dubemail').html('email is already exist');
				 return false;
			 }else if(gender== ''){
				$('#emptygender').html('* please choose your gender');
				return false;
				
			}else if(fname == ''){
				$('#emptyfname').html('*please enter first name');
				return false;
			}else if(lname == ''){
				$('#emptylname').html('*please enter last name');
				return false;
			}
			else if(email == ''){
				$('#emptyemail').html('*please enter your email');
				return false;
			}else if(pass == ''){
				$('#emptypass').html('*please enter your password');
				return false;
			}else if(cpass == ''){
				$('#cemptypass').html('*please enter your Confirm password');
				return false;
			}else if(address == ''){
				$('#emptyaddress').html('*please enter your address');
				return false;
			}else if(mobile == ''){
				$('#emptyno').html('*please enter your mobile');
				return false;
			}


			
			if(pass!=cpass){
				$('#conemptypass').html('*miss match password');
				 return false;
			}
			// if(pass == cpass){
				// console.log('sgsgdrhftjy');
				
			// }else{
				// //console.log('tushar');
				// $('#conemptypass').html('*miss match password');
				// return false;
			// }
			
		
			var data=new FormData();
			data.append('T_gender',gender);
			data.append('T_fname',fname);
			data.append('T_lname',lname);
			data.append('T_image',image);
			data.append('T_email',email);
			data.append('T_pass',pass);
			data.append('T_address',address);
			data.append('T_mobile',mobile);
			 
			 console.log(data);
			 $.ajax({
			type:'POST',
			url:"admin/ajax/user_register_insert.php",
			contentType:false,
			processData:false,
			data:data,
			success:function(res){
				//console.log(res);
				if(res== 1){
					window.location.href = "user_login.php";
					
				}else{
					swal({
						  title: "Something Get!",
						  text: "Please check your entity",
						  icon: "warning",
						});
				}
				
			}
			
		});
		
		});
		
		
		
		
	});
</script>
</body>

</html>