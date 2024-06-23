@extends('front.layout.layouts')
@section('title', 'Re-KYC')

@section('main_content')
<!-- heared area end -->
<!-- breadcumb-area start -->
<!--<div class="breadcumb-area black-opacity bg-img-10">-->
<div class="breadcumb-area  black-opacity bg-img-10">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style='color:#296dc1'>
                <div class="breadcumb-wrap text-primary">
                    <h2>Re-KYC</h2>
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
                        <li>Re-KYC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->

<!-- about-area start -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <section class="about-area ptb-140">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <div class="about-wrap">
                        <br>
                        <h3 style="color:#296dc1;"><b>Cent Bank Guidelines on Re-KYC</b></h3>
                        <br>
                        <p style="color:darkblue;">As per the Cent Bank guidelines on the KYC norms, all Regulated Entities (REs) need to periodically update customer identification documents in the records of their account holders. In addition to the KYC carried out at the time of account opening, the account holders may be required to undergo Re-KYC and submit the requisite documents.</p>
                        <br>
                        <p style="color:darkblue;">Kindly update your KYC details along with your latest KYC documents, PAN card copy and your latest contact details. The documents can be either submitted at any of our branches or uploaded on this webpage.</p>
                        <br>
                        <p style="color:darkblue;">Cent Bank will send you an intimation when Re-KYC is due for your account. We request our customers to submit documents within 7 days’ time from the date of receipt of intimation to update in our record so as to avoid interruption in services.</p>
                        <br>
                        <h3 style="color:#296dc1;"><b>Reason for Re-KYC</b></h3>
                        <br>
                        <p style="color:darkblue;">It is important to submit Re-KYC documents at periodic interval, to avoid any restriction being placed in the account, as per Cent Bank guidelines.
                        </p>
                        <br>
                        <h3 style="color:#296dc1;"><b>Channels for Re-KYC Updation :</b></h3>
                        <br>
                        <p style="color:darkblue;">Branch – Visit your service branch and submit the latest KYC documents
                        </p>

                        <p style="color:darkblue;">Webpage – Update documents through this link on our website
                        </p>

                        <p style="color:darkblue;">Contact Centre – Call us at Toll Free number 1800-8896-606
                        </p>
                        <br>

                        <h3 style="color:#296dc1;"><b>Documents essential for Re-KYC :</b></h3>
                        <br>
                        <h5 style="color:darkblue;"><b>Re-KYC Updation Process requires below mentioned documents :
                            </b></h5>

                        <p style="color:darkblue;">KYC Documents: for all applicants, self-attested. Please refer our website for KYC list of acceptable documents
                            PAN Card: for all applicants, self-attested. Form 60 is to be filled in case PAN not yet allotted
                        </p>
                        <br>

                        <h3 style="color:#296dc1;"><b>Check list of acceptable officially valid documents (OVD) :</b></h3>
                        <br>
                        <p style="color:darkblue;">Document checklist
                        </p>

                        <p style="color:darkblue;">Please note that the list of acceptable documents mentioned above are as per Cent Bank policy. No alternative documents are acceptable.
                            In case there are more one co-applicant, Kindly update the necessary details with supporting documents.
                            Please ensure to enclose your self-attested /certified copies of listed documents.
                        </p>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->

    <!-- .service-area start -->
    <section class="service-area ptb-100" style="background-image: url({{asset('front_assests/images/banka-makro-fon.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <div class="container">

            <a href="{{url('/')}}/front_assests/pdf/FAQs on Re-KYC.pdf" target="_blank">
                <h4 style="color:white;">

                    <b>Frequently Asked Questions (FAQs) on Re-KYC Updation Process</b>

                </h4>
            </a>

            <br>

            <h4 style="color:white;">
                <b>
                    CUSTOMER INFORMATION UPDATION FORM FOR RE-KYC
                    <a href="{{url('/')}}/front_assests/pdf/CUSTOMER INFORMATION UPDATION FORM FOR KYC-converted.pdf" target="_blank"> OFFLINE </a> / <a href="{{ url('online-form') }}" target="_blank">ONLINE</a>
                </b>
            </h4>

            <!--<div class="row">-->
            <!--<div class="col-md-12" style="background-color:#c72929;">-->
            <!--                        <br>-->
            <!--                        <div class="table-responsive">  <table class="table table-bordered">-->
            <!--     <thead style="background-color:#fff; color:#D2220B;">-->
            <!--      <tr>-->
            <!--        <th style=" text-align:center;">Sr.No.</th>-->
            <!--       <th style=" text-align:center;">Title</th>-->
            <!--       <th style=" text-align:center;">Downloads</th>-->
            <!--            </tr>-->

            <!--    </thead>-->



            <!--<tbody style="background-color:#fff; color:#D2220B; text-align:center;">-->
            <!-- 	<tr>-->
            <!--	    <td>1</td>-->
            <!--        <td>Frequently Asked Questions (FAQs) on Re-KYC Updation Process</td>-->
            <!--    	  <td><a href="pdf/FAQs on Re-KYC.pdf" target="_blank"  style="color:red"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:red"></i> </a></td>-->
            <!--	</tr>-->

            <!--	<tr>-->
            <!--	    <td>2</td>-->
            <!--        <td>CUSTOMER INFORMATION UPDATION FORM FOR RE- KYC</td>-->
            <!--    	  <td><a href="pdf/CUSTOMER INFORMATION UPDATION FORM FOR KYC-converted.pdf" target="_blank"  style="color:red"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:red"></i> </a></td>-->
            <!--	</tr>-->



            <!--</tbody>-->

            <!--	</table></div>-->
            <!--                            <br>-->
            <!--                       </div>-->
            <!--</div>-->

            <!--end image slider-->
        </div>
    </section>
    <!---new slider -->
    <!--end new slider-->
</div>
<!-- footer-area start  -->
@endsection