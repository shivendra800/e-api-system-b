@extends('front.layout.layouts')
@section('title', 'About Us')

@section('main_content')



<style>
 $color-white: #ffffff;
$color-black: #252a32;
$color-light: #f1f5f8;
$color-red: #d32f2f;
$color-blue: #148cb8;

$box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);

*,
*::before,
*::after {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	list-style: none;
	list-style-type: none;
	text-decoration: none;
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
}

/* body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.5;
  color: $color-black;
  background: $color-white;
} */

/* .container {
  max-width: 80rem;
  width: 100%;
  padding: 4rem 2rem;
  margin: 0 auto;
} */

.main {
  .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    justify-content: center;
    align-items: center;
  }

  .card {
    color: $color-black;
    border-radius: 2px;
    background: $color-white;
    box-shadow: $box-shadow;

    &-image {
      position: relative;
      display: block;
      width: 100%;
      padding-top: 70%;
      background: $color-white;

      img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }
  }
}

@media only screen and (max-width: 600px) {
  .main {
    .container {
      display: grid;
      grid-template-columns: 1fr;
      grid-gap: 1rem;
    }
  }
}


</style>
    <!-- heared area end -->
    <!-- breadcumb-area start old image -aboutUS.png -->
    <div class="breadcumb-area black-opacity bg-img-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">
                        <h2>About Us</h2>
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
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->

    <!-- about-area start -->
    <div
        style="background-image: url({{ asset('front_assests/images/about2.jpg') }}); background-repeat: no-repeat; background-size: cover; height: 100%;">
        <section class="about-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div>
                            <img src="{{url('/')}}/front_assests/images/about.jpeg" alt=""
                                style="    margin-top: 23px;height:490px;width:100%" />
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="about-wrap">
                            <br>
                            <h2 style="color:darkblue;"><b>About Cent Bank Home Finance Limited</b></h2>
                            <!--<br>-->
                            <p style="color:darkblue;">Cent Bank Home Finance Limited is a deposit-taking Housing Finance
                                and Mortgage Company jointly promoted by four Public Sector Institutions, viz. Central Bank
                                of India, National Housing Bank, Specified Undertaking of Unit Trust of India and Housing
                                and Urban Devolpment Corporation. </p>
                            <p style="color:darkblue;">The Company had its origin as Apna Ghar Vitta Nigam Limited,
                                incorporated on 7 May 1991, and later changed its name to Cent Bank Home Finance Limited on
                                19 June 1992. Our Legal Entity </p>
                            <ul style=" list-style-type: none;color:darkblue;">
                                <li><b>Registration Date : 07 May 1991</b></li>
                                <li><b>CIN No. : U65922MP1991PLC006427</b></li>
                                <li><b>Regulator : RBI (Supervisory : NHB)</b></li>
                                <li><b>PAN : AAACC6380N</b></li>
                                <li><b>GSTIN : 23AAACC6380N4ZF</b></li>
                            </ul>
                            <p style="color:darkblue;"> The Company has its presence in nine states. Its target customers
                                include individuals, associations of persons, companies, corporations and societies.</p>
                            <!--<ul>-->
                            <!--    <li>There are many variations of passages</li>-->
                            <!--    <li>By injected humour or randomised.</li>-->
                            <!--    <li>the majority have suffered alteration</li>-->
                            <!--    <li>majority have suffered alteration</li>-->
                            <!--    <li>variations of passages of Lorem Ipsum</li>-->
                            <!--    <li>of passages of Lorem Ipsum</li>-->
                            <!--    <li>many variations of passages.</li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <!-- .service-area start -->
        {{-- our event --}}








        <section class="service-area ptb-100"
        style="background-image: url('{{url('/')}}/front_assests/images/bg-color-109810158.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%;">
            <main class="main">
                <div class="container">
                    @foreach ($event as $eventimg )
                    <div class="card">
                        <div class="card-image">
                          {{-- <a href="{{ asset('storage/app/'.$eventimg['image']) }}" target="_blank" data-fancybox="gallery" data-caption="Caption Images 1"> --}}
                            <img src="{{ asset('storage/app/'.$eventimg['image']) }}" data-full="{{ asset('storage/app/'.$eventimg['image']) }}" class="m-p-g__thumbs-img" alt="Image Gallery">
                          {{-- </a> --}}
                        </div>
                      </div>
                    @endforeach

                    <div class="m-p-g__fullscreen"></div>
                </div>
              </main>
        </section>
    </div>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js"></script>
    <!-- footer-area start  -->
 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
    // Fancybox Configuration
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});

var elem = document.querySelector('.m-p-g');

	document.addEventListener('DOMContentLoaded', function() {
		var gallery = new MaterialPhotoGallery(elem);
	});

    </script>

@endsection
