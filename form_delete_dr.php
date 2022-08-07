<!DOCTYPE html>
<html lang="en">
<head>  
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
    <link rel="stylesheet" href="fonts/flaticonveterinary/font/flaticon.css">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
    require_once("koneksi.php");
    ?>

<body>
    
<section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Delete Doctor</h2>
            </div>
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
          
          <a href="delete_dr.php?id=<?php echo $row['id'];?>" class="item-doctor" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <h2 class="doctor-heading"><?php echo $row["nama_dr"];?></h2>
              <p>Delete</p>
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

 

      