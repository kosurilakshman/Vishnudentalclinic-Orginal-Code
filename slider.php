<?php $home_page_banner = home_page_banner(); ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="flexslider variant-two"> 
 <ul class="slides" >
    <?php while($slider = mysqli_fetch_array($home_page_banner)) { ?>
    <li> 
        <div class="container">
            <div class="slide-description responceve" > 
                
            <img src="assets/images/logo/VishnuDentalhd.webp" class="logo-image" alt="Best Dental Services in Guntur" loading="lazy" style="height: 100px; width: 200px; opacity: 0.3;" >
               
                <h2><?= $slider['page_title']?></h2>
              
                <p ><?= $slider['content']?></p>

                <a href="#" data-toggle="modal" data-target="#myModal">Book an Appoinment</a>
                <a href="contact.php" >Contact</a>
              
            </div> 
        </div>
        <a href="#"><img src="https://admin.vishnudentalclinic.com/uploads/banners/<?= $slider['image']?>" alt="Best Dental Services in Guntur" loading="lazy" ></a>
    </li>
    <?php } ?> 
</ul>
</div>