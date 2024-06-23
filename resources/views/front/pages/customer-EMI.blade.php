@extends('front.layout.layouts')
@section('title', 'customer-EMI')

@section('main_content')

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

?>
<?php


if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $search1 = $_POST['search1'];
    $enter_name = $_POST['enter_name'];
    $enter_dob = $_POST['enter_dob'];
    $enter_ac_number = $_POST['enter_ac_number'];
    $enter_phone = $_POST['enter_phone'];
    $branch = $_POST['enter_branch'];
    if (!empty($branch) && $search == 'name') {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE name = '" . trim($enter_name) . "' and phone = '" . trim($enter_phone) . "' or ac_number = '" . trim($enter_ac_number) . "' and branch='" . trim($branch) . "' ");
    } elseif (!empty($branch) && $search == 'dob') {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE dob = '" . trim($enter_dob) . "' and phone = '" . trim($enter_phone) . "' or ac_number = '" . trim($enter_ac_number) . "' and branch='" . trim($branch) . "' ");
    } elseif ($search == 'name') {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE name = '" . trim($enter_name) . "' and phone = '" . trim($enter_phone) . "' or ac_number = '" . trim($enter_ac_number) . "' ");
    } elseif (!empty($enter_phone)) {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE  phone = '" . trim($enter_phone) . "' ");
    } elseif (!empty($enter_ac_number)) {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE  ac_number = '" . trim($enter_ac_number) . "' ");
    } else {
        $sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE dob = '" . trim($enter_dob) . "' and phone = '" . trim($enter_phone) . "' or ac_number = '" . trim($enter_ac_number) . "'  ");
    }
    //   $row=mysqli_fetch_array($sql1);

}
?>


<!-- /header end -->
<!--search -->
<!--end search-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
<!--new-->
<div class="faq-area ptb-100" style="background-image: url({{asset('front_assets/images/about2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10" style="background-color:#296dc1; border:1px solid  blue;">

                <div class="row">
                    <div class="col-md-5 col-xs-12 col"><br />
                        <div class="faq-form ">
                            <h3 style="color:white;text-align:left;">Search Account</h3><br />
                            <div class="cf-msg"></div>
                            <form action="customer-EMI.php" runat="server" method="post" onsubmit="return validation()">
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-5 text-light form-group">
                                                <input type="radio" id="chkYes" onclick="EnableDisableTextBox()" name="search" value="name"> <span style="color:white;">Name</span>
                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-5 form-group">
                                                <input type="radio" id="chkNo" onclick="EnableDisableTextBox()" name="search" value="dob"> <span style="color:white;">Date of Birth</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-12">
                                        <div class="row">
                                            <!--date -->
                                            <!--end date-->
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name='enter_name' placeholder="Enter Name" id="txtPassportNumber" disabled="disabled">
                                                <span id="name_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input id="txtPassportNumber1" type="text" class="form-control date" name='enter_dob' placeholder="Enter DOB" disabled="disabled">
                                                <span id="dob_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-5 form-group">
                                                <input type="radio" id="ac_number" onclick="TextBox()" name="search1" value="ac_number"> <span style="color:white;">Loan A/C Number</span>
                                            </div>
                                            <div class="col-md-1 form-group">
                                            </div>
                                            <div class="col-md-5 form-group">
                                                <input type="radio" id="phone" onclick="TextBox()" name="search1" value="phone"> <span style="color:white;">Phone Number</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" id="enter_ac_number" Placeholder="Enter Loan A/C Number" name='enter_ac_number' required="required">
                                                <span id="a/c_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" id="enter_phone" Placeholder="Enter Phone" minlength="10" maxlength="10" name='enter_phone' required="required">
                                                <span id="phone_span" class="text-danger font-weight-bold" style="color:white;"></span>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- <div class="col-xs-12 form-group">
                                        <select class="form-control" name="branch">
                                            <!--location-->
                                            <option value="">Select Branch</option>
                                            <option value="Bhopal">Bhopal</option>
                                            <option value="Raipur">Raipur</option>
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
                                    </div> --}}
                                    <div class="col-xs-12 form-group">
                                        <button type="submit" class="cont-submit btn-contact btn-style" name="submit">Search</button>
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
<!--end new-->
<?php
if (isset($sql1)) { ?>

    <section class="team-area ptb-100" style="background-color:#2C3539">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-left pull-left">
                        <h2 style="color:white;">Customer Details</h2><br />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="team-wrap">

                        <div class="table-responsive">
                            <?php if ($total = mysqli_num_rows($sql1) > 0) { ?>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background-color:#c72929; color:white;">
                                            <th scope="col">Name</th>

                                            <th scope="col">DOB</th>

                                            <th scope="col">Phone</th>

                                            <th scope="col">A/C Number</th>

                                            <th scope="col">Branch</th>

                                            <th scope="col">EMI</th>

                                            <th scope="col">Pay</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($sql1)) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $row['name']; ?>
                                                </th>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['ac_number']; ?></td>
                                                <td><?php echo $row['branch']; ?></td>
                                                <td><i class="fa fa-rupee text-success"></i>
                                                    <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo  $row['amount_EMI']; ?>">
                                                    <?php echo  $row['amount_EMI']; ?>
                                                </td>
                                                <td><?php if ($row['amount_EMI'] == 0 || $row['payment_count'] == 3) {
                                                        echo "Completed";
                                                    } elseif ($row['payment_count'] <= 3) { ?>
                                                        <!--<a href="customer-online-pay.php?customer_id=<?php // $row['customer_id']; 
                                                                                                            ?>" class="btn btn-info text-center">Pay</a>-->
                                                        <button type="button" onclick="blinkCheckoutPayment('<?php echo  $row['amount_EMI']; ?>', '<?php echo  $row['customer_id']; ?>', '<?php echo $row['branch']; ?>')" name="submit" class="btn btn-info btn-sm text-center">Pay Now</button>

                                                        <?php
                                                        $sqlB = mysqli_query($con, "SELECT * FROM bank_mid_keys WHERE branch_name = '" . trim($row['branch']) . "'");
                                                        $branchDetails = mysqli_fetch_assoc($sqlB);

                                                        $PAYTM_MID = $branchDetails['mid'];
                                                        ?>

                                                        <script type="application/javascript" crossorigin="anonymous" src="<?php echo PAYTM_ENVIRONMENT; ?>/merchantpgpui/checkoutjs/merchants/<?php echo $PAYTM_MID; ?>.js"></script>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                <h3 class='text-danger text-center'>No Record Found, Please contact with nearest CENT bank branch</h3>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!---col-md-8--->
                <div class="col-md-1">
                </div>
                <!--col-md2-->
            </div>
        </div>
        </div>
    </section>


<?php } ?>
<!--end table-->
<!--hide or show code-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<script type="text/javascript">
    $('.date').datepicker({
        format: 'dd MM yyyy'
    });
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!--end hide or show code-->
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
<!--search js-->
<script type="text/javascript">
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chkYes");
        var chkNo = document.getElementById("chkNo");
        var txtPassportNumber = document.getElementById("txtPassportNumber");
        var txtPassportNumber1 = document.getElementById("txtPassportNumber1");
        txtPassportNumber.disabled = chkYes.checked ? false : true;
        txtPassportNumber1.disabled = chkNo.checked ? false : true;
        // txtPassportNumber.disabled = chkNo ? false : false;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        } else if (!txtPassportNumber1.disabled) {
            txtPassportNumber1.focus();
        }
    }
    //function for a/c_number 

    function TextBox() {
        var ac_number = document.getElementById("ac_number");
        var phone = document.getElementById("phone");
        var enter_ac_number = document.getElementById("enter_ac_number");
        var enter_phone = document.getElementById("enter_phone");
        enter_ac_number.disabled = ac_number.checked ? false : true;
        enter_phone.disabled = phone.checked ? false : true;
        // txtPassportNumber.disabled = chkNo ? false : false;
        if (!enter_ac_number.disabled) {
            enter_ac_number.focus();
        } else if (!enter_phone.disabled) {
            enter_phone.focus();
        }
    }
</script>
<script>
    function blinkCheckoutPayment(amount, customerId, branchName) {
        $.ajax({
            url: 'paytm_generate.php',
            type: 'POST',
            data: {
                amount: amount,
                customerId: customerId,
                branchName: branchName
            },
            dataType: 'json',
            success: function(data) {
                if (data.success == true) {
                    openBlinkCheckoutPopup(data.orderId, data.txnToken, data.amount);
                }
            }
        });
    }

    function openBlinkCheckoutPopup(orderId, txnToken, amount) {
        // console.log(orderId, txnToken, amount);
        var config = {
            "root": "",
            "flow": "DEFAULT",
            "merchant": {

                "redirect": true
            },
            "data": {
                "orderId": orderId,
                "token": txnToken,
                "tokenType": "TXN_TOKEN",
                "amount": amount
            },
            "handler": {

                "notifyMerchant": function notifyMerchant(eventName, data) {
                    console.log("notify" + data);
                },
                "transactionStatus": function transactionStatus(paymentStatus) {
                    console.log("paymentStatus => ", paymentStatus);
                },
                "notifyMerchant": function(eventName, data) {
                    //console.log("notifyMerchant handler function called");
                    //console.log("eventName => ",eventName);
                    console.log("data => ", data);
                    location.reload();
                }
            }
        };
        if (window.Paytm && window.Paytm.CheckoutJS) {
            // initialze configuration using init method 
            window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                // after successfully updating configuration, invoke checkoutjs
                window.Paytm.CheckoutJS.invoke();
            }).catch(function onError(error) {
                //console.log("error => ",error);
            });
        }
    }
</script>
<!-- footer -->
@endsection