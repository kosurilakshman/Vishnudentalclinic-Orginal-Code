<?php
    include('include/header.php');
    $select_about = about_page_banner();
    $row = mysqli_fetch_array($select_about);
 
    if(!empty($row['image'])){
     
?>
  <section class="">
        <div class="career-banner">
            <div class="mt-4">
                    <div class="card text-white"> 
                    <img src="https://admin.vishnudentalclinic.com//uploads/banners/<?= $row['image']?>"  class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
                            <div class="card-img-overlay">
                                <h5 class="card-title mt-4"><?= $row['page_title']?></h5>
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
                    <img src="assets/images/services/den.webp" class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
                            <div class="card-img-overlay">
                                <h5 class="card-title mt-4">About</h5>
                            </div>
                    </div>
            </div>
        </div>
      
  </section>
    <?php
  }
?>
<?php
   $select_page = select_about_page();
   $about = mysqli_fetch_array($select_page);
?>
<section>
  <div class="container about">
        <h2 style="text-align:center; margin-top:-20px; text-transform:uppercase"><strong><?= $about['name']?></strong></h2>
        <div style="margin-top:30px;">
            <div class="col-md-4" style="margin-top:15px;">
                <img src="administrator/uploads/11.webp" alt="Best Dental Services in Guntur" loading="lazy">
            </div>
            <div class="col-md-8 about-content">
              <p style="text-align:justify;"><?= $about['content']?></p>
            </div>
        </div>
</div>
   <br>
</section>
  <?php
    include('include/footer.php');
  ?>