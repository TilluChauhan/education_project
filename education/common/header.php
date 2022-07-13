<?php 
	include "admin/config/config.php";
	
	if((isset($_SESSION['user_id']))){
	$id=$_SESSION['user_id'];
	$sql="select * from user_register where id='".$id."' " ;
	$result=mysqli_query($conn,$sql);	
	}
	
	

?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img style="width:159px;" src="image/logo.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          
          <li class="dropdown"><a href="contact.php">Contact</a></li>
            
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	  <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != ''){
		 ?>
			<?php while($row=mysqli_fetch_array($result)){
				?>
				<div class="dropdown">
			  <button type="button" class="get-started-btn sop"  data-bs-toggle="dropdown">
				<?php echo $row['first_name'];?>
			  </button>
			  <div class="dropdown-menu dropp1">
				<div class="">
				<div class="qa">welcome To<span><?php echo $row['first_name']?></span></div>
				<div class="qa1">
					<div class="qa2"><i  class="fa-solid fa-envelope"></i></div>
					<div class="qa3"><?php echo $row['email'];?></div>
				</div>
				<div class="qa1">
					<div class="qa2"><i class="fa-solid fa-phone"></i></div>
					<div class="qa3"><?php echo $row['mobile'];?></div>
				</div>
				</div>
				<div class="qa4">
					<div class="qa5"><a type="button" href="profile.php" class="get-started-btn sop">My profile</a></div>
					<div class="qa5"><a type="button" href="user_logout.php" class="get-started-btn sop">Log Out</a></div>
				</div>
				
			  </div>
			</div>
				
				<?php
			}?>
			<?php
		 
	  }else{
		  ?>
		  <a href="user_login.php" class="get-started-btn">log-in</a>
		  <?php
	  }
	  ?>
				
     

    </div>
  </header>