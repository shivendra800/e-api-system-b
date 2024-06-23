@extends('front.layout.layouts')
@section('title', 'Deposit Intrest')

@section('main_content')


<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Deposit Schemes
                        <p style="color:white;font-size:12pt;"><br /><i>More Interest More Happiness</i></p>
                    </h2>
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
                        <li>Deposit Schemes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">

    <!-- about-area end -->
    <section class="service-area ptb-140" style="margin-top: -98px;margin-bottom: -84px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h2 style="color:#296dc1"><b>Interest Rates on Deposit Schemes</b></h2>
                    <!--<iframe src="pdf/deposit-schemes.pdf" style="width:100%; height:1010px;" frameborder="0"></iframe>-->
                    <!--<iframe src="pdf/REVISED ROI OF FIXED DEPOSIT-converted.pdf" style="width:100%; height:800px;" frameborder="0"></iframe>-->
                    <!--content -->
                    <div class="about-wrap">
                        <br>
                        <h3 style="color:#296dc1;"><b>Registration:- Revision in rate of interest on Fixed Deposits<br /><br /> Date:-23.10.2023 </b></h3>
                        <p style="color:#296dc1;">Please be informed that interest rates on deposits are revised w.e.f. 23.10.2023. . The revised rates of interest on deposits are as follows: </p>
                        <h3 style="color:#296dc1;"><b>ROI FOR PUBLIC DEPOSITS:- </b></h3>
                        <p style="color:darkblue;background-color:">

                            <div class="table-responsive" style="background-color:#296dc1;">
                                <table class="table table-bordered">
                                    <thead style="color:#296dc1;">
                                        <tr>
                                            <th colspan="3" style="text-align:center;color:white;">Fixed Deposit Scheme (ALL)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr style="text-align:center;">
                                            <td style='color:white;'></td>

                                            <td style='color:white;'>12-36months </td>
                                            <td style='color:white;'>39 to 120 months </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>RoI (per annum)</td>

                                            <td style='color:white;'>7.60% </td>
                                            <td style='color:white;'>7.65% </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </p>
                        <br>

                        <p style="color:darkblue;">* Additional interest of 0.25% for senior citizens (aged 60 years and above) will continue to be
                            available for all deposits schemes, where first depositor is a senior citizen.

                        </p>

                        <p style="color:darkblue;">* Additional interest of 0.50% for CBHFL staff members will continue to be available for all deposits
                            schemes, where first depositor is a staff member of the Company.
                        </p>

                        <br>

                        <h3 style="color:#296dc1;"><b>ROI FOR ICD/Inter corporate deposit(w.e.f 23.10.2023. ):-</b></h3>

                        <p style="color:darkblue;background-color:">

                            <div class="table-responsive" style="background-color:#296dc1;">
                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <td colspan="3" style="text-align:center;color:white;"><b>Fixed Deposit Scheme(All) non public</b></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'> </td>
                                            <td style='color:white;'>12-18months </td>
                                            <!--<td style='color:white;'>21-36 Months</td>-->
                                            <td style='color:white;'>39-120 Months</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>ROI(per annum) </td>
                                            <td style='color:white;'>7.60% </td>
                                            <!--<td style='color:white;'>6.65% </td>-->
                                            <td style='color:white;'>7.65%</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </p><br>

                        <h3 style="color:#296dc1;"><b>COMMISSION RATE ON PUBLIC DEPOSIT:-</b></h3>

                        <p style="color:darkblue;"><b>Brokerage payable on fresh as well as on renewed public deposit/ICD deposits mobilized amounting to Rs. 1 lacs and above ,but below one crore , If Sourced via broker are given below:-</b>
                        </p>

                        <p style="color:darkblue;background-color:">

                            <div class="table-responsive" style="background-color:#296dc1;">
                                <table class="table table-bordered">
                                    <thead style="color:#296dc1;">
                                        <tr>
                                            <th colspan="2" style="text-align:center;color:white;">Brokerage payable for mobilization of deposits, if sourced through brokers</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr style="text-align:center;">
                                            <td style='color:white;'></td>
                                            <td style='color:white;'></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'><b>Deposit mobilized for the period </b></td>
                                            <td style='color:white;'><b>Commission Payable</b></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Upto 18 months </td>
                                            <td style='color:white;'>0.35% </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Above 21 months to 120 months </td>
                                            <td style='color:white;'>0.50% </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Additional Slab</td>
                                            <td style='color:white;'>0.05% additional brokerage will be payable if fresh/renewal
                                                FD amount exceeds Rs.5 Crore in a month mobilized by broker
                                                in single shot FD.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </p>

                        <p style="color:darkblue;"><b>Brokerage payable on fresh as well as on renewed public deposit/ICD mobilized amounting to Rs. 1 crore and above, If Sourced via broker are given below:-</b>
                        </p>

                        <p style="color:darkblue;background-color:">

                            <div class="table-responsive" style="background-color:#296dc1;">
                                <table class="table table-bordered">
                                    <thead style="color:#296dc1;">
                                        <tr>
                                            <th colspan="2" style="text-align:center;color:white;">Brokerage payable for mobilization of deposits, if sourced through brokers</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr style="text-align:center;">
                                            <td style='color:white;'></td>
                                            <td style='color:white;'></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'><b>Deposit mobilized for the period</b></td>
                                            <td style='color:white;'><b>Commission Payable</b></td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Upto 18 months </td>
                                            <td style='color:white;'>0.50% </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Above 21 months to 120 months </td>
                                            <td style='color:white;'>0.60% </td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <td style='color:white;'>Additional Slab</td>
                                            <td style='color:white;'>0.05% additional brokerage will be payable if fresh/renewal
                                                FD amount exceeds Rs.5 Crore in a month mobilized by broker
                                                in single shot FD.</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </p>

                    </div>
                    <!--end content-->
                </div>
                <!--<div class="container" style="background-color:#c72929;">-->

            </div>

        </div>
    </section>
    <!--background-image: url(20150502_554414ffeb8d9.jpg);-->

    <!-- .service-area start -->
    <section class="service-area ptb-100" style="background-image: url({{asset('front_assests/20150502_554414ffeb8d9.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <div class="container">
            <div claas="row">
                <div class="col-md-6">
                    <!--fd cal-->

                    <div class="panel-group emi">

                        <div class="panel panel-danger">
                            <div class="panel-heading" style="background-color:#296dc1;color:white">FD Calculator</div>
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
                        <br />
                        <!--eny form start-->

                        <!--eny form end-->
                    </div>
                    <!--fd cal-->
                </div>
                <div class="col-md-6">
                    <!--form -->
                    <div class="panel-group emi">

                        <div class="panel panel-danger" style="height:460px;">
                            <div class="panel-heading" style="background-color:#296dc1;color:white"> Fixed Deposit Enquiry Form</div>
                            <div class="panel-body">
                                <!--<p style="color:white;">Please share your details to get a call back from us</p>-->
                                <!--form -->
                                <!--new form --->
                                <form action="{{ url('fixed-deposit-enquirySave') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control" placeholder="Name*" name="name" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control" placeholder="Enter Mobile No" name="phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="email" class="form-control" placeholder="Email*" name="email" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <select class="form-control" required name="branch">
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
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="number" class="form-control" placeholder="FD Amount*" name="amount"><br>
                                        </div>
                                        <!--<div class="col-md-12 form-group">-->

                                        <!--<input type="checkbox" > <span style="color:#296dc1;text-align:justify;">  I agree to be contacted by Cent Bank representative regarding my Fixed Deposits enquiry.</span>-->
                                        <!--</div>-->

                                        <div class="col-xs-12" style="text-align:center;">
                                            <button id="submit" class="cont-submit btn-contact btn-style" name="submit">Submit</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                            <!--end form-->
                            <!--form end-->
                        </div>
                    </div>
                </div>
                <!--end form-->
            </div>

        </div>


        <!--end image slider-->
</div>
</section>
<!---new slider -->
<!--end new slider-->
</div>

<!-- footer-area start  -->


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
        alert(total);
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