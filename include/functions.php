<?php
  ob_start();
  session_start();
  include "include.php";

   function login_table(){
  
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $login=executework("select * from  login where username='".$_SESSION['username']."' and password = '".$_SESSION['password']."'");
    if(mysqli_num_rows($login)>0)
    {
      
      redirect("https://admin.vishnudentalclinic.com/dashboard.php");
    }
    else{
        redirect("index.php?exist=1");
    }

  }
  

   function contact_insert(){
    $contactInsert = executework("insert into contact (fname,lname,eml,phone,message,create_date) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['eml']."','".$_POST['phone1']."','".$_POST['content']."','".date('Y-m-d H:i:s')."')");
    redirect("contact.php?suc=1");
  }

 



  function career_insert(){
   
    $filename = $_FILES["resume"]["name"];
     $tempname = $_FILES["resume"]["tmp_name"];
     $folder = "resumes/".$filename;
     move_uploaded_file($tempname, $folder);
   
    $careerInsert = executework("insert into career (fname,lname,email,phone,resume,job_role,message,create_date) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email1']."','".$_POST['phone1']."','".$filename."','".$_POST['job_role']."','".$_POST['content']."','".date('Y-m-d H:i:s')."')");
    redirect("career.php?suc=1");
  }




  function appoinment_booking(){
    
    $appoinmentInsert = executework("insert into appoinment_report (name,email,phone,services,create_date,slots,app_date) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['services']."','".date('Y-m-d H:i:s')."','".$_POST['timeslot']."','".date('Y-m-d',strtotime($_POST['appoinment_date']))."')");
  
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $timeslot = $_POST['timeslot'];
     $appoinment_date = $_POST['appoinment_date'];
     $subject = "Contact Form Request";
  
      $toEmail = 'durgaprasad@siimatechnologies.com';
      $from = $email;
      $fromName = $name;
    
                
      // Message 
      $htmlContent = 'Contact Request Submitted
          Name:'.$name.'
          Email: '.$email.'
         Phone: '.$phone.'
          Services: '.$services.'
          Timeslot: '.$timeslot.'
          Appoinment_date: '.$appoinment_date.'';
      
      // Header for sender info
      $headers = "From: $fromName"." <".$from.">";
      $mail = mail($toEmail,$htmlContent,$headers);
   
     redirect('index.php?app=1');
   
  }

  function services()
  {
     $services = executework("select * from services where status =1 order by id desc");
     return $services;
  }

  function testmonials()
  {
     $testmonials = executework("select * from testmonials where status =1 order by id desc");
     return $testmonials;
  }

  

  function select_facility(){
    $facility = executework("select * from facility where status =1 order by id desc");
    return $facility;
 }

 function select_gallery(){
  $select_gallery = executework("select * from gallery where status =1 order by id desc");
  return $select_gallery;
}

function single_services($id){
  $single_services = executework("select * from services where id ='".$id."'");
  return $single_services;
}

function home_page_banner(){
  $home_page_banner = executework("select * from banners where page_name ='Home'");
  return $home_page_banner;
}

function about_page_banner(){

  $about_page_banner = executework("select * from banners where page_name ='About'");
  return $about_page_banner;
}



function services_page_banner(){
 
  $career_page_banner = executework("select * from banners where page_name ='Careers'");
  return $career_page_banner;
}

function contact_page_banner(){
 
  $contact_page_banner = executework("select * from banners where page_name ='Contact'");
  return $contact_page_banner;
}

function gallery_page_banner(){
 
  $gallery_page_banner = executework("select * from banners where page_name ='Gallery'");
  return $gallery_page_banner;
}

function facility_page_banner(){
 
  $gallery_page_banner = executework("select * from banners where page_name ='Facility'");
  return $gallery_page_banner;
}


function select_about_page(){
 
  $select_about_page = executework("select * from about where status =1 order by id DESC limit 1");
  return $select_about_page;
}
?>