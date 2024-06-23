@extends('front.layout.layouts')
@section('title', 'Low LTV')

@section('main_content')


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
        echo "<script>alert('Form Submitted Successfully');window.location.href='low_LTV.php';</script>";
         }
    }
    

else{
    echo "<script>alert('Try Again!');window.location.href='low_LTV.php';</script>";
}
}

?>


<style>
    tr:nth-child(even) {
        background-color: #6ca0e0;
        color: white;

    }
</style>

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Low LTV Programme<p style="color:white;font-size:12pt;"></p>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{url('/')}}">Housing</a></li>
                        <li>/</li>
                        <li>Low LTV Programme</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container-fluid" style="margin-bottom:-50px;">
            <div class="row" style="margin:5px 0px;">
                <div class="col-md-8" style="background-color:#296DC1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Low LTV Programme</b></h3>
                    <table class="table table-bordered" style="background-color:white;">
                        <!--<thead>-->
                        <!--  <tr>-->
                        <!--    <th>Purpose</th>-->
                        <!--    <th>Eligibility</th>-->
                        <!--    <th>Loan Quantum</th>-->
                        <!--    <th>Repayment</th>-->
                        <!--    <th>Margin</th>-->
                        <!--    <th>Security</th>-->
                        <!--  </tr>-->
                        <!--</thead>-->
                        <tbody>
                            <tr>
                                <td><b>Purpose</b></td>
                                <td> For Purchase/Construction/ Improvement/Extension/ Take over/ Residential Plot
                                    purchase/Plot purchase plus Construction/ Top Up -Housing</td>
                            </tr>

                            <tr>
                                <td><b>Eligibility</b></td>
                                <td> Individuals who are Salaried/Professionals/ Self employed non-professional/NRI
                                    who has adequate repayment capacity supported by proof i.e. Salary Slips/Form 16/ and
                                    Income tax returns.</td>
                            </tr>


                            <tr>
                                <td><b>Loan Quantum</b></td>
                                <td> <i class="fa fa-check-square-o" aria-hidden="true"></i> Min : Rs. 2 Lakh <br>
                                    <!--<i class="fa fa-check-square-o" aria-hidden="true"></i> Max : No Ceiling </td></tr>-->
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i> Max : Rs.200 Lakh </td>
                            </tr>

                            <tr>
                                <td><b>Repayment</b></td>
                                <td> Upto 30 Years (Subject to Maximum age of 65 years or Retirement age, whichever is earlier for Salaried and For Self Employed maximum age is 70 years at the time of loan maturity)
                                </td>
                            </tr>

                            <tr>
                                <td><b>Margin(%)</b></td>
                                <!--<td>flat-60%</td>-->
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i> Flat -60%<br>
                            </tr>

                            <tr>
                                <td><b>Security</b></td>
                                <td> Mortgage of the property being financed</td>
                            </tr>

                            <tr>
                                <td><b>Special features</b></td>
                                <td>

                                    <p><i class="fa fa-check"></i> Program for borrowers who have invested more in property and require lesser loan amount. </p>

                                    <p> <i class="fa fa-check"></i> Considering 15% additional DBR/IIR which results in higher loan eligibility.</p>
                                    <p><i class="fa fa-check"></i> Maximum Loan to Value- 40%</p>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 col-sm-2 col-xs-12 col" style="background-color:#296DC1;height:490px;">
                    <form action="{{ url('loan-requestsave') }}" method="post">
                        @csrf
                        <div class="row"><br />
                            <h4 style="color:white;text-align:center"><b>Request for a New Loan</b></h4>

                            <p style="color:white; text-align:center;">*Marked fields are mandatory.</p><br>
                            <div class="col-xs-12 form-group">
                                <!--<p style="color:white;">Enter Name*</p>-->
                                <input type="text" class="form-control" placeholder="Enter Name*" name="name" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <!--<p style="color:white;">Enter Email Id*</p>-->
                                <input type="email" class="form-control" placeholder="Enter Email Id" name="email" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <!--<p style="color:white;">Enter Mobile No.*</p>-->
                                <input type="text" class="form-control" placeholder="Enter Mobile No" name="phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
                            </div>
                            <div class="col-xs-12 form-group">
                                <!--<p style="color:white;">Select Location*</p>-->
                                <select class="form-control" required name="branch_name">
                                    <!--location-->
                                    <option value="">Select Branch</option>
                                    <option value="Bhopal">Bhopal</option>
                                    <option value="Raipur">Raipur</option>
                                    <option value="Rohtak">Rohtak</option>
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
                                    <!--location end-->
                                </select>
                            </div>

                            <div class="col-md-12">
                                <p style="color:white;"><input type="checkbox" required> I agree to be contacted by Cent Bank representative for loan enquiry.</p>
                            </div>
                            <div class="col-md-12" style="text-align:center;"><br>
                                <button type="submit" class="cont-submit btn-contact btn-style" >Submit</button>

                            </div>
                        </div>
                    </form>
                </div>



            </div>
    </section>
    <!-- about-area end -->

    <!-- .service-area start -->
    <!--        <section class="service-area pb-140">-->
    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-5 col-sm-4 col-xs-12 col">-->
    <!--                        <div class="panel-group emi">   -->

    <!--    <div class="panel panel-danger">-->
    <!--      <div class="panel-heading" style="background-color:#296DC1;color:white">EMI Calculator</div>-->
    <!--      <div class="panel-body">-->

    <!--form-->
    <!--         <form action="#" method="post" >-->
    <!--<div class="row">-->
    <!--<div class="col-xs-12">-->
    <!--    <div class="input-group form-group">-->
    <!--            <input type="number" id="txtLoanAmount" class="form-control" placeholder="Loan Amount*"  name="fname" required>-->
    <!--        <span class="input-group-addon" style="color:#d2220b;"><b>₹</b></span>  -->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="col-xs-12">-->
    <!--    <div class="input-group form-group">-->
    <!--    <input type="number" class="form-control" id="txtInterestRate" placeholder="Rate of Interest*"  name="email" required> -->
    <!--    <span class="input-group-addon" style="color:#d2220b;"><b>%</b></span> -->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="col-md-12">-->
    <!--    <div class="row">-->

    <!--        <div class="col-md-8 form-group">-->

    <!--    <input type="number" class="form-control" required id="txtLoanTerm" placeholder="Loan Tenure*"  name="email">-->
    <!--        </div>-->
    <!--        <div class="col-md-4 form-group">-->
    <!--            <select class="col-md-12 form-control form-control-lg" id="ddlTermType">-->
    <!--            <option value="years">Years</option>-->
    <!--            <option value="months">Months</option>-->
    <!--        </select>-->
    <!--        </div>-->
    <!--    </div>        -->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--    <div class="row">-->

    <!--<div class="col-md-2">-->
    <!--</div>-->
    <!--<div class="col-md-4 form-group">-->
    <!--<button type="reset" class="cont-submit btn-contact btn-style">Reset</button>-->
    <!--</div>    -->
    <!--<div class="col-md-4 form-group">-->
    <!--<button class="cont-submit btn-contact btn-style" type="button"  id="btnCalculateHomeLoanEMI"  onclick="calculateHomeLoanEMI()">Submit</button>-->
    <!--</div>-->

    <!--<div class="col-md-2">-->
    <!--</div>-->
    <!--</div>-->
    <!--    </div>-->

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

    <!--</div>-->
    <!--</div>-->
    <!--</form>-->

    <!--end form-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--                       </div>-->
    <!--<div class="col-md-2 col-sm-4 col-xs-12 col"></div>-->


    <!--                    <div class="col-md-5 col-sm-4 col-xs-12 col" style="background-color:#296DC1;height:610px;">-->
    <!--                        <form action="https://preview.colorlib.com/theme/martxa/martxa/mail.php" method="post" >-->
    <!--<div class="row"><br/>-->
    <!--    <h4 style="color:white;text-align:center"><b>Request for a New Loan</b></h4>-->

    <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p><br/>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Name" name="fname"><br>-->
    <!--</div>-->

    <!--<div class="col-xs-12 form-group">-->
    <!--
<!--</div>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Mobile No."  name="fname"><br>-->
    <!--</div>-->
    <!--<div class="col-xs-12">-->
    <!--<div class="form-group">-->

    <!--</div>-->
    <!--<input type="text" placeholder="Nearest Branch" id="email" name="email">-->
    <!--</div>-->

    <!--<div class="col-xs-12" style="text-align:center;">-->
    <!--<button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button>-->
    <!--<br>-->
    <!--<br>-->

    <!--</div>-->
    <!--</div>-->
    <!--</form></div>-->

    <!--                    </div>-->


    <!--            </div>-->
    <!--        </section>-->
</div>


@endsection