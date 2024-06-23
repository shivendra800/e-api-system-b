@extends('front.layout.layouts')
@section('title', 'Advertisement')

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
            echo "<script>alert('Form Submitted Successfully');window.location.href='advertisement.php';</script>";
        }
    } else {
        echo "<script>alert('Try Again!');window.location.href='advertisement.php';</script>";
    }
}

?>

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-14">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Advertisement for Deposits</h2>
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
                        <li>Advertisement for Deposits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assets/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8" style="background-color:#296dc1;height: 877px;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Advertisement for Deposits</b></h3>
                    <iframe src="{{url('front_assests/pdf/Deposit Scheme-2020-21 (swati) (approved from board) (1).pdf')}}" style="width:100%; height:800px;" frameborder="0"></iframe>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="panel-group emi">
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">FD Calculator</div>
                            <div class="panel-body">

                                <!--form-->
                                <form action="#" method="post">
                                    <!--<div class="row"><br/>-->
                                    <!--<h4 style="color:#296dc1;text-align:center;padding:10px;"><b>FD Calculator</b></h4>-->

                                    <!--<p style="color:#296dc1; text-align:center;">*Marked fields are mandatory.</p>-->

                                    <div class="col-xs-12 input-group form-group">
                                        <input required type="number" class="form-control" placeholder="Enter Principal Amount" id="principal" name="p" autocomplete="off">
                                        <span class="input-group-addon" style="color:#296dc1;"><b>Rs</b></span>
                                    </div>

                                    <div class="col-xs-12 input-group form-group">
                                        <input required type="number" class="form-control" placeholder="Enter Intrest Rate" name="r" id="rate" autocomplete="off">
                                        <span class="input-group-addon" style="color:#296dc1;"><b>%</b></span>
                                    </div>

                                    <div class="col-xs-12 input-group form-group">
                                        <select required id="ci" class="form-control">
                                            <option value="12">Monthly
                                            <option value="4" selected>Quarterly
                                            <option value="1">Yearly
                                        </select>
                                    </div>

                                    <div class="col-xs-12 input-group form-group">
                                        <input type="number" required class="form-control" placeholder="Period (months)" name="t" id="time" autocomplete="off">
                                    </div>

                                    <div class="col-xs-12" style="text-align:center;color:#296dc1;">
                                        <button type="reset" class="cont-submit btn-contact btn-style">Reset</button>
                                        <button type="button" class="cont-submit btn-contact btn-style" onclick=maturity();>Submit</button>
                                        <br>

                                        <br>

                                    </div>
                                    <!--</div>-->
                                </form>
                                <div class="col-md-12">
                                    <!-- result design -->
                                    <div class="archive-wrap mb-30">
                                        <h4 class="sidebar-title" style='color:#296dc1;'>FD Calculator Result</h4>
                                        <ul>
                                            <li style='color:#296dc1;'>Maturity Amount <span class="pull-right" id="all">0</span></li>
                                        </ul>
                                    </div>
                                    <!--end form-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <!--eny form start-->
                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">Request For a New Loan</div>
                            <div class="panel-body">
                                <form action="{{ url('loan-requestsave') }}" method="post">
                                    @csrf
                                    <div class="row">

                                        <p style="text-align:center;color:#296dc1;">*Marked fields are mandatory.</p>
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
                                            <p style="color:#296dc1;"><input type="checkbox" required> I agree to be contacted by Cent Bank representative for loan enquiry.</p>
                                        </div>

                                        <div class="col-xs-12" style="text-align:center;">
                                            <button type="submit" class="cont-submit btn-contact btn-style" >Submit</button>

                                        </div>
                                    </div>
                                </form>
                                <!--end form-->
                                <!--form end-->
                            </div>
                        </div>
                    </div>
                    <!--eny form end-->
                </div>


            </div>
    </section>
    <!-- about-area end -->

    <!-- .service-area start -->

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