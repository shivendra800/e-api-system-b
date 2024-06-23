@extends('front.layout.layouts')
@section('title', 'Commercial property')

@section('main_content')

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];

    $sql = mysqli_query($con, "insert into loan_request(name,email,phone,branch_name) values('$name','$email','$phone','$branch')");

    if ($branch == 'Agra') {
        $to = 'bm_agra@cbhfl.com,';
    } elseif ($branch == 'Banglore') {
        $to = 'bm_bangalore@cbhfl.com,';
    } elseif ($branch == 'Bopal') {
        $to = 'bm_bhopal@cbhfl.com,';
    } elseif ($branch == 'Bilaspur') {
        $to = 'bm_bilaspur@cbhfl.com,';
    } elseif ($branch == 'Delhi') {
        $to = 'bm_delhi@cbhfl.com,';
    } elseif ($branch == 'Gwalior') {
        $to = 'bm_gwalior@cbhfl.com,';
    } elseif ($branch == 'Indore') {
        $to = 'bm_indore@cbhfl.com,';
    } elseif ($branch == 'Jabalpur') {
        $to = 'bm_jabalpur@cbhfl.com,';
    } elseif ($branch == 'Jaipur') {
        $to = 'bm_jaipur@cbhfl.com,';
    } elseif ($branch == 'Lucknow') {
        $to = 'bm_lucknow@cbhfl.com,';
    } elseif ($branch == 'Mumbai') {
        $to = 'bm_mumbai@cbhfl.com,';
    } elseif ($branch == 'Nagpur') {
        $to = 'bm_nagpur@cbhfl.com,';
    } elseif ($branch == 'Nashik') {
        $to = 'bm_nashik@cbhfl.com,';
    } elseif ($branch == 'Panchkula') {
        $to = 'bm_panchkula@cbhfl.com,';
    } elseif ($branch == 'Raipur') {
        $to = 'bm_raipur@cbhfl.com,';
    } elseif ($branch == 'Surat') {
        $to = 'bm_surat@cbhfl.com,';
    } elseif ($branch == 'Varodara') {
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
      <td> ' . $name . ' </td>
    </tr>
    <tr>
      <td><b>Name of Branch :</b></td>
      <td> ' . $branch . ' </td>
    </tr>
    <tr>
      <td><b>Mobile Number:</b></td>
      <td> ' . $phone . '</td>
    </tr>
    <tr>
      <td><b>Email id :</b></td>
      <td> ' . $email . ' </td>
    </tr>
    
  
   
  </table>
</body>
</html>
';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <' . $email . '>' . "\r\n";
    // $headers .= "From: <'.$email.'>" . "\r\n" ;


    if ($sql) {
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Form Submitted Successfully');window.location.href='commercial_property.php';</script>";
        }
    } else {
        echo "<script>alert('Try Again!');window.location.href='commercial_property.php';</script>";
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
<div class="breadcumb-area black-opacity bg-img-17">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Commercial Property</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{url('/')}}">Non-Housing</a></li>
                        <li>/</li>
                        <li>Commercial Property</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{url('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container-fluid" style="margin-bottom:-50px;">
            <div class="row" style="margin:5px 0px;">
                <div class="col-md-7" style="background-color:#296DC1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Commercial Property</b></h3>
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
                                <td> For Purchase of Commercial Property like shop etc.</td>
                            </tr>

                            <tr>
                                <td><b>Eligibility</b></td>
                                <td> Individuals who are Salaried/Professionals/ Self employed non-professionals who
                                    have adequate repayment capacity supported by proof i.e. Salary Slips/Form 16/ and Income
                                    tax returns.
                                </td>
                            </tr>


                            <tr>
                                <td><b>Loan Quantum</b></td>
                                <td> <i class="fa fa-check-square-o" aria-hidden="true"></i> Min : Rs. 2 Lakh <br>
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i> Max : No Ceiling
                                </td>
                            </tr>

                            <tr>
                                <td><b>Repayment</b></td>
                                <td> Upto 30 Years (Subject to Maximum age of 65 years or Retirement age, whichever is earlier for Salaried and For Self Employed maximum age is 70 years at the time of loan maturity)
                                </td>
                            </tr>

                            <tr>
                                <td><b>Margin</b></td>
                                <!--<td> 30%</td>-->
                                <td><i class="fa fa-check-square-o" aria-hidden="true"></i> 30%<br>
                                    <!--<i class="fa fa-check-square-o" aria-hidden="true"></i> Rate Rs. 30 lakh to 75 lakh - 28%<br>-->
                                    <!-- <i class="fa fa-check-square-o" aria-hidden="true"></i>  Rate Above 30 lakh - 25%-->
                                </td>
                            </tr>

                            <tr>
                                <td><b>Security</b></td>
                                <td> Mortgage of the property being financed
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 col" style="background-color:#296DC1;height:433px;">
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


</div>

@endsection