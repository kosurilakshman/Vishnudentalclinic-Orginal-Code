<?php
    include('include/header.php');

   $select_facility = select_facility();
    $select_contact = facility_page_banner();
     $row = mysqli_fetch_array($select_contact); 
     if(!empty($row['image'])){
     

  ?>
  <style type="text/css">
    *--------------------------------------------------------------
# about
--------------------------------------------------------------*/
.features .nav-tabs {
  
  border: 0;
  color:white;
}
.features .nav-link {
  border: 1px solid #d4d6df;
  padding: 15px;
  transition: 0.3s;
  color: #2a2c39;
  border-radius: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.features .nav-link i {
  padding-right: 15px;
  font-size: 48px;
}
.features .nav-link h4 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}
.features .nav-link:hover {
  color: #ef6603;
}
.features .nav-link.active {
  background: #ef6603;
  color: #fff;
  border-color: #ef6603;
}
@media (max-width: 768px) {
  .features .nav-link i {
    padding: 0;
    line-height: 1;
    font-size: 36px;
  }
}
@media (max-width: 575px) {
  .features .nav-link {
    padding: 15px;
  }
  .features .nav-link i {
    font-size: 24px;
  }
}
.features .tab-content {
  margin-top: 30px;
}
.features .tab-pane h3 {
  font-weight: 600;
  font-size: 26px;
}
.features .tab-pane ul {
  list-style: none;
  padding: 0;
}
.features .tab-pane ul li {
  padding-bottom: 10px;
}
.features .tab-pane ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #ef6603;
}
.features .tab-pane p:last-child {
  margin-bottom: 0;
}
.about{
  margin-top: 100px;
  
}
.about p{
  margin-left: 60px;
  text-align: justify;
  margin-right: 3px;
}
.about h3{
  margin-left: 60px;
}
.about ul li{
 margin-left: 60px;
}
.img-fluid{
  width: 400px;
  height: 250px;
  margin-top: 55px;
}

  </style>
 <section class="">
              <div class="career-banner">
                  <div class="mt-4">
                          <div class="card text-white">
                            <img src="https://admin.vishnudentalclinic.com//uploads/banners/<?= $row['image']?>"  class="card-img" alt="Best Dental Services in Guntur" loading="lazy"> 
                                  <div class="card-img-overlay">
                                      <h5 class="card-title mt-4"><?= strtoupper($row['page_title'])?></h5>
                                  </div>
                          </div>
                  </div>
              </div>
            
        </section>
      <?php
        }
        else{
          ?>
           <section class="">
              <div class="career-banner">
                  <div class="mt-4">
                          <div class="card text-white">
                          <img src="assets/images/services/bar321.webp"  class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
                                  <div class="card-img-overlay">
                                      <h5 class="card-title mt-4">Gallery</h5>
                                  </div>
                          </div>
                  </div>
              </div>
            
        </section>
          <?php
        }
      ?>
       <section id="features" class="features">
        <div class="container about" style=" margin-top:-100px;">

            <?php 
       while ($row=mysqli_fetch_array($select_facility)) {
            
        ?>
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row abot">
               <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="https://admin.vishnudentalclinic.com/uploads/facility/<?php echo $row['image']  ?>"class="img-fluid" alt="Best Dental Services in Guntur" loading="lazy">
              </div>
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" >
                <h3 class="text-center"><?php echo ucfirst($row['name'])?></h3>
                <p style="text-align: justify;"><?php echo $row['content']  ?></p>
              </div>

             
            </div>
          </div>
        
          
            </div>
             <?php
                }
              ?>
          </div>
        </div>

      </div>

      <div class="div2">

   </div>
    </section><!-- End Features Section -->
   
  
  <?php
    include('include/footer.php');
  ?>

 