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
		$limit=4;
		
		
		if(isset($_GET['page'])){
			$page=$_GET['page'];
			//print_r($page);
		
		}else{
			$page=1;
		}
		$offset=($page-1)* $limit;
		//print_r($offset);
	$rsql="select * from about LIMIT {$offset},{$limit}";
	$rresult=mysqli_query($conn,$rsql);
		
	
	
	
	
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
    <div class="container-fluid mt--7">
      <!-- Table -->
     
      <!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">About List</h3>
			  
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
					<th scope="col">Image</th>
					<th scope="col">Status</th>
					<th scope="col">Description</th>
					 <th scope="col">Edit</th>
					
					
                  </tr>
                </thead>
                <tbody>
				<?php
					while($rrow=mysqli_fetch_array($rresult)){
					//$image=$rrow['image'];
					//print_r($image);
				?>
				<tr>
					<td><?php echo $rrow['id'];?></td>
					
					<td><img src="<?php echo 'image/about/'.$rrow['image'];?>" style="width:50px; border-radius:20px;"></td>
					<td><?php echo $rrow['status'];?></td>
					<td><textarea  rows="2" cols="25" style="overflow: hidden; background-color:#32325d;color:#fff; text-overflow: ellipsis; "><?php echo $rrow['description'];?></textarea></td>
					
					<td><a type="button" href="about.php?edit=<?php echo $rrow['id'];?> " class="btn btn-danger">Edit</a></td>
				
					
					
				 </tr>
				<?php
					}
				?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	  <div class="card-footer py-4">
              <nav aria-label="...">
			  <?php
					$qwe="select * from about";
						$qs=mysqli_query($conn,$qwe);
						if(mysqli_num_rows($qs)){
						$sd=mysqli_num_rows($qs);
						//print_r($sd);
					
						$total=ceil($sd/$limit);
						echo '<ul class="pagination justify-content-end mb-0">';
						if($page>1){
							echo '<li class="page-item" ><a href="about_list.php?page='.($page-1).' "  class="page-link" style="padding:12px 30px">Prev</a></li>';
						}
						
						for($i=1; $i<=$total;$i++ ){
							if($i==$page){
								$active='active';
							}else{
								$active='';
							}
							echo '<li class="page-item '.$active.'"><a class="page-link"  href="about_list.php?page='.$i.' " >'.$i.'</a></li>';
						}
						if($total>$page){
							echo '<li class="page-item '.$active.'"><a href="about_list.php?page='.($page+1).' " class="page-link" style="padding:12px 30px" style="font-weight:bold;">Next</a></li>';
						}
						
						
						echo '</ul>';
						}
						
			  ?>
			 
              
            </div>
                
					
              </nav>
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
  </script>
</body>

</html>