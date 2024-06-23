@extends('front.layout.layouts')
@section('title', 'Transaction')

@section('main_content')
<?php error_reporting(0);
session_start();
$con = mysqli_connect('localhost','root','','cent_bank_admin');

?>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// @include('include/constant.php');
//define('PAYTM_ENVIRONMENT', 'https://securegw-stage.paytm.in');
define('PAYTM_ENVIRONMENT', 'https://securegw.paytm.in');

/**
* Generate checksum by parameters we have
* Find your Merchant ID, Merchant Key and Website in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
//define('PAYTM_MID', 'CentBa67592546904140');
//define('PAYTM_MERCHANT_KEY', 'WtpAtFqQ@IuzDL4C');

//define('PAYTM_MID', 'CentBa51072534413097');
//define('PAYTM_MERCHANT_KEY', 'uMtZ7meARmA2&I@i');


//define('PAYTM_WEBSITE', 'WEBSTAGING');
define('PAYTM_WEBSITE', 'retail'); // for production
// constent end here
@include('PaytmChecksum.php');
session_start();

?>
<div class="breadcumb-area black-opacity bg-img-9">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcumb-wrap">
					<h2>Transaction details</h2>
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
						<li>Transaction details</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="faq-area ptb-100" style="background-image: url({{asset('front_assests/images/about2.jpg')}});">
	<div class="container  text-center">
		<div class="row">
			<div class="shadow p-3 mb-5 bg-white rounded">
				<?php

				$sql1 = mysqli_query($con, "SELECT * FROM bank_mid_keys WHERE branch_name = '" . trim($_GET['b']) . "'");
				$branchDetails = mysqli_fetch_assoc($sql1);

				$PAYTM_MID = $branchDetails['mid'];
				$PAYTM_MERCHANT_KEY = $branchDetails['merchant_key'];

				if (!empty($_POST)) {
					$checksum = (!empty($_POST['CHECKSUMHASH'])) ? $_POST['CHECKSUMHASH'] : '';
					unset($_POST['CHECKSUMHASH']);
					$verifySignature = PaytmChecksum::verifySignature($_POST, $PAYTM_MERCHANT_KEY, $checksum);

					if ($verifySignature) {

						/* initialize an array */
						$paytmParams = array();

						/* body parameters */
						$paytmParams["body"] = array(

							/* Find your MID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
							"mid" => $_POST['MID'],

							/* Enter your order id which needs to be check status for */
							"orderId" => $_POST['ORDERID'],
						);


						$checksum = PaytmChecksum::generateSignature(json_encode($paytmParams["body"], JSON_UNESCAPED_SLASHES), $PAYTM_MERCHANT_KEY);

						/* head parameters */
						$paytmParams["head"] = array(

							/* put generated checksum value here */
							"signature"	=> $checksum
						);

						/* prepare JSON string for request */
						$post_data = json_encode($paytmParams, JSON_UNESCAPED_SLASHES);

						//echo $post_data;

						/* for Staging */
						//$url = "https://securegw-stage.paytm.in/v3/order/status";

						/* for Production */
						$url = PAYTM_ENVIRONMENT . '/v3/order/status'; //"https://securegw.paytm.in/v3/order/status";

						$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
						$response = curl_exec($ch);

						//echo '<pre>';
						//print_r($response);
						//echo '</pre>';




						$orderid = $_POST['ORDERID'];
						$mid = $_POST['MID'];
						$txnid = $_POST['TXNID'];
						$txnamount = $_POST['TXNAMOUNT'];
						$paymentmode = $_POST['PAYMENTMODE'];
						$currency = $_POST['CURRENCY'];
						$txndate = $_POST['TXNDATE'];
						$status = $_POST['STATUS'];
						$respcode = $_POST['RESPCODE'];
						$resmsg  = $_POST['RESPMSG'];
						$gatewayname = $_POST['GATEWAYNAME'];
						$banktxnid = $_POST['BANKTXNID'];


						$bankname = $_POST['BANKNAME'];
						$p_status = ($_POST['STATUS'] == 'TXN_SUCCESS') ? "Success" : 'Failure';

						if ($p_status == 'Success') {

							$customerId = $_GET['pcq'];

							$sql1 = mysqli_query($con, "SELECT * FROM customer_EMI WHERE customer_id = '" . $customerId . "' ");
							$rowD = mysqli_fetch_object($sql1);
							if (!empty($rowD)) {
								$phone = $rowD->phone;
								$ac_number = $rowD->ac_number;
								$branch = $rowD->branch;
								$paymentCount = $rowD->payment_count + 1;

								$set = mysqli_query($con, "insert into customer_emi_payments(customer_id,ac_number,phone,submit_amount,branch)values('$customerId','$ac_number','$phone','$txnamount','$branch')");

								mysqli_query($con, "update customer_EMI set payment_count=$paymentCount, amount_EMI=amount_EMI-'$txnamount' where customer_id='" . $customerId . "' ");
							}
						}

						$sql = mysqli_query($con, "INSERT INTO `emi_transaction`(`orderid`, `mid`, `txn_id`, `txn_amount`, `payment_mode`, `currency`, `txn_date`, `status`, `respcode`, `resp_msg`, `gateway_name`, `bank_txn_id`, `bank_name`, `checksum`,`payment_status`, `ac_number`) VALUES ('$orderid','$mid','$txnid','$txnamount','$paymentmode','$currency','$txndate','$status','$respcode','$resmsg','$gatewayname','$banktxnid','$bankname','$checksum','$p_status', '$ac_number')");

						if ($_POST["STATUS"] == "TXN_SUCCESS") {
							echo '<h4 class="text-success text-left">Payment Successfully Completed. Transaction details are below:</h4>	' . "<br/>";
							//Process your transaction here as success transaction.
							//Verify amount & order id received from Payment gateway with your application's order id and amount.
						} else {
							echo '<h4 class="text-error text-left">Transaction status is failure. Transaction details are below:</h4>	' . "<br/>";
						}
				?>

						<table class="table table-bordered">
							<tr>
								<td>Name</td>
								<td><?php echo $rowD->name ?></td>
							</tr>
							<tr>
								<td>Loan Account No</td>
								<td><?php echo $rowD->ac_number ?></td>
							</tr>
							<tr>
								<td>Branch Name</td>
								<td><?php echo $branchDetails['branch_name'] ?></td>
							</tr>
							<tr>
								<td>Branch Address</td>
								<td><?php echo $branchDetails['branch_address'] ?></td>
							</tr>
							<tr>
								<td>Bank Account No</td>
								<td><?php echo $branchDetails['account_no'] ?></td>
							</tr>
							<tr>
								<td>Bank IFSC Code</td>
								<td><?php echo $branchDetails['ifsc_code'] ?></td>
							</tr>
							<?php foreach ($_POST as $key => $value) { ?>
								<tr>
									<td><?php echo $key ?></td>
									<td><?php echo $value ?></td>
								</tr>
							<?php } ?>
						</table>
					<?php } else { ?>
						<h3 class="text-danger">Checksum is not verified.</h3>
					<?php } ?>
				<?php } else { ?>
					<h3 class="text-danger">Empty POST Response</h3>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script>
	/*setTimeout(function(){ 
	<?php //unset($_POST); unset($_SESSION['customerId']); 
	?> 
	window.location.href='index.php';
}, 4000);*/
</script>
@endsection