<?php $today = date('d-M-Y'); ?>
<div id="myModal" class="modal fade modal-section" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Book an Appointment </h4>
      </div>

      <div class="modal-body">
        <form method="post" onsubmit = "return modal_validation()">
            <div class="col-md-6 mt-4">
            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
           
            </div>
           
           
            <div class="col-md-6 mt-4">
              <!-- <input type="text"  id="datepicker" class="form-control" id="appoinment_date"> -->
             <input type="text" class="form-control" id="datepicker" readonly name="appoinment_date" required value="<?php echo $today ?>"> 
            </div>

            <div class="col-md-6 mt-4">
             <select name="services" id="services">
                 <option value="">Select Services </option>
                <?php
                  while($row = mysqli_fetch_array($select_services)){
                ?>
                 <option value="<?= $row['name']?>"><?= $row['name']?></option>
                <?php
                  }
                ?>
             </select>
            </div>

            <div class="col-md-6 mt-4">
             <select name="timeslot" id="timeslot">
                 <option value="">Select Slots</option>
                 <option value="1">Morning</option>
                 <option value="2">AfterNoon</option>
                 <option value="3">Evening</option>
             </select>
            </div>

            <div class="col-md-6 mt-4">
            <input type="text" name="phone" maxlength="10" nospace onkeypress="return isNumber(event)" id="phone" placeholder="Enter Phone" class="form-control">
            </div>

            <div class="col-md-6 mt-4">
            <input type="email" name="email" id="appointment_email" placeholder="Enter Email" class="form-control noSpace">
             <h6 id="result"></h6>
            </div>
            
           <center>
            <div class="mt-4 "  style="margin-right: 40px;">
            <input type="submit" class="btn btn-primary modal-button" value="Submit" name="booking">
            </div>
         </center>
        </form>
      </div> 
    </div>

  </div>
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer=""></script>

 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script>
        (function ($) {
            $("#datepicker").datepicker({ minDate :0 });
             
        })(jQuery);

 
    </script>

  <script>
    function modal_validation(){
        var ph = $('#phone').val();
        var phlen = ph.length;
         var  email_id = $('#appointment_email').val();
        var filter_id = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if ($('#name').val() == '') {

           alert('Please Enter Your Name');
            return false;
        } 
        else if ($('#appoinment_date').val() == '') {
            
            alert('Choose Appoinment Date');
            return false;
        } 
      
        else if ($('#services').val() == '') {
            
            alert('Please Select Services');
            return false;
        } 

        else if ($('#timeslot').val() == '') {
            
            alert('Please Select Time slot');
            return false;
        } 

        else if ($('#phone').val() == '') {
            
            alert('Please Enter Phone Number');
            return false;
        } 
        else if (phlen < 10) {
          alert("Enter 10 Digits Mobile Number");
            
            return false;
        } 
       else if ($('#appointment_email').val() == '') {
            
            alert('Please Enter Email');
            return false;
        } 

         else if(!email_id.match(filter_id))
        {
            alert("Enter Valid Email Id");
            
            return false;
        }
       
        else
        {
           return true;
        }
    }


</script>
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

  

  