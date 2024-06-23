@extends('front.layout.layouts')
@section('title','Pay Online EMI Payment')
@section('main_content')

<!-- breadcumb-area start -->
<div class="breadcumb-area black-opacity bg-img-12">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">

                    <h2>Pay Emi Payment</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{url('/')}}">Online Emi Payment</a></li>
                        <li>/</li>
                        <li>Pay Online EMI Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-area ptb-100" style="background-image: url({{asset('front_assests/images/about2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10" style="background-color:#296dc1; border:1px solid  blue;">

                <div class="row">
                    <div class="col-md-5 col-xs-12 col"><br />
                        <div class="faq-form ">
                            <h3 style="color:white;text-align:left;">Search Loan Account</h3><br />
                            <div class="cf-msg"></div>
                            <form action="{{ url('search-loan-acc') }}"  method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" id="enter_ac_number" Placeholder="Enter Loan A/C Number" name='enter_ac_number' required="required">
                                                <span id="a/c_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                            </div>
                                            
                                        </div>

                                    </div>
    
                                    <div class="col-xs-12 form-group">
                                        <button type="submit" class="cont-submit btn-contact btn-style">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-7" style=" margin:0px;padding:0px;">
                        <div class="faq-wrap">
                            <img src="{{url('/')}}/front_assests/img/safe-payment-methods.jpg" style="height:380px;width:100%;" class="img-responsive">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection