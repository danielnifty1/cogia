<?php 

require "connection.php";


if(isset($_POST['payamount'])){
$tfirstName=$_POST['tfirstName'];
$tphone=$_POST['tphone'];
$temail=$_POST['temail'];
$payamount=$_POST['payamount'];
$paytype=$_POST['paytype'];
$mid=$_POST['mid'];

session_start();
$_SESSION['temail'] = $temail;			
$_SESSION['payamount'] = $payamount;			
$_SESSION['paytype'] = $paytype;			
$_SESSION['tfirstName'] = $tfirstName;			
$_SESSION['tphone'] = $tphone;
$_SESSION['mid'] = $mid;

if($_SESSION['payamount']){
	echo '
<script>
location.href = "initialize";
	
</script>
	';
}			

}

?>

