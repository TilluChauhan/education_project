<?php session_start();

include "admin/config/config.php";
$sql="select * from course";
$result=mysqli_query($conn,$sql);

$catsql="select * from cat_course";
$catresult=mysqli_query($conn,$catsql);
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
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
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
							
						  <a type="button"  href="course.php" style="background-color:#520f15; font-weight:bold; color:#fff;"  class="btn"><?php echo $catrow['cat_name'];?></a>
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
                <p style=" width:100%;overflow: hidden;text-overflow: ellipsis;"><?php echo $row['short_description'];?><span><a href="course_detail.php?detail=<?php echo $row['course_id'];?>	" style="font-weight:bold;">Read More</a></span></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
							
                  </div>
                  
                </div>
              </div>
            </div>
          </div> 
		  <?php
		
		}?><!-- End Course Item-->

          

        </div>

      </div>
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