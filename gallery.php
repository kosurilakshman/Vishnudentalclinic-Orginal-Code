<?php
    include('include/header.php');
     $select_gallery = select_gallery();
     $select_contact = gallery_page_banner();
     $row = mysqli_fetch_array($select_contact);
     if(!empty($row['image'])){
     
      ?>
        <section class="">
              <div class="career-banner">
                  <div class="mt-4">
                          <div class="card text-white">
                          <img src="https://admin.vishnudentalclinic.com/uploads/banners/<?= $row['image']?>" class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
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
  <section>
  <section>
    <div class="container">
    <!-- <h2 style="text-align:center; margin-top:-100px; text-transform:uppercase"><strong>Gallery</strong></h2> -->
      <div class="row">
        <div class="full-image" id="fullImgBox">
          <img src="assets/images/gallery/1.webp" id="fullImg">
          <span onclick="clsoeFullImg()">X</span>
        </div>
        <div class="gallery-images">
          <?php
             while($row = mysqli_fetch_array($select_gallery)){
          ?>
          <div>
              <img src="https://admin.vishnudentalclinic.com/uploads/gallery/<?= $row['image']?>"alt="Best Dental Services in Guntur" loading="lazy" width="100%" height="250px" >
               <p class="gallery-pra" id="pra1"><?= $row['name']?></p>
          </div>
          
            <?php
             }
            ?>
        </div>
      </div>
    </div>
  </section>
  <script>
    var fullImgBox = document.getElementById('fullImgBox');
    var fullImg = document.getElementById('fullImg');
    function openFullImg(pic){
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
    }
    function clsoeFullImg(){
      fullImgBox.style.display = "none";
    } 
  </script>
  <?php
    include('include/footer.php');
  ?>