<?php
require "connection.php";
session_start();
if($_SESSION['payamount']){
 $temail=$_SESSION['temail'] ;			
$payamount=$_SESSION['payamount']  ;			
$paytype=$_SESSION['paytype'] ;			
$tfirstName=$_SESSION['tfirstName']  ;			
$tphone=$_SESSION['tphone']  ;
$mid=$_SESSION['mid']  ;
}
$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
$em = isset($_GET['em']) ? $_GET['em'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_1f8ce50bb3cab69d1298aa03595a60b44b5755d9",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  $r=($reference);
$autoPin= rand(1000, 2000); 
$autoPin2= rand(100, 200); 


$autoPin3= rand(1, 9);
$payid="MDT".$autoPin3."F".$autoPin2."D";


$insert="INSERT INTO payment (memberid,name,email,paidfor,amount,transid,ref) values('$mid','$tfirstName','temail','$paytype','$payamount','$payid','$reference')";

$rst=mysqli_query($conn,$insert);

if($rst){

$_SESSION['payref']=$reference;

echo '
<script>
location.replace("giving");

</script>

';
}else{
	echo mysqli_error($conn);
}




  // 	header("location:getid?ref=".$r."&em=".$em);
}