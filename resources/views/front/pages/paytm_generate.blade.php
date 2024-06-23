<?php 
include('paytm_config.php');
include('include/config.php');
session_start();
$result = getTransactionToken($con, $_POST['amount'], $_POST['customerId'], $_POST['branchName']);
echo json_encode($result);
?>
