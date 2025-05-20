<?php
    include('include/header.php');
    if(!empty($_POST['career_submit'])){
      
      career_insert();
    }

    $select_career = career_page_banner();
    $row = mysqli_fetch_array($select_career);
 
    if(!empty($row['image'])){
     
?>
  <section class="">
        <div class="career-banner">
            <div class="mt-4">
                    <div class="card text-white">
                    <img src="administrator/uploads/banners/<?= $row['image']?>" class="card-img" alt="Best Dental Services in Guntur" loading="lazy">
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
                                <h5 class="card-title mt-4">Career</h5>
                            </div>
                    </div>
            </div>
        </div>
      
  </section>
    <?php
  }
?>
  <section>
   <div class="container">
    <div class="col-md-8">
    <h2 style="text-align:center; margin-top:-100px; text-transform:uppercase"><strong>Career</strong></h2>
     <!-- <p class="contact-parag">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our medical center personally.We would be happy to answer your questions.</p> -->
    </div>
   
    <div class="col-md-12">
       <div class="row">
       <?php
    if(!empty($_GET['suc']))
	{
	?>
    <script>
           alert('Inserted Successfully');
           window.location.href="career.php";
            </script>
    <?php
    }
    ?>
       <form class="" onsubmit="return career_validation()" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text"  class="form-control" id="fname" name="fname" placeholder="Enter First Name">
            <div class="error" id="err1" align="center" style="color:red;"></div>
           </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
            <div class="error" id="err2" align="center" style="color:red;"></div>
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email1" name="email1" placeholder="Enter Email">
            <div class="error" id="err3" align="center" style="color:red;"></div>
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone1" name="phone1" placeholder="Enter Phone Number">
            <div class="error" id="err4" align="center" style="color:red;"></div>
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Job Role</label>
            <select name="job_role" id="job_role">
              <option value="">Select</option>
              <option value="Dental Implants">Dental Implants</option>
              <option value="Root Canal Tratment">Root Canal Tratment</option>
              <option value="Laser and Gum Theropy">Laser and Gum Theropy</option>
            </select>
            <div class="error" id="err5" align="center" style="color:red;"></div>
          </div>

          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Resume</label>
           <input type="file" name="resume" id="resume" class="form-control">
           <div class="error" id="err6" align="center" style="color:red;"></div>
          </div>
         
          <div class="col-md-12">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea name="content" id="content" class="form-control" placeholder="Enter Your Message"></textarea>
          </div>
          </div>
          <input type="submit" name="career_submit" class="btn btn-primary career-subm" value="Submit">
         
      </form>
      <!-- <div class="panel panel-default">
  
  <div class="panel-body">
    <form class="form-box">
          <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text"  class="form-control" id="fname" name="fname" maxlength="4" size="4">
           </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" id="lname" name="email">
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone">
          </div>
         
          <div class="col-md-12">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea name="content" id="content" class="form-control"></textarea>
          </div>
          </div>
          <button type="submit" class="btn btn-primary subm">Submit</button>
         
      </form>
  </div> -->
  
</div>
     </div>
   </div>
  </section>

  <br>
  <?php
    include('include/footer.php');
    if(!empty($_POST['submit']))
    {
       career_insert();
    }
  ?>
<script>
    function career_validation(){
        if ($('#fname').val() == '') {

           alert('Please Enter First name');
            return false;
        } 
        else if ($('#lname').val() == '') {
            
          alert('Please Enter Last name');
            return false;
        } 
        else if ($('#email1').val() == '') {
            
            alert('Please Enter Email');
              return false;
          } 
        
        else if ($('#phone1').val() == '') {
          
          alert('Please Enter Phone Num');
            return false;
        } 
        else if ($('#job_role').val() == '') {
           
          alert('Please Select');
            return false;
        } 
        else if ($('#resume').val() == '') {
          alert('Please Choose');
            return false;
        } 
        else
        {
           return true;
        }
       
    }


</script>