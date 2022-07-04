<?php
include "admin/config/config.php";
session_start();
if(isset($_SESSION['user_id']) &&$_SESSION['user_id'] != ''){
$uid=$_SESSION['user_id'];	

$sql="select * from user_register where id='".$uid."'";

$result=mysqli_query($conn,$sql);
$userrow=mysqli_fetch_array($result);
//print_r($row);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- start head-->
 <?php include "common/head.php";?>
 <!-- end head-->
</head>

<body>

  <!-- =======start Header ======= -->
  <?php include "common/header.php";?>
  <?php 
		
	
  ?>
<!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Profile</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. <?php print_r($uid); ?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <!-- End Courses Section -->
	<section class="section2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="ee1">
						<ul >
							<a href="#"><li><div style="text-align:center"><img src="<?php echo 'admin/image/user_image/'.$userrow['image'];?>" style="width:98%; border-radius:9px;"></div><div class="qwer"><?php echo $userrow['first_name'];?><span style="padding:0px 4px;"></span><?php echo $userrow['last_name'];?></div></li></a>
							<a href="#"><li ><i class="fa-solid fa-user-tie"></i> Profile</li></a>
							<a href="#"><li ><i class="fa-solid fa-book-open"></i></i>Courses</li></a>
							<a href="#"><li ><i class="fa-solid fa-toolbox"></i></i>Setting</li></a>
							<a href="user_logout.php"><li ><i class="fa-solid fa-right-from-bracket"></i>Log Out</li></a>
							
						
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="er1">
						<div class="ere"></div>
						<div class="er2">
							<div class="er3">
								<h4>Gender<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['gender'];
								?>
							</div>
						</div>
						<div class="er2">
							<div class="er3">
								<h4>First Name<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['first_name'];?>
							</div>
						</div>
						<div class="er2">
							<div class="er3">
								<h4>Last Name<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['last_name'];?>
							</div>
						</div>
						<div class="er2">
							<div class="er3">
								<h4>Email<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['email'];?>
							</div>
						</div>
						<div class="er2">
							<div class="er3">
								<h4>Address<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['address'];?>
							</div>
						</div>
						<div class="er2">
							<div class="er3">
								<h4>Mobile<span style="margin:0px 5px;">:</span></h4>
							</div>
							<div class="er4">
								<?php echo $userrow['mobile'];?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
  </main><!-- End #main -->

  <!-- =======start Footer ======= -->
  <?php include "common/footer.php";?>
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- start script-->
 <?php include "common/script.php";?>
 <!-- end script -->

</body>

</html>