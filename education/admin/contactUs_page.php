<?php include "config/config.php";
	session_start();
	
	if(isset($_SESSION['adminlog']) && $_SESSION['adminlog']!= ''){
		$id=$_SESSION['adminlog'];
	//print_r($id);
	$sql="select * from admin_login Where id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$srow=mysqli_fetch_array($result);
	
	
	//print_r($srow);
	}
	if(!isset($_SESSION['adminlog'])){
		header('location:login.php');
	}
	$addmode=true;
	$id=null;
	$url=null;
	$location=null;
	$email=null;
	$mobile=null;
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		//print_r($id);
		$addmode=false;
		$sql="select * from contactus  Where id='".$id."'";
		$result=mysqli_query($conn,$sql);
		///print_r($result);
		$row=mysqli_fetch_array($result);
		$url=$row['url'];
		$location=$row['location'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		
	}
	?><!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Tables</a>
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
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7 " >
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow" style="padding:0px 10px;">
            <div class="card-header border-0">
              <h3 class="mb-0">Contact Us</h3>
			  <div style="text-align:center;">	</div>
            </div>
            <div class="table-responsive">
              <div class="row">
				
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Google Url</label>
					  <textarea type="url" class="form-control" rows="3" cols="50" id="url"><?php echo $url;?></textarea>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Location</label>
					  <input type="text" class="form-control"  value="<?php echo $location;?>" id="location">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Email</label>
					  <input type="email" class="form-control"  value="<?php echo $email;?>" id="email">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Call Us</label>
					  <input type="number" class="form-control"  value="<?php echo $mobile;?>" id="number">
					</div>
				</div>
				
				
				<!--<div class="col-lg-12 col-md-12">
					<div class="form-group">
					  <label for="usr">Description</label>
					   <input type="text" class="form-control" id="about"  value="" placeholder="Enter Feature" >
					</div>-->
				</div>
				<div style="text-align:center;">
				<?php if($addmode){
					?><button type="button" class="btn btn-primary" id="add">Add</button>
					<?php
				}else{
					?><button type="button" class="btn btn-primary" id="edit">Update</button>
					<?php
				}?>
				
				
				
					
						
					
				
				 </div>
			  </div>
			 
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      
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
	
	<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
	
	<!--script-->
  <script>
   // CKEDITOR.replace('description');
	//CKEDITOR.replace('about');
	

	window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
	  $(document).ready(function(){
		$('#add').click(function(){
			var  GoogleUrl=$('#url').val();
			var location=$('#location').val();
			var email=$('#email').val();
			var callus=$('#number').val();
			console.log(GoogleUrl);
			console.log(location);
			console.log(email);
			console.log(callus);
				
				var data={
					"T_googleurl":GoogleUrl,
						"T_location":location,
						"T_email":email,
						"T_callus":callus
						};
						console.log(data);
				 $.ajax({
					type:"POST",
					url:"ajax/contactus_insert.php",
					data:data,
					success:function(resp){
						//console.log(resp);
						//console.log(resp);
						if(resp==1){
							
							swal({
							  title: "Good job!",
							  text: "You have Successfully Add Your Data!",
							  icon: "success",
							  button: "Aww yiss!",
							});
							$('.swal-button-container').click(function(){
								//console.log('Tuhsar');
								window.location.href="contactUs_page_list.php";
							});
						}else{
							swal({
							  title: "Oops!",
							  text: "You have not Add Your Data Please Check!",
							  icon: "error",
							  button: "Aww yiss!",
							});
						}
					
					}
				 });
						
		});
		//edit work
		$('#edit').click(function(){
			var id="<?php echo $id?>";
			var  GoogleUrl=$('#url').val();
			var location=$('#location').val();
			var email=$('#email').val();
			var callus=$('#number').val();
			console.log(GoogleUrl);
			console.log(location);
			console.log(email);
			console.log(callus);
				
				var data={
					"F_id":id,
					"F_googleurl":GoogleUrl,
						"F_location":location,
						"F_email":email,
						"F_callus":callus
						};
						console.log(data);
				 $.ajax({
					type:"POST",
					url:"ajax/contactus_update.php",
					data:data,
					success:function(resp){
						//console.log(resp);
						if(resp==1){
							swal({
							  title: "Good job!",
							  text: "You have Successfully Update Your Data!",
							  icon: "success",
							  button: "Aww yiss!",
							});
							$('.swal-button-container').click(function(){
								//console.log('Tuhsar');
								window.location.href="contactUs_page_list.php";
							});
						}else{
							swal({
							  title: "Oops!",
							  text: "You have not Update Your Data Please Check!",
							  icon: "error",
							  button: "Aww yiss!",
							});
						}
					}
				 });
						
		});
	  });
	  
	  
  </script>
  
</body>

</html>