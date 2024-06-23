@extends('front.layout.layouts')
@section('title', 'Customer Details')

@section('main_content')
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['ac_number'])) {
        $search = $_POST['ac_number'];
        echo $ac_number;
    } else {
        $search = $_POST['phone'];
        echo $phone;
    }

    $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE phone = '" . $search . "' or ac_number = '" . $search . "' ");

    $row = mysqli_fetch_array($sql1);

    //  else{
    //      echo "<Script>alert('No Record Found!');window.location.href=''</script>";
    //  }
}
?>
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
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
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
        <!--after search-->

        <div class="row">
            <!--div tab-->
            <div class="col-md-12">
                <div class="contact-wrap">
                    <?php if (!empty($row)) { ?>

                        <div class="row">

                            <div class="col-md-6">
                                <h3>Customer Details </h3>
                            </div>

                            <div class="col-md-2"></div>
                            <div class="col-md-4 text-right">
                                <h3><a href="http://albfoodproducts.in/cent_bank/customer-EMI.php" class="text-info"><i class="fa fa-arrow-left"></i> Back</a></h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <i class="fa fa-user"></i> <b>Customer Name : </b><br />
                                        <?= $row['name']; ?>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar"></i> <b>Date of Birth : </b><br />
                                        <?= $row['dob']; ?>
                                    </li>
                                    <hr>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <i class="fa fa-sort-numeric-asc"></i> <b>A/C Number : </b><br />
                                        <?= $row['ac_number']; ?>
                                    </li>
                                    <hr>

                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i> <b>Phone Number : </b><br />
                                        <?= $row['phone']; ?>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <i class="fa fa-money"></i> <b>Amount : </b><br />
                                        <?= $row['amount_EMI']; ?>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <i class="fa fa-book"></i> <b> Address : </b><br />
                                        <?= $row['address']; ?>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-offset-6">
                                <?php $d = $row['customer_id'];
                                $d; ?>
                                <a href="customer-online-pay.php?customer_id=<?= $d; ?>" class="btn btn-danger text-center">Pay Amount</a>
                            </div>
                        </div>
                </div>
            </div>
        <?php } else { ?>

            <h3>Customer Details </h3>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <h4><i class="fa fa-database"></i> Sorry! No Record Found <br /></h4>
                        <h5 class="text-light"><a href="customer-EMI.php" class="btn btn-danger">Back</a></h5>
                    </li>
                    <hr>
                </ul>
            </div>

            <div class="col-md-5">
            </div>
        </div>

    <?php } ?>
    </div>
</div>
<!--div tab end-->

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

@endsection