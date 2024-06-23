@extends('front.layout.layouts')
@section('title', 'REP7')

@section('main_content')




<style>
    .t-loan {
        margin-bottom: 8px;
    }
</style>


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-7">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Empanelment of IS auditor
                        <br>
                        <!--                            <span style="font-size: 20px;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022<br>-->
                        <!--Please check your e-mail for Pre-Bid Meeting invite Link,<br> Meeting date & time - 04 February 2022 at 3:00 PM</span>-->
                    </h2>
                    <!--                        <h4 style="    color: #fff;-->

                    <!--;">CBHFL RFP. No CBHFL/2021-22/RFP-1 Dated 01/02/2022</h4>-->
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
                        <li>Empanelment of IS Auditor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<marquee ><a href="#"><b style='color:red;'>Last date for submission extended till 15-09-2023 </b></a></marquee>-->

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
                    <h3 style="color:white; text-align:center;"><b>Empanelment of IS Auditor</b></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color:#fff; color:#296dc1;">
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Bid Last Date</th>
                                    <th class="text-center">Downloads</th>
                                </tr>

                            </thead>
                            <tbody style="background-color:#fff; color:#296dc1;">

                                <tr>
                                    <td class="text-center"> Empanelment of IS Auditor</td>
                                    <td class="text-center">22-09-2023</td>
                                    <td class="text-center">
                                        <a href="{{ url('/') }}/front_assests/pdf/(19-08-23)-Advertisement (Website).pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                        <a href="{{ url('/') }}/front_assests/pdf/WINDOW ADVT IS AUDITOR.DOCX" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> Corrigendum-1 </td>
                                    <td class="text-center">22-09-2023</td>
                                    <td class="text-center">
                                        <a href="{{url('/')}}/front_assests/pdf/(time extn )-(14-09-23) for website.pdf" style="color:#296dc1;"> <i class="fa fa-file-pdf-o" style="font-size:22px;color:#296dc1;"></i></a>

                                    </td>
                                </tr>



                            </tbody>

                        </table>
                    </div>
                    <br>
                </div>

                <br>
            </div>
            <br>



        </div>



</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Fill the form First</h4>
            </div>
            <div class="modal-body">
                <form action="tendor.php" method="post" class="doc_form">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="cname" placeholder="Enter Company Name" required />
                    </div>
                    <div class="form-group">
                        <label>Website Url</label>
                        <input type="text" class="form-control" name="url" placeholder="Enter Website Url" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Your Mobile No" required>
                    </div>

                    <button type="submit" class="btn btn-danger" style="float:left;" name="submit_form">Submit</button>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<div id="mysecondModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Fill the form First</h4>
            </div>

            <div class="modal-body">
                <form action="tendor.php" method="post" class="doc_form">
                    <label>Company Name:</label>
                    <input type="text" name="cname" placeholder="Enter Company Name" required /> <br><br>
                    <label>Contact Name:</label>
                    <input type="text" name="name" placeholder="Enter Your Contact Name" required /> <br><br>
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="Enter Your Company Email" required /> <br><br>
                    <label for="phone no">Mobile Number:</label>
                    <input type="number" name="phone" placeholder="Enter Your Mobile No" required /> <br><br>
                    <button type="submit" class="btn btn-success" style="float:left;" name="submit_form">Submit</button>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</section>
<!-- about-area end -->



<!-- .service-area start -->
<section class="service-area ptb-100" style="background-image: url('20150502_554414ffeb8d9.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 col">
                <div class="panel-group emi" style="width:400px;">
                    <!--#d2220b;-->
                    <div class="panel panel-danger">
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Calculator</div>
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
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">EMI Result</div>
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
                        <div class="panel-heading" style="background-color:#296dc1;color:white;text-align:center;">Request For New Loan</div>
                        <div class="panel-body">

                            <!--form-->
                            <form action="{{ url('loan-requestsave') }}" method="post" id="formid">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="email" class="form-control" placeholder="Enter Email Id" name="email" required>

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-group form-group t-loan" style="width:100%;">
                                            <input type="text" class="form-control" placeholder="Enter Mobile No." name="phone" required>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">


                                            <div class="col-md-12 form-group">
                                                <select class="col-md-12 form-control form-control-lg" id="ddlTermType" name="branch_name" required>
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

                                            <div class="col-md-12 form-group" style="text-align:center;margin-bottom:-10px;">
                                                <button class="cont-submit btn-contact btn-style" onclick="openWord1()" type="submit">Submit</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


</section>
</div>




<script>
    var pdfUrl = "https://cbhfl.com/rfp2 website/CBHFL  e.pdf";


    $('.doc_form').on('submit', function() {

        window.open(pdfUrl, 'download');

    });
</script>
@endsection