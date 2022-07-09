<?php
 include "admin/config/config.php";
 session_start();

$sql="select * from testinomial ";
$result=mysqli_query($conn,$sql);
$wsql="select * from about ";
//print_r($result);
$wresult=mysqli_query($conn,$wsql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--head start-->
  <?php include "common/head.php";?>
  <!--head end<!--head start-->
</head>

<body>

   <!-- =======start Header ======= -->
  <?php include "common/header.php";?>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
		<?php $count=null;
		while($wrow=mysqli_fetch_array($wresult)){
			if($count>=1){
			?>
			
  <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
	
			
          <div class="col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo 'admin/image/about/'.$wrow['image'];?>"  class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ABOUT US</h3>
            
            <?php echo $wrow['description'];?>
           

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	<?php
			}	
			$count++;
			
		}?>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
			<?php while($row=mysqli_fetch_array($result)){
				?>
				
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?php echo 'admin/image/testinomial_img/'.$row['image']?>" class="testimonial-img" alt="">
                  <h3><?php echo  $row['name'];?></h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
						<?php echo  $row['description'];?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
			<?php
			}?><!-- End testimonial item -->


            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->


  <!-- =======start Footer ======= -->
	<?php include "common/footer.php";?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--script start-->
 <?php include "common/script.php";?>
 <!--script end-->

</body>

</html>