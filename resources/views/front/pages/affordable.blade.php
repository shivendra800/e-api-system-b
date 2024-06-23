@extends('front.layout.layouts')
@section('title', 'Affordable')

@section('main_content')


<style>
    tr:nth-child(even) {
        background-color: #6ca0e0;
        color: white;
    }
</style>

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-19">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Affordable Housing Fund<p style="color:white;font-size:12pt;"></p>
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
                        <li><a href="{{url('/')}}">Housing</a></li>
                        <li>/</li>
                        <li>Affordable Housing Fund</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div style="background-image: url({{asset('front_assets/images/about2.jpg')}});  background-repeat: no-repeat; background-size: cover; height: 100%;">
    <br>
    <br>
    <!-- about-area start -->
    <section class="service-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="background-color:#296DC1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Affordable Housing Fund</b></h3>
                    <hr />
                    <h4 style="color:white; text-align:center;"><b>Urban</b></h4>
                    <table class="table table-bordered" style="background-color:white;">
                        <tbody>
                            <tr>
                                <td><b>Purpose</b></td>
                                <td> For Purchase/Construction/ Improvement/Extension/ Plot purchase plus
                                    Construction</td>
                            </tr>

                            <tr>
                                <td><b>Areas Covered</b></td>
                                <td> All areas falling under the Statutory Town definition of Pradhan Mantri Awas
                                    Yojana – Urban </td>
                            </tr>

                            <tr>
                                <td><b>Eligible individual housing loans</b></td>
                                <td> Annual household income not exceeding Rs. 6 lakh</td>
                            </tr>

                            <tr>
                                <td><b>Nature of RoI</b></td>
                                <td> RoI will be fixed for initial 7 Years
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 col-sm-2 col-xs-12 col" style="background-color:#296DC1;height:375px;">
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
                                <button type="submit" class="cont-submit btn-contact btn-style" >Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12" style="background-color:#296DC1;">
                    <br>
                    <h3 style="color:white; text-align:center;"><b>Affordable Housing Fund</b></h3>
                    <hr />
                    <h4 style="color:white; text-align:center;"><b>Rural</b></h4>
                    <table class="table table-bordered" style="background-color:white;">

                        <tbody>
                            <tr>
                                <td><b>Purpose</b></td>
                                <td> For Purchase/Construction/ Improvement/Extension/ Plot purchase plus
                                    Construction</td>
                            </tr>

                            <tr>
                                <td><b>Areas Covered</b></td>
                                <td> Any other areas not falling under the Statutory Town definition of Pradhan
                                    Mantri Awas Yojana – Urban </td>
                            </tr>


                            <tr>
                                <td><b>Eligible individual housing loans</b></td>
                                <td> Rural – <p>(i) Weaker Sections as defined in the RBI’s priority
                                        sector guidelines (as amended from time to time);</p>
                                    <p>(ii) Annual household income not exceeding
                                        3 lakh; and</p>
                                    <p>(iii) Women.</p>
                                </td>
                            </tr>

                            <tr>
                                <td><b>Nature of RoI</b></td>
                                <td> RoI will be fixed for initial 7 Years
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>

            </div>

    </section>
    <!-- about-area end -->



</div>


</div>
</section>
</div>


@endsection