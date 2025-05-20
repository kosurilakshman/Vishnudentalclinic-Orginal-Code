<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<title> VISHNU DENTAL CLINIC || GUNTUR</title> 
<link href="assets/images/logo/VishnuDentalIcon.webp" rel="icon">  
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300,100,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
<link href="assets/css/bootstrap.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../use.fontawesome.com/releases/v5.8.1/css/all.css">
<link href="assets/js/flexslider/flexslider.css" rel="stylesheet" media="all">
<link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet" media="all">
<link href="assets/js/owl-carousel/owl.theme.css" rel="stylesheet" media="all">
<link href="assets/js/adipoli/adipoli.css" rel="stylesheet" media="all">
<link href="assets/js/swipebox/swipebox.css" rel="stylesheet" media="all">
<link href="assets/js/mean-menu/meanmenu.min.css" rel="stylesheet" media="all">
<link href="assets/css/main.css" rel="stylesheet" media="all">
<link href="assets/css/animate.min.css" rel="stylesheet" media="all">
<link href="assets/css/responsive-tables.css" rel="stylesheet" media="all">
<script src="assets/js/jquery-3.6.0.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">  

</head> 

<body> 

  <?php
  include('functions.php');
  $select_services = services();
  $select_services1 = services();
  
   if(!empty($_POST['booking'])){
       appoinment_booking();
   }

   if(!empty($_GET['app']))
    {
    ?>
      <script>

        alert('Your Appoinment Booked With Dr M.RAJASEKHAR');
         window.location.href="index.php";
       </script>
     <?php } ?>



<div class="header-wrapper  variant-one">
    <header class="header container" role="banner">
        <div class="row" >
             <div class="col-lg-4 col-xs-12 col-sm-4 col-md-6 custom-col-logo"> 
                <div class="logo-wrapper">
                    <i class="custom-arrow-nav fa fa-long-arrow-down visible-xs"></i> 
                    <div id="logo"> 
                        <a title="Vishnu Dental Clinic" href="index.php">
                            <img src="assets/images/logo/VishnuDentalhd.webp" class="logo-image"alt="Best Dental Services in Guntur">
                        </a>

                    </div>

                </div>
            </div>
    
    <div class="col-lg-8 col-xs-12 col-sm-8 col-md-6 d-flex align-items-center">

     <div class="main-menu-wrapper">
      <nav id="navbar" class="navbar main-menu  order-last order-lg-0 mx-auto" >
        <ul>
           <li><a href="index.php" class="text">Home</a> </li>
           <li><a href="about.php">About Us</a> </li>
           <li><a href="facilities.php">Our Facilities</a> </li>
           <li class="dropdown"><a href="#"><span>Dental Services</span></a>
            <ul>
                <?php
                while($row = mysqli_fetch_array($select_services1))
                {
                ?>
              <li><a href="single_services.php?id=<?= $row['id']?>"><?= strtoupper($row['name'])?></a></li> 
              <?php 
                }
              ?>
            </ul>
            <!-- <li><a href="gallery.php">Gallery</a> </li> -->
            <li><a href="contact.php">Contact</a> </li>
            <!-- <li><a href="https://admin.vishnudentalclinic.com/" class="text" target="_target">Login</a> </li> -->
            <li><a><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="background-color: green;color:white;">Book an Appointment</button></a></li>  
       
          </li>
       </ul>
      </nav>
     </div>
    </div> 
    </div>  
    </header>
</div> 
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<?php include "bookanAppointment.php"; ?>  
 

 