@extends('front.layout.layouts')
@section('title', 'Archives')

@section('main_content')

    <!-- breadcumb-area start -->
    <div class="breadcumb-area black-opacity bg-img-22">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">

                        <h2>Archives</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcumb-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>/</li>
                            <li>Archives</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->
    <div
        style="background-image: url({{ asset('front_assets/images/about2.jpg') }});  background-repeat: no-repeat; background-size: cover; height: 100%;">
        <br>
        <br>
        <!--
    Animate a Curtain Opening with jQuery
    index.html
    By Sam Dunn
    2009 Build Internet! www.buildinternet.com
    -->
        <!-- about-area start -->
        <section class="service-area pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" style="background-color:#296dc1;">
                        <br>
                        <h3 style="color:white; text-align:center;"><b>Financial</b></h3>
                        <ul style="color:white;">

                            <!--<a href="pdf/Balance Sheet_31.03.2021 (1).pdf" target="_blank"><li style="color:white;">1. Balance Sheet 2020 - 2021 </li></a>-->

                            <a href="{{ url('pdf/BS 31.03.2020 in lakhs.pdf') }}" target="_blank">
                                <li style="color:white;">1. Balance Sheet 2019-20</li>
                            </a>
                            <a href="{{ url('pdf/182_1.pdf') }}">
                                <li style="color:white;">2. Annual Result 2018-19</li>
                            </a>
                            <a href="{{ url('pdf/181.pdf') }}">
                                <li style="color:white;">3. Annual Result 2017-18</li>
                            </a>
                            <a href="{{ url('pdf/PENALTY for FY 17-18 & 18-19 & 19-20.pdf') }}" target="_blank">
                                <li style="color:white;">4. Penalty for FY 17-18 & 18-19 & 19-20</li>
                            </a>

                            <br />
                        </ul>
                    </div>
                    <div class="col-md-2"></div>


                    <div class="col-md-5" style="background-color:#296dc1;">
                        <br>

                        <h3 style="color:white; text-align:center;"><b>Auditors Report</b></h3>

                        <ul>
                            <a href="{{ url('pdf/auditors report.pdf') }}" target="_blank">
                                <li style="color:white;">1. Auditors Report</li>
                            </a>
                            <a href="{{ url('pdf/Note 1 Accounting policies.pdf') }}" target="_blank">
                                <li style="color:white;">2. Note 1 Accounting policies</li>
                            </a>
                            <a href="{{ url('pdf/Note 23 Notes to Accounts.pdf') }}" target="_blank">
                                <li style="color:white;">3. Notes to Accounts</li>
                            </a>

                            <br />
                        </ul>
                        <br>

                    </div>

                </div>
                <!--new section -->
                <!--<br/><br/>-->
                <!--                      <div class="row">-->
                <!--                    <div class="col-md-5" style="background-color:#296dc1;">-->
                <!--                        <br>-->
                <!--                        <h3 style="color:white; text-align:center;"><b>Quarter ending 31.03.2021</b></h3>-->
                <!--                        <p style="color:white;text-align:center;"> Rate of Interest(ROI)</p>-->
                <!--                        <ul style="color:white;">-->
                <!--                            <li style="color:white;">1. Housing : 	-->
                <!--9.80-11.00</li>-->
                <!--                           <li style="color:white;">2. Non-housing : 11.30-12.30</li>-->
                <!-- <a href="pdf/181.pdf"><li style="color:white;">3. Annual Result 2017-18</li></a>-->
                <!--<a href="pdf/PENALTY for FY 17-18 & 18-19 & 19-20.pdf" target="_blank"><li style="color:white;">4. Penalty for FY 17-18 & 18-19 & 19-20</li></a>-->
                <!--                            <br/>-->
                <!--                            </ul>-->
                <!--                       </div>-->
                <!--<div class="col-md-2"></div>-->


                <!--                    <div class="col-md-5" style="background-color:#296dc1;">-->
                <!--                        <br>-->

                <!--                       <h3 style="color:white; text-align:center;"><b>Quarter ending 31.03.2021</b></h3>-->
                <!--                        <p style="color:white;text-align:center;">Range of Annual Percentage Rate(APR)</p>-->
                <!--                        <ul>-->
                <!--                            <li  style="color:white;">1. Housing : 5.66%(Low) & 7.50%(High)</li></a>-->

                <!--                            <li  style="color:white;">2. Non-housing : 7.23%(Low) & 7.23%(High)</li></a>-->
                <!--                            </ul>-->
                <!--                            <br>-->

                <!--                        </div>-->

                <!--                    </div>-->
                <!--end new section -->



            </div>
        </section>
        <!-- about-area end -->

        <!-- service-area start -->

    </div>

    <!-- footer-area start  -->
@endsection
