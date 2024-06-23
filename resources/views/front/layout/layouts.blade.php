
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="{{url('front_assests/img/icon.jpg')}}">

  <link rel="stylesheet" href="{{url('front_assests/css/bootstrap.min.css%2banimate.css%2bowl.carousel.css%2bfont-awesome.min.css%2bmagnific-popup.css%2bslicknav.min.css.pagespeed.cc.XayTt5Xo1t.css')}}" />

  <link rel="stylesheet" href="{{url('front_assests/css/A.styles.css%2bresponsive.css%2cMcc.0hwYAe_VMS.css.pagespeed.cf.tRFMM7T4Ex.css')}}" />
  <script src="{{url('front_assests/js/vendor/modernizr-2.8.3.min.js')}}"></script>


  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/admin_assets/toastr.css">
  <style>
    .header-middle::before {
      background: none;
    }

    .clogo {

      image-rendering: -moz-crisp-edges;
      image-rendering: -o-crisp-edges;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: crisp-edges;
      -ms-interpolation-mode: nearest-neighbor;

    }
  </style>
</head>

<body>


  <header class="header-area">
    <div class="header-middle bg-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 hidden-sm hidden-xs">
            <div class="logo">
              <a href="{{url('/')}}">
                <img class="img-responsive clogo" src="{{url('/')}}/front_assests/img/CENT BANK - LOGO.png" style=" width:323px; margin-left:6px;height:100px;" alt="">
              </a>
            </div>
          </div>

          <div class="col-md-9 col-xs-12">
            <div class="header-middle-right">

              <ul style="margin:0px;padding:0px;">
                <!--<li>-->
                <!--  <div class="contact-icon">-->
                <!--    <i class="fa fa-bar-chart" style="font-size:25px;"></i>-->
                <!--  </div>-->
                <!--  <div class="contact-info">-->
                <!--    <a href="https://pmayuclap.gov.in/">-->
                <!--      <p><b>PMAY-CLSS </b></p>-->
                <!--      <p style="color:white;">Tracker</p>-->
                <!--    </a>-->
                <!--  </div>-->
                <!--</li>-->

                <!--<li>-->
                <!--  <div class="contact-icon">-->
                <!--    <i class="fa fa-credit-card" style="font-size:25px;"></i>-->
                <!--  </div>-->
                <!--  <div class="contact-info">-->
                <!--    <a href="customer-EMI.php">-->
                <!--      <p><b>Online Payment</b></p>-->
                <!--      <p style="color:white;">Click to Pay</p>-->
                <!--    </a>-->
                <!--  </div>-->
                <!--</li>-->
                  <li>
                  <div class="contact-icon">
                    <i class="fa fa-credit-card" style="font-size:25px;"></i>
                  </div>
                  <div class="contact-info">
                    <a href="{{url('search-loan-acc')}}">
                      <p><b>Online EMI Payment</b></p>
                      <p style="color:white;">Click to Pay</p>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="contact-icon">
                    <i class="fa fa-money" style="font-size:25px"></i>
                  </div>
                  <div class="contact-info">

                    <a href="{{url('Enach-Request')}}">
                      <p><b>E-Nach </b></p>
                      <p style="color:white;">Enach-Request</p>
                    </a>
                  </div>
                </li>
                
                
                <li>
                  <div class="contact-icon">
                    <i class="fa fa-user" style="font-size:25px"></i>
                  </div>
                  <div class="contact-info">

                    <a href="{{url('/partnership')}}">
                      <p><b>Become a Partner</b></p>
                      <p style="color:white;">Partnership</p>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="contact-icon">
                    <i class="fa fa-envelope" style="font-size:25px;"></i>
                  </div>
                  <div class="contact-info">
                    <a href="mailto: customercare@cbhfl.com" style="color:white;">
                      <p><b>MAIL US</b></p>
                      <p>customercare@cbhfl.com</p>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="contact-icon">
                    <i class="fa fa-phone" style="font-size:25px;"></i>
                  </div>
                  <div class="contact-info">
                    <a href="tel:1800-8896-606" style="color:white;">
                      <p><b>TOLL FREE NO</b></p>
                      <p style="color:white;"> 1800-8896-606</p>
                    </a>
                  </div>
                </li>

                <li>
                  <div class="contact-icon">
                    <i class="fa fa-phone" style="font-size:25px;"></i>
                  </div>
                  <div class="contact-info">
                    <a href="tel:1800-8896-606" style="color:white;">
                      <p><b>Missed Call NO</b></p>
                      <p style="color:white;"> 1800-3157-077</p>
                    </a>
                  </div>
                </li>
              </ul>

              <!--<ul style="margin:5px;padding:0px;">-->
              <!--<li>-->

              <!--<div class="contact-info" >-->
              <!--<a href="https://pmayuclap.gov.in/">  -->
              <!--<p style="color:white;margin-top: 10px;margin-right: 300px;">Give a Missed Call to  &nbsp;&nbsp;<b style="font-size:15px;color:red;">1800-513-7077</b>&nbsp;&nbsp;  For New Home Loan Enquiries</p></a>-->
              <!--</div>-->
              <!--</li>-->
              <!--</ul>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom" id="sticky-header" style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover;">
      <div class="container-fluid">
        <div class="row">
          <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
            <div class="logo">
              <!--logo_cent_bank.png-->
              <a href="{{url('/')}}"><img class="img-responsive" src="{{url('/')}}/front_assests/img/cent_logo.jfif" style="height:100%;width:100%;" alt=""></a>
            </div>
          </div>
          <div class="col-md-12 hidden-sm hidden-xs">
            <div class="mainmenu" style="margin-left:60px;">
              <ul id="navigation">
                <li class="">
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li><a href="#">About Us <i class="fa fa-angle-down"></i></a>
                  <ul class="submenu">
                    <li><a href="{{url('/about-us')}}">About CBHFL</a></li>
                    <li><a href="{{url('director')}}">Board <span style="text-transform:lowercase;">of</span> Directors</a></li>
                    <li><a href="{{url('team')}}"> Managerial Team</a></li>
                    <li><a href="{{url('financial')}}">Financial</a></li>
                  </ul>
                </li>


                <li><a href="#">Housing</a>
                  <!--<ul class="megamenu">-->

                  <!--                                         <li>-->
                  <!--                                             <a class="mega-title"  href="#">MegaMenu Title</a>-->
                  <!-- 											<ul>-->
                  <!-- 												<li><a href="#">Builder / Developer / Society purchase</a></li>-->
                  <!-- 												<li><a href="#">Composite loan i.e., Plot plus self construction</a></li>-->
                  <!-- 												<li><a href="#">Re-Sale Property purchase Loans</a></li>-->
                  <!--                                                 <li><a href="#">Post Pension Programme</a></li>-->

                  <!-- 											</ul>-->
                  <!-- 										</li>-->


                  <!--                                         <li>-->
                  <!--                                             <a class="mega-title"  href="#">MegaMenu Title</a>-->
                  <!-- 											<ul>-->
                  <!-- 												<li><a href="#">Builder / Developer / Society purchase</a></li>-->
                  <!-- 												<li><a href="#">Composite loan i.e., Plot plus self construction</a></li>-->
                  <!-- 												<li><a href="#">Re-Sale Property purchase Loans</a></li>-->
                  <!--                                                 <li><a href="#">Post Pension Programme</a></li>-->

                  <!-- 											</ul>-->
                  <!-- 										</li>-->

                  <!--</ul>-->



                  <ul class="submenu">
                    <!--<li><a href="rateofinterest.php">Rate of Interest</a></li>-->
                    <!--<li><a href="#">Self construction</a></li>-->
                    <!--   <li><a href="#">Home Improvement / Renovation Loans:</a></li>-->
                    <!--   <li><a href="#">Home Loan Takeover and Enhancements</a></li>-->


                    <!--   <li><a href="#">Builder / Developer / Society purchase</a></li>-->
                    <!--   <li><a href="#">Composite loan i.e., Plot plus self construction</a></li>-->
                    <!--   <li class="column"><a href="#">Re-Sale Property purchase Loans</a></li>-->
                    <!--   <li><a href="pension.php">Post Pension Programme</a></li>-->
                    <li><a href="{{url('housing_rateOfInterest')}}">Rate <span style="text-transform:lowercase;">of</span> Interest</a></li>
                    <li><a href="{{url('income_based')}}">Income based Program</a></li>
                    <li><a href="{{url('low_LTV')}}">Low LTV Programme</a></li>
                    <li><a href="{{url('post_pension')}}">Post Pension Programme</a></li>
                    <li><a href="{{url('IEP')}}">Income Estimation Program (IEP)</a></li>
                    <li><a href="{{url('low_income')}}">Low Income Group Program</a></li>
                    <li><a href="{{url('affordable')}}">Affordable Housing Fund</a></li>
                    <li><a href="{{url('PMAY')}}">PMAY-U (Credit linked Subsidy Scheme)</a></li>

                  </ul>

                </li>
                <li><a href="#">Non-Housing</a>
                  <ul class="submenu">

                    <!--   <li><a href="#">Rate of Interest</a></li>-->
                    <!--<li><a href="#">Loan against Residential/Commercial property</a></li>-->
                    <!--   <li><a href="#">Loan for Commercial property</a></li>-->
                    <!--   <li><a href="#">Top Up loans</a></li>-->
                    <!--   <li><a href="#">Project Loans</a></li>-->
                    <!--   <li><a href="pension.php">Post Pension Programme</a></li>-->

                    <li><a href="{{url('non_housing_rateOfInterest')}}">Rate <span style="text-transform:lowercase;">of</span> Interest</a></li>
                    <li><a href="{{url('commercial_plots')}}">Commercial Plots</a></li>
                    <li><a href="{{url('commercial_property')}}">Commercial Property</a></li>
                    <li><a href="{{url('LAP')}}">Loan against Property(LAP)</a></li>

                  </ul>
                </li>
                <li><a href="#">Deposit Schemes</a>
                  <ul class="submenu">
                    <li><a href="{{url('overview')}}">Overview</a></li>
                    <li><a href="{{url('depositInterest')}}">Rate <span style="text-transform:lowercase;">of</span> Interest</a></li>
                    <li><a href="{{url('advertisement')}}">Advertisement for Deposits</a></li>
                  </ul>
                </li>
                <!--  <li><a href="#">Auction/Tender</a>
      <ul class="submenu" >
        	    <li><a href="auction.php">Property for Auction</a></li>
                <li><a href="tendor.php">Invitation for tender</a></li>
         
            </ul>
   </li> -->
                <li><a href="#">Auction/Tender</a>
                  <ul class="submenu">
                    <li><a href="{{url('auction')}}">Property for Auction</a></li>
                    <li><a href="#">Invitation for tender</a>
                      <ul class="submenu">


                        <li><a href="#">RFP FOR IT SOLUTION </a>
                          <ul class="submenu">
                            <li><a href="{{url('rep2')}}">RFP 2</a></li>
                            <!--<li><a href="rep{{url('')}}">RFP 3</a></li> -->
                            <li><a href="{{url('rep1')}}">RFP 1 Cancelled</a></li>


                          </ul>
                        </li>
                        <!-- <li><a href="#">Procurement of  Devices </a>-->
                        <!--  <ul class="submenu">-->
                        <!--    <li><a href="rep7.php">Procurement of Hardware devices</a></li>-->
                        <!--    <li><a href="rep.php">RFP 3</a></li> -->
                        <!--    <li><a href="rep6.php">Procurement of Corrigendum devices</a></li>-->


                        <!--  </ul>-->
                        <!--</li>-->
                        <li><a href="{{url('rep7')}}">Empanelment of IS auditor</a></li>
                        <!--<li><a href="rep5.php">Office Premises In Akurdi </a></li>-->
                        
                        <!--<li><a href="rep6.php">Office Premises In Chikballapur</a></li>-->
                        <!--<li><a href="repman.php">Office Premises In Ahmedabad</a></li>-->
                        <!--	<li><a href="rep3.php">Office Premises In Jodhpur</a></li>-->
                        <!--<li><a href="rep4.php">Office Premises In Nodia</a></li>-->


                      </ul>
                    </li>
                </li>

              </ul>
              </li>
              <li><a href="{{url('career')}}">Career</a></li>
              <li><a href="{{url('investor')}}">Investor</a></li>

              <li><a href="{{url('download')}}">Downloads</a></li>
              <li><a href="#">KYC</a>
                <ul class="submenu">
                  <li><a href="{{url('rekyc')}}">Re-KYC</a></li>
                </ul>
              </li>
              <!--<li><a href="policies{{url('')}}">Policies</a></li>-->
              <li><a href="{{url('contact')}}">Reach Us</a></li>

              </ul>
              </li>
              </ul>
            </div>
          </div>
          <div class="col-md-1 col-sm-2 col-xs-3">
            <div class="search-wrap text-right">

            </div>
          </div>
          <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
            <div class="responsive-menu-wrap floatright" style="height:60px;"></div>
          </div>
        </div>
      </div>
    </div>
  </header>


  @yield('main_content')


  <style>
    .clogo {
  
      image-rendering: -moz-crisp-edges;
      image-rendering: -o-crisp-edges;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: crisp-edges;
      -ms-interpolation-mode: nearest-neighbor;
  
    }
  
    .footer_bottom {
      position: fixed;
      bottom: 0;
      margin: 0;
      width: 100%;
      background-color: red;
      display: inline-flex;
      overflow: hidden;
      white-space: nowrap;
      align-items: center;
    }
  
    .text_footer {
      font-size: 16px;
      color: white;
      font-weight: 600;
      height: 100%;
      margin: 0;
      display: flex;
      width: 100%;
      animation: marquee 10s linear infinite;
      align-items: flex-end;
      align-content: center;
    }
  
    .news {
      height: auto;
      background-color: #0f2a83;
      padding: 0px 30px 0px 30px;
      color: white;
      z-index: 1;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
  
    .click-to-apply-online a {
      color: #fff;
      font-size: 14px;
      font-weight: 600;
    }
  </style>
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3  col wow fadeInUp" data-wow-delay=".1s">
            <div class="footer-widget footer-logo">
              <!--assets/img/logo_2.png-->
              <a href="{{url('/')}}"><img class="img-responsive clogo" src="{{url('/')}}/front_assests/img/CENT BANK - LOGO.png" alt=""></a><br />
              <p style="text-align:justify">Cent Bank Home Finance Limited is a deposit-taking Housing Finance and Mortgage Company jointly promoted by four Public Sector Institutions, viz. Central Bank of India ... <a style="color:white;" href="{{url('about-us')}}">Read More</a></p>
              <!--<a href="https://www.facebook.com/">-->
              <a href="https://www.facebook.com/cbhfl/"><i class="fa fa-facebook text-light" style="color:white; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp " style="color:white; font-size: 35px;"></i> </a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.instagram.com/"><i class="fa fa-instagram" style="color:white; font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://twitter.com/"><i class="fa fa-twitter" style="color:white; font-size: 35px;"></i></a>
  
            </div>
          </div>
          <div class="col-md-3 col wow fadeInUp" data-wow-delay=".2s">
            <div class="footer-widget footer-menu">
              <h2>Quick Links</h2>
              <ul>
  
                <li><a href="{{url('archives')}}" target="blank">Archives</a></li>
                <li><a href="{{url('director')}}">Board Of Directors</a></li>
                <li><a href="{{url('Disclaimer')}}"> Disclaimer</a></li>
                <li><a href="{{url('depositInterest')}}">Deposit Schemes</a></li>
                <!--<li><a href="rateofinterest{{url('')}}">Housing</a></li>-->
                <li><a href="https://pmayuclap.gov.in/">
                    PMAY-CLSS Tracker</a></li>
                <li><a href="{{url('front_assests/pdf/MITC amended in 148th BM for website dt 21.11.2023.pdf')}}" target="_blank">MITC</a></li>
                <li><a href="{{url('front_assests/pdf/Schedule of Charges Amen.OCTOBER-2022.pdf')}}" target="_blank">Schedule of charges</a></li>
                  <li><a href="{{url('front_assests/pdf/GRIEVANCES REDRESSAL.pdf')}}" target="_blank">Grievances Redressal</a></li>
                <li><a href="{{url('investor')}}">Investor</a></li>
                <li><a href="{{url('admin')}}">Admin</a></li>
                <!--<li><a href="eopaav.php" style="color:red;font-weight: bold;">EMPANELMENT OF PANEL ADVOCATES AND VALUERS</a></li>-->
  
                <!--<li><a href="#" data-toggle="modal" data-target="#myModalImg" style="color:red;font-weight: bold;">News Update</a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-md-3 col wow fadeInUp" data-wow-delay=".3s">
            <div class="footer-widget footer-menu">
              <h2>Important Links</h2>
              <ul>
  
                <li><a href="{{url('contact')}}">All Branches</a></li>
                <li><a href="{{url('partnership')}}">Become a Partner</a></li>
                <li><a href="{{url('career')}}">Career</a></li>
                <li><a href="{{url('download')}}">Downloads</a></li>
                <li><a href="{{url('rekyc')}}">KYC</a></li>
                <li><a href="{{url('customer-EMI')}}">Online Payment</a></li>
                <li><a href="{{url('front_assests/pdf/Annexure-17_Policy_on_resolution_framework.pdf')}}" target="_blank">Resolution Framework 2.0</a></li>
                <!-- ecs-nach.php-->
                <li><a href="{{ url('ecs-nach') }}" target="_blank">ECS/NACH CANCELLATION FORM</a></li>
                <li> <a href="{{url('front_assests/pdf/Fair Practice Code.pdf')}}" target="_blank">Fair Practice Code</li></a></li>
                <li> <a href="{{url('front_assests/pdf/LIST RECOVERY AGENCY (1).pdf')}}" target="_blank">List Of Recovery Agency</li></a></li>
                <li> <a href="{{url('front_assests/pdf/CIBIL DISPUTE RESOLUTION.pdf')}}" target="_blank">CIBIL DISPUTE RESOLUTION</li></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col wow fadeInUp" data-wow-delay=".4s">
            <div class="footer-widget quick-contact">
              <h2>Contact Us</h2>
              <ul>
                <li style="color:white;"><i class="fa fa-location-arrow"></i> <b>Corporate Office:</b>
                  6th Floor, Central Bank of India,
  
                  Mumbai Main Office Building,
  
                  MG Road, Fort, Flora Fountain,
  
                  Hutatma Chowk, Mumbai-400023
                </li>
                <li style="color:white;"><i class="fa fa-location-arrow"></i> <b>Registered Office:</b>
                  Central Bank of India Building, 2nd Floor,
                  9, Arera Hills, Mother Teresa Road,
                  Bhopal-462011
                  <!--Central Bank Of India Building-->
                  <!--9, Arera Hills, Bhopal-462011-->
                  <!--Madhya Pradesh, INDIA-->
  
                </li>
                <li style="color:white;"><i class="fa fa-clock-o"></i> <b>Mon-Sat :</b> 10:00 AM to 06:00 PM Except 2nd and 4th Saturdays and public holidays</li>
  
                <li style="color:white;"><a href="tel:18008896606" style="color:white;" target="_blank"><i class="fa fa-phone"></i> <b>Toll Free No :</b> 18008896606
                  </a></li>
  
                <!--<li style="color:white;"><i class="fa fa-clock-o"></i> <b>Mon-Sat :</b> 10:30  AM to 06:00  PM-->
                <!--Except 2nd and 4th Saturdays-->
                <!--and public holidays</li>-->
                <li><a href="mailto:customercare@cbhfl.com" target="_blank" style="color:white;"><i class="fa fa-envelope"></i> <b>Email :</b> customercare@cbhfl.com</a></li>
  
              </ul>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Modal -->
  
    <div class="modal fade" id="myModalImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
  
        <div class="modal-content">
          <!--<div class="modal-header" >-->
          <div class="modal-header">
            <!--  <h5 class="modal-title" -->
            <!--      id="exampleModalLabel">-->
            <!--    GeeksforGeeks-->
            <!--</h5>-->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="btn1 close" data-dismiss="modal"><i class="fa fa-times-circle-o" style="font-size:40px;"></i></span>
            </button>
          </div>
          <div class="modal-body">
            <!--</div>-->
            <!--<div class="row">-->
            <!--<div class="col-md-11">-->
            <!--<h4 class="modal-title text-center" id="exampleModalLabel"  style="color:#fff;font-size:20px;" ><b>Register for More Information</b></h4> -->
            <img src="{{url('/')}}/front_assests/slider_img/newsupdate.jpg" class="img-responsive" style="height:500px;" alt="" />
            <!--</div>-->
            <!--<div class="col-md-1">-->
            <!--<span class="btn1 close" data-dismiss="modal"><i class="fa fa-times-circle-o" style="font-size:40px;color:#ffd65e"></i></span>-->
            <!--</div>-->
          </div>
  
  
        </div>
        <!--<div class="modal-footer">-->
  
        <!--</div>-->
  
      </div>
    </div>
    </div>
    <!--model-->
  
    <div class="footer-bottom text-center">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
  
            Copyright &copy;<script data-cfasync="false" src="{{url('/')}}/front_assests/js/email-decode.min.js"></script>
            <script>
              document.write(new Date().getFullYear());
            </script> - <a class="text-light" style="color: white;" href="https://www.cbhfl.com/" target="_blank">Cent Bank Home Finance Limited</a> - All rights reserved || Design by <a href="#" target="_blank" style="color: white;">Jagdamba Software Solutions Pvt Ltd.</a>
  
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--<div class="footer_bottom">-->
  <!-- <div class="news">-->
  <!--   <span><b>News</b></span>-->
  <!--   </div>-->
  <!--<p class="text_footer">-->
  <!--<marquee direction = "left" onMouseOver="this.stop()" onMouseOut="this.start()">-->
  <!-- <span class="click-to-apply-online">	<a target="_blank" href="pdf/FINAL NOTIFICATION.pdf">Recruitment of Officer, Senior Officer & Junior Manager, Last date to apply online - 18/08/2022. Click here to view full notification. </a>-->
  <!-- <a target="_blank" href="https://ibpsonline.ibps.in/cbhfrvpjul22/">( Click here to apply online )</a></span>-->
  <!--  </marquee>-->
  <!--</p>-->
  <!--</div>-->
  <!--cal js-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/admin_assets/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
  
  <script>
    // alert('hello');
    function calculateHomeLoanEMI() {
      var loanAmount = $("#txtLoanAmount").val();
      var numberOfMonths = parseFloat($("#txtLoanTerm").val());
      var selectedTermType = $('#ddlTermType').val();
      if (selectedTermType == 'years') {
        var loanTermArray = numberOfMonths.toString().split('.');
        numberOfMonths = Math.floor(numberOfMonths) * 12;
        if (loanTermArray.length > 1) {
          var precisionVal = parseInt(loanTermArray[1]);
          if (precisionVal >= 1 && precisionVal <= 12) {
            numberOfMonths += precisionVal;
          } else {
            alert('Loan Term entered is incorrect!');
            $("#txtLoanTerm").val('');
            return false;
          }
        }
      }
      if (!numberOfMonths || numberOfMonths > 360) {
        alert('Loan Term should not be more than 360 months or 30 years!');
        $("#txtLoanTerm").val('');
        return false;
      } else {
        $('.home-loan-result-container').show();
        var rateOfInterest = $("#txtInterestRate").val();
        var monthlyInterestRatio = (rateOfInterest / 100) / 12;
        var top = Math.pow((1 + monthlyInterestRatio), numberOfMonths);
        var bottom = top - 1;
        var sp = top / bottom;
        var emi = ((loanAmount * monthlyInterestRatio) * sp);
        var full = numberOfMonths * emi;
        var interest = full - loanAmount;
        var int_pge = (interest / full) * 100;
        $("#tbl_int_pge").html(int_pge.toFixed(2) + " %");
        var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $("#totalEMIValue").html(emi_str);
        $("#totalLoanAmount").html(loanAmount_str);
        $("#totalLoanTerm").html(numberOfMonths.toString() + ' Months');
        $("#totalInterestRate").html(rateOfInterest);
        $("#totalAmount").html(full_str);
        $("#totalInterestPaid").html(int_str);
      }
    }
  
    // FD Calculator code start
  
    function calcMon() {
      var money = document.getElementById("money").value;
      var per = document.getElementById("per").value;
      var year = document.getElementById("year").value;
      money = parseFloat(money);
      per = parseFloat(per);
      year = parseFloat(year);
      var interest = 0;
      var i;
      for (i = 1; i <= year; i++) {
        interest += money * (per / 100.0);
      }
      document.getElementById("totalP").value = money;
      document.getElementById("interest").value = interest.toFixed(2);
      document.getElementById("all").value = (money + interest).toFixed(2);
    }
  </script>
  
  <!-- <script src="jquery-1.12.0.js"></script> -->
  
  <!--calculator js-->
  <script src="{{url('/')}}/front_assests/js/vendor/jquery-1.12.4.min.js"></script>
  
  <script src="{{url('/')}}/front_assests/js/bootstrap.min.js%2bowl.carousel.min.js%2bcounterup.main.js%2bimagesloaded.pkgd.min.js.pagespeed.jc.shH-4aYVmh.js"></script>
  <script>
    eval(mod_pagespeed_i61zCbnW2X);
  </script>
  
  <script>
    eval(mod_pagespeed_jc8HogFvDS);
  </script>
  
  <script>
    eval(mod_pagespeed_ByKI_lcJaR);
  </script>
  
  <script>
    eval(mod_pagespeed_3Vqo2HVHdL);
  </script>
  
  <script src="{{url('/')}}/front_assests/js/isotope.pkgd.min.js%2bjquery.waypoints.min.js%2bjquery.magnific-popup.min.js%2bjquery.slicknav.min.js%2bsnake.min.js%2bwow.min.js%2bplugins.js.pagespeed.jc.SBwsO"></script>
  <script>
    eval(mod_pagespeed_v56_tzKcNP);
  </script>
  
  <script>
    eval(mod_pagespeed_QMjc0uITp1);
  </script>
  
  <script>
    eval(mod_pagespeed_hlBv5lXulT);
  </script>
  
  <script>
    eval(mod_pagespeed_X_j2P9g7zO);
  </script>
  
  <script>
    eval(mod_pagespeed_goVRlhl_so);
  </script>
  
  <script>
    eval(mod_pagespeed_o3aro2kQYO);
  </script>
  
  <script>
    eval(mod_pagespeed_AVUG9W6UQu);
  </script>
  
  <script src="{{url('/')}}/front_assests/js/scripts.js"></script>
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
  
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
  
    gtag('config', 'UA-23581568-13');
  </script>
  <script src="{{url('/')}}/front_assests/js/beacon.min.js" data-cf-beacon='{"rayId":"65cb821b68fa1a88","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
 
<style>
   

  
</body>
  
  </html>