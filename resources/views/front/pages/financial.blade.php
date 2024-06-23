@extends('front.layout.layouts')
@section('title', 'Financial')

@section('main_content')

<style>
    .loan {
        margin-bottom: 6px;
    }
</style>
<!-- heared area end -->


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Finance</h2>
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
                        <li>Finance</li>
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
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Financial Report</b></h3>
                    <ul style="color:white;">
                        <!--<a href="{{url('/')}}/front_assests/pdf/Balance Sheet_31.03.2021 (1).pdf" target="_blank"><li style="color:white;">1. Balance Sheet 2020 - 2021 </li></a>-->
                        <!--<a href="assets/Final Annual Report (with sd) (with CAG rectification).pdf" target="_blank"><li style="color:white;">2.  Annual Report 2019-20</li></a>-->

                        <a href="{{url('/')}}/front_assests/pdf/Balance Sheet_31.03.2021 (1).pdf" target="_blank">
                            <li style="color:white;">1. Balance Sheet 2020 - 2021 </li>
                        </a>

                        <a href="{{url('/')}}/front_assests/pdf/30th Annual report 2021final.pdf" target="_blank">
                            <li style="color:white;">2. Annual Report 2020-2021</li>
                        </a>

                        <a href="{{url('/')}}/front_assests/pdf/penalty imposed by NHB- FY 2020-21.pdf" target="_blank">
                            <li style="color:white;">3. Penalty Imposed By NHB- FY 2020-21 & 2021-22</li>
                        </a>

                        <a href="{{url('/')}}/front_assests/pdf/Annual Report 2021-22.pdf" target="_blank">
                            <li style="color:white;">4. Annual Report 2021-22</li>
                        </a>

                        <a href="{{url('/')}}/front_assests/pdf/Balance sheet and P& L and its Notes 2021-22.pdf" target="_blank">
                            <li style="color:white;">5. Balance sheet and P& L and its Notes 2021-22</li>
                        </a>

                        <!--<a href="{{url('/')}}/front_assests/pdf/182_1.pdf"><li style="color:white;">3. Annual Result 2018-19</li></a>-->
                        <!-- <a href="{{url('/')}}/front_assests/pdf/181.pdf"><li style="color:white;">4. Annual Result 2017-18</li></a>-->
                        <!--<a href="{{url('/')}}/front_assests/pdf/PENALTY for FY 17-18 & 18-19 & 19-20.pdf" target="_blank"><li style="color:white;">4. Penalty for FY 17-18 & 18-19 & 19-20</li></a>-->
                    </ul>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-2"></div>


                <div class="col-md-5" style="background-color:#296dc1;">
                    <br>

                    <h3 style="color:white; text-align:center;"><b>Auditors Report</b></h3>

                    <ul>
                        <!--old file auditors report.pdf-->
                        <a href="{{url('/')}}/front_assests/pdf/Auditor's Report.pdf" target="_blank">
                            <li style="color:white;">1. Auditors Report</li>
                        </a>
                        <!---old file Note 1 Accounting policies.pdf-->
                        <a href="{{url('/')}}/front_assests/pdf/Note 1 Significant Accounting Policy.pdf" target="_blank">
                            <li style="color:white;">2. Note 1 Accounting policies</li>
                        </a>
                        <!--old file Note 23 Notes to Accounts.pdf -->
                        <a href="{{url('/')}}/front_assests/pdf/Notes to Accounts.pdf" target="_blank">
                            <li style="color:white;">3. Notes to Accounts</li>
                        </a>
                        <a href="{{url('/')}}/front_assests/pdf/Independent Auditors Report 2021-22.pdf" target="_blank">
                            <li style="color:white;">4. Independent Auditors Report 2021-22.pdf</li>
                        </a>
                    </ul>
                    <br>

                </div>

            </div>




        </div>
    </section>
    <!-- about-area end -->

    <!-- service-area start -->
    <section class="service-area pb-140">
        <div class="container">
            <div class="row">
                <!--calculator-->
                <!--========div col-md-8========-->
                <div class="col-md-4 col">
                    <div class="panel-group emi" style="width:391px;">
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">EMI Calculator</div>
                            <div class="panel-body">

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
                                                    <button type="reset" class="cont-submit btn-contact btn-style">Reset</button>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <button class="cont-submit btn-contact btn-style" type="button" id="btnCalculateHomeLoanEMI" onclick="calculateHomeLoanEMI()">Submit</button>
                                                </div>

                                                <div class="col-md-2">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <!--end form-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col">

                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">EMI Result</div>
                            <div class="panel-body" style="height:238px;">
                                <div class="archive-wrap mb-0">
                                    <ul>
                                        <li>EMI <span class="pull-right" id="totalEMIValue">0</span></li>
                                        <li>Loan Amount<span class="pull-right" id="totalLoanAmount">0</span></li>
                                        <li>Loan Term <span class="pull-right" id="totalLoanTerm">0</span></li>
                                        <li>Interest Rate <span class="pull-right" id="totalInterestRate">0</span></li>
                                        <li>Interest Amount <span class="pull-right" id="totalInterestPaid">0</span></li>
                                        <li>Total Amount <span class="pull-right" id="totalAmount">0</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--========end div col md 8=============-->
                <!---======     div col-md-4  =====--->
                <div class="col-md-1 col">
                </div>

                <div class="col-md-4 col">
                    <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color:#296dc1;color:white">Request For a New Loan</div>
                        <div class="panel-body">
                            <form action="{{ url('loan-requestsave') }}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-xs-12 form-group loan">
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="col-xs-12 form-group loan">
                                        <input type="email" class="form-control" placeholder="Enter Email Id" name="email">
                                    </div>
                                    <div class="col-xs-12 form-group loan">
                                        <input type="text" class="form-control" placeholder="Enter Mobile No." name="phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
                                    </div>

                                    <div class="col-xs-12 form-group loan">
                                        <select class="form-control" name="branch_name">
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

                                    <div class="col-xs-12 form-group" style="text-align:center;margin-bottom:0px;">
                                        <button class="btn-style" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--=============end div col-md-4============-->
                    <!--end cal-->
                </div>
            </div>
        </div>
    </section>
</div>

@endsection