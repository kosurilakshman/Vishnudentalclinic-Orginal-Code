<?php
    include('include/header.php');
    $services = services();
    $testmonials = testmonials();
  ?>
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="flexslider variant-two">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <ul class="slides">
        <li><a href="#"><img src="assets/images/slider/1.webp" alt="Dental Hospital" loading="lazy"></a></li>
            <li><a href="#"><img src="assets/images/slider/2.webp" alt="Dental Hospital" loading="lazy"></a></li>       
         <li><a href="#"><img src="assets/images/slider/3.webp" alt="Dental Hospital" loading="lazy"></a></li>


    </ul>
</div>
<?php
            if(!empty($_GET['app']))
          {
          ?>
           <script>
           alert('Your Appoinment Booked');
           window.location.href="index.php";
            </script>
            <?php
            }
         ?>
<section id="about" class="about-us section variant-two">
    <div class="container wow fadeInUp animated">
        <header class="section-header"><h2 class="title">Welcome to Vishnu Dental Clinic</h2>

            <div class="separator">
                <span class="line"></span><span class="square"></span><span class="line"></span>
            </div>
            <p>At Vishnu Dental Clinic, we are committed to providing exceptional dental care using the latest technology and adhering to the highest standards. We proudly offer a range of services, including X-Ray Teeth, Teeth Cleaning, and Government Approved dental treatments to ensure the best care for you and your family.</b>. </p></header>
        <div class="row">

            <div class="innards wow fadeInLeft  col-sm-4  animated">


                <figure><a href="#"><img src="assets/images/xrayTeeth.webp" alt="Dental Hospital" loading="lazy"></a></figure>


                <h1 class="page-title"><a href="#">X Ray Teeth</h1></a>

                <p>
                    At Vishnu Dental Clinic, we understand the importance of accurate diagnosis and treatment planning. Our advanced X-ray services provide precise and detailed images of your teeth and surrounding structures, ensuring that we can identify potential issues before they become serious problems.
                </p>

            </div>

            <div class="innards wow fadeInDown  col-sm-4  animated">


                <figure><a href="#"><img src="assets/images/teethClean.webp" alt="Dental Hospital" loading="lazy"></a></figure>


                <h1 class="page-title"><a href="#">Teeth Clean</a></h1>

                <p>
                A bright, healthy smile begins with good oral hygiene. At Vishnu Dental Clinic, our professional teeth cleaning services are designed to give you a deep, thorough clean that you can’t achieve with regular brushing and flossing alone. Our experienced dental hygienists use advanced tools to remove plaque, tartar, and stains, helping you maintain optimal oral health. 
                </p>

            </div>

            <div class="innards wow fadeInRight  col-sm-4 animated">


                <figure><a href="#"><img src="assets/images/govLogo.webp" alt="Dental Hospital" loading="lazy"></a></figure>


                <h1 class="page-title"><a href="#">Govt Approve</a></h1>

                <p>
                    Vishnu Dental Clinic is proud to be a government-approved dental hospital, providing high-quality dental care to the communities of Guntur and Chilakaluripet. Our clinic is fully compliant with all the regulations and standards set by local health authorities to ensure that our patients receive the best and safest care possible.
                </p>

            </div>

        </div>


    </div>

</section>
<!--about section ends-->

<!--services section-->
<section id="services" class="our-services variant-two section">

    <div class="container">

        <div class="row">

            <div class="wow fadeInLeft col-md-6  animated">
                <figure>
                    <img class="img-responsive" src="assets/images/doctor.webp" alt="Dental Hospital" loading="lazy">
                </figure>
            </div>

            <div class="wow fadeInRight col-md-6  animated">

                <div class="inner-contents">

                    <h2>Vishnu Dental Clinic - Your Trusted Dental Hospital</h2>

                    <p>we are dedicated to providing exceptional dental care with a focus on patient comfort and satisfaction. As a leading dental hospital in the region, we offer a wide range of advanced dental services to cater to the needs of individuals and families alike. Whether you're seeking preventive care, cosmetic treatments, or specialized procedures, we are committed to helping you achieve and maintain a healthy, beautiful smile.
                    </p>


                    <div class="font-list">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                	<li>&#10003; State-of-the-Art Technology</li>
                                    <li>&#10003; Experienced and Skilled Team</li>
                                    <li>&#10003; Comprehensive Dental Services</li>
                                    <li>&#10003; Patient-Centered Care</li>
                                    <li>&#10003; Customized Treatment Plans</li>
                                    <li>&#10003; Affordable and Flexible Payment Options</li>
                                    <li>&#10003; Emergency Dental Care</li>
                                    <li>&#10003; Focus on Preventive Care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
<!--services section ends-->
<!--our work-->
<section id="work" class="our-work variant-two section wow fadeInUp ">
    <div class="container custom-var-two-work">
        <header class="section-header">
            <h3 class="title">OUR SERVICES</h3>

            <div class="separator">
                <span class="line"></span><span class="square"></span><span class="line"></span>
            </div>
            <p>we offer a comprehensive range of dental services to ensure your oral health and enhance the appearance of your smile. Our highly skilled team of dental professionals is dedicated to providing the best care in a comfortable and friendly environment. From routine check-ups to advanced cosmetic procedures, we are here to meet all your dental needs.</p>
        </header>
    </div>
   <div class="owl-carousel owl-theme">
       <?php
       
          while($servicesrow = mysqli_fetch_array($services)){
       ?>
       
       <div class="item"> 
            <div class="gallery-item">
             <a href="single_services.php?id=<?= $servicesrow['id']?>">
                <figure>  
                   <!-- <a class="gallery-btn"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                    <div class="media-container"> View </div>
                    <img src="administrator/uploads/services/<?= $servicesrow['image']?>" alt="Photo" loading="lazy">
                </figure>
            </a>

                <div class="inner-contents">
                    <h5 class="item-title"><a href="single_services.php?id=<?= $servicesrow['id']?>" title=""><?= $servicesrow['name']?></a></h5>

                    <p><a href="single_services.php?id=<?= $servicesrow['id']?>">SERVICES</a><a href="single_services.php?id=<?= $servicesrow['id']?>" style="text-decoration:none"></style>><?= $servicesrow['title']?></a></p>
                </div>

            </div>
        </div>
         
        <?php }?>
    </div>

</section>

<!--our work ends-->

<!--testimonials-->
<section id="testimonial" class="testimonial variant-four  section">
 <div class="container custom-var-two-work">
        <header class="section-header">
            <h3 class="title">TESTIMONIALS</h3>

            <div class="separator">
                <span class="line"></span><span class="square"></span><span class="line"></span>
            </div>
        </header>
    </div>

    <div class="flexslider">

        <ul class="slides clearfix">
        <?php
       
          while($testmonialsrow = mysqli_fetch_array($testmonials)){
    ?>
            <li>

                <div class="quote container">
                         <center>
                          <img src="administrator/uploads/testmonials/<?= $testmonialsrow['image']?>" class="testmonial-image center" alt="Best Dental Services in Guntur" loading="lazy" style="width:200px">
                       </center>
                    <!-- <blockquote> -->

                        <i class="icon-quote-start"></i>

                        <p>
                          <?= $testmonialsrow['content']?>
                        </p>

                        <i class="icon-quote-end"></i>

                        <div class="author">

                            <div class="separator">

                                <span class="line"></span><span class="square"></span><span class="line"></span>

                            </div>

                            <strong><?= $testmonialsrow['name']?>, </strong>  <?= $testmonialsrow['designation']?>

                        </div>

                    <!-- </blockquote> -->

                </div>

            </li>
           <?php }?>
          
         
        
            
        </ul>

    </div>

</section>
<!--testimonials ends-->
<?php
   include('include/footer.php');
?>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
       
    }
})
</script>
