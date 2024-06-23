@extends('front.layout.layouts')
@section('title', 'contact')

@section('main_content')
@php
use App\Models\AllBranchStDetail;

$getallbranch = AllBranchStDetail::where('branch_type','All-Branches')->get()->toArray();
$getallbranchSatellite = AllBranchStDetail::where('branch_type','Satellite-Branches')->get()->toArray();
@endphp



<div class="breadcumb-area black-opacity bg-img-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Contact us</h2>
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
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area ptb-100" style="background-image: url({{asset('front_assests/images/about2.jpg')}}); background-repeat: no-repeat; background-size: cover; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-wrap form-style">
                    <h3 style='color:#296dc1'><b>Contact Me</b></h3>
                    <div class="cf-msg"></div>
                    <form action="{{url('/')}}/contact-save" method="post" id="cf">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6 col-xs-12">
                                <input type="text" placeholder="Name" id="fname" name="fname">
                            </div>
                            <div class="form-group  col-sm-6 col-xs-12">
                                <input type="text" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="form-group  col-sm-6 col-xs-12">
                                <input type="text" placeholder="Subject" id="subject" name="subject">
                            </div>
                            <div class="form-group col-sm-6 col-xs-12">
                                <select class="form-control" name="branch" required>
                                    <!--location-->
                                    <option value="" selected disabled>Select Branch</option>
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
                            <div class="form-group  col-xs-12">
                                <textarea class="contact-textarea" placeholder="Message" id="msg" name="msg"></textarea>
                            </div>
                            
                            <div class="form-group col-xs-12">
                                <button type="submit" class="cont-submit btn-contact btn-primary">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-wrap" style="border:2px solid #0552b1">
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>Toll Free No: 18008896606</p>
                        </li>
                        <li style="background-color:white;color:#0552b1;">
                            <i class="fa fa-envelope"></i>
                            <a href="#">
                                <p style="color:#0552b1">customercare@cbhfl.com</p>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <p>
                                Mon-Sat : 10:00 AM to 06:00 PM Except 2nd and 4th Saturdays and public holidays</p>
                        </li>

                        <li style="background-color:white;color:#0552b1;"><i class="fa fa-location-arrow"></i> <b>Corporate Office:</b>
                            6th Floor, Central Bank of India,

                            Mumbai Main Office Building,

                            MG Road, Fort, Flora Fountain,

                            Hutatma Chowk, Mumbai-400023
                        </li>
                        <li>
                            <i class="fa fa-location-arrow"></i>
                            <b>Registered Office : </b>
                            Central Bank of India Building, 2nd Floor,
                            9, Arera Hills, Mother Teresa Road,
                            Bhopal-462011
                            <!--Madhya Pradesh, INDIA-->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12">
                <div id=""><br /><br />
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.1236832454592!2d77.40776101428662!3d23.23858588484407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c43fa9beca9c1%3A0x8d7113b51dac842!2sCentBank%20home%20finance%20limited%20Central%20Bank%20Of%20India%20Building%209%2C%20Arera%20Hills%2C%20Bhopal-462011%20Madhya%20Pradesh%2C%20INDIA!5e0!3m2!1sen!2sin!4v1625477038493!5m2!1sen!2sin" style="border:2px solid #0552b1; width:100%; height:450px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="quote-area bg-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <!--all branch -->

                <h3 style='color:#296dc1'><b>All Branches </b></h3>
                <div class="panel-group emi">
                    <!--#d2220b;-->
                    <div class="panel panel-danger">
                        <!--<div class="panel-heading" style="background-color:#296dc1;color:white">All Branches</div>-->
                        <div class="panel-body bg-primary">
                            <!--table-->
                            <div class="table-responsive">
                                <table class="table table-bordered">

                                    <tr style="background-color:#296dc1; color:#fff;">
                                        <th>S.No</th>
                                        <th>Branch </th>
                                        <th>Branch Address</th>

                                    </tr>

                                    <tbody>
                                        <!--  -->

                                    </tbody>
                                    @foreach ($getallbranch as $index=>$allbrlist )

                                    <tr>
                                        {{-- <form method="post" action=""> --}}
                                            {{-- <input type="hidden" name="id" value=""> --}}
                                            <td>{{ $index+1 }}</td>
                                            <td> {{ $allbrlist['branch_name'] }} </td>
                                            <td> {{ $allbrlist['branch_address'] }}</td>

                                        {{-- </form> --}}

                                    </tr>

                                @endforeach








                                    </tbody>

                                </table>
                            </div>
                            <!--end table -->
                        </div>
                    </div>
                </div>
                <!--end all branch-->
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <!--all branch -->

                <h3 style='color:#296dc1'><b>Satellite Branches </b></h3>
                <div class="panel-group emi">
                    <!--#d2220b;-->
                    <div class="panel panel-danger">
                        <!--<div class="panel-heading" style="background-color:#296dc1;color:white">All Branches</div>-->
                        <div class="panel-body bg-primary">
                            <!--table-->
                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <tr style="background-color:#296dc1; color:#fff;">
                                        <th>S.No</th>
                                        <th>Branch</th>
                                        <th>Branch Address</th>

                                    </tr>

                                    <tbody>
                                        <!--  -->

                                    </tbody>

                                    @foreach ($getallbranchSatellite as $index=>$allStbrlist )

                                    <tr>
                                        {{-- <form method="post" action=""> --}}
                                            {{-- <input type="hidden" name="id" value=""> --}}
                                            <td>{{ $index+1 }}</td>
                                            <td> {{ $allStbrlist['branch_name'] }} </td>
                                            <td> {{ $allStbrlist['branch_address'] }}</td>

                                        {{-- </form> --}}

                                    </tr>

                                @endforeach



                                    </tbody>

                                </table>
                            </div>
                            <!--end table -->
                        </div>
                    </div>
                </div>
                <!--end all branch-->
            </div>
        </div>

    </div>
</div>

<script src="{{url('/')}}/front_assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="{{url('/')}}/front_assets/js/bootstrap.min.js%2bowl.carousel.min.js%2bcounterup.main.js%2bimagesloaded.pkgd.min.js.pagespeed.jc.shH-4aYVmh.js"></script>
<script>
    eval(mod_pagespeed_i61zCbnW2X);
</script>

<script>
    eval(mod_pagespeed_jc8HogFvDS);
</script>

<script>
    eval(mod_pagespeed_ByKI_lcJaR);
</script>

<script>
    eval(mod_pagespeed_3Vqo2HVHdL);
</script>

<script src="{{url('/')}}/front_assets/js/isotope.pkgd.min.js%2bjquery.waypoints.min.js%2bjquery.magnific-popup.min.js%2bjquery.slicknav.min.js%2bsnake.min.js%2bwow.min.js%2bplugins.js.pagespeed.jc.SBwsO"></script>
<script>
    eval(mod_pagespeed_v56_tzKcNP);
</script>

<script>
    eval(mod_pagespeed_QMjc0uITp1);
</script>

<script>
    eval(mod_pagespeed_hlBv5lXulT);
</script>

<script>
    eval(mod_pagespeed_X_j2P9g7zO);
</script>

<script>
    eval(mod_pagespeed_goVRlhl_so);
</script>

<script>
    eval(mod_pagespeed_o3aro2kQYO);
</script>

<script>
    eval(mod_pagespeed_AVUG9W6UQu);
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
<script>
    //             function initialize() {
    //                 var mapOptions = {
    //                     zoom: 15,
    //                     scrollwheel: false,
    //                     center: new google.maps.LatLng(40.712764, -74.005667),
    //                     styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#222222"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#222222"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":17}]}]
    //                 };

    //                 var map = new google.maps.Map(document.getElementById('googleMap'),
    //                     mapOptions);


    //                 var marker = new google.maps.Marker({
    //                     position: map.getCenter(),
    //                     animation: google.maps.Animation.BOUNCE,
    //                     icon: 'assets/images/map.png',
    //                     map: map
    //                 });

    //             }

    //             google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script src="{{url('/')}}/front_assets/js/scripts.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">


    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });


    </script>
@endsection
