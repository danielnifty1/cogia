<?php
require "connection.php";


if(isset($_POST['firstName'])){
	 
 $firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$phonework=$_POST['phonework'];
$phonehome=$_POST['phonehome'];
$email=$_POST['email'];
$occupation=$_POST['occupation'];
$sex=$_POST['sex'];
$mstatus=$_POST['mstatus'];
$employment=$_POST['employment'];
$position=$_POST['position'];
$raddress=$_POST['raddress'];
$haddress=$_POST['haddress'];
$dob=$_POST['dob'];


$fullname=$firstName." ".$lastName;

$ra=base64_encode($raddress);
$ha=base64_encode($haddress);

$da =date("D-M-Y m:h:s");
 $memberid="COGIA-".rand(20348,90039);

$check ="SELECT* FROM members";
$checkrst=mysqli_query($conn,$check);
$checkrtn=mysqli_num_rows($checkrst);
if($checkrtn){
	while($row=mysqli_fetch_assoc($checkrst)){
		$exist_email=$row['email'];
		$exist_phonework=$row['phonework'];
		$exist_phonehome=$row['phonehome'];
		$exist_memberid=$row['memberid'];
	}

	if($exist_email==$email){
		echo'

		<script>
				email.style.border="1px solid red";
			  	previefw.style.color="orange";
 				previefw.innerHTML="E-mail Already existing";
 					</script>
		';	
	}elseif ($exist_phonework==$phonework) {
		echo'

		<script>
			  	previefw.style.color="orange";
 				previefw.innerHTML="Phone (work) Number Already existing";
 					</script>
		';	
	}elseif ($exist_phonehome==$phonehome) {
		echo'

		<script>
			  	previefw.style.color="orange";
 				previefw.innerHTML="Phone (Home) Number Already existing";
 					</script>
		';	
	}

	else{
		echo'

		<script>
			  	previewd.style.display="none";
 				
 					</script>
		';	

	if($exist_memberid==$memberid){
		$memberid="COGIA-".rand(20348,$exist_memberid);
	}

	



$checkin="INSERT INTO members (fname,onames,resmailing,phonehome,phonework,email,dob,occupation,emplace,position,sex,mstatus,homemailing,memberid) values('$firstName','$lastName','$raddress','$phonehome','$phonework','$email','$dob','$occupation','$employment','$position','$sex','$mstatus','$haddress','$memberid')";

$checkrst=mysqli_query($conn,$checkin);
if($checkrst){
session_start();
$_SESSION['memberid']=$memberid;

if(isset($_SESSION['memberid'])){
	echo '
<script>location.replace("joinus_2");

</script>
	';
}



}else{
	echo mysqli_error($conn);
}

	}
}else{
	echo'

		<script>
			  	previefw.style.color="orange";
 				previefw.innerHTML="empty data";
 					</script>
		';	
}

}



// member search


if(isset($_POST['searchmemberid'])){
$searchmemberid=$_POST['searchmemberid'];

$search="SELECT* FROM members where memberid = '$searchmemberid'";
$rst=mysqli_query($conn, $search);
$rtn=mysqli_num_rows($rst);

if($rtn){
while($row=mysqli_fetch_assoc($rst)){
	 $fname=$row['fname']." ".$row['onames'];
	$phone=$row['phonehome'];
	$email=$row['email'];
}



echo"



		<script>
 				showname.innerHTML='Welcome ".$fname."';
		 $('#tfirstName').val('".$fname."' );
		 $('#temail').val('".$email."' );
		 $('#tphone').val('".$phone."' );
		 $('#searchid').val('".$searchmemberid."' );
		 $('#mid').val('".$searchmemberid."' );
		
		showinput.style.display='none';
		previefw.style.display='none';
		$('#mclose').click();



			
 				
 					</script>
		";	
?>


<?php }else{
	echo'

		<script>

		 $("#tfirstName").val("");
		 $("#temail").val("" );
		 $("#tphone").val("" );
			  	preview.style.display="none";
			  	showinput.style.display="block";
		 $("#mclose").click();
			  	previefw.style.color="orange";
 				previefw.innerHTML="Member not found; kindly fill the form below to testify <br> you can also  get Member ID to avoid filling the form always";
 				showname.innerHTML="";
 					</script>
		';	
}

}

if(isset($_POST['tfirstName'])){
$tfirstName=$_POST['tfirstName'];
$tphone=$_POST['tphone'];
$temail=$_POST['temail'];
$tmoney=$_POST['tmoney'];
$searchid=$_POST['searchid'];
$tm=base64_encode($tmoney);
$qry="INSERT INTO testimonies (name,memberid,testimony,phone,email) values('$tfirstName','$searchid','$tm','$tphone','$temail')";
$rst=mysqli_query($conn,$qry);

if($rst){
echo '<script>

		
			  	good.style.color="orange";
 				good.innerHTML="Thank your for testifying, it has been received successfully";
 			
 					</script>
		';
}else{
	echo '<script>

		
			  	good.style.color="orange";
 				good.innerHTML="error occured";
 			
 					</script>
		';
}





}