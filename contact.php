<?php
    include('include/header.php');
    
    $select_contact = contact_page_banner();
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
                                      <h5 class="card-title mt-4">Contact</h5>
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
    <h2 class="contact-head">GET IN TOUCH</h2>
     <p class="contact-parag">You can contact us any way that is convenient for you. We are available 10 a.m to 5 p.m. You can also use a quick contact form below or visit our medical center personally.We would be happy to answer your questions.</p>
    
       <div class="row">
    <?php
    if(!empty($_POST['contact_submit']))
    {
      
       contact_insert();
    }
       if(!empty($_GET['suc']))
	      {
    	?>
      <div style="color: green;" align="center">Your Message Has been Sent Successfully</div>
          <script>
            
           window.location.href="contact.php";
           
            </script>
    <?php
    }   
    ?>
    

       <form class="form-box" method="post"  onsubmit="return contact_validation()">
          <div class="col-md-6">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text"  class="form-control" id="fname" name="fname">
            <div class="error" id="err1" align="center" style="color:red;"></div>
           </div>
           
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
            <div class="error" id="err2" align="center" style="color:red;"></div>
          </div>
         
          <div class="col-md-6">
            <label for="exampleInputPassword1"  class="form-label">Email</label>
            <input type="email" name="eml"  id="emailId" onkeypress="myfunction()" class="form-control noSpace">
           <h6 id="test"></h6> 
          </div>

          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="text" maxlength="10" onkeypress="return isNumber(event)" class="form-control " id="phone1" name="phone1">
            <div class="error" id="err4" align="center" style="color:red;"></div>
          </div>

          <div class="col-md-12">
          <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea name="content" id="content" class="form-control"></textarea>
          </div>
        

          </div>
          <input type="submit" class="btn btn-primary career-subm" name="contact_submit" value="Submit">
         
      </form>
    
</div>

   
       <div class="col-md-4 text-center" style="margin-top:20px; border: 2px solid;padding: 7px;  box-shadow: 4px 9px #888888;">
        <h3 style="margin-top:5px;  color:#0097a7;">KALYANI DENTAL CLINIC</h3>
      
         <b>Kundul Road, Tiny Tots School<br>Krishnanagar<br>Guntur<br>Contact:+91 9000477299 </b><br>
         </div>

          <div class="col-md-4 text-center" style="margin-top:20px; border: 2px solid;padding: 7px;  box-shadow: 4px 9px #888888;">
          <h3 style="margin-top:5px; color:#0097a7;">KALYANI DENTAL CLINIC </h3>

         <b>Galigopuram Road,<br>Beside IDFC Bank Main Bazar<br>Mangalgiri<br>Contact:+91 9000477299</b><br>
  </div>

     <div class="col-md-4 text-center" style="margin-top:20px; border: 2px solid;padding: 7px;  box-shadow: 4px 9px #888888;">

          <h3 style="margin-top:5px; color:#0097a7;">VISHNU DENTAL CLINIC</h3>

         <b> Durga Complex,1st Lane Pandaripuram Chilakaluripet<br>Contact:+91 9000477299</b>
         
        </div>
     

  </section>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <br>
  
<script>
    function contact_validation(){
      var mobile = $('#phone1').val();
      var mobile_len = mobile.length;
      var  email = $('#emailId').val();
      var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if ($('#fname').val() == '') {
             
          alert("Enter First Name");
            
            return false;
        } 
        else if ($('#lname').val() == '') {
          alert("Enter Last Name");
          
            return false;
        } 
        else if ($('#emailId').val() == '') {
          alert("Enter Email");
            
            return false;
        } 
        else if(!email.match(filter))
        {
            alert("Enter Valid Email Id");
            
            return false;
        }
       
        else if ($('#phone1').val() == '') {
          alert("Enter Phone Num");
            
            return false;
        } 
      
        else if (mobile_len < 10) {
          alert("Enter 10 Digits Mobile Number");
            
            return false;
        } 
        else
        {
           return true;
        }
    }

function valid_error(id, error, err) {

    $('.errr').html('');
    $('#' + err).show();

    $('#' + err).html(error);
    $('#' + id).focus();
    return false;
}
</script>



<!-- <script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function location_change(){
        var map_parameters = { center: {lat: 47.490, lng: -117.585}, zoom: 8 };
    var map = new google.maps.Map(document.getElementById('map'), map_parameters);
      

    var flag = 'http://maps.google.com/mapfiles/ms/icons/purple-dot.webp';
       var id = $('#lang').val();
       if(id == 1){
        var position1 = { position: {lat: 47.490, lng: -117.585}, 
        map: map, icon: flag, title: "EWU Cheney Campus" };
        var marker1 = new google.maps.Marker(position1);
      

       }
       if(id == 2){
        var position2 = { position: {lat: 47.490, lng: -117.585}, 
        map: map, icon: flag, title: "EWU Cheney Campus" };
        var marker2 = new google.maps.Marker(position2);
      

       }
       if(id == 3){
        var position3 = { position: {lat: 47.490, lng: -117.585}, 
        map: map, icon: flag, title: "EWU Cheney Campus" };
        var marker3 = new google.maps.Marker(position3);
       }
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

</script> -->
 
<script>
   $('.noSpace').keyup(function() {
 this.value = this.value.replace(/\s/g,'');
});
      function isNumber(evt,ref,len)
        {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if(charCode == 8 || charCode == 9 ){
        return true;
        }
        var ctrlDown = evt.ctrlKey||evt.metaKey // Mac support

        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46 || charCode == 8 || charCode == 37 || charCode == 39 || ( ctrlDown && charCode==86)) {
        return false;
        }
        else if(ref.val().length >= len){
        return false;
            }
        return true;
             }


</script>

  <?php include('include/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">

// function myfunction() {
 
//   var test = $('#test');
//   var  email = $('#emailId').val();
  
//   test.text('');

//   if (email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {

  
//   } else {
//      alert('Please Enter Correct Email Id');
//   }
//   return false;
// }

</script>

