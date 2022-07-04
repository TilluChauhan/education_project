<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
	include "config/config.php";
	session_start();
	
	if(isset($_SESSION['adminlog']) && $_SESSION['adminlog']!= ''){
		$id=$_SESSION['adminlog'];
	//print_r($id);
	
	//print_r($srow);
	}
	
	$sql="select * from admin_login Where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	if(!isset($_SESSION['adminlog'])){
		header('location:login.php');
	}
	
$srow=mysqli_fetch_array($result);


$Addmode=true;
//$id=null;
$name=null;
$email=null;
$password=null;
$mobile=null;


if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	
	$sql="select *  from admin_login where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	
	$Addmode=false;
	
	//$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
	$mobile=$row['mobile'];
	//print_r($result);
	// print_r($id);
	// print_r($name);
	// print_r($email);
	// print_r($password);
	// print_r($mobile);

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
 	<!--head-->
  <?php include "common/head.php";?>
  <!--head-->
</head>

<body class="">
<!--sidenav-->
  <?php include "common/sidenav.php";?>
  <!--sidenav-->
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">User Profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <?php include "common/user.php";?>
		<!-- User -->
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="image/team-4-800x800.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
                <hr class="my-4" />
                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  
                  <div class="row">
				  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Name</label>
                        <input type="text" id="name" class="form-control form-control-alternative" placeholder="enter your name" value="<?php echo $name;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Email</label>
                        <input type="text" id="email" class="form-control form-control-alternative" placeholder="enter your email" value="<?php echo $email;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input type="text" id="pass" class="form-control form-control-alternative" placeholder="enter your password" value="<?php echo $password;?>">
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Mobile</label>
                        <input type="text" id="mobile" class="form-control form-control-alternative" placeholder="number" value="<?php echo $mobile;?>">
                      </div>
                    </div>
					
                  </div>
				   <?php 
						if($Addmode){
							
						
						?>
						<button type="button" class="btn btn-primary" id='add'>Add</button>
						<?php
						}else{
							
							?>
							<button type="button" class="btn btn-primary" id="edit">edit</button>
							<?php
						}
					?>
				 
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
   <!--script-->
  <?php include "common/script.php";?>
  <!--script-->
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
	  $(document).ready(function(){
		 $('#edit').click(function(){
			//console.log('afgsdty'); 
			var id="<?php echo $id;?>";
			var name=$('#name').val();
			var email=$('#email').val();
			var pass=$('#pass').val();
			var mobile=$('#mobile').val();
			// console.log(id);
			// console.log(name);
			// console.log(email);
			// console.log(pass);
			// console.log(mobile);
			
			var data={"T_id":id,"T_name":name,"T_email":email,"T_pass":pass,"T_mobile":mobile};
			console.log(data);
			
			$.ajax({
				type:"POST",
				url:"ajax/update_admin.php",
				data:data,
				success:function(res){
					if(res==1){
						swal({
						  title: "Good job!",
						  text: "You have successfully update data",
						  icon: "success",
						});
						$('.swal-button-container').click(function(){
							window.location.href="admin_register_list.php";
						});
					}else{
						swal({
						  title: "Oops",
						  text: "Something Get Wrong Please Check",
						  icon: "warning",
						});
						
					}
					//console.log(res);
				}
				
			});
		 });
	  });
  </script>
</body>

</html>