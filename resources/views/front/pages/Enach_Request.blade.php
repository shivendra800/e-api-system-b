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
                        <h2>E-Nach Request</h2>
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
                            <li>E-Nach Request</li>
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
                     @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible " role="alert">
                            <strong>Error:</strong> {{Session::get('error_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
    

                    <!--new form-->
                    <div class="col-md-12">
                        <br />
                        <h3 style='color:#296dc1;' class="text-center pull-center"><b>E-Nach Request</b></h3>


                        <div class="contact-wrap form-style">
                            <div class="cf-msg"></div>
                            <div><img class="img-responsive;" src="assets/img/logo_2.png" style="height:80px;"
                                    alt=""></div>
                            <br /><br />
                            <div class="login-wrap p-4 p-lg-5">
                                 @if(Session::get('mobileNo'))
                                 
                                 <div id="otpverifydiv">
                                      @php
                                       $getotplast = DB::table('otp_verifications')->where('mobile',Session::get('mobileNo'))->latest()->first();
                                   @endphp
                                    <form method="post" id="form-data" enctype='multipart/form-data'
                                        action="{{ url('Enach-Request-otpverify') }}" >
                                        @csrf
    
    
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-4">
                                                <div class="form-group  ">
                                                    <input type="text" name="otp" minlength="6" maxlength="6"
                                                        placeholder="Enter Otp"  required/>
                                                </div>
                                                <p>Otp is-{{ $getotplast->otp }}</p>
                                            </div>
                                         

                                            <div class="col-lg-4">
                                                <div class="form-group  pull-center text-center">
                                                    <button type="submit" name="submit" value="Submit"
                                                        class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                                        class="cont-submit btn-contact btn-primary pull-center">Submit</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
    
    
    
    
                                    </form>
                                </div>
                            @else
                             
                            <div id="otpsenddiv">
                                <form method="post" id="form-data" enctype='multipart/form-data'
                                    action="{{ url('Enach-Request-otpsend') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group  ">
                                                <input type="text" name="mobileNo"  class="form-control @error('mobileNo') is-invalid @enderror"
                                                    minlength="10" maxlength="12" placeholder="Mobile Number" required
                                                    id="mob_No_" />
                                                @error('mobileNo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group pull-center text-center">
                                                <button type="submit" name="submit" value="Submit"
                                                    class="btn btn-primary btn-responsive" style="width:150px; height:50px;"
                                                    class="cont-submit btn-contact btn-primary pull-center" id="otpsend">Send
                                                    Otp</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>

                                </form>
                            </div>
                            @endif

                            </div>


                        </div>
                    </div>


                    <!--end new form-->

                </div>
            </div>
        </section>
        <!-- about-area end -->





    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        // $('#otpverifydiv').hide();
        
        // $("#otpsend").click(function() {
        //     $("#otpverifydiv").show();
        //     $("#otpsenddiv").hide();
             

        // });

       

        function sendOtp() {
            // alert($('#mobile').val());
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/') }}/Enach-Request-otpsend",
                type: 'post',
                dataType: 'json',
                data: {
                    'mobile': $('#mobile').val()
                },



            });
            timer(120);

        }
    </script>
    <script>
        let timerOn = true;

        function timer(remaining) {
            // alert("hello")
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('timer').innerHTML = m + ':' + s;
            remaining -= 1;

            if (remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer(remaining);
                }, 1000);
                return;
            }

            if (!timerOn) {
                // Do validate stuff here
                return;
            }

            // Do timeout stuff here
            alert('Timeout for otp');
        }
    </script>
@endsection
