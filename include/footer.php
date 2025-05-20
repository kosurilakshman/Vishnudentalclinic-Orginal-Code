<?php 

  $select_services = services();
  $select_services1 = services();
?>
<!--footer-->
<footer class="footer" role="contentinfo" style="background-color:#000;">

    <div class="container">

        <div class="row">

              <div class="col-md-3 ">

                <section class="widget contact">

                    <h3 class="title">Get in Touch</h3>
                        <img src="assets/images/logo/VishnuDentalhd.webp" class="logo-image1" alt="Best Dental Services in Guntur" loading="lazy"><br>

                    <address> <br>
                        35V7+7QH, 1st Line<br>
                        Pandaripuram, Chilakaluripet,<br>
                        Andhra Pradesh - 522616 
                  </address>

                    <ul class="contacts-list">
                        <li class="email"><span>Email : </span><a href="#">kalyanispecialitydental16@gmail.com</a></li>
                        <li class="phone"><span>Phone : </span> +91-98660 22559</li> 
                  </ul>

                </section>
            </div>


            <div class="col-md-3 ">

                <section class="widget widget_recent_entries">

                    <h3 class="title">Useful Links</h3>
                        <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="facilities.php">Our Facilities</a> </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <!-- <li><a href="gallery.php">Gallery</a></li> -->
                                    <!-- <li><a href="administrator/" target="_target">Login</a></li>  -->
                            <li>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="background-color: green;color:white;">Book an Appointment</button></li>
                                </ul>
                </section>

            </div>


            <div class="col-md-3 ">

                <section class="widget widget_recent_entries">

                    <h3 class="title">Dental Services</h3> 
                            <ul>
                 <?php
                        while($row = mysqli_fetch_array($select_services1)){
                ?>
              <li><a href="single_services.php?id=<?= $row['id']?>"><?= strtoupper($row['name'])?></a></li>
            
              <?php
                }
              ?>
            </ul> 
                </section>

            </div>

<section>
<div class="col-md-3 ">

               
            <h3 style="margin-top:10px;">Shown in Google Map</h3>
             <select class="form-control" id="lang" onchange="location_change()">
                <option>Select</option>
                <option value="1">Guntur</option>
                <option value="2" selected>Chilakaluripet</option>
                <option value="3">Mangalagiri</option>
            </select>
            <div style="width:300px; height: 200px; margin-top:20px;" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15333.862519378064!2d80.1644977!3d16.0931963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6b0bf485c5724ee!2svishnu%20dental%20clinic!5e0!3m2!1sen!2sin!4v1661861298310!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- <div id="map" style="width:400px; height: 300px; margin-top:20px;" class="mt-4"></div>
 -->
       <!--  </div> -->

            </div>


            
</section>

          
        </div>


        <div class="copyright">

            <div class="row">

                <div class="col-sm-6 ">
                    <p>Copyright © 2022. All Rights Reserved by Vishnu Dental Clinic.</p>
                </div>

                <div class="col-sm-6  credit">
                    <p>Managed by <a href="http://www.siimatechnologies.com/" target="_blank">ANJU SIIMA TECHNOLOGIES PVT.LTD</a></p>
                </div>

            </div>

        </div>

    </div>

</footer> 
<a href="https://wa.me/+919553010369?text=" target="_blank" class="back-to-top d-flex align-items-center justify-content-center active"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<!-- <script src="assets/js/bootstrap.min.js"></script> -->

<script src="assets/js/jquery.easing.1.3.js"></script>

<script src="assets/js/flexslider/jquery.flexslider-min.js"></script>

<script src="assets/js/jquery.parallax-1.1.3.js"></script>

<script src="assets/js/jquery.velocity.min.js"></script>

<script src="assets/js/jquery.transit.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

<script src="assets/js/adipoli/jquery.adipoli.min.js"></script>

<script src="assets/js/swipebox/jquery.swipebox.js"></script>

<script src="assets/js/responsive-nav.min.js"></script>

<script src="assets/js/mean-menu/jquery.meanmenu.min.js"></script>

<script src="assets/js/jquery.isotope.min.js"></script>

<script src="assets/js/jquery.validate.min.js"></script>

<script src="assets/js/jquery.form.js"></script>


<script src="assets/js/twitter-fetcher.js"></script>

<script src="assets/js/custom.js"></script>

</body>
</html>

<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length;
    for(let i=0; i<menuLength; i++){
        if(menuItem[i].href === currentLocation){
            menuItem[i].className = 'active';
        }
    } 

</script>


<script>

  function location_change() {
    var id = $('#lang').val();
    var embed = '';

    if (id == 1) {
        embed = '<iframe title="Kalyani Speciality Dental Clinic Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.227975729443!2d80.41614161487645!3d16.311291637237826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a757c7ca8821f%3A0x858aef542aa38582!2sKalyani%20speciality%20dental%20clinic!5e0!3m2!1sen!2sin!4v1661859767638!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    } 
    else if (id == 2) {
        embed = '<iframe title="Vishnu Dental Clinic Location" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15333.862519378064!2d80.1644977!3d16.0931963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6b0bf485c5724ee!2svishnu%20dental%20clinic!5e0!3m2!1sen!2sin!4v1661861298310!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    } 
    else if (id == 3) {
        embed = '<iframe title="Kalyani Specialty Dental Clinic Location" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7658.201985366121!2d80.4235153306854!3d16.317783176728682!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7091d262d12db62a!2sKalyani%20Specialty%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1661861445366!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

    $('#map').html(embed);
    $('#map1').hide();
}

    function marker_clicked() 
       { 
        info.setContent(this.getTitle()); 
        info.open(map, this);
      }
      var info = new google.maps.InfoWindow();
    marker1.addListener('click', marker_clicked);
    marker2.addListener('click', marker_clicked);
    marker3.addListener('click', marker_clicked);

</script>