@extends('front.layout.layouts')
@section('title', 'Housing RateOfInterest')

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
        echo "<script>alert('Form Submitted Successfully');window.location.href='housing_rateOfInterest.php';</script>";
         }
    }
    


else{
    echo "<script>alert('Try Again!');window.location.href='housing_rateOfInterest.php';</script>";
}
}

?>

<!-- heared area end -->


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <!--<p style="color:white;font-size:12pt;"><br/><i>More Interest More Happiness</i></p>    -->
                    <h2>Rate <span style="text-transform:lowercase;">of</span> Interest
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
                        <li>Rate <span style="text-transform:lowercase;">of</span> Interest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">

    <!-- about-area end -->
    <section class="service-area ptb-140" style="margin-top: -98px;margin-bottom: -84px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">

                    <div class="about-wrap">
                        <br>

                        <p style="color:darkblue;background-color:">

                            <div class="table-responsive" style="background-color:#296dc1;">
                                <table class="table table-bordered" style="border: 5px solid #296dc1;">
                                    <thead>
                                        <tr>
                                            <th colspan="6" style="text-align:center;color:white;">Applicable Rates of Interest for Housing Loans</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr style="text-align:center;background:white;color:#296dc1;">
                                            <td><b>Borrower Category</b></td>
                                            <td><b>Income Based (IB)</b></td>
                                            <td><b>Income Estimation<br>(IE)</b></td>
                                            <td><b>Low LTV </b></td>
                                            <td><b>Post Pension<br> Programme</b></td>
                                            <td><b>Low Income Group<br>Programme </b></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Salaried </td>
                                            <td style='color:white;'>Base Rate<br> 9.65% + <br>Spread 0.30% <br><br>Effective RoI- 9.95%</td>
                                            <td style='color:white;'>NA </td>
                                            <td style='color:white;'>Base Rate<br> 9.65% + <br>Spread 0.50% <br><br>Effective RoI- 10.15%</td>
                                            <td style='color:white;'>Base Rate<br> 9.65% + <br>Spread 1% <br><br>Effective RoI- 10.65%</td>
                                            <td style='color:white;'>Base Rate<br> 9.65% + <br>Spread 1.50% <br><br>Effective RoI- 11.15%</td>
                                        </tr>
                                        <tr style="text-align:center;background:white;color:#296dc1;">
                                            <td>Self-employed<br> (SEP/SENP) </td>
                                            <td>Base Rate<br> 9.65% + <br>Spread 0.45% <br><br>Effective RoI- 10.10%</td>
                                            <td>Base Rate<br> 9.65% + <br>Spread 0.50% <br><br>Effective RoI- 10.15%</td>
                                            <td>Base Rate<br> 9.65% + <br>Spread 0.70% <br><br>Effective RoI- 10.35%</td>
                                            <td>NA </td>
                                            <td>Base Rate<br> 9.65% + <br>Spread 1.50% <br><br>Effective RoI- 11.15%</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Non-Individual<br>Loan Upto Rs.30 Lakh </td>
                                            <td colspan="5" style='color:white;'>Base Rate 9.65% + Spread 1.50%<br><br>Effective Rol- 11.15% </td>
                                        </tr>
                                        <tr style="text-align:center;background:white;color:#296dc1;">
                                            <td>Non-Individual<br>Loan above Rs.30 Lakh </td>
                                            <td colspan="5">Base Rate 9.65% + Spread 2%<br><br>Effective Rol- 11.65% </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </p>


                    </div>

                </div><br>




                <!--<div class="col-md-4" style="background-color:#296DC1;margin-top: 15px;">-->
                <!--eny form start-->
                <!--<div class="col-md-3" style="margin-top: 41px;background-color:#296DC1;width: 24%;">-->
                <!--eny form start-->
                <!--<div class="col-md-3 col-sm-2 col-xs-12 col" style="background-color:#296DC1;height:468px;">-->
                <!--                        <form action="#" method="post" style="height:512px;">-->
                <!--<div class="row"><br/>-->
                <!--    <h4 style="color:white;text-align:center"><b>Request for a New Loan</b></h4>-->

                <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p>-->
                <!--<br/><div class="col-xs-12 form-group">-->
                <!--    <p style="color:white;">Enter Name*</p>-->
                <!--<input type="text" class="form-control" placeholder="" name="fname">-->
                <!--</div>-->

                <!--<div class="col-xs-12 form-group">-->
                <!--    <p style="color:white;">Select Location*</p>-->
                <!--<select class="form-control">-->
                <!--location-->
                <!--    <option value="">Select Branch</option>-->
                <!--      <option value="Bhopal">Bhopal</option>-->
                <!--                    <option value="Raipur">Raipur</option>-->
                <!--                    <option value="Jabalpur">Jabalpur</option>-->
                <!--                    <option value="Gwalior">Gwalior</option>-->
                <!--                    <option value="Indore">Indore</option>-->
                <!--                    <option value="New Delhi">New Delhi</option>-->
                <!--                    <option value="Mumbai">Mumbai</option>-->
                <!--                    <option value="Jaipur">Jaipur</option>-->
                <!--                    <option value="Pune">Pune</option>-->
                <!--                    <option value="Bangalore">Bangalore</option>-->
                <!--                    <option value="Lucknow">Lucknow</option>-->
                <!--                    <option value="Bilaspur">Bilaspur</option>-->
                <!--                    <option value="Vadodara">Vadodara</option>-->
                <!--                    <option value="Nashik">Nashik</option>-->
                <!--                    <option value="Agra">Agra</option>-->
                <!--                    <option value="Surat">Surat</option>-->
                <!--                    <option value="Nagpur">Nagpur</option>-->
                <!--                    <option value="Panchkula">Panchkula</option>-->
                <!--location end-->
                <!--</select>-->
                <!--</div>-->
                <!--<div class="col-xs-12 form-group">-->
                <!--    <p style="color:white;">Enter Mobile No.*</p>-->
                <!--<input type="text" class="form-control" placeholder=""  name="fname">-->
                <!--</div>-->
                <!--<div class="col-md-12">-->
                <!--    <p style="color:white;"><input type="checkbox"> I agree to be contacted by Cent Bank representative for loan enquiry.</p>-->
                <!--</div>-->
                <!--<div class="col-xs-12" style="text-align:center;"><br/>-->
                <!--<button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button>-->
                <!--<br>-->
                <!--<br>-->

                <!--</div>-->
                <!--</div>-->
                <!--</form>-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="container" style="background-color:#c72929;">-->

            </div>


            <!----------------New Update ---------------->
            <!--<div class="row">-->
            <!--                     <div class="col-md-6" style="">-->

            <!--                    <div class="about-wrap">-->
            <!--                            <br>-->

            <!--                            <p style="color:darkblue;background-color:">-->

            <!--                                         <div class="table-responsive" style="background-color:#296dc1;">-->
            <!--                <table class="table table-bordered" style="border: 5px solid #296dc1;">-->
            <!--    <thead>-->
            <!--      <tr >-->
            <!--        <th colspan="6" style="text-align:center;color:white;">Range of RoI</th>-->
            <!--      </tr>-->
            <!--    </thead>-->
            <!--    <tbody>-->

            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b></b></td>-->
            <!--        <td ><b>Minimum</b></td>-->
            <!--        <td><b>Maximum</b></td>-->
            <!--      </tr>-->

            <!--       <tr style="text-align:center;">-->
            <!--        <td style='color:white;'><b>Housing</b></td>-->
            <!--        <td  style='color:white;'>9.95%</td>-->
            <!--        <td style='color:white;'>11.15% </td>-->
            <!--      </tr>-->

            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Non-housing</b></td>-->
            <!--       <td> 11.15%</td>-->
            <!--       <td >12.15%</td>-->
            <!--      </tr>-->

            <!--      <tr style="text-align:center;">-->
            <!--        <td colspan="3" style='color:white;'><b>Average  RoI </b></td>-->
            <!--      </tr>-->

            <!--       <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Housing</b></td>-->
            <!--       <td colspan="2">10.24%</td>-->
            <!--      </tr>-->
            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Non-housing</b></td>-->
            <!--       <td colspan="2">11.71%</td>-->
            <!--      </tr>-->
            <!--    </tbody>-->
            <!--  </table>-->
            <!--            </div>-->

            <!--                             </p>-->


            <!--                        </div>-->

            <!--              </div>-->


            <!--                 <div class="col-md-6" style="">-->

            <!--                    <div class="about-wrap">-->
            <!--                            <br>-->

            <!--                            <p style="color:darkblue;background-color:">-->

            <!--                                         <div class="table-responsive" style="background-color:#296dc1;">-->
            <!--                <table class="table table-bordered" style="border: 5px solid #296dc1;">-->
            <!--    <thead>-->
            <!--      <tr >-->
            <!--        <th colspan="6" style="text-align:center;color:white;">Range of APR</th>-->
            <!--      </tr>-->
            <!--    </thead>-->
            <!--    <tbody>-->

            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b></b></td>-->
            <!--        <td ><b>Minimum</b></td>-->
            <!--        <td><b>Maximum</b></td>-->
            <!--      </tr>-->

            <!--       <tr style="text-align:center;">-->
            <!--        <td style='color:white;'><b>Housing</b></td>-->
            <!--        <td  style='color:white;'>5.66%</td>-->
            <!--        <td style='color:white;'>7.50% </td>-->
            <!--      </tr>-->

            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Non-housing</b></td>-->
            <!--       <td> 7.23%</td>-->
            <!--       <td >7.93%</td>-->
            <!--      </tr>-->

            <!--      <tr style="text-align:center;">-->
            <!--        <td colspan="3" style='color:white;'><b>Range of RoI</b></td>-->
            <!--      </tr>-->

            <!--       <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Housing</b></td>-->
            <!--        <td>9.80%</td>-->
            <!--        <td>11.00%</td>-->
            <!--      </tr>-->
            <!--      <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--        <td><b>Non-housing</b></td>-->
            <!--       <td>11.30%</td>-->
            <!--       <td>12.30%</td>-->
            <!--      </tr>-->
            <!--    </tbody>-->
            <!--  </table>-->
            <!--            </div>-->

            <!--                             </p>-->


            <!--                        </div>-->

            <!--              </div>-->

            <!--</div>-->


            <!--  <div class="row">-->
            <!--                   <div class="col-md-12" style="">-->

            <!--                  <div class="about-wrap">-->
            <!--                          <br>-->

            <!--                          <p style="color:darkblue;background-color:">-->

            <!--                                       <div class="table-responsive" style="background-color:#296dc1;">-->
            <!--              <table class="table table-bordered" style="border: 5px solid #296dc1;">-->
            <!--  <thead>-->
            <!--    <tr >-->
            <!--      <th colspan="6" style="text-align:center;color:white;">APR Calculator</th>-->
            <!--    </tr>-->
            <!--  </thead>-->
            <!--  <tbody>-->

            <!--    <tr style="text-align:center;background:white;color:#296dc1;">-->

            <!--      <td ><b>Principal</b></td>-->
            <!--      <td>1500000</td>-->
            <!--    </tr>-->

            <!--     <tr style="text-align:center;">-->
            <!--      <td style='color:white;'><b>Interest</b></td>-->

            <!--      <td style='color:white;'>10% </td>-->
            <!--    </tr>-->

            <!--    <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--      <td><b>No. of Years </b></td>-->

            <!--     <td >15</td>-->
            <!--    </tr>-->

            <!--    <tr style="text-align:center;">-->
            <!--      <td style='color:white;'><b>EMI </b></td>-->
            <!--      <td style='color:white;'>16211</td>-->
            <!--    </tr>-->

            <!--     <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--      <td><b>Upfront Charges</b></td>-->
            <!--     <td>10000</td>-->
            <!--    </tr>-->

            <!--    <tr style="text-align:center; color:white;">-->
            <!--      <td ><b>Other charges, if any </b></td>-->
            <!--     <td>0</td>-->
            <!--    </tr>-->


            <!--    <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--      <td><b>Effective Principal </b></td>-->
            <!--     <td>1500000</td>-->
            <!--    </tr>-->
            <!--    <tr style="text-align:center;color:white;">-->
            <!--      <td><b>Year of Prepayment </b></td>-->
            <!--     <td>0</td>-->
            <!--    </tr>-->
            <!--    <tr style="text-align:center;background:white;color:#296dc1;">-->
            <!--      <td><b>APR</b></td>-->
            <!--     <td>10.22%</td>-->
            <!--    </tr>-->

            <!--  </tbody>-->
            <!--</table>-->
            <!--          </div>-->

            <!--                           </p>-->


            <!--                      </div>-->

            <!--            </div>-->
            <!--            </div>-->

        </div>
    </section>
    <!--background-image: url(20150502_554414ffeb8d9.jpg);-->

    <!-- .service-area start -->
    <section class="service-area ptb-100" style="background-image: url({{asset('20150502_554414ffeb8d9.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <div class="container">
            <div claas="row">
                <div class="col-md-6">

                    <!--<div class="col-md-3" style="margin-top: 26px;">-->
                    <div class="panel-group emi">
                        <!--#d2220b;-->
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">EMI Calculator</div>
                            <div class="panel-body" style="height:515px;background:#296dc1;color:white;">

                                <!--form-->
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group form-group">
                                                <input type="number" id="txtLoanAmount" class="form-control" placeholder="Loan Amount*" name="fname" required>
                                                <span class="input-group-addon" style="color:#296dc1;"><b>₹</b></span>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="input-group form-group">
                                                <input type="number" class="form-control" id="txtInterestRate" placeholder="Rate of Interest*" name="email" required>
                                                <span class="input-group-addon" style="color:#296dc1;"><b>%</b></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="col-md-8 form-group">

                                                    <input type="number" class="form-control" required id="txtLoanTerm" placeholder="Loan Tenure*" name="email">
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
                                                    <button type="reset" class="cont-submit btn-contact btn-style" style="color:blue;">Reset</button>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <button class="cont-submit btn-contact btn-style" type="button" id="btnCalculateHomeLoanEMI" onclick="calculateHomeLoanEMI()" style="color:blue;">Submit</button>
                                                </div>

                                                <div class="col-md-2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr />

                                            <div class="archive-wrap mb-30">
                                                <h4 class="sidebar-title" style="color:white;">EMI Result</h4>
                                                <ul>
                                                    <li><a href="#" style="color:white;">EMI <span class="pull-right" id="totalEMIValue">0</span></a></li>
                                                    <li><a href="#" style="color:white;">Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></a></li>
                                                    <li><a href="#" style="color:white;">Loan Term <span class="pull-right" id="totalLoanTerm">0</span></a></li>
                                                    <li><a href="#" style="color:white;">Interest Rate <span class="pull-right" id="totalInterestRate">0</span></a></li>
                                                    <li><a href="#" style="color:white;">Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></a></li>
                                                    <li><a href="#" style="color:white;">Total Amount <span class="pull-right" id="totalAmount">0</span></a></li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                            </div>
                            </form>

                            <!--end form-->

                        </div>
                    </div>
                </div>
                <!--end content-->
                <!--</div>-->

            </div>
            <div class="col-md-6" style="background-color:#296DC1;">

                <form action="{{ url('loan-requestsave') }}" method="post">
                    @csrf
                    <div class="row"><br />
                        <h4 style="color:white;text-align:center"><b>Request for a New Loan</b></h4>

                        <p style="color:white; text-align:center;">*Marked fields are mandatory.</p>
                        <br />
                        <div class="col-xs-12 form-group">
                            <p style="color:white;">Enter Name*</p>
                            <input type="text" class="form-control" placeholder="" name="name" required>
                        </div>
                        <div class="col-xs-12 form-group">
                            <p style="color:white;">Enter Email Id*</p>
                            <input type="text" class="form-control" placeholder="" name="email" required>
                        </div>
                        <div class="col-xs-12 form-group">
                            <p style="color:white;">Enter Mobile No.*</p>
                            <input type="text" class="form-control" placeholder="" name="phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
                        </div>
                        <div class="col-xs-12 form-group">
                            <p style="color:white;">Select Location*</p>
                            <select class="form-control" name="branch_name" required>
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
                        <div class="col-xs-12" style="text-align:center;"><br />
                            <button type="submit" class="cont-submit btn-contact btn-style" >Submit</button>
                            <br>
                            <br>

                        </div>
                    </div>
                </form>
            </div>

        </div>

</div>


</div>
</section>
<!---new slider -->
<!--end new slider-->
</div>



<script>
    function maturity() {
        var principal = document.getElementById('principal').value;
        var rate = document.getElementById('rate').value;
        var ci = document.getElementById('ci').value;
        var time = document.getElementById('time').value;
        var irate = rate / ci;
        var mv = document.getElementById('all').value;
        var total = (document.getElementById('principal').value * Math.pow((1 + irate / 100), (time / 12 * ci))).toFixed(2);
        document.getElementById('all').textContent = +total + " ₹";
        alert(total);
    }
    // Widget Code by https://karvitt.com/widgets/
</script>
<script>
    // aaaaaa
    // function FV(PV,i,n){
    // var x=(1+i/100)
    // var FV=PV*(Math.pow(x,n))
    // return FV;
    // }
    // function Cal_FV(){
    // var pvalue=parseFloat(document.getElementById("a").value);
    // var interest=parseFloat(document.getElementById("b").value);
    // var num=parseInt(document.getElementById("c").value);
    // var fvalue=FV(pvalue, interest, num);
    // var fv=fvalue.toFixed(2);
    // document.getElementById('totalP').textContent=+pvalue+" ₹";
    // document.getElementById('interest').textContent=+interest+" %";
    // document.getElementById('all').textContent=+fv+" ₹";
    // }
</script>

@endsection