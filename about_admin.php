<!DOCTYPE html>
<html lang="en">
<head>  
<title>About Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/veterinary/font/flaticon.css">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
    require_once("koneksi.php");
    ?>

<body>
    
  <header role="banner">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="adminindex.php">PAWVETSPITAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
          <li class="nav-item">
            <a class="nav-link" href="adminindex.php">Home</a>
          </li>
              
          <li class="nav-item">
            <a class="nav-link" href="services_admin.php">Services</a>
          </li>
              
      <li class="nav-item">
        <a class="nav-link active" href="about_admin.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php">Log Out</a>
      </li>
</ul>

        <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="contact_admin.php">Contact Us</a>
              </li>
            </ul>

</div>
</div>
</nav>
</header>
    <!-- END header -->
    
    <div class="slider-wrap no-slanted">
      <div class="slider-item" style="background-image: url('img/homeslide1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">About Pawvetspital</h1>
             
            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div> 
    
    <?php
		$stmt_vet = $pdo_conn->prepare("SELECT * FROM about_judul");
		    $stmt_vet->execute();
		$result_vet = $stmt_vet->fetchAll();
    ?>

    <section class="section pt-5 top-slant-white2 relative-higher">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
            <a href="form_about_admin_judul_tambah.php">Insert</a>
             <?php
            if(!empty($result_vet)) { 
        	foreach($result_vet as $row) {
            ?>
              <h2 data-aos="fade-up"><?php echo $row["about_judul_ket"]; ?></h2>
              <p data-aos="fade-up" data-aos-delay="100"><?php echo $row["about_ket"]; ?></p>
        
            <a href="form_about_admin_judul_update.php?id=<?php echo $row['id'];?>">Update</a>
            <a href="about_delete.php?id=<?php echo $row['id'];?>">Delete</a>
            <?php
                }
            }
        ?>
            </div>
          </div>
        

        <div class="row align-items-center mb-5">
          <div class="col-lg-4">
            <img src="img/about2.jpg" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="img/homeslide.jpg" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="img/homeslide1.jpg" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="img/about3.jpg" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>

        <?php
		$stmt_vet = $pdo_conn->prepare("SELECT * FROM about_des_satu");
		    $stmt_vet->execute();
		$result_vet = $stmt_vet->fetchAll();
        ?>

        <div class="row">
        <?php
          if(!empty($result_vet)) { 
        	foreach($result_vet as $row) {
        ?>   
          <div class="col-md-6 ml-auto"> 
            <p><?php echo $row["deskripsi_satu"]; ?></p>
            <a href="form_about_deskripsi1_insert.php">Insert</a>
            <a href="form_about_deskripsi1_update.php?id=<?php echo $row['id'];?>">Update</a>
            <a href="about_deskripsi1_delete.php?id=<?php echo $row['id'];?>">Delete</a></p>
            
          </div>

          <div class="col-md-6 ml-auto">
            <p></p>
            </div>
                       
            <?php
                }
              }
            ?>     
        </div>
        <?php
	    	$stmt_vet = $pdo_conn->prepare("SELECT * FROM about_des_dua");
		    $stmt_vet->execute();
		    $result_vet = $stmt_vet->fetchAll();
        ?>

        </div>

        <?php
          if(!empty($result_vet)) { 
        	foreach($result_vet as $row) {
        ?>

        <div class="col-md-6 ml-auto">
            <p><?php echo $row["deskripsi_dua"]; ?></p>
            <a href="form_about_deskripsi2_insert.php">Insert</a>
            <a href="form_about_deskripsi2_update.php?id=<?php echo $row['id'];?>">Update</a>
            <a href="about_deskripsi2_delete.php?id=<?php echo $row['id'];?>">Delete</a>
            </div>

            <?php
                }
              }
            ?>

      </div>
      </div>
    </section>

    <section class="section bg-light top-slant-white">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">

            <?php
				    $stmt_vet = $pdo_conn->prepare("SELECT * FROM vision");
				    $stmt_vet->execute();
				    $result_vet = $stmt_vet->fetchAll();
          ?>
            <a href="form_vision_insert.php">Insert</a>
            
            <?php
    		      if(!empty($result_vet)) { 
        	  	foreach($result_vet as $row) {
        	  ?>

              <h3><?php echo $row["vision_judul"]; ?></h3>
              <p><?php echo $row["vision_ket"]; ?></p>

            <a href="form_vision_update.php?id=<?php echo $row['id'];?>">Update</a>
            <a href="vision_delete.php?id=<?php echo $row['id'];?>">Delete</a></br></br>

              <?php
                }
              }
              ?>

          <?php
				    $stmt_vet = $pdo_conn->prepare("SELECT * FROM mision");
				    $stmt_vet->execute();
				    $result_vet = $stmt_vet->fetchAll();
          ?>
           <p><a href="form_mision_insert.php">Insert</a></p>
            <?php
    		      if(!empty($result_vet)) { 
        	  	foreach($result_vet as $row) {
        	  ?>
              <h3><?php echo $row["mision_judul"]; ?></h3>
              <p><?php echo $row["mision_ket"]; ?></p>

            
            <a href="form_mision_update.php?id=<?php echo $row['id'];?>">Update</a>
            <a href="mision_delete.php?id=<?php echo $row['id'];?>">Delete</a>

            <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
         
          </div>
          <!-- END slider -->
          </div>
        </div>
      
    </section> <!-- .section -->
    

    <footer class="site-footer" role="contentinfo">
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Pawvetspital is a part of Paw Group, a company focusing on Pet services such as Pet Shop, Vetcare Clinic, Pet Transport, Pet Hotel, and Cat Cafe.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="https://twitter.com" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="https://www.facebook.com" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://www.instagram.com/taniaasarah_/?hl=id" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 5AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <li><a href="https://www.google.com/maps/place/33%C2%B022'40.9%22N+96%C2%B014'15.4%22W/@33.378025,-96.2398037,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d33.378025!4d-96.237615"
                  class="p-2"><span>400 US-69, Leonard, TX 75452, Amerika Serikat</span></a></li>
                <li class="d-block"><a href="https://www.whatsapp.com/?lang=id"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></a></li>
                <li class="d-block"><a href="https://www.google.com/gmail/"><span class="d-block text-black">Email:</span><span>pawvetspital@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="about_admin.php">About</a></li>
              <li><a href="contact_admin.php">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>Tertanda : Ainiyyah</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    
  </body>
</html>