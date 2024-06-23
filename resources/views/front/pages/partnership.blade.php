@extends('front.layout.layouts')
@section('title','Partnership')

@section('main_content')
<?php
if (isset($_POST['submit'])) {

  $type         = $_POST['r_type'];
  $name         = $_POST['fname'];
  $phone        = $_POST['phone'];
  $email        = $_POST['email'];
  $branch       = $_POST['branch'];
  $constitution = $_POST['constitution'];
  $occupation   = $_POST['occupation'];
  $about        = $_POST['about_us'];

  $sql = mysqli_query($con, "insert into business_partner(type,name,phone,email,branch,constitution,occupation,here_about_us) values('$type','$name','$phone','$email','$branch','$constitution','$occupation','$about')");


  // if($sql)
  // {
  //     echo "<script>alert('Form Submitted Successfully');window.location.href='partnership.php';</script>";
  // }
  // else{
  //     echo "<script>alert('Try Again!');window.location.href='partnership.php';</script>";
  // }

  // temp.shoaib@cbhfl.com

  $to = 'lead@cbhfl.com';


  $subject = 'Cent Bank - Partnership';
  $message = "";
  $message .= '
<html>
<head>
  <title>Cent Bank</title>
</head>
<body>
  <p><b>Welcome to  CENT BANK HOME FINANCE LIMITED </b><br><br></p>
  <table>
   <tr>
      <td><b>Type :</b></td>
      <td> ' . $type . ' </td>
    </tr>
    <tr>
      <td><b>Name :</b></td>
      <td> ' . $name . ' </td>
    </tr>
    <tr>
      <td><b>Contact :</b></td>
      <td> ' . $phone . '</td>
    </tr>
    <tr>
      <td><b>Email :</b></td>
      <td> ' . $email . '</td>
    </tr>
    <tr>
      <td><b>Branch :</b></td>
      <td> ' . $branch . ' </td>
    </tr>
    <tr>
      <td><b>Constitution :</b></td>
      <td> ' . $constitution . ' </td>
    </tr>
    
    
    <tr>
      <td><b>Occupation :<b></td>
      <td> ' . $occupation . ' </td>
   </tr>
    <tr>
      <td><b>About Us :<b></td>
      <td> ' . $about . ' </td>
   </tr>

  </table>
</body>
</html>
';

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <' . $email . '>' . "\r\n";

  // Always set content-type when sending HTML email

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Thank you for submitting your enquiry. We will contact you soon...'); 
        window.location = 'index.php';</script>";
  } else {
    echo "<script>alert('There was an error in sending your information.Please contact us on our phone Nos.');window.location.href='contact.php'</script>";
  }
}

?>

<div class="breadcumb-area black-opacity bg-img-5">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="breadcumb-wrap">
          <h2>Partnership</h2>
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
            <li>Partnership</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>




<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <div class="faq-area ptb-60">
      <br>
      <br>
      <h3 style="color:#296dc1;text-align:center;"><b>Become Our Business Partner</b></h3>

      <h4 style="color:#296dc1;text-align:center;"><b>Register Now</b></h4>
      <div class="container" style="background-color:#296dc1; width:70%;">
        <!--<h2>Become Our Partnership</h2>-->
        <br>
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="faq-wrap">


              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <!--style="margin-left:-15px;margin-top:-27px;"-->
                <div class="panel panel-default" style="margin-left:-15px;margin-top:-27px;">

                  <div class="panel-heading" id="headingOne">
                    <h4 class="panel-title">

                      <img src="{{url('/')}}/front_assests/images/partner.jpg" class="img-responsive" style="height:460px;">
                      <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
                      <!--General Inquiries-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapseOne" class="panel-collapse collapse in">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--<div class="panel panel-default">-->
                      <!--<div class="panel-heading" id="headingTwo">-->
                      <!--<h4 class="panel-title">-->
                      <!--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
                      <!--How To Use-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapseTwo" class="panel-collapse collapse">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--<div class="panel panel-default">-->
                      <!--<div class="panel-heading" id="headingThree">-->
                      <!--<h4 class="panel-title">-->
                      <!--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                      <!--Shipping & Delivery-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapseThree" class="panel-collapse collapse">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--<div class="panel panel-default">-->
                      <!--<div class="panel-heading" id="headingfour">-->
                      <!--<h4 class="panel-title">-->
                      <!--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">-->
                      <!--Additional Information-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapsefour" class="panel-collapse collapse">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--<div class="panel panel-default">-->
                      <!--<div class="panel-heading" id="headingfive">-->
                      <!--<h4 class="panel-title">-->
                      <!--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">-->
                      <!--Additional Information-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapsefive" class="panel-collapse collapse">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--</div>-->
                      <!--<div class="panel panel-default">-->
                      <!--<div class="panel-heading" id="headingfsix">-->
                      <!--<h4 class="panel-title">-->
                      <!--<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">-->
                      <!--Additional Information-->
                      <!--</a>-->
                      <!--</h4>-->
                      <!--</div>-->
                      <!--<div id="collapsesix" class="panel-collapse collapse">-->
                      <!--<div class="panel-body">-->
                      <!--<p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>-->
                      <!--</div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-xs-12">
            <div class="">
              <form action="{{ url('partnershipsave') }}" method="post">
                @csrf

                <div class="row">
                  <div class="col-xs-12 form-group" style="color:white;">
                    <input type="radio" value="Retail Loans" name="r_type"> Retail Loans
                    <input type="radio" value="Deposits" name="r_type"> Deposits
                    <input type="radio" value="Both" name="r_type"> Both</p>
                  </div>
                  <div class="col-xs-12 form-group">
                    <input class="form-control" type="text" placeholder="Name" name="fname" required>
                  </div>
                  <div class="col-xs-12 form-group">
                    <input class="form-control" type="text" placeholder="Phone" name="phone" required>
                  </div>
                  <div class="col-xs-12 form-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" required>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <select class="form-control" name="branch" required>
                        <!--location-->
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
                        <!--location end-->
                      </select>
                    </div>
                    <!--<input type="text" placeholder="Nearest Branch" id="email" name="email">-->
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <select class="form-control" name="constitution" required>
                        <option value="--Select--">Select Constitution</option>
                        <option value="Individual">Individual</option>
                        <option value="Partnership">Partnership</option>
                        <option value="Private Ltd">Private Ltd</option>
                        <option value="Sole Proprietorship">Sole Proprietorship</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">

                      <select class="form-control" name="occupation" required>
                        <option value="--Select--">Select Occupation</option>
                        <option value="Financial Consultant">Financial Consultant</option>
                        <option value="Property Consultant">Property Consultant</option>
                        <option value="CA">CA</option>
                        <option value="Architect &amp; Interior Designer">Architect &amp; Interior Designer</option>
                        <option value="Tax Professional">Tax Professional</option>
                        <option value="Real Estate Developer">Real Estate Developer</option>
                        <option value="Investment Advisor">Investment Advisor</option>
                        <option value="Business Associate of other Banks">Business Associate of other Banks</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="form-group">
                      <select class="form-control" name="about_us" required>
                        <option value="--Select--">Where did you hear about us</option>
                        <option value="Existing customer of PNB Housing">Existing customer of PNB Housing</option>
                        <option value="Service Associate">Service Associate</option>
                        <option value="From Friend/Relative">From Friend/Relative</option>
                        <option value="Real Estate Developer">Real Estate Developer</option>
                        <option value="Print Advertisement">Print Advertisement</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button>


                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <br>
      <div class="container" style="">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <p style="color:black;text-align:justify;font-size:12pt;"><span style="color:black;"><b>Remark: </b></span> You can download <a target="_blank" href="{{url('/')}}/front_assests/APPLICATION%20FORM%20FOR%20EMPANELMENT%20AS%20DSA.pdf" style="color:blue"><b>DSA/DMA FD form</b></a> & <a href="{{url('/')}}/front_assests/fd broker application format.pdf" target='_blank' style="color:blue"><b>FD Broker application form</b></a> from the Download section.Kindly fill all details and send to respective branches empanelment </p>
          </div>

          <div class="col-md-1"></div>
        </div>

      </div>
    </div>

    <br>
    <br>
  </div>

@endsection