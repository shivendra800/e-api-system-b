@extends('front.layout.layouts')


<meta http-equiv="refresh" content="1;url={{url('/Enach-Request')}}">

@section('main_content')




<!---Start Marquee -->

<marquee ><a href="career.php"><b style='color:red;'> Career Update :Recruitment for the post of Company Secretary - Last date to apply: 05/01/2024 </b></a>
</marquee>



<!---End Marquee -->
<!-- /header end -->
<!-- slider start -->

<section class="slider-area" style="background-color:#296dc1;">
  <!--<div class="container-fluid">-->
  <div class="row" style="margin-right:0px;">
    <div class="col-md-9">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
          <li data-target="#myCarousel" data-slide-to="8"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          {{-- <div class="item active">
            <img src="{{url('/')}}/front_assests/slider_img/hin new.jpg" style="height:400px;width:100%;" alt="CentBank" class="img-responsive">
          </div> --}}
          <!--CLSS_English1 (1).png-->

          @foreach($slider as $key => $sliderItem)


          <div class="item {{ $key == 0 ? 'active':'' }}">
            @if($sliderItem['image'])
            <img src="{{ asset('storage/app/'.$sliderItem['image']) }}" style="height:400px;width:100%;" alt="CentBank" class="img-responsive">
            @endif
          </div>
          @endforeach





        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-3 slider-area-right-form">
      <form action="{{ url('loan-requestsave') }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="form-full-height">
            <h4 style="color:white;text-align:center"><b>Request For A New Loan</b></h4>

            <p style="color:white; text-align:center;">*Marked fields are mandatory.</p>
            <br />
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" placeholder="Name" name="name" required>
            </div>

            <div class="col-md-12 form-group">
              <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" placeholder="Phone" name="phone" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <select class="form-control" name="branch_name" required>
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
            </div>
            <div class="col-md-12">
              <p style="color:white;"><input type="checkbox" required> I agree to be contacted by Cent Bank representative for loan enquiry.</p>
            </div>
            <div class="col-md-12 text-center">
              <button class="btn-style" type="submit">Submit</button>

            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
  </div>
  <!--</div>-->
</section>
<br>
<p class="text_footer">



<section class="service-area ptb-100" style="background-image: url('assets/images/about2.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
        <div class="section-title text-center">
          <h2> Products Offering</h2>
          <p style="color:white;"></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
        <div class="service-wrap" style="background-color:#0552b1;color:white;">
          <div class="service-img">
            <img src="{{url('/')}}/front_assests/images/housing.jpg" alt="" />
          </div>
          <div class="service-content">
            <h3 style="color:white;">Housing Loan</h3>
            <p style="color:white;text-align:justify;"> To <span style="text-transform:lowercase;">meet all your housing needs i.e. we offer loans for purchase of house construction of house plot purchase + construction Extension of house Renovation and super finishing work.<br /><br /></span>
            </p>
            <!--<a style="color:white;" href="#">Read More</a>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
        <div class="service-wrap" style="background-color:#0552b1;color:white;">
          <div class="service-img">
            <img src="{{url('/')}}/front_assests/images/non-housing2.jpg" alt="" />
          </div>
          <div class="service-content">
            <h3 style="color:white;">Non-Housing Loan</h3>
            <p style="color:white;text-align:justify;">We <span style="text-transform:lowercase;">offer loans to meet your business requirements i.e. to purchase a shop or commercial plots. We also offer loans to meet your personal requirements like marriage education etc. by mortgaging your residential or commercial properties.</span></p>
            <!--<a href="#" style="color:white;">Read More</a>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
        <div class="service-wrap" style="background-color:#0552b1;color:white;">
          <div class="service-img">
            <img src="{{url('/')}}/front_assests/images/deposit3.jpg" alt="" style="height:262px;" />
          </div>
          <div class="service-content">
            <h3 style="color:white;">Deposit Scheme</h3>
            <p style="color:white; text-align:justify;">Investment <span style="text-transform:lowercase;">scheme wherein you invest an amount for a fixed period and a predetermined interest rate.</span> T<span style="text-transform:lowercase;">he period of investment or tenure can range from 1 year upto 10 years.</span> T<span style="text-transform:lowercase;">he interest offered depends on the duration of the investment.</span></p>
            <!--<a href="depositInterest.php" style="color:white;">Read More</a>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="newsletter-area wow fadeInUp" style="background-image: url('{{url('/')}}/front_assests/images/banka-makro-fon.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="newsletter-wrap">
          <h2>Sign Up for Newsletter</h2>
          <p>We are with you, on every walk of your life</p>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="newsletter-form form-style">
          <form action="{{ url('newsletter_submit') }}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email"  required/>
            <button class="btn-style" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer -->



         {{-- First Modal Pop start  --}}
        <div id="myModal" class="modal fade pull-center text-center">
          <style>
            .popup_2 {
              position: relative;
            }

            .modal-dialog {
              margin: auto !important;
            }
          </style>
          <div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">

            <div class="popup_2">
              <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;width: 35px;height: 35px;background: #000;opacity: 1;border-radius: 0px 0px 0px 10px;"><i class="fa fa-times" style="font-size: 18px;color:white;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;margin-top: -2px;" aria-hidden="true"></i></span>
              <img src="{{url('/')}}/front_assests/75.jpg" class="img-responsive" style="max-height:500px;height:100%;">
            </div>
          </div>
        </div>
           {{-- First Modal Pop End  --}}
  {{-- Second Modal Pop start  --}}
        <div id="myModal_1" class="modal fade pull-center text-center">

            <div class="modal-dialog" style="width: fit-content;display: flex;align-items: center;height: 100vh;">
                <style>
                    .popup_1 {
            position: relative;
        }
                </style>
        <div class="modal-content"  >
        <div class="modal-header">

        </div>
        <div class="modal-body" style="width:400px;">
                        <div class="popup_1">
                        <span class="close" data-dismiss="modal" style="position: absolute;top: 0;right: 0;background: #000;width: 35px;height: 35px;opacity: 1;border-radius: 0px 0px 0px 16px;"><i class="fa fa-times" style="font-size: 18px;display: flex;color:white;align-items: center;align-content: center;justify-content: center;height: 100%;width: 100%;margin-top: -2px;" aria-hidden="true"></i></span>
                <img src="{{url('/')}}/front_assests/images/banka-makro-fon.jpg" class="img-responsive" style="max-height:500px;height:100%;">
                </div>
        </div>
        </div>
            </div>
        </div>
        {{-- Second Modal Pop End  --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{-- First Modal Pop start  --}}
 <script>
   	// $(document).ready(function(){
   	// 	$("#myModal").modal('show');
   	// });

</script>
{{-- First Modal Pop End  --}}
  {{-- Second Modal Pop start  --}}
 <script>
  	// $(document).ready(function(){
  	// 	$("#myModal_1").modal('show');
  	// });

</script>
  {{-- Second Modal Pop End  --}}



@endsection
