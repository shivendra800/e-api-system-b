@extends('front.layout.layouts')
@section('title', 'Eopaav')

@section('main_content')
		<!-- heared area end -->
		



<?php 
if(isset($_POST['submit'])){
    
$name = $_POST['name'];    
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$branch = $_POST['branch']; 

$sql = mysqli_query($con,"insert into loan_request(name,email,phone,branch_name) values('$name','$email','$phone','$branch')");

if($branch == 'Agra')
  {
      $to = 'bm_agra@cbhfl.com,';
  }
  elseif($branch == 'Banglore'){
      $to = 'bm_bangalore@cbhfl.com,';
  }
  elseif($branch == 'Bopal'){
      $to = 'bm_bhopal@cbhfl.com,';
  }
  elseif($branch == 'Bilaspur'){
      $to = 'bm_bilaspur@cbhfl.com,';
  }
  elseif($branch == 'Delhi'){
      $to = 'bm_delhi@cbhfl.com,';
  }
  elseif($branch == 'Gwalior'){
      $to = 'bm_gwalior@cbhfl.com,';
  }
  elseif($branch == 'Indore'){
      $to = 'bm_indore@cbhfl.com,';
  }
  elseif($branch == 'Jabalpur'){
      $to = 'bm_jabalpur@cbhfl.com,';
  }
  elseif($branch == 'Jaipur'){
      $to = 'bm_jaipur@cbhfl.com,';
  }
  elseif($branch == 'Lucknow'){
      $to = 'bm_lucknow@cbhfl.com,';
  }
  elseif($branch == 'Mumbai'){
      $to = 'bm_mumbai@cbhfl.com,';
  }
  elseif($branch == 'Nagpur'){
      $to = 'bm_nagpur@cbhfl.com,';
  }
  elseif($branch == 'Nashik'){
      $to = 'bm_nashik@cbhfl.com,';
  }
  elseif($branch == 'Panchkula'){
      $to = 'bm_panchkula@cbhfl.com,';
  }
  elseif($branch == 'Raipur'){
      $to = 'bm_raipur@cbhfl.com,';
  }
  elseif($branch == 'Surat'){
      $to = 'bm_surat@cbhfl.com,';
  }
  elseif($branch == 'Varodara'){
      $to = 'bm_vadodara@cbhfl.com,';
  }
 
$to .= 'customercare@cbhfl.com';
$subject = 'Cent Bank - REQUEST FOR A LOAN FORM';
$message = ""; 
$message .= '
<html>
<head>
  <title>Cent Bank - REQUEST FOR A LOAN FORM </title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
  
    <tr>
      <td><b>Name:</b></td>
      <td> '.$name.' </td>
    </tr>
    <tr>
      <td><b>Name of Branch :</b></td>
      <td> '.$branch.' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> '.$phone.'</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> '.$email.' </td>
    </tr>
    
  
   
  </table>
</body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <'.$email.'>' . "\r\n";
// $headers .= "From: <'.$email.'>" . "\r\n" ;
  

    if($sql)
    {
        
         if(mail($to,$subject,$message,$headers)){
             
        echo "<script>alert('Form Submitted Successfully');window.location.href='rep5.php';</script>";
         }
    }
    

else{
    echo "<script>alert('Try Again!');window.location.href='rep5.php';</script>";
}
}

?>

<?php 
if(isset($_POST['submit_form'])){
  
 $cname = $_POST['cname'];
$name = $_POST['name'];    
$email = $_POST['email']; 
$phone = $_POST['phone']; 


$sql = mysqli_query($con,"insert into tender_req(name,email,phone,url,company_name) values('$name','$email','$phone','$url','$cname')");

// Pankaj.kumar@cbhfl.com
 
//$to = 'kit.rishabh7530@gmail.com';
//$to .= 'shivendratripathi80044@gmail.com';
$to .= 'pankaj.kumar@cbhfl.com';
$subject = 'Cent Bank - REQUEST FOR Tendor Download';
$message = ""; 
$message .= '
<html>
<head>
  <title>Cent Bank - REQUEST FOR Tendor Download</title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
  
    <tr>
      <td><b>Company Name:</b></td>
      <td> '.$cname.' </td>
    </tr>
    <tr>
      <td><b>Contact Name:</b></td>
      <td> '.$cname.' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> '.$phone.'</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> '.$email.' </td>
    </tr>
     <tr>
      <td><b>URL :</b></td>
      <td> '.$url.' </td>
    </tr>
   
  
   
  </table>
</body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'From: <'.$cname.'>' . "\r\n";
$headers .= 'From: <'.$phone.'>' . "\r\n";





  

    if($sql)
    {
        
         if(mail($to,$subject,$message,$headers)){
 
        echo "<script>alert('Request Submitted Successfully');</script>";

         }
    }
    

else{
    echo "<script>alert('Try Again!');window.location.href='rep5.php';</script>";
}
}

?>


<style>
    .t-loan{
        margin-bottom:8px;
    }
</style>


        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-7">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            
                            <h2>EMPANELMENT OF PANEL ADVOCATES AND VALUERS
                            <br>
<!--                            <span style="font-size: 20px;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022<br>-->
<!--Please check your e-mail for Pre-Bid Meeting invite Link,<br> Meeting date & time - 04 February 2022 at 3:00 PM</span>-->
                            </h2>
    <!--                        <h4 style="    color: #fff;-->
    
    <!--;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022</h4>-->
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
                                <li>EMPANELMENT OF PANEL ADVOCATES AND VALUERS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!--        <marquee ><a href="tendor.php"><b style='color:red;'>CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022 Online Meeting for Written PRE BID QUERIES- Clarifications-->
<!--Please check your e-mail for-->
<!--Meeting Date & Time - 16th February, 2022 at 14:30 hours (2:30pm)</b></a></marquee>-->

        <!-- breadcumb-area end -->
         <div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
<br>
<br>
        <!-- about-area start -->
        <section class="service-area pb-140">
            <div class="container">
                
                 <div class="row">
                 <div class="col-md-12" style="background-color:#296dc1;">
                            <br>
                        <h3 style="color:white; text-align:center;"><b>EMPANELMENT OF PANEL ADVOCATES AND VALUERS</b></h3>
                        <div class="table-responsive"> 
                        <table class="table table-bordered">
                             <thead style="background-color:#fff; color:#296dc1;">
                              <tr>
                                    <th>Sr.No.</th>
                                    <th  class="text-center">Title</th>
                                   <th  class="text-center">Downloads</th>
                              </tr>
                        
                            </thead>
                     <tbody style="background-color:#fff; color:#296dc1;">
	             	<tr>
	             	    <td>1</td>
                      <td  class="text-center">List of documents required for empanelment of Advocate in CBHFL</td> 
    	               <td  class="text-center">
    	                   <a  href="{{url('/')}}/pdf/List of documents required for empanelment of Advocate in CBHFL.DOCX" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                        	  </td>
                    	</tr>
                    		<tr>
                    		    
	             	          <td>2</td>
                              <td  class="text-center">val in word</td> 
                	           <td  class="text-center">
                	                   <a  href="{{url('/')}}/pdf/val in word (2).docx" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    	  </td>
                                	</tr>
                                	
                            <tr>
                    		    
	             	          <td>3</td>
                              <td  class="text-center">APPLICATION FORM FOR VENDORS</td> 
                	           <td  class="text-center">
                	                   <a  href="{{url('/')}}/pdf/APPLICATION FORM FOR VENDORS.DOCX" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    	  </td>
                                	</tr>
                                	  <tr>
                    		    
	             	          <td>4</td>
                              <td  class="text-center">VALUER EMPANELMENT APPLICATION FORM & UNDERTAKING</td> 
                	           <td  class="text-center">
                	                   <a  href="{{url('/')}}/pdf/VALUER EMPANELMENT APPLICATION FORM & UNDERTAKING.DOCX" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    	  </td>
                                	</tr>

	
</tbody>
     
	</table></div>
                            <br>
                       </div>
                       
                                         <br>
            </div>
        
                       </div>


    
            </div>
            
            <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

<div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">
        

                <div class="popup_2">
                <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;width: 35px;height: 35px;background: #000;opacity: 1;border-radius: 0px 0px 0px 10px;"><i class="fa fa-times" style="font-size: 18px;color:white;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;margin-top: -2px;" aria-hidden="true"></i></span>
				 <img src="{{url('/')}}/front_assests/newsupdate.jpg" class="img-responsive" style="max-height:500px;height:100%;">
				 </div>
        
    </div>
  </div>
</div>



<div id="mysecondModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
         
 <div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">
        

                <div class="popup_2">
                <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;width: 35px;height: 35px;background: #000;opacity: 1;border-radius: 0px 0px 0px 10px;"><i class="fa fa-times" style="font-size: 18px;color:white;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;margin-top: -2px;" aria-hidden="true"></i></span>
				 <img src="{{url('/')}}/front_assests/75.jpg" class="img-responsive" style="max-height:500px;height:100%;">
				 </div>
        
    </div>
</div>
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        </section>
        <!-- about-area end -->
        
        

        <!-- .service-area start -->
        <section class="service-area ptb-100" style="background-image: url({{asset('20150502_554414ffeb8d9.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 col">
                        <div class="panel-group emi"style="width:400px;">   
<!--#d2220b;-->
    <div class="panel panel-danger"> 
      <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Calculator</div>
      <div class="panel-body">
    
    <!--form-->
         <form action="#" method="post" >
<div class="row">
<div class="col-xs-12">
    <div class="input-group form-group">
            <input type="number" id="txtLoanAmount" class="form-control" placeholder="Loan Amount*"  name="fname" required>
        <span class="input-group-addon" style="color:#296dc1;"><b>₹</b></span>  
    </div>
</div>

<div class="col-xs-12">
    <div class="input-group form-group">
    <input type="number" class="form-control" id="txtInterestRate" placeholder="Rate of Interest*"  name="email" required> 
    <span class="input-group-addon" style="color:#296dc1;"><b>%</b></span> 
    </div>
</div>
<div class="col-md-12">
    <div class="row">

        <div class="col-md-8 form-group">
            
    <input type="number" class="form-control" required id="txtLoanTerm" placeholder="Loan Tenure*"  name="email">
        </div>
        <div class="col-md-4 form-group">
            <select class="col-md-12 form-control form-control-lg" id="ddlTermType">
            <option value="years">Years</option>
            <option value="months">Months</option>
        </select>
        </div>
    </div>        
    </div>
    <div class="col-md-12">
    <div class="row">

<div class="col-md-2">
</div>
<div class="col-md-4 form-group">
<button type="reset" class="cont-submit btn-contact btn-style">Reset</button>
</div>    
<div class="col-md-4 form-group">
<button class="cont-submit btn-contact btn-style" type="button"  id="btnCalculateHomeLoanEMI"  onclick="calculateHomeLoanEMI()">Submit</button>
</div>

<div class="col-md-2">
</div>
</div>
    </div>
    

    <!-- result emi cal -->
<!--<div class="col-md-12">-->
<!-- <hr/>-->
<!-- result design -->
<!--<div class="archive-wrap mb-30">-->
<!--<h3 class="sidebar-title">EMI Result</h3>-->
<!--<ul>-->
<!--<li><a href="#">EMI <span class="pull-right" id="totalEMIValue">0</span></a></li>-->
<!--<li><a href="#">Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></a></li>-->
<!--<li><a href="#">Loan Term <span class="pull-right" id="totalLoanTerm">0</span></a></li>-->
<!--<li><a href="#">Interest Rate <span class="pull-right" id="totalInterestRate">0</span></a></li>-->
<!--<li><a href="#">Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></a></li>-->
<!--<li><a href="#">Total Amount <span class="pull-right" id="totalAmount">0</span></a></li>-->
<!--</ul>-->
<!--</div>-->
<!--end result design  -->
    <!-- end result emi cal -->
<!-- </div> -->

</div>
</div>
</form>

    <!--end form-->

</div>
</div>
</div>

    <!--</div>                    -->
                        
                                  
                      
                        
                        
                        
                        
<div class="col-md-3 col-sm-4 col-xs-12 col">
    
    <div class="panel-group emi">   

    <div class="panel panel-danger">
      <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Result</div>
      <div class="panel-body" style="height:240px;">
          <div class="archive-wrap mb-30">
<!--<h3 class="sidebar-title">EMI Result</h3>-->
<ul>
<li><a href="#">EMI <span class="pull-right" id="totalEMIValue">0</span></a></li>
<li><a href="#">Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></a></li>
<li><a href="#">Loan Term <span class="pull-right" id="totalLoanTerm">0</span></a></li>
<li><a href="#">Interest Rate <span class="pull-right" id="totalInterestRate">0</span></a></li>
<li><a href="#">Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></a></li>
<li><a href="#">Total Amount <span class="pull-right" id="totalAmount">0</span></a></li>
</ul>
</div>
<!--end result design  -->
<!--     end result emi cal -->
 </div> 
          </div>
          </div>
          <!--</div>-->
    
</div>


                    <div class="col-md-4 col-sm-4 col-xs-12 col">
                        
               
<div class="panel-group emi">   

    <div class="panel panel-danger">
      <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">Request For New Loan</div>
      <div class="panel-body">
    
    <!--form-->
         <form action="#" method="post"  id="formid">
<div class="row">
<div class="col-xs-12">
    <div class="input-group form-group t-loan" style="width:100%;">
           <input type="text" class="form-control" placeholder="Enter Name"  name="name" required>
        
    </div>
</div>
<div class="col-xs-12">
    <div class="input-group form-group t-loan" style="width:100%;">
   <input type="email" class="form-control" placeholder="Enter Email Id"  name="email" required>
     
    </div>
</div>
<div class="col-xs-12">
    <div class="input-group form-group t-loan" style="width:100%;">
   <input type="text" class="form-control" placeholder="Enter Mobile No."  name="phone" required>
     
    </div>
</div>
<div class="col-md-12">
    <div class="row">

        
        <div class="col-md-12 form-group">
            <select class="col-md-12 form-control form-control-lg" id="ddlTermType" name="branch" required>
           <option value="">Select Branch</option>
      <option value="Bhopal">Bhopal</option>
                    <option value="Raipur">Raipur</option>
                    <option value="Jabalpur">Jabalpur</option>
                    <option value="Gwalior">Gwalior</option>
                    <option value="Indore">Indore</option>
                    <option value="New Delhi">New Delhi</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Pune">Pune</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Bilaspur">Bilaspur</option>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Nashik">Nashik</option>
                    <option value="Agra">Agra</option>
                    <option value="Surat">Surat</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Panchkula">Panchkula</option>
        </select>
        </div>
    </div>        
    </div>
    <div class="col-md-12">
    <div class="row">

<!--<div class="col-md-2">-->
<!--</div>-->
   
<div class="col-md-12 form-group" style="text-align:center;margin-bottom:-10px;">
<button class="cont-submit btn-contact btn-style" onclick="openWord1()" name="submit">Submit</button>
</div>


    </div>
                 
                

        </section>
    </div>    
        
      


<!--  <script>-->

<!--      var pdfUrl = "https://cbhfl.com/rfp2 website/CBHFL  e.pdf";-->
      

<!--    $('.doc_form').on('submit', function () {-->
        
<!--        window.open(pdfUrl, 'download');-->
     
<!--    });-->

	


  
<!--</script>-->

   <div id="myModal" class="modal fade pull-center text-center">
    <style>
        .popup_2 {
    position: relative;
}
.modal-dialog {
    margin: auto !important;
}
    </style>
    <div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">
        

                <div class="popup_2">
                <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;width: 35px;height: 35px;background: #000;opacity: 1;border-radius: 0px 0px 0px 10px;"><i class="fa fa-times" style="font-size: 18px;color:white;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;margin-top: -2px;" aria-hidden="true"></i></span>
				 <img src="assets/75.jpg" class="img-responsive" style="max-height:500px;height:100%;">
				 </div>
        
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

@endsection


