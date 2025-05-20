<section id="work" class="our-work variant-two section wow fadeInUp ">
    <div class="container custom-var-two-work">
        <header class="section-header">
            <h2 class="title">OUR SERVICES ++ </h2> 
            <div class="separator">
                <span class="line"></span><span class="square"></span><span class="line"></span>
            </div>
            <p>Everyone has a purpose in life and a unique talent to give to others. And when we blend this unique talent with service to others, we experience the ecstasy and exultation of own spirit, which is the ultimate goal of all goals.</p>
        </header>
    </div>
   <div class="owl-carousel owl-theme"> 
       <?php
        $services = services();       
        while($servicesrow = mysqli_fetch_array($services)){
       ?>
       <div class="item"> 
        <a href="single_services.php?id=<?= $servicesrow['id']?>">
            <div class="gallery-item"> 
                <figure>
                    <div class="media-container" style="color:#fff;" >
                        <ul style="margin-top: 30px; margin-left: 100px;"> 
                         <?= substr($servicesrow['title'],0,18)?><br>
                         <?= substr($servicesrow['title'],19,22)?>
                         </ul>
                    </div>
                     <a href="single_services.php?id=<?= $servicesrow['id']?>" class="gallery-btn">Read More</a> 
                    <img src="https://admin.vishnudentalclinic.com/uploads/services/<?= $servicesrow['image']?>"alt="Best Dental Services in Guntur" loading="lazy" width="300px" height="300px" alt="Photo">
                </figure>

                <div class="inner-contents">
                    <h5 class="item-title"><a href="single_services.php?id=<?= $servicesrow['id']?>"alt="Best Dental Services in Guntur" loading="lazy" width="300px" height="300px"  title=""><?= strtoupper($servicesrow['name'])?></a></h5>

                    <p></p>
                </div>
                 
            </div>
             </a>
        </div>  
        <?php }?>
    </div> 
</section>