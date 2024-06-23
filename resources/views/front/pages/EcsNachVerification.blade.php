@extends('front.layout.layouts')
@section('title', 'Enach verification')

@section('main_content')
<?php 


if(isset($_POST['submit']))
{
 
  $borrower_name  = $_POST['borrower_name'];
  $mobile_no      = $_POST['mobile_no'];
  $email          = $_POST['email'];
  $address        = $_POST['address'];
  $loan_ac_no     = $_POST['loan_ac_no'];
  $umr_no         = $_POST['umr_no'];
  $branch_name    = $_POST['branch_name'];
  $ecs_amount     = $_POST['ecs_amount'];
  $clearing_date  = $_POST['clearing_date'];
  $cancel_reason  = $_POST['cancellation_reason'];
  $date  = $_POST['date'];
  
 
 // for image
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];   
      $folder = "uploads/nachSign".$filename;
        
        
 // for image
    $filename1 = $_FILES["fileToUpload1"]["name"];
    $tempname1 = $_FILES["fileToUpload1"]["tmp_name"];   
      $folder1 = "uploads/nachSign".$filename1;
        
  $insert_query = mysqli_query($con, 'insert into  ecs_nach_form(borrower_name, contact, email, address, loan_ac_no, umr_no, branch_name, ecs_amount,ecs_clearing_date, cancellation_reason,sign,cosign,status,isdate) values("'.$borrower_name.'","'.$mobile_no.'", "'.$email.'", "'.$address.'","'.$loan_ac_no.'","'.$umr_no.'"," '.$branch_name.'", "'.$ecs_amount.'", "'.$clearing_date.'", "'.$cancel_reason.'","'.$filename.'","'.$filename1.'","1","'.$date.'")');
 
 
 if($branch_name == 'Agra')
  {
      $to = 'bm_agra@cbhfl.com,';
  }
  elseif($branch_name == 'Banglore'){
      $to = 'bm_bangalore@cbhfl.com,';
  }
  elseif($branch_name == 'Bopal'){
      $to = 'bm_bhopal@cbhfl.com,';
  }
  elseif($branch_name == 'Bilaspur'){
      $to = 'bm_bilaspur@cbhfl.com,';
  }
  elseif($branch_name == 'Delhi'){
      $to = 'bm_delhi@cbhfl.com,';
  }
  elseif($branch_name == 'Gwalior'){
      $to = 'bm_gwalior@cbhfl.com,';
  }
  elseif($branch_name == 'Indore'){
      $to = 'bm_indore@cbhfl.com,';
  }
  elseif($branch_name == 'Jabalpur'){
      $to = 'bm_jabalpur@cbhfl.com,';
  }
  elseif($branch_name == 'Jaipur'){
      $to = 'bm_jaipur@cbhfl.com,';
  }
  elseif($branch_name == 'Lucknow'){
      $to = 'bm_lucknow@cbhfl.com,';
  }
  elseif($branch_name == 'Mumbai'){
      $to = 'bm_mumbai@cbhfl.com,';
  }
  elseif($branch_name == 'Nagpur'){
      $to = 'bm_nagpur@cbhfl.com,';
  }
  elseif($branch_name == 'Nashik'){
      $to = 'bm_nashik@cbhfl.com,';
  }
  elseif($branch_name == 'Panchkula'){
      $to = 'bm_panchkula@cbhfl.com,';
  }
  elseif($branch_name == 'Raipur'){
      $to = 'bm_raipur@cbhfl.com,';
  }
  elseif($branch_name == 'Surat'){
      $to = 'bm_surat@cbhfl.com,';
  }
  elseif($branch_name == 'Varodara'){
      $to = 'bm_vadodara@cbhfl.com,';
  }
  
  
$to     .= 'customercare@cbhfl.com';
$subject = 'Cent Bank - ECS/NACH MANDATE CANCELLATION FORM';
$message = ""; 
$message .= '
<html>
<head>
  <title>Cent Bank - ECS/NACH MANDATE CANCELLATION FORM </title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
  
    <tr>
      <td><b>Name of the borrower  :</b></td>
      <td> '.$borrower_name.' </td>
    </tr>
    <tr>
      <td><b>Name of Branch :</b></td>
      <td> '.$branch_name.' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> '.$mobile_no.'</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> '.$email.' </td>
    </tr>
    <tr>
      <td><b>Present Address :<b></td>
      <td> '.$address.' </td>
  </tr>
   
   
    <tr>
      <td><b>Loan Ac Number :<b></td>
      <td> '.$loan_ac_no.' </td>
  </tr>
   
    <tr>
      <td><b>UMR Number :<b></td>
      <td> '.$umr_no.' </td>
  </tr>
   
   
    <tr>
      <td><b> ECS Amount :<b></td>
      <td> '.$ecs_amount.' </td>
  </tr>
   
    <tr>
      <td><b> ECS Clearing Date :<b></td>
      <td> '.$clearing_date.' </td>
  </tr>
   
   
    <tr>
      <td><b> Reason for Cancellation :<b></td>
      <td> '.$cancel_reason.' </td>
  </tr>
  
  
   <tr>
      <td><b> Date :<b></td>
      <td> '.$date.' </td>
  </tr>
   
   
  </table>
</body>
</html>
';

// // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
$headers .= 'From: <'.$email.'>' . "\r\n";

// Always set content-type when sending HTML email

  if($insert_query)
  {    
    	move_uploaded_file($tempname, $folder);
    	move_uploaded_file($tempname1, $folder1);
    	
      if(mail($to,$subject,$message,$headers)){
          
     echo '<script>alert("ECS/NACH CANCELLATION Form Submit successfully");window.location.href="ecs-nach.php"</script>';
    //  header('location:ecs-nach.php');
      }
  }
  else{
     echo "<script>alert('Failed! Please Try Again');window.location.href='ecs-nach.php'</script>";
  }
}

?>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
textarea{
    resize:none;
}

</style>


 <div class="breadcumb-area black-opacity bg-img-10">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2>ECS/NACH MANDATE CANCELLATION FORM</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcumb-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>/</li>
                                <li>ECS/NACH MANDATE CANCELLATION FORM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->




        <!-- about-area start -->
        <div style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row"  style="border:2px solid #296dc1;">
                    <!--new form-->
                    <div class="col-md-12">
                        <br/>
<!--<h3 style='color:#296dc1;' class="text-center pull-center"><b >ECS/NACH MANDATE CANCELLATION Form</b></h3>-->

<h3 style='color:#296dc1;' class="text-center pull-center"><b>In line with the NPCI/2020-21/NACH/Circular No.013 dated September 11, 2020 on facility for cancellation of mandates to
be provided to customers. In order to submit the request for Mandate Cancellation, please enter the following details:
</b></h3>
<div class="contact-wrap form-style">
<div class="cf-msg"></div>
 <div><img class="img-responsive;" src="{{url('/')}}/front_assests/img/logo_2.png" style="height:80px;" alt=""></div>
 <br/><br/>
<form method="post" id="form-data" enctype='multipart/form-data'
action="ecs-nach.php">
<div class="row">
<div class="form-group col-sm-6 col-xs-12">
    <!--<label></label>-->
<input type="text" placeholder="Name of the borrower" name="borrower_name" id="fname" required />
</div>
<div class="form-group  col-sm-6 col-xs-12">
    <input type="email" name="email" required / placeholder="Email id">
</div>
<div class="form-group col-sm-6 col-xs-12">
<input type="text" name="loan_ac_no"  id="loan_ac_no" required  placeholder="Loan Ac Number"/>
</div>

<div class="form-group  col-sm-6 col-xs-12">
    <input type="text" name="mobile_no" pattern="[6789][0-9]{9}"  minlength="10" maxlength="10" placeholder="Mobile Number" id="mob_No_" readonly />
</div>
<div class="form-group col-sm-6 col-xs-12">
<input type="text" name="umr_no" id="umr_no" readonly placeholder="UMR Number "/>
</div>

<div class="form-group col-sm-6 col-xs-12">
<input type="text" name="branch_name" readonly id="branch_code" placeholder="Branch Name "/>
</div>

<div class="form-group col-sm-6 col-xs-12">
<input type="text" name="ecs_amount" id="ecs_amount" required placeholder="ECS Amount"/>
</div>
<div class="form-group col-sm-6 col-xs-12">
    <input type="text" name="clearing_date" required placeholder="ECS Clearing Date "/>
</div>

<div class="form-group  col-xs-6">
<textarea class="contact-textarea" name="address"  placeholder="Present Address " id="address" style="resize:none;"></textarea>
</div>

<div class="form-group  col-xs-6">
<textarea rows="4" cols="40" name="cancellation_reason" id="cancel" required /placeholder="Reason for Cancellation"></textarea>
</div>
<!--date & sign-->
<div class="form-group  col-xs-4">
     <label style="color:white;">Signature of Borrower:</label>
     <input type="file" name="fileToUpload" id="sign_borrower" required accept="image/*" value="" style="border:1px solid blue;">
</div>
<div class="form-group  col-xs-4">
    
<label style="color:white;">Signature of Co-Borrower:</label>
<input type="file" name="fileToUpload1" id="cosign_borrower" required accept="image/*" value="" style="border:1px solid blue;">
</div>

<div class="form-group  col-xs-4">
       <label style="color:white;">Date :</label>
      <input type="text" name="date" value="<?php date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i'); ?>" readonly id="input_date">
</div>
<!--end date & sign-->

<div class="form-group col-xs-12 pull-center text-center">

<!--<p style="text-align:justify;color:white;"><b>Note :</b>  Kindly fill all the fields and submit the form to cancel the ECS/NACH mandate. Please sign the form and send to your Branch via mail/post</p>-->
</div>
<div class="form-group col-xs-12 pull-center text-center">
<button type="submit" name="submit" value="Submit" class="btn btn-primary btn-responsive" style="width:150px; height:50px;" class="cont-submit btn-contact btn-primary pull-center" onclick='printDiv();'  >Submit</button>
</div>
</div>
</form>
</div>
</div>

      
      <!--end new form-->
                    
                </div>
            </div>
        </section>
        <!-- about-area end -->


<section class="about-area ptb-140" hidden  id="DivIdToPrint">
          <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <div class="container">
                            <div class="text-center pull-center"><img class="img-responsive;" src="{{url('/')}}/front_assests/img/logo_2.png" style="height:80px;" alt=""></div>
                            <br>
                            <div><h4 style="text-align:center;"><b>ECS/NACH MANDATE CANCELLATION Form</b></h4><br></div>
                            
                            <!--<blockquote>-->
                            <!--  Kindly fill all the fields and submit the form to cancel the ECS/NACH mandate. Please sign the form and send to your Branch via mail/post-->
                            <!--</blockquote>-->
                                <!--Date : <input type="date"  style="border:none;" required name="date1" id="date1"> -->
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                    <div class="col-md-2">
                                    <p> To,</p>
                                         </div>
                                        
                                    <div class="col-md-10">
                                        </div>
                                        </div>
                                        <!--new row-->
                                        <div class="row">
                                            <div class="col-md-2">
                                                
                                            </div>
                                            
                                            <div class="col-md-8">
                                             <p>The Branch Manager,</p>
                                             <p>CENT BANK HOME FINANCE LTD,</p>
                                             <p><span id="branch_name"></span> Branch.</p>
                                            </div>
                                            
                                            <div class="col-md-1">
                                                
                                            </div>
                                        </div>
                                        <!--end row-->
                                          <p>Sir/Madam,</p>
                                           <p>Sub: NACH/ECS Mandate Cancellation - Request</p>
                                 <p>I request you to cancel my ECS Mandate, the details of mandate are as under:
                                 <b><span id="can_reason"> </span></b> </p>
                                        
                                        <!--new row-->
                                        <div style="float:right">
                                            <p>Signature of Borrower: <span id="sign"></span></p>
                                             <p>Signature of Co -Borrower: <span id="cosign"></span></p>
                                        </div><br/>
                                        <!--end row-->
                                        
                                        <!--new row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                    
                                     <p>Date: <span id="date"></span></p>
                                     <p>Place: <span id="p_address"></span></p>
                                            </div>
                                            <div class="col-md-8">
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                 
                                 
                                 
                                 
</div>
<!--<div class="col-md-3" style="border:none; height:165px; width:20%;">-->
   
<!--    <img src="{{url('/')}}/front_/images/customer.jpg" height="100" width="150">-->
<!--     <input type="file" name="upload_image" id="upload_image" style="width:150px;"  required />-->
     
<!--</div>-->
</div>



                         </div>
                      
                     <!--</form>-->
                     
                    </div>
                </div>
            </div>
       
          
           </section>
        <!-- about-area end -->

       
     </div>
        <!-- footer-area start  -->


<!------- Backend Code -------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>
//   $(document).ready(function() { 

//     $('#id_doc_name').on('change', function() {
//   var value = $(this).val();
// //   alert(value);
// //   $("#id_doc_name").datepicker();
//     });
//   });    
    
</script>

<script>
$(document).ready(function(){
  
  $("#loan_ac_no").keyup(function(){

//   var ac_no = $('input[name=loan_ac_no]').val();
 var ac_no = document.getElementById("loan_ac_no").value;
//   alert(ac_no);
  $.ajax({
      
      type: "POST",
      url: "fetchValue.php",
      data: {ac_no:ac_no },
        success: function(response){  
        
        var a = JSON.parse(response);
        // alert(a.umr_no);
          document.getElementById("umr_no").value = a.umr_no;
          document.getElementById("branch_code").value = a.branch_code;
          document.getElementById("mob_No_").value = a.mob_No_;
          
      }
  });
  });
});
</script>
<script>

  function printDiv() {
      
 var account_no = document.getElementById("loan_ac_no").value;
        if (account_no =='') {
      alert("Please fill the fields");
 } else {
        
         var branch_code = document.getElementById("branch_code").value;
         document.getElementById("branch_name").innerHTML=branch_code;
         
         var cancel_reason = document.getElementById("cancel").value;
         document.getElementById("can_reason").innerHTML=cancel_reason;
         
         
         var address = document.getElementById("address").value;
         document.getElementById("p_address").innerHTML=address;
         
         
         var date = document.getElementById("input_date").value;
         document.getElementById("date").innerHTML=date;
         
         
         var sign = document.getElementById("sign_borrower").value;
          
         document.getElementById("sign").innerHTML=sign;
         
         
         var cosign = document.getElementById("cosign_borrower").value;
         document.getElementById("cosign").innerHTML=cosign;
         
         var divContents = document.getElementById("DivIdToPrint");
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
			a.document.write('<head>');
			a.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">');
			a.document.write('</head>');
            a.document.write('<body onload="window.print();window.close();">'+divContents.innerHTML+'</body></html>');
            a.document.close();
           
        }
 }
  </script>

  @endsection