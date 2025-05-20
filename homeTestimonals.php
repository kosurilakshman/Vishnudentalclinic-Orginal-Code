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
        $testmonials = testmonials(); 
        while($testmonialsrow = mysqli_fetch_array($testmonials)){
    ?>
            <li>

                <div class="quote container">
                         <center>
                          <img src="https://admin.vishnudentalclinic.com/uploads/about/<?= $testmonialsrow['image']?>" class="testmonial-image center" alt="Best Dental Services in Guntur" loading="lazy" style="width:210px; height:200px;">
                       </center>
                    <blockquote>

                        <i class="icon-quote-start"></i>

                        <p style="text-align:justify;"><?= $testmonialsrow['content']?></p>
                        <i class="icon-quote-end"></i>

                        <div class="author">

                            <div class="separator">

                                <span class="line"></span><span class="square"></span><span class="line"></span>

                            </div>

                            <strong style="color:#42a5f5;"><?= $testmonialsrow ['name']?></strong>  <?= $testmonialsrow['designation']?>

                        </div>

                    </blockquote>

                </div>

            </li>
           <?php }?> 
        </ul> 
    </div> 
</section>