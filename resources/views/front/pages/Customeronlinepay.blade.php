@extends('front.layout.layouts')
@section('title', 'customer-online-pay')

@section('main_content')
<!-- /header end -->


<!--search -->

 {{-- $id= $_GET['customer_id'];
 $sql1 = mysqli_query($con,"SELECT * FROM customer_EMI WHERE customer_id = '".$id."' ");
 $row=mysqli_fetch_array($sql1);
 

if(isset($_POST['submit'])){
    $customer_id = $_POST['customer_id'];
    $ac_number = $_POST['ac_number'];
    $phone  = $_POST['phone'];
    $amount = $_POST['amount_emi'];
    $branch = $_POST['branch'];
   
   $set = mysqli_query($con,"insert into customer_emi_payments(customer_id,ac_number,phone,submit_amount,branch)values('$customer_id','$ac_number','$phone','$amount','$branch')");
    if($set){
        
        mysqli_query($con,"update customer_EMI set amount_EMI=amount_EMI-'$amount' where customer_id='".$customer_id."' ");
        echo "<Script>alert('Successfully');window.location.href='index.php'</script>";
    }else{
        $url = 'customer-online-pay.php?customer_id=$customer_id';
        echo "<Script>alert('Sorry! Try Again');window.location.href='$url'</script>";
    }
} --}}


<!--end search-->
<div class="breadcumb-area black-opacity bg-img-9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Online Payment</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row"></div>
                <div class="col-xs-12">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Online Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area ptb-100">
    <div class="container">
        <!--before search-->
        <div class="row">
            <div class="col-md-8">
                <div class="contact-wrap form-style">
                    <h3>Payment </h3>
                    <div class="cf-msg"></div>
                    <form action="customer-online-pay.php" method="POST">

                        {{-- <input type="hidden" placeholder="Search by A/c Number" minlength="16" maxlength="16" name="customer_id" value="<?= $id; ?>" > --}}
                        <input type="hidden" placeholder="Search by A/c Number" minlength="16" maxlength="16" name="customer_id" >
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <label>Customer Name</label>
                                <input type="text" placeholder="Customer Name" name=""  readonly>
                                {{-- <input type="text" placeholder="Customer Name" name="" value="<?php echo $row['name']; ?>" readonly> --}}
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>A/C Number</label>
                                <input type="text" placeholder="A/c Number" minlength="16" maxlength="16" name="ac_number" readonly >
                                {{-- <input type="text" placeholder="A/c Number" minlength="16" maxlength="16" name="ac_number" readonly value="<?php echo $row['ac_number']; ?>"> --}}
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>Phone Number</label>
                                {{-- <input type="text" placeholder="Phone" minlength="10" maxlength="10" name="phone" readonly value="<?php echo $row['phone']; ?>">
                                <input type="hidden" placeholder="branch" name="branch" readonly value="<?php echo $row['branch']; ?>"> --}}
                                <input type="text" placeholder="Phone" minlength="10" maxlength="10" name="phone" readonly >
                                <input type="hidden" placeholder="branch" name="branch" readonly >
                            </div>

                            <div class="col-sm-6 col-xs-12">

                                <label>EMI </label>
                                <input type="text" readonly placeholder="EMI" name="amount_emi" >
                                {{-- <input type="text" readonly placeholder="EMI" name="amount_emi" value="<?php echo $row['amount_EMI']; ?>"> --}}
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12">
                                <button id="submit" class="cont-submit btn-contact btn-danger" type="submit" value="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-wrap"><br />
                    <img src="{{url('/')}}/front_assests/img/safe-payment-methods.jpg" style="" class="img-responsive">
                </div>
            </div>
        </div>

        <!--end-->
    </div>
</div>


<!-- <div class="quote-area bg-1">
<div class="container">
<div class="row">
<div class="col-sm-9 col-xs-12">
<div class="quote-wrap">
<h2>Over 50 years of experience we’ll ensure you get the best guidance.</h2>
</div>
</div>
<div class="col-sm-3 col-xs-12">
<div class="quote-wrap text-right">
<a href="contact.html">Request Quote</a>
</div>
</div>
</div>
</div>
</div> -->

<script src="{{url('/')}}/front_assests/js/vendor/jquery-1.12.4.min.js"></script>

<script src="{{url('/')}}/front_assests/js/bootstrap.min.js%2bowl.carousel.min.js%2bcounterup.main.js%2bimagesloaded.pkgd.min.js.pagespeed.jc.shH-4aYVmh.js"></script>
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

<script src="{{url('/')}}/front_assests/js/isotope.pkgd.min.js%2bjquery.waypoints.min.js%2bjquery.magnific-popup.min.js%2bjquery.slicknav.min.js%2bsnake.min.js%2bwow.min.js%2bplugins.js.pagespeed.jc.SBwsO"></script>
<script>
    eval(mod_pagespeed_v56_tzKcNP);
</script>

<script src="{{url('/')}}/front_assests/js/scripts.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

@endsection