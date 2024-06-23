<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

 require_once('include/config.php');
// following files need to be included
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
// 	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		$payment_status= "Success";
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
				$payment_status= "Failure";
	}

    
    
    
       
	if (isset($_POST) && count($_POST)>0 )
	{ 
	    if(isset($_POST['ORDERID'])){
	        
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
	        $checksum = $_POST['CHECKSUMHASH'];
	        $p_status = $payment_status;
	        
	        $sql = mysqli_query($con,"INSERT INTO `emi_transaction`(`orderid`, `mid`, `txn_id`, `txn_amount`, `payment_mode`, `currency`, `txn_date`, `status`, `respcode`, `resp_msg`, `gateway_name`, `bank_txn_id`, `bank_name`, `checksum`,`payment_status`) VALUES ('$orderid','$mid','$txnid','$txnamount','$paymentmode','$currency','$txndate','$status','$respcode','$resmsg','$gatewayname','$banktxnid','$bankname','$checksum','$p_status')"); 
	       
	       // echo $sql;
	       
	       
	        
	    }
	    
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
    echo "<Script>alert('Checksum mismatched');window.location.href='customer-EMI.php'</script>";
// 	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>