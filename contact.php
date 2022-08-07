<!DOCTYPE html>
<html lang="en">
<head>  
<title>Contact</title>
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
            <a class="nav-link" href="beranda.php">Home</a>
          </li>
              
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
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
    
    <div class="slider-wrap no-slanted">
      <div class="slider-item" style="background-image: url('img/contact.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Contact Us</h1>
             
            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div> 
    
    

    
    <section class="section  pt-5 top-slant-white2 relative-higher bottom-slant-gray">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6 form-group">
                <form name="frmAdd" action="tambah_contact.php" method="post">
                  <label for="nama">Name</label>
                  <input type="text" id="nama" name="nama" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="no_telp">Phone</label>
                  <input type="text" id="no_telp" name="no_telp" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="pesan">Write Message</label>
                  <textarea name="pesan" id="pesan" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="tambah data" type ="submit" value="Send Message" class="btn btn-primary">
                  <a href="contact.php"></a>
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <a href="https://www.google.com/maps/place/33%C2%B022'40.9%22N+96%C2%B014'15.4%22W/@33.378025,-96.2398037,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d33.378025!4d-96.237615"
                  class="p-2"><span>400 US-69, Leonard, TX 75452, Amerika Serikat</a></span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <a href="https://www.whatsapp.com/?lang=id"><span>+1 242 4942 290</a></span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <a href="https://www.google.com/gmail/"><span>pawvetspital@gmail.com</a></span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>

    

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