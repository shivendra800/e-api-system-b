@extends('front.layout.layouts')
@section('title', 'Rate of Interest')

@section('main_content')


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-11">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Housing</h2>
                    <!--<p style="color:white;font-size:12pt;"><br/><i>More Interest More Happiness</i></p>-->
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
                        <li>Housing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/banka-makro-fon.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">

    <!-- about-area start -->
    <section class="service-area ptb-140">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8" style="background-color:#c72929;">
                    <h3 style="color:white; text-align:center;"><br />Housing Rate of Interest</h3>

                    <!--pdf/roi_of_loan_scheme.pdf-->

                    <iframe src="{{url('/')}}/front_assests/pdf/cent_bank_new_pdf-converted.pdf" style="width:100%; height:890px;" frameborder="0"></iframe>

                </div>
                <!--<div class="container" style="background-color:#c72929;">-->
                <div class="col-md-4">
                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#d2220b;color:white">EMI Calculator</div>
                            <div class="panel-body">

                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group form-group">
                                                <input type="number" id="txtLoanAmount" class="form-control" placeholder="Loan Amount*" name="fname" required>
                                                <span class="input-group-addon" style="color:#d2220b;"><b>₹</b></span>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="input-group form-group">
                                                <input type="number" class="form-control" id="txtInterestRate" placeholder="Rate of Interest*" name="email" required>
                                                <span class="input-group-addon" style="color:#d2220b;"><b>%</b></span>
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
                                                    <button type="reset" class="cont-submit btn-contact btn-style">Reset</button>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <button class="cont-submit btn-contact btn-style" type="button" id="btnCalculateHomeLoanEMI" onclick="calculateHomeLoanEMI()">Submit</button>
                                                </div>

                                                <div class="col-md-2">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- result emi cal -->
                                        <div class="col-md-12">
                                            <hr />
                                            <!-- result design -->
                                            <div class="archive-wrap mb-30">
                                                <h3 class="sidebar-title">EMI Result</h3>
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
                                            <!-- end result emi cal -->
                                            <!-- </div> -->

                                        </div>
                                    </div>
                                </form>

                                <!--end form-->

                            </div>
                        </div>
                        <br>



                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#d2220b;color:white">Request a New Loan</div>
                            <div class="panel-body">
                                <form action="https://preview.colorlib.com/theme/martxa/martxa/mail.php" method="post">
                                    <div class="row"><br />
                                        <!--    <h4 style="color:white;text-align:center"><b>Request a New Loan</b></h4>-->

                                        <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p>-->
                                        <div class="col-xs-12 form-group">
                                            <input type="text" class="form-control" placeholder="Enter Name" name="fname">
                                        </div>

                                        <div class="col-xs-12 form-group">
                                            <select class="form-control">
                                                <!--location-->
                                                <option value="">Select Location</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="-----------">-----------</option>
                                                <option value="Agra">Agra</option>
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Ahmednagar">Ahmednagar</option>
                                                <option value="Ajmer">Ajmer</option>
                                                <option value="Amravati">Amravati</option>
                                                <option value="Aurangabad">Aurangabad</option>
                                                <option value="Bengaluru-Indiranagar">Bengaluru-Indiranagar</option>
                                                <option value="Bengaluru-Jayanagar">Bengaluru-Jayanagar</option>
                                                <option value="Bengaluru-Kasturinagar">Bengaluru-Kasturinagar</option>
                                                <option value="Bengaluru-Malleshwaram">Bengaluru-Malleshwaram</option>
                                                <option value="Bengaluru-Marathahalli">Bengaluru-Marathahalli</option>
                                                <option value="Bhilwara">Bhilwara</option>
                                                <option value="Bhiwadi">Bhiwadi</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Bhubaneshwar">Bhubaneshwar</option>
                                                <option value="Bikaner">Bikaner</option>
                                                <option value="Bilaspur">Bilaspur</option>
                                                <option value="Calicut">Calicut</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Chennai-Ambattur">Chennai-Ambattur</option>
                                                <option value="Chennai-OMR">Chennai-OMR</option>
                                                <option value="Chennai-Tambaram">Chennai-Tambaram</option>
                                                <option value="Cochin">Cochin</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Dehradun">Dehradun</option>
                                                <option value="Delhi-GreenPark">Delhi-GreenPark</option>
                                                <option value="Delhi-Janakpuri">Delhi-Janakpuri</option>
                                                <option value="Erode">Erode</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Ganga Nagar">Ganga Nagar</option>
                                                <option value="Ghaziabad">Ghaziabad</option>
                                                <option value="Ghaziabad-Kavi Nagar">Ghaziabad-Kavi Nagar</option>
                                                <option value="Gorakhpur">Gorakhpur</option>
                                                <option value="Guntur">Guntur</option>
                                                <option value="Gurgaon">Gurgaon</option>
                                                <option value="Gwalior">Gwalior</option>
                                                <option value="Haldwani">Haldwani</option>
                                                <option value="Haridwar">Haridwar</option>
                                                <option value="Hissar">Hissar</option>
                                                <option value="Hosur">Hosur</option>
                                                <option value="Hubli">Hubli</option>
                                                <option value="Hyderabad-Banjara Hills">Hyderabad-Banjara Hills</option>
                                                <option value="Hyderabad-Kukatpally">Hyderabad-Kukatpally</option>
                                                <option value="Hyderabad-Uppal">Hyderabad-Uppal</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Jabalpur">Jabalpur</option>
                                                <option value="Jaipur">Jaipur</option>
                                                <option value="Jalandhar">Jalandhar</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="Jodhpur">Jodhpur</option>
                                                <option value="Junagadh">Junagadh</option>
                                                <option value="Kalyan">Kalyan</option>
                                                <option value="Kanpur">Kanpur</option>
                                                <option value="Karnal">Karnal</option>
                                                <option value="Kolhapur">Kolhapur</option>
                                                <option value="Kollam">Kollam</option>
                                                <option value="Kota">Kota</option>
                                                <option value="Lucknow">Lucknow</option>
                                                <option value="Ludhiana">Ludhiana</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Meerut">Meerut</option>
                                                <option value="Mumbai-BOISAR">Mumbai-BOISAR</option>
                                                <option value="Mumbai-Borivali">Mumbai-Borivali</option>
                                                <option value="Mumbai-GHATKOPAR">Mumbai-GHATKOPAR</option>
                                                <option value="Mumbai-Panvel">Mumbai-Panvel</option>
                                                <option value="Mumbai-Virar">Mumbai-Virar</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Nagpur">Nagpur</option>
                                                <option value="Nashik">Nashik</option>
                                                <option value="Navi Mumbai">Navi Mumbai</option>
                                                <option value="Nellore">Nellore</option>
                                                <option value="Noida">Noida</option>
                                                <option value="Noida-Sec 63">Noida-Sec 63</option>
                                                <option value="Odhav">Odhav</option>
                                                <option value="Palakkad">Palakkad</option>
                                                <option value="Patiala">Patiala</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Pune-Kharadi">Pune-Kharadi</option>
                                                <option value="Pune-Kondhwa">Pune-Kondhwa</option>
                                                <option value="Pune-Pimpri Chinchwad">Pune-Pimpri Chinchwad</option>
                                                <option value="Pune-Warje">Pune-Warje</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Rajahmundry">Rajahmundry</option>
                                                <option value="Rajkot">Rajkot</option>
                                                <option value="Ranchi">Ranchi</option>
                                                <option value="Rohtak">Rohtak</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Sangli">Sangli</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Surat-Vesu">Surat-Vesu</option>
                                                <option value="Thane">Thane</option>
                                                <option value="Thrissur">Thrissur</option>
                                                <option value="Trichy">Trichy</option>
                                                <option value="Trivandrum">Trivandrum</option>
                                                <option value="Tumkur">Tumkur</option>
                                                <option value="Tuticorin">Tuticorin</option>
                                                <option value="Udaipur">Udaipur</option>
                                                <option value="Ujjain">Ujjain</option>
                                                <option value="Vadodara">Vadodara</option>
                                                <option value="Varanasi">Varanasi</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Vijayanagar">Vijayanagar</option>
                                                <option value="Vijayawada">Vijayawada</option>
                                                <option value="Vishakapatnam">Vishakapatnam</option>
                                                <option value="Warangal">Warangal</option>
                                                <option value="Others">Others</option>
                                                <!--location end-->
                                            </select>
                                        </div>
                                        <div class="col-xs-12 form-group">
                                            <input type="text" class="form-control" placeholder="Enter Mobile No." name="fname">
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">

                                            </div>
                                            <!--<input type="text" placeholder="Nearest Branch" id="email" name="email">-->
                                        </div>

                                        <div class="col-xs-12" style="text-align:center;">
                                            <button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button>
                                            <!--<br>-->
                                            <!--<br>-->

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- about-area end -->

    <!-- .service-area start -->
    <!--        <section class="service-area ptb-100" style="background-image: url('assets/images/banka-makro-fon.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">-->
    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-5 col-sm-4 col-xs-12 col" style="background-color:#c72929;">-->
    <!--                        <form action="https://preview.colorlib.com/theme/martxa/martxa/mail.php" method="post" >-->
    <!--<div class="row"><br/>-->
    <!--    <h4 style="color:white;text-align:center"><b>EMI Calculator</b></h4>-->

    <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Loan Amount" name="fname">-->
    <!--</div>-->

    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Intrest Rate" name="email">-->
    <!--</div>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Term Years"  name="fname">-->
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
    <!--<div class="col-md-2 col-sm-4 col-xs-12 col"></div>-->


    <!--                    <div class="col-md-5 col-sm-4 col-xs-12 col" style="background-color:#c72929;">-->
    <!--                        <form action="https://preview.colorlib.com/theme/martxa/martxa/mail.php" method="post" >-->
    <!--<div class="row"><br/>-->
    <!--    <h4 style="color:white;text-align:center"><b>Request a New Loan</b></h4>-->

    <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Name" name="fname">-->
    <!--</div>-->

    <!--<div class="col-xs-12 form-group">-->
    <!--<select class="form-control">-->
    <!--location-->
    <!--location end-->
    <!--</select>-->
    <!--</div>-->
    <!--<div class="col-xs-12 form-group">-->
    <!--<input type="text" class="form-control" placeholder="Enter Mobile No."  name="fname">-->
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


<!-- footer-area start  -->
@endsection