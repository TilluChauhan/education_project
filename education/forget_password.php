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
				<div class="qq345">
					<img src="image/forget.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 qa1">
				<div class="qq1 qw">
				<div class="qq33">
					<i class="fa-solid fa-user-graduate"></i>
				</div>
				<h2 class="qq2">forget Password</h2>
				<form>
				
				
				<div class="form-group wq2">
					<label for="email" class="wq1">Email address:<span id="emptyuseremail" style="font-weight:bold; color:#5fcf80; font-style:italic;"></span></label>
					<input type="text" class="form-control" placeholder="Enter email" id="useremail">
				 </div>
				
				
				 <div class="mp66">
						 <button type="button"  id="login" style="background-color:#5fcf80; font-weight:bold; border:1px solid #5fcf80;" class="btn btn-success">Login</button>
						
				</div>
				<a  href="user_login.php">Login</a>
				 <p>Do not have account?<a  href="signup.php">register</a></p>
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
		$('#login').click(function(){
			
			$('#useremail').keyup(function(){
				$('#emptyuseremail').html('');
			});
			$('#userpwd').keyup(function(){
				$('#emptyuserpass').html('');
			});
			$('#usermobile').keyup(function(){
				$('#emptyuserno').html('');
			});
			
			var email=$('#useremail').val();
			var pass=$('#userpwd').val();
			var mobile=$('#usermobile').val();
			
			console.log(email);
			console.log(pass);
			console.log(mobile);
			 if(email == ''){
				$('#emptyuseremail').html('*please enter your email');
				return false;
			}else if(pass == ''){
				$('#emptyuserpass').html('*please enter your password');
				return false;
			}else if(mobile == ''){
				$('#emptyuserno').html('*please enter your password');
				return false;
			}
			
			var data=new FormData();
			
			data.append('T_email',email);
			data.append('T_pass',pass);
			data.append('T_mobile',mobile);
			 
			 console.log(data);
			 $.ajax({
			type:'POST',
			url:"admin/ajax/user_register_login.php",
			contentType:false,
			processData:false,
			data:data,
			success:function(res){
				//console.log(res);
				if(res==1){
					window.location.href="index.php";
				}else{
					swal({
					  title: "oops!",
					  text: "please check your entity",
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