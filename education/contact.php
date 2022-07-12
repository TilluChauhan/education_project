<?php session_start();
	include "admin/config/config.php";
	$sql="select * from contactus ";
	$result=mysqli_query($conn,$sql);
	//print_r($result);
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!--start head-->
  <?php include "common/head.php";?>
  <!-- end head-->
</head>

<body>

  <!-- =======start Header ======= -->
  <?php include "common/header.php";?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
	<?php 
	while($row=mysqli_fetch_array($result)){
		?>
		
      <div data-aos="fade-up">
        <iframe src="<?php echo $row['url'];?>" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
	 

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $row['location'];?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $row['email'];?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call us:</h4>
                <p>(+91)<?= $row['mobile'];?></p>
              </div>

            </div>

          </div>
		  <?php
	}?>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <div role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
				<label style="font-weight:bold;"> Name:<span style="margin-left:4px; color:#520f15;font-weight:bold; font-style:italic;" id="emptyname"></span></label>
					
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
				<label style="font-weight:bold;"> Email:<span style="margin-left:4px; color:#520f15;font-weight:bold; font-style:italic;" id="emptyemail"></span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
			  <label style="font-weight:bold;"> Subject:<span style="margin-left:4px; color:#520f15;font-weight:bold; font-style:italic;" id="emptysub"></span></label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
			  <label style="font-weight:bold;"> Message:<span style="margin-left:4px; color:#520f15;font-weight:bold; font-style:italic;" id="emptymessage"></span></label>
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
				
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button name="login" id="submit" type="submit">Send Message</button></div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- =======start Footer ======= -->
  <?php include "common/footer.php";?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--start script-->
  
  <?php include "common/script.php";?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
	$(document).ready(function(){
		$('#submit').click(function(){
			//console.log('asgd');
			$('#name').keyup(function(){
				$('#emptyname').html('');
			});
			$('#email').keyup(function(){
				$('#emptyemail').html('');
			});
			$('#subject').keyup(function(){
				$('#emptysubject').html('');
			});
			
			var name=$('#name').val();
			var email=$('#email').val();
			var subject=$('#subject').val();
			var message=$('#message').val();
			console.log(name);
			console.log(email);
			console.log(subject);
			console.log(message);
			if(name==''){
				$('#emptyname').html('*Please Enter name');
				return false;
			}
			if(email==''){
				$('#emptyemail').html('*Please Enter Email');
				return false;
			}
			if(subject==''){
				$('#emptysubject').html('*Please Enter subject');
				return false;
			}
			var data={"T_name":name,"T_email":email,"T_subject":subject,"T_message":message};
			console.log(data);
			
			$.ajax({
				type:"POST",
				url:"mailer.php",
				data:data,
				success:function(res){
					//console.log(res)
					if(res==1){
						swal("Good job!", "You have Successfulluy Send Email", "success");
					}
				}
				
			});
		});
	});
  </script>
 <!--end script-->
</body>

</html>