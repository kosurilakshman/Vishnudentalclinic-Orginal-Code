<?php
    include('include/header.php');
    if(!empty($_GET['id'])){
        $select_services = single_services($_GET['id']);
        $row = mysqli_fetch_array($select_services);

    }

    $select_contact = services_page_banner();
     $services = mysqli_fetch_array($select_contact);
     if(!empty($services['image'])){
     
  ?>
  
  <section class="">
        <div class="career-banner">
            <div class="mt-4">
                    <div class="card text-white">
                    <img src="https://admin.vishnudentalclinic.com//uploads/banners/<?= $services['image']?>"  class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
                            <div class="card-img-overlay">
                                <h6 class="card-title mt-4" ><?= strtoupper($row['name'])?></h6>
                            </div>
                    </div>
            </div>
        </div>
      
  </section>
  <?php
    }else{
        ?>
        <section class="">
        <div class="career-banner">
            <div class="mt-4">
                    <div class="card text-white">
                    <img src="https://admin.vishnudentalclinic.com/assets/images/services/bar321.webp"  class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
                            <div class="card-img-overlay">
                                <h5 class="card-title mt-4"><?= strtoupper($row['name'])?></h5>
                            </div>
                    </div>
            </div>
        </div>
      
  </section>
        <?php
    }
  ?>
 <section>
     <div class="container" style="margin-top: -70px;">
         <div class="row">
             <div class="col-md-5" >
             <img src="https://admin.vishnudentalclinic.com/uploads/services/<?= $row['image']?>" class="ser_imag" alt="Best Dental Services in Guntur" loading="lazy">
             </div>
             <div class="col-md-7" style="text-align: justify !important ; ">
                <p><?= $row['content']?></p>
             </div>
         </div>
     </div>
 </section>
  
<div class="single_page"></div>
  <?php
    include('include/footer.php');
  ?>