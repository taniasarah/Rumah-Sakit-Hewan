<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Services</title>
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
            <a class="nav-link" href="beranda.php">Home</a>
          </li>
              
          <li class="nav-item">
            <a class="nav-link active" href="services.php">Services</a>
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

          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-vaccine d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Vaccination</h3>
            <p>provide vaccines after the needs and dosages so that they can maintain the comfort and safety of your pet.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-dermathology d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Dermatology</h3>
            <p>Maintain health related to the skin in pets.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-eyedropper d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Ophthalmology</h3>
            <p>ready to help in your pet's eye health problems.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-health d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">X-Ray (Rontgent)</h3>
            <p>Providing x-ray services.</p>
          </div>

          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-doctor d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">USG</h3>
            <p>Providing services to pet's that are pregnant.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-animal d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Delivery Service</h3>
            <p>Don't worry, we can provide delivery service.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-sterilization d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Surgery</h3>
            <p>Providing the best servants with doctors who are great and good at surgery.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-first-aid-kit d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Home Visit</h3>
            <p>Give the best servant in what your pet needs.</p>
          </div>

          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-cage d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Pick Up and Deliver Service</h3>
            <p>we are ready to pick up and provide services for pets.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-medicine d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Pharmacy</h3>
            <p>provide good and high quality and complete medicines.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-grooming d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Grooming</h3>
            <p>beautify your pet.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-pet-shop d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Pet Shop</h3>
            <p>You can shop for your pet's needs here.</p>
          </div>
        </div>
      </div>
    </section>
    
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