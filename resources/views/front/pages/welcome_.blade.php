<?php session_start();
if($_SESSION['userid'] != '' || isset($_SESSION['userid'])) {
 header("Location: index.php");
}else{

}
?>
<?php
if(isset($_POST['submit'])){
     $userid = $_POST['userid'];
     $_SESSION['userid']  = $userid;
     header("location:index.php");
}
?>

<!doctype html>
<html class="no-js" lang="">
    
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Cent Bank</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" 
href="{{url('/')}}/front_assests/images/cent%20bank%20logo_logo.png">

<link rel="stylesheet" href="{{url('/')}}/front_assests/css/bootstrap.min.css%2banimate.css%2bowl.carousel.css%2bfont-awesome.min.css%2bmagnific-popup.css%2bslicknav.min.css.pagespeed.cc.XayTt5Xo1t.css" />

<link rel="stylesheet" href="{{url('/')}}/front_assests/css/A.styles.css%2bresponsive.css%2cMcc.0hwYAe_VMS.css.pagespeed.cf.tRFMM7T4Ex.css" />
<script src="{{url('/')}}/front_assests/js/vendor/modernizr-2.8.3.min.js"></script>
<body  style="background-image:url('assets/red.jpg');"><br/><br/>
<div class="container">
    <form action="welcome.php" method="POST">
        <div class="row">
            <div class="col-md-3">
              </div>
            <div class="col-md-6 pull-center text-center">
                <input type="hidden" value='1' name="userid">
               <button type="submit" name="submit" value="submit"> 
            <img  src="{{url('/')}}/front_assests/welcome.jpg" class="img-responsive pull-center text-center" style="background-repeat:no-repeat;background-size:cover;width:250px;">
            </button>
              </div>
            <div class="col-md-3">
              </div>  
     </div>
        </form
    </div>
</body>
<!--cal js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            // alert('hello');
            function calculateHomeLoanEMI() {
var loanAmount = $("#txtLoanAmount").val();
var numberOfMonths = parseFloat($("#txtLoanTerm").val());
var selectedTermType = $('#ddlTermType').val();
if (selectedTermType == 'years')
{
         var loanTermArray = numberOfMonths.toString().split('.');
         numberOfMonths = Math.floor(numberOfMonths) * 12;
         if (loanTermArray.length > 1)
         {
                var precisionVal = parseInt(loanTermArray[1]);
                if (precisionVal >= 1 && precisionVal <= 12)
                {
                       numberOfMonths += precisionVal;
                }
                else
                {
                       alert('Loan Term entered is incorrect!');
                       $("#txtLoanTerm").val('');
                       return false;
                 }
          }
 }
 if (!numberOfMonths || numberOfMonths > 360)
 {
        alert('Loan Term should not be more than 360 months or 30 years!');
        $("#txtLoanTerm").val('');
        return false;
 }
 else
 {
        $('.home-loan-result-container').show();
        var rateOfInterest = $("#txtInterestRate").val();
        var monthlyInterestRatio = (rateOfInterest / 100) / 12;
        var top = Math.pow((1 + monthlyInterestRatio), numberOfMonths);
        var bottom = top - 1;
        var sp = top / bottom;
        var emi = ((loanAmount * monthlyInterestRatio) * sp);
        var full = numberOfMonths * emi;
        var interest = full - loanAmount;
        var int_pge = (interest / full) * 100;
        $("#tbl_int_pge").html(int_pge.toFixed(2) + " %");
        var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $("#totalEMIValue").html(emi_str);
        $("#totalLoanAmount").html(loanAmount_str);
        $("#totalLoanTerm").html(numberOfMonths.toString() + ' Months');
        $("#totalInterestRate").html(rateOfInterest);
        $("#totalAmount").html(full_str);
        $("#totalInterestPaid").html(int_str);
}
}

// FD Calculator code start

		function calcMon() {
			var money = document.getElementById("money").value;
			var per = document.getElementById("per").value;
			var year = document.getElementById("year").value;
			money = parseFloat(money);
			per = parseFloat(per);
			year = parseFloat(year);
			var interest = 0;
			var i;
			for(i = 1; i <= year; i++) {
				interest += money*(per/100.0);
			}
			document.getElementById("totalP").value =money;
			document.getElementById("interest").value = interest.toFixed(2);
			document.getElementById("all").value = (money+interest).toFixed(2);
		}
	

        </script>

<!-- <script src="jquery-1.12.0.js"></script> -->

<!--calculator js-->
<script src="{{url('/')}}/front_assests/js/vendor/jquery-1.12.4.min.js"></script>

<script src="{{url('/')}}/front_assests/js/bootstrap.min.js%2bowl.carousel.min.js%2bcounterup.main.js%2bimagesloaded.pkgd.min.js.pagespeed.jc.shH-4aYVmh.js"></script><script>eval(mod_pagespeed_i61zCbnW2X);</script>

<script>eval(mod_pagespeed_jc8HogFvDS);</script>

<script>eval(mod_pagespeed_ByKI_lcJaR);</script>

<script>eval(mod_pagespeed_3Vqo2HVHdL);</script>

<script src="{{url('/')}}/front_assests/js/isotope.pkgd.min.js%2bjquery.waypoints.min.js%2bjquery.magnific-popup.min.js%2bjquery.slicknav.min.js%2bsnake.min.js%2bwow.min.js%2bplugins.js.pagespeed.jc.SBwsO"></script><script>eval(mod_pagespeed_v56_tzKcNP);</script>

<script>eval(mod_pagespeed_QMjc0uITp1);</script>

<script>eval(mod_pagespeed_hlBv5lXulT);</script>

<script>eval(mod_pagespeed_X_j2P9g7zO);</script>

<script>eval(mod_pagespeed_goVRlhl_so);</script>

<script>eval(mod_pagespeed_o3aro2kQYO);</script>

<script>eval(mod_pagespeed_AVUG9W6UQu);</script>

<script src="{{url('/')}}/front_assests/js/scripts.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script  src="{{url('/')}}/front_assests/js/beacon.min.js" data-cf-beacon='{"rayId":"65cb821b68fa1a88","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
