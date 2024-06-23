@extends('front.layout.layouts')
@section('title', 'policy')

@section('main_content')
<!-- heared area end -->
<style>
    tr:nth-child(even) {
        background-color: #6ca0e0;
        color: white;

    }
</style>

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Policies</h2>
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
                        <li>Policies</li>
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
                <div class="col-md-12" style="background-color:#296dc1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Policies
                        </b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#6ca0e0; color:white; ">
                                <tr>
                                    <th style="text-align:center;">S.No</th>
                                    <th style="text-align:center;">Policies Title</th>
                                    <th style="text-align:center;">File</th>

                                </tr>

                            </thead>



                            <tbody style="background-color:#fff; color:#296dc1; text-align:center;">
                                <tr>
                                    <td>1</td>
                                    <td>Fair Practice Code </td>
                                    <td><a href="{{url('/')}}/front_assests/pdf/Fair Practice Code Updated.pdf" target="_blank" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td> Grievance redressal policy</td>
                                    <td><a href="{{url('/')}}/front_assests/pdf/gp.pdf" target="_blank" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td> Related Party Transaction Policy </td>
                                    <td><a href="{{url('/')}}/front_assests/pdf/Amended related party transaction policy.pdf" target="_blank" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a></td>
                                </tr>
                                <tr>
                                    <td>4</td>

                                    <td> KYC & Anti money laundering policy</td>
                                    <td><a href="{{url('/')}}/front_assests/pdf/KYC & Anti money laundering policy (as amended in 126th BM) Aug-19.pdf" target="_blank" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td> Whistle blower policy </td>
                                    <td><a href="{{url('/')}}/front_assests/pdf/Whistle blower policy.pdf" target="_blank" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i> </a></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>



            </div>
    </section>
    <!-- about-area end -->

    <!-- .service-area start -->
    <section class="service-area ptb-100" style="background-image: url({{asset('20150502_554414ffeb8d9.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 col">
                    <div class="panel-group emi" style="width:400px;">
                        <!--#d2220b;-->
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

                                    </div>
                            </div>
                            </form>

                            <!--end form-->

                        </div>
                    </div>
                </div>

                <!--</div>                    -->







                <div class="col-md-3 col-sm-4 col-xs-12 col">

                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">EMI Result</div>
                            <div class="panel-body" style="height:240px;">
                                <div class="archive-wrap mb-30">
                                    <!--<h3 class="sidebar-title">EMI Result</h3>-->
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
                                <!--     end result emi cal -->
                            </div>
                        </div>
                    </div>
                    <!--</div>-->

                </div>


                <div class="col-md-4 col-sm-4 col-xs-12 col">


                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">Request For New Loan</div>
                            <div class="panel-body">

                                <!--form-->
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group form-group" style="width:100%;">
                                                <input type="text" class="form-control" placeholder="Enter Name" name="fname">

                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="input-group form-group" style="width:100%;">
                                                <input type="text" class="form-control" placeholder="Enter Mobile No." name="email">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">


                                                <div class="col-md-12 form-group">
                                                    <select class="col-md-12 form-control form-control-lg" id="ddlTermType">
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
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">

                                                <!--<div class="col-md-2">-->
                                                <!--</div>-->

                                                <div class="col-md-12 form-group" style="text-align:center;">
                                                    <button class="cont-submit btn-contact btn-style" type="button" id="btnCalculateHomeLoanEMI" onclick="calculateHomeLoanEMI()">Submit</button>
                                                </div>


                                            </div>





































                                            <!--                        <form action="#" method="post" >-->
                                            <!--<div class="row"><br/>-->
                                            <!--    <h4 style="color:white;text-align:center"><b>Request a New Loan</b></h4>-->

                                            <!--<p style="color:white; text-align:center;">*Marked fields are mandatory.</p><br>-->
                                            <!--<div class="col-xs-12 form-group">-->
                                            <!--<input type="text" class="form-control" placeholder="Enter Name" name="fname"><br>-->
                                            <!--</div>-->

                                            <!--<div class="col-xs-12 form-group">-->
                                            <!--<select class="form-control">-->
                                            <!--location-->
                                            <!--location end-->
                                            <!--</select><br>-->
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
                                            <!--<button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button><br><br>-->
                                            <!--<br>-->
                                            <!--<br>-->

                                            <!--</div>-->
                                            <!--</div>-->
                                            <!--</form></div>-->

                                            <!--        </div>-->


                                            <!--</div>-->
    </section>
</div>

@endsection