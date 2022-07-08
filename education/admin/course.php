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
	
	$catsql="select * from cat_course";
	$catresult=mysqli_query($conn,$catsql);
	// while($catrow=mysqli_fetch_array($catresult)){
		// print_r($catrow);
	// }
		$addmode=true;
	$course_id=null;
	$category=null;

	$course_name=null;
	$image=null;
	
	$price=null;
	$seat=null;
	
	$status=null;
	$shortdescription=null;
	$description=null;

	if(isset($_GET['edit'])){
		
		$course_id=$_GET['edit'];
		$addmode=false;
		$editsql="select  * from  course Where course_id='".$course_id."' ";
		$editresult=mysqli_query($conn,$editsql);
		$editrow=mysqli_fetch_array($editresult);
		//print_r($editrow);
		$course_name=$editrow['course_name'];
		$category=$editrow['category'];
		$image=$editrow['image'];
	
			
		$price=$editrow['price'];
		$status=$editrow['status'];
		//$description=$editrow['description'];
		$shortdescription= trim ($editrow['short_description']);
		$description= trim ($editrow['description']);
		
		//print_r($description);
		
		
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
              <h3 class="mb-0"> Course </h3>
			  <div style="text-align:center;">	</div>
            </div>
            <div class="table-responsive">
              <div class="row">
			  <div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="cars">Course Category<span id="emptycat" style="font-weight:bold; padding-left:5px;"></span></label>

						<select   style="width:100%;" name="course" id="course">
						  <option value="<?php echo $category;?>"><?php if($addmode){
							  
							  ?>Choose Category
							  <?php
							  }else{
								  ?>
								  <?php echo $category;?>
								  <?php
							  }?>
							  </option>
						  <?php while($catrow=mysqli_fetch_array($catresult)){
							  ?> <option value="<?php echo $catrow['cat_name'];?>"><?php echo $catrow['cat_name'];?></option>
						  
							<?php
						  }?>
						 
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Course_Name<span id="emptyname" style="font-weight:bold; padding-left:5px;" ></span></label>
					  <input type="text" class="form-control" placeholder="Enter course name"  value="<?php echo $course_name;?>" id="name">
					  
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Image<span id="emptyimage" style="font-weight:bold; padding-left:5px;" ></span></label>
					  <input type="file" class="form-control"  value="" id="image">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Price<span id="emptyprice" style="font-weight:bold; padding-left:5px;" ></span></label>
					  <input type="number" class="form-control"  value="<?php echo $price?>" id="price">
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
					  <label for="usr">Status<span id="emptystatus" style="font-weight:bold; padding-left:5px;" ></span></label>
					  <input type="number" class="form-control" value="<?php echo $status;?>" id="status">
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="form-group">
					  <label for="usr">Short Description</label>
					   <textarea type="text" class="form-control description" value="<?php echo $shortdescription;?>"  id="shortdescription"   placeholder="Enter Feature" ></textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="form-group">
					  <label for="usr">Description</label>
					   <textarea type="text" class="form-control description" value="<?php echo $description;?>"  id="description"   placeholder="Enter Feature" ></textarea>
					</div>
				</div>
				
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
	
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	
	<!--script-->
  <script>
   // CKEDITOR.replace('description');
CKEDITOR.replace('description');
CKEDITOR.replace('shortdescription');
CKEDITOR.instances['shortdescription'].setData("<?php echo $shortdescription;?>");
CKEDITOR.instances['description'].setData("<?php echo $description;?>");

	
	window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
	  // add work
	  $(document).ready(function(){
		  
		  $('#course').change(function(){
			 var course=$(this).val(); 
			// console.log(course);
			$('#emptycat').html('');
		  });
		  $('#name').keyup(function(){
			$('#emptyname').html('');  
		  });
		  
		  $('#price').keyup(function(){
			$('#emptyprice').html('');  
		  });
		  $('#status').keyup(function(){
			$('#emptystatus').html('');  
		  });
		 
		  
		 $('#add').click(function(){
			//console.log('afsgfasg');
			var category=$('#course').val();
			var name=$('#name').val();
			var image=$('#image')[0].files[0];
			
			var price=$('#price').val();
			var status=$('#status').val();
			var short_description=CKEDITOR.instances["shortdescription"].getData();
			var description=CKEDITOR.instances["description"].getData();
			
			console.log(category);
			console.log(name);
			console.log(image);
			console.log(price);
			
			console.log(status);
			console.log(short_description);
			console.log(description);
			
			if(category == ''){
				$('#emptycat').html('*Please Select category');
				return false;
			}else if(name == ''){
				$('#emptyname').html('*Please enter name');
				return false;
			}else if(price == '' ){
				$('#emptyprice').html('* please enter price');
				return  false;
				
			}else if(status == '' ){
				$('#emptystatus').html('* please enter status');
				return  false;
			}else if(description == '' ){
				$('#emptydescription').html('* please enter description');
				return  false;
			}
			
			var data=new FormData();
		
			data.append('T_category',category);
			data.append('T_name',name);
			data.append('T_image',image);
			
			data.append('T_price',price);
			data.append('T_status',status);
			data.append('T_description',description);
			data.append('T_shortdescription',short_description);
			
			$.ajax({
			
				url:'ajax/course_insert.php',
				type:'POST',
						cache:false,
						contentType:false,
						processData:false,
						data:data,
				success:function(resp){
					//console.log(resp);
					if(resp == 1){
						//swal("Good job", "You have insert the data !", "success");
						window.location.href="course_list.php";
					}else{
						swal("Oops", "please chk your data", "warning");
					}
					$('.swal-button-container').click(function(){
					//console.log('tuusa');
					//window.location.href="course_list.php";
				});	
				}
			});
		 });
		 
		 //edit  work
		 $('#edit').click(function(){
			//console.log('afsgfasg');
			var id="<?php echo $course_id;?>";
			var category="<?php echo $category;?>";
			if(category){
				var cat=$('#course').val();
			
			}
			//console.log(cat);
			
			
			var name=$('#name').val();
			var image=$('#image')[0].files[0];
			if(image){
				
				console.log(image);
			}
			if(image!= ''){
				var imagename="<?php echo $image;?>";
				console.log(imagename);
			}
			
	
			var price=$('#price').val();
			
			var status=$('#status').val();
			var shortdescription=CKEDITOR.instances["shortdescription"].getData();
			var description=CKEDITOR.instances["description"].getData();
			// console.log(id);
			// console.log(category);
			// console.log(name);
			
			// console.log(trainername);
			// console.log(price);
			// console.log(starttime);
			// console.log(closedtime);
			// console.log(status);
			// console.log(description);
			
			
			var data=new FormData();
			data.append('F_id',id);
			data.append('F_cat',cat);
			data.append('F_name',name);
			data.append('F_image',image);
			data.append('F_imagename',imagename);
			
			data.append('F_price',price);
			
			data.append('F_status',status);
			data.append('F_shortdescription',shortdescription);
			data.append('F_description',description);
			
			$.ajax({
			
				url:'ajax/course_update.php',
				type:'POST',
						cache:false,
						contentType:false,
						processData:false,
						data:data,
				success:function(resp){
				//console.log(resp);
				if(resp==1){
					swal({
						  title: "Good Dear!",
						  text: "You have Successfully updated data!",
						  icon: "success",
						});
				}
				$('.swal-button-container').click(function(){
					//console.log('tuusa');
					window.location.href="course_list.php";
				});	
				}
			});
		 });
		 
	  });
	  
  </script>
  
</body>

</html>