<?php session_start();

include "admin/config/config.php";


$catsql="select * from cat_course";
$catresult=mysqli_query($conn,$catsql);

$cat=null;
if(isset($_GET['cat'])){
	$cat=$_GET['cat'];
	$sql="select * from course where category='".$cat."'";
	
//print_r($cresult);
}else{
	$sql="select * from course ";
}
$result=mysqli_query($conn,$sql);

		
	

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
<!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>We at Total professional person offer you access to quality courseware as per the present demand within the market. Our career counselors provide you with job help supported your resume so you'll be able to appraise and improve yourself so as to attain goals discovered by you in your life. The total professional person provides coaching for a few the globally acknowledged skilled certificates.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
	
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
		<div class="row" style="padding-bottom:30px;">
				<div class="col-lg-12 col-md-12">
					<div class=""  style="text-align:center;">
						<?php while($catrow=mysqli_fetch_array($catresult)){
							?>
							
						  <a type="button"  href="courses.php?cat=<?php echo $catrow['cat_name'];?>" style="background-color:#520f15; font-weight:bold; color:#fff;"  class="btn"><?php echo $catrow['cat_name'];?></a>
						  <?php 
						}
						?>
					</div>
				</div>
			</div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
			<?php  while($row=mysqli_fetch_array($result)){
			?>
			
		
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?php echo 'admin/image/course/'.$row['image'];?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo $row['category'];?></h4>
                  <p class="price">$<?php echo $row['price'];?></p>
                </div>

                <div><a href="course_detail.php?detail=<?php echo $row['course_id'];?> " style="font-weight:bold;"><?php echo $row['course_name'];?></a></div>
                <p><?php echo $row['short_description'];?><span><a href="course_detail.php?detail=<?php echo $row['course_id'];?>	" style="font-weight:bold;">Read More</a></span></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
							
                  </div>
                  
                </div>
              </div>
            </div>
          </div> 
		  <?php
		
		}?><!-- End Course Item-->


    </section><!-- End Courses Section -->
	

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