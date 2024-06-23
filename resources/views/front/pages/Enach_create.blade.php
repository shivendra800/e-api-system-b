@extends('front.layout.layouts')

@section('main_content')
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }


        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        textarea {
            resize: none;
        }
    </style>


    <div class="breadcumb-area black-opacity bg-img-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">
                        <h2>E-Nach Create Request</h2>
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
                            <li>E-Nach Create Request</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->




    <!-- about-area start -->
    <div
        style="background-image: url('assets/images/about2.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row" style="border:2px solid #296dc1;">
                    <!--new form-->
                    <div class="col-md-12">
                        <br />
                        <h3 style='color:#296dc1;' class="text-center pull-center"><b>E-Nach Create Request</b></h3>


                        <div class="contact-wrap form-style">
                            <div class="cf-msg"></div>
                            <div><img class="img-responsive;" src="assets/img/logo_2.png" style="height:80px;"
                                    alt=""></div>
                            <br /><br />
                            @if($data["loan_account_no"]!="" && $data["emi_amount"]!=""&& $data["emi_start_date"]!=""&& $data["emi_end_date"]!="")
                            <form method="post" id="form-data" enctype='multipart/form-data'
                                action="{{ url('Enach-create-save') }}">
                                @csrf
                                @endif
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="">Select Branch</label>
                                      <select name="branch_id" id="branch_id" class="form-control">
                                        <option value="">Select Branch</option>
                                        @foreach ($branch as $branchitem)
                                            <option value="{{$branchitem->id}}">{{$branchitem->branch_name}}</option>
                                        @endforeach
                                      </select>
                                   </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                         <label for="">Name</label>
                                        <input type="text" placeholder="Name of the borrower" name="merchantLegalName"
                                            id="fname" required minlength="1" maxlength="100" value="{{$data["user_name"]}}" readonly />
                                    </div>
                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">Email</label>
                                        <input type="email" name="email" required placeholder="Email id" value="{{$data["email"]}}" readonly>
                                    </div>


                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="mobileNo" minlength="10" maxlength="12" value={{ Session::get('mobileNo') }}
                                            placeholder="Mobile Number" id="mob_No_" readonly />
                                    </div>

                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">Aadhar Number</label>
                                        <input type="text" name="aadhar_no" minlength="12" id="aadhar_no" maxlength="12"
                                            placeholder="Aadhar No" value="{{$data["aadhar_no"]}}" readonly />

                                            {{-- <div class="form-group col-xs-12 pull-center text-center">
                                                <button type="submit" name="submit" id="Verify_aadhar_no" value="Submit"
                                                    class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                                    class="cont-submit btn-contact btn-primary pull-center"
                                                    >Verify</button>
                                            </div> --}}
                                    </div>

                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">Loan Account Number</label>
                                        <input type="text" name="merchantAccountNo" placeholder="Loan Account Number"
                                            minlength="1" maxlength="30" value="{{$data["loan_account_no"]}}" readonly />
                                    </div>

                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">Emi Amount</label>
                                        <input type="text" name="emi_amount" placeholder="EMI Amount" value="{{$data["emi_amount"]}}" readonly  minlength="1" maxlength="100" />
                                    </div>
                                    <div class="form-group  col-sm-6 col-xs-12">

                                        <label for="">Start Date</label>
                                        <input type="text" name="validityStart" placeholder="ValidityStart"
                                        value="{{$data["emi_start_date"]}}" readonly  />
                                    </div>
                                    <div class="form-group  col-sm-6 col-xs-12">
                                        <label for="">End Date</label>
                                        <input type="text" name="validityEnd" placeholder="ValidityEnd"
                                        value="{{$data["emi_end_date"]}}" readonly />
                                    </div>
                                    <div class="form-group   col-sm-6 col-xs-12">
                                        <label for="">E-Nach Status</label>
                                        <input type="text"  placeholder="ValidityEnd" class="btn btn-success"
                                        value="{{$data["status"]}}" readonly />

                                    </div>
                                    @if($data["loan_account_no"]!="" && $data["emi_amount"]!=""&& $data["emi_start_date"]!=""&& $data["emi_end_date"]!="")
                                    @if($data["status"] == "E-Nach Not Register")
                                    <div class="form-group col-xs-12 pull-center text-center">
                                        <button type="submit" name="submit" value="Submit"
                                            class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                            class="cont-submit btn-contact btn-primary pull-center"
                                            onclick='printDiv();'>Submit</button>
                                    </div>
                                    @endif
                                    @else
                                    <div class="form-group col-xs-12 pull-center text-center">
                                        <button
                                            class="btn btn-primary btn-responsive"

                                            >You Can't Process Further Because Your Some Details Curently Not With Us .Plz Contact To Bank
                                    @endif

                                </div>
                                @if($data["loan_account_no"]!="" && $data["emi_amount"]!=""&& $data["emi_start_date"]!=""&& $data["emi_end_date"]!="")
                            </form>
                            @endif

                        </div>
                    </div>


                    <!--end new form-->

                </div>
            </div>
        </section>
        <!-- about-area end -->
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>

        $(document).ready(function() {

        $("#Verify_aadhar_no").hide();
        $("#aadhar_no").on("click", function() {
          // alert("payment_mode");

                $("#Verify_aadhar_no").show();

        });

      });
      </script>

@endsection
