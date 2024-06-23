@extends('front.layout.layouts')
@section('title', 'PMAY')

@section('main_content')

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>PMAY-U (Credit linked Subsidy Scheme)
                    </h2>
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
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>PMAY-U (Credit linked Subsidy Scheme)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assests/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">

    <!-- about-area end -->
    <section class="service-area ptb-140">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8" style="background-color:#296dc1;">
                    <h3 style="color:white; text-align:center;padding:10px;">Updated-guidelines-of-PMAY-U.pdf</h3>
                    <!--<iframe src="pdf/deposit-schemes.pdf" style="width:100%; height:1010px;" frameborder="0"></iframe>-->
                    <iframe src="{{url('/')}}/front_assests/pdf/Updated-guidelines-of-PMAY-U.pdf" style="width:100%; height:600px;"></iframe>


                </div>
                <div class="col-md-1"></div>
                <!--<div class="container" style="background-color:#c72929;">-->
                <div class="col-md-3 col-sm-2 col-xs-12 col" style="background-color:#296DC1;height:663px;">
                    <form action="{{ url('loan-requestsave') }}" method="post">
                        @csrf
                        <div class="row"><br />
                            <h4 style="color:white;text-align:center"><b>Request for a New Loan</b></h4>

                            <p style="color:white; text-align:center;">*Marked fields are mandatory.</p><br>
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
                                <p style="color:white;"><input type="checkbox" required> I agree to be contacted by Cent Bank representative for loan enquiry.</p>
                            </div>
                            <div class="col-md-12" style="text-align:center;"><br>
                                <button type="submit" class="cont-submit btn-contact btn-style">Submit</button>

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
    aaaaaa

    function FV(PV, i, n) {
        var x = (1 + i / 100)
        var FV = PV * (Math.pow(x, n))
        return FV;
    }

    function Cal_FV() {
        var pvalue = parseFloat(document.getElementById("a").value);
        var interest = parseFloat(document.getElementById("b").value);
        var num = parseInt(document.getElementById("c").value);
        var fvalue = FV(pvalue, interest, num);
        var fv = fvalue.toFixed(2);
        document.getElementById('totalP').textContent = +pvalue + " ₹";
        document.getElementById('interest').textContent = +interest + " %";
        document.getElementById('all').textContent = +fv + " ₹";
    }
</script>

@endsection