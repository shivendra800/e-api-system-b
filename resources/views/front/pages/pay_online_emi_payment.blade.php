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
                    {{-- <form action="" >
                        @csrf --}}
                            <div class="col-md-5 col-xs-12 col"><br />
                                <div class="faq-form ">
                                    <h3 style="color:white;text-align:left;">Account Details</h3><br />
                                    <div class="cf-msg"></div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <label style="color:white;">Loan Ac Holder Name</label>
                                                        <input type="text" class="form-control cust_name" id="cust_name" Placeholder="Loan A/C Cust Name" name='cust_name' value="cust Name" readonly>
                                                        <span id="cust_name_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label style="color:white;">Loan Ac Holder Moblie No</label>
                                                        <input type="text" class="form-control cust_mobile" id="cust_mobile" Placeholder="Loan A/C Cust Mobile" name='cust_mobile' value="1234567890" readonly>
                                                        <span id="cust_mobile_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label style="color:white;">Loan A/C Number</label>
                                                        <input type="text" class="form-control loan_ac_number" id="enter_ac_number" Placeholder="Enter Loan A/C Number" name='loan_ac_number' value="ENI12345786" readonly>
                                                        <span id="a/c_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label style="color:white;">Monthly EMI Amount</label>
                                                        <input type="text" class="form-control emi_amt" id="emi_amt" Placeholder="EMI Amount" name='emi_amt' value="420" readonly>
                                                        <span id="emi_amt_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label style="color:white;">Current Loan Due Amount</label>
                                                        <input type="text" class="form-control current_due" id="current_due" Placeholder="current Due Amount" name='current_due' value="1420" readonly>
                                                        <span id="current_due_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div> 
                                                </div>
                                            </div>                               
                                        </div>
                                
                                </div>
                            </div>

                            <div class="col-md-5 col-xs-12 col"><br />
                                <div class="faq-form ">
                                    <h3 style="color:white;text-align:left;">Pay Loan EMI </h3><br />
                                    <div class="cf-msg"></div>
                                
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <input type="number" step="0.001" min="0" class="form-control pay_emi_amt" id="pay_emi_amt" Placeholder="Enter EMI Amount To Pay" name='pay_emi_amt'  required>
                                                        <span id="pay_emi_amt_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                                    </div>                                            
                                                </div>
                                            </div>   
                                            <div class="col-xs-12 form-group">
                                                <button type="button" class="cont-submit btn-contact btn-style razorpay-btn">Process To Pay</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    {{-- </form> --}}
                </div>
          
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(document).ready(function() {
        // rozarpay jquery---
        $('.razorpay-btn').click(function(e) {
            e.preventDefault();

            var cust_name = $('.cust_name').val();
            var cust_mobile = $('.cust_mobile').val();
            var loan_ac_number = $('.loan_ac_number').val();
            var emi_amt = $('.emi_amt').val();
            var current_due = $('.current_due').val();
            var pay_emi_amt = $('.pay_emi_amt').val();


         
                var data = {
                    'cust_name': cust_name,
                    'cust_mobile': cust_mobile,
                    'loan_ac_number': loan_ac_number,
                    'emi_amt': emi_amt,
                    'current_due': current_due,
                    'pay_emi_amt': pay_emi_amt,
                  
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({

                    method: "post",
                    url: "{{ url('/') }}/proceed-to-pay",
                    data: data,
                    success: function(response) {
                        var options = {
                            "key": "rzp_test_T6cYO2ODoHQ6A9", // Enter the Key ID generated from the Dashboard
                            // "amount": response.total_price*100 , // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            "amount": pay_emi_amt *100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            "currency": "INR",
                            "name": response.cust_name,
                            
                            "description": "Thank For chooseing us",
                            "image": "{{url('front_assests/img/icon.jpg')}}",
                            // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                            "handler": function(razorpayresponse) {
                                // console.log(razorpayresponse);
                                $.ajax({

                                    method: "post",
                                    url: "{{ url('/') }}/proceed-emi",
                                    data: {
                                        'cust_name': response.cust_name,
                                        
                                        'cust_mobile': response.cust_mobile,
                                        'loan_ac_number': response.loan_ac_number,
                                        'emi_amt': response.emi_amt,
                                        'current_due': response.current_due,
                                        'pay_emi_amt': response.pay_emi_amt,
                                       
                                        'payment_mode': 'Paid by Razorpay',
                                        'payment_id': razorpayresponse
                                            .razorpay_payment_id,
                                    },
                                    success: function(
                                        razorpaysuccesresponse) {
                                            // console.log("kk",razorpaysuccesresponse);
                                        swal(razorpaysuccesresponse
                                                .status)
                                            .then((value) => {
                                                // window.location.reload();
                                             

                                                window.location
                                                    .href =
                                                    "{{ url('/') }}/search-loan-acc";
                                            });


                                    }
                                });
                            },
                            "prefill": {
                                "name": response.firstname,
                               
                                "contact": response.phone
                            },

                            "theme": {
                                "color": "#3399cc"
                            }
                        };
                        var rzp1 = new Razorpay(options);


                        rzp1.open();
                        e.preventDefault();

                        // alert(response.total_price);
                    }

                });
          


        }); //end razorpay---



    });

</script>

@endsection