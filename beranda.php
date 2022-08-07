<!DOCTYPE html>
<html lang="en">
<head>  
<title>Beranda</title>
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
          <a class="navbar-brand" href="beranda.php">PAWVETSPITAL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="beranda.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="index.php">Log Out</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url('img/homeslide2.jpg');">
          
        <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 ">
          <h1 data-aos="fade-up">YOUR PETS IN THE RIGHT PLACE</h1>
          <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Pawvetspital aims to be warm and family with an open door for you beloved pets.
            Our team will ensure the best service for you.
          </p>
        
          </div>
          </div>
          </div>
      </div>

      <div class="slider-item" style="background-image: url('img/homeslide3.jpg');">
        
        <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">COMPLETE FACILITIES</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Pawvetspital prime services is not the only supported by reliable and
              professional staff, but also complete and modern facilities
            </p>
        </div>
        </div>
        </div>
      </div>

      </section>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-veterinarian d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Health Consultation</h3>
            <p>Helps you keep and maintain your Pets’ health and nutrition.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-dog-1 d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Hospital / Inpatient Services</h3>
            <p>A high-quality care service to ensure your Pets’ safety.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-microscope d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Laboratory Services</h3>
            <p>In-house diagnostics services with various supporting devices.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-dog-3 d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Dental Care</h3>
            <p>We intend to improve your beloved Pets’ life quality through good dental and mouth health.</p>
          </div>
        </div>
      </div>

            <center>
              <p data-aos="fade-up" data-aos-delay="200"><a href="services.php" class="btn btn-more btn-outline-more">More Service</a></p>
            </center>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">

          <?php
				    $stmt_vet = $pdo_conn->prepare("SELECT * FROM ket_vet");
				    $stmt_vet->execute();
				    $result_vet = $stmt_vet->fetchAll();
          ?>

          <div class="col-md-7 text-center heading-wrap">

            <?php
    		      if(!empty($result_vet)) { 
        	  	foreach($result_vet as $row) {
        	  ?>

              <h2 data-aos="fade-up"><?php echo $row["judul_ket"]; ?></h2>
              <p data-aos="fade-up" data-aos-delay="100"><?php echo $row["des_vet"];?></p>
            
            <?php
              }
            }
          ?>
            
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>The Best and Most Dedicated Team</h2>
            </div>
          </div>
        </div>

        <?php
				$stmt_pic_ket = $pdo_conn->prepare("SELECT * FROM pic_ket");
				$stmt_pic_ket->execute();
				$result_pic_ket = $stmt_pic_ket->fetchAll();
			  ?>

        <div class="owl-carousel centernonloop">

        <?php
        if(!empty($result_pic_ket)) { 
        		foreach($result_pic_ket as $row) {
        		?>

            <a class="item-doctor" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <h2 class="doctor-heading"><?php echo $row["nama_dr"]; ?></h2>
            </div>
            <?php echo "<img class='img-fluid' alt='' src='img/$row[picture]'/>";?>
            
          </a>

          <?php
					}
					}
				?>
        </div>
      </div>

    </section> <!-- .section -->

    <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>WHY Pawvetspital?</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/why1.png');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>More than 20 years of experiance</h3>
                <p>We've walked for 20 years with a great doctor and will continue</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/why2.png');" data-aos="fade"></div>
              <div class="text">
                <h3>Trused by thousand of customers</h3>
                <p>With caution in handling every animal, we have been trusted by thousands of customers</p> 
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/why3.png');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Modern and thoroughs</h3>
                <p>Our pawvetspital is equipped with the best and modern facilities.</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/why5.png');" data-aos="fade"></div>
              <div class="text">
                <h3>verified</h3>
                <p>Our pawvetspital has been verified as the best veterinary by the government</p>
              </div>
              
            </div>

          </div>
        </div>

      
        

      </div>
    </section> <!-- .section -->
    
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
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
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