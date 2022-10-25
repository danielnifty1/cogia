<?php
require "connection.php";
session_start();


if(isset($_POST['spousefirstName'])){
$spousefirstName=$_POST['spousefirstName'];
$spouselastName=$_POST['spouselastName'];
$spousephonework=$_POST['spousephonework'];
$spousephonehome=$_POST['spousephonehome'];
$spouseemail=$_POST['spouseemail'];
$spousedob=$_POST['spousedob'];
$spousesex=$_POST['spousesex'];
$spouseoccup=$_POST['spouseoccup'];
$spouseadd=$_POST['spouseadd'];
$memberid=$_POST['memberid'];
$nextkinphone=$_POST['nextkinphone'];
$nextofkin=$_POST['nextofkin'];

$check ="SELECT* FROM members where memberid = '$memberid'";
$checkrst=mysqli_query($conn,$check);
$checkrtn=mysqli_num_rows($checkrst);
if($checkrtn){
	while($row=mysqli_fetch_assoc($checkrst)){
		 $exist_email=$row['email'];
		$exist_phonework=$row['phonework'];
		echo $exist_phonehome=$row['phonehome'];
		$exist_phonehome=$row['phonehome'];
		$exist_memberid=$row['memberid'];
		$exist_nextkin=$row['nextkin'];
		$exist_nextkinphone=$row['nextkinphone'];
	}

	
if($spousephonehome==$exist_phonehome){
		echo'

		<script>
				spousephonehome.style.border="2px solid red";
			  	previefw.style.color="orange";
 				previefw.innerHTML="Member Phone and Spouse Phone can not be the same";
 					</script>
		';
	}elseif($spouseemail==$exist_email){
		echo'

		<script>
				spouseemail.style.border="2px solid red";
			  	previefw.style.color="orange";
 				previefw.innerHTML="Member Email and Spouse Email can not be the same";

 				  function pw(){
            if(spousephonehome !==""){
        
                spousephonehome.style.border="2px solid green";
                previefw.innerHTML=" ";

            }
            
            else{
                spousephonehome.style.border="2px solid red";
                 previefw.innerHTML="Member Email and Spouse Email can not be the same";
        
            }
        }


 					</script>
		';
	}elseif($exist_phonehome==$nextkinphone ){


echo'

		<script>
				nextkinphone.style.border="2px solid red";
			  	previefw.style.color="orange";
 				previefw.innerHTML="Member phone and Next Of Kin Phone can not be the same";

 				  function np(){
            if(nextkinphone !==""){
        
                nextkinphone.style.border="2px solid green";
                previefw.innerHTML=" ";

            }
            
            else{
                nextkinphone.style.border="2px solid red";
                 previefw.innerHTML="Member Email and Spouse Email can not be the same";
        
            }
        }


 					</script>
		';

	}else{

$upmember="UPDATE members SET spfname='$spousefirstName',sponame='$spouselastName',spdob='$spousedob',spemail='$spouseemail',spoccupation='$spouseoccup',spgender='$spousesex',spphonehome='$spousephonehome',spphonework='$spousephonework',nextkin='$nextofkin',nextkinphone='$nextkinphone',reglevel=1 where memberid='".$memberid."'";

$rst=mysqli_query($conn,$upmember);

if($rst){
	echo '
<script>
location.href="joinus_3"
</script>
	';
}









	}
}else{
		echo'

		<script>
				alert("no data");
 					</script>
		';
}
}




if(isset($_POST['chrchdept'])){
 		 
	 
 $chrchdept=$_POST['chrchdept'];
$memberid=$_POST['memberid'];
$memberlevel=$_POST['memberlevel'];
$grp=$_POST['grp'];
$cdept=$_POST['cdept'];
$join=$_POST['join'];

if($join=="select" and $cdept=="join"){
	echo "select at list";
}else{
 
if($join!="select"){
	$cdept="I would like to Join ".$join;
}else{
	$cdept=$cdept;
}


 $uprd="UPDATE members  set memberlevel='$memberlevel', chrchdept='$chrchdept',currentdept='$cdept',grp='$grp',reglevel=2 where memberid ='".$memberid."'";

 $rs=mysqli_query($conn,$uprd);	

 if($rs){ 

$getname="SELECT* FROM  members where memberid ='$memberid'";
$ges=mysqli_query($conn,$getname);
$gtn=mysqli_num_rows($ges);
if($gtn){
	while ($row=mysqli_fetch_assoc($ges)) {
		$fn=$row['fname']." ".$row['onames'];
		$email=$row['email'];
	}




require_once 'SwiftMailer/vendor/autoload.php';

 
      $bodyContent1 ="
     


 <link href='https://fonts.googleapis.com/css?family=Carrois Gothic' rel='stylesheet'>


<div class='' style='overflow: hidden;background:black; border-radius:10px 10px 0px 0px'>

     <div class='row' style='background:black; '>
      <div class='col-md-12' >
         <a href='https://cogiaworld.org' class='site_title'> </i><span>
             <img src='https://cogiaworld.org/assets/images/mercy.png' width='50px' height='50px'> <span style='font-size:20px'>City OF God Int'l <span style='color: orange'> Assembly</span></span></a>
      </div>
      
     </div>   
      </div>


 
   <div class='row' style='background:black; '>
    <br>
    <div class='col-md-12'style='background:black;color:white ' >
      <h5 style='color:white '>Thank you Beloved <b>".$fn."</b>, you have completed your Membership Registration</h5>
     <br>
     <span>Kindly take note of your Membership ID <br> </span> <h4 style='color:green; font-weight:bold'> ".$memberid."</h4> 
     <span> You will be using it for more activties in this platform</span>
    </div>


   </div> 
    
   </div>
    <div class='row'>
    <div class='col-md-12' >
      
    </div>
    
   </div>


<div class='' style='overflow: hidden;background:black; border-radius:0px 0px 10px 10px'>

     <div class='row'>
          <div class='col-md-12' >
          <h6 style='text-align:center'><span style='color:red'> Alright Reserved 2022 (c)</span> <a href='cogiaworld.org' > cogiaworld.org </a><h6>
          </div>
      
     </div>
</div>

";
$subject1="Membership Registration";

$message1 = Swift_Message::newInstance()
    // The subject of your email
    ->setSubject($subject1)
    // The from address(es)
    ->setFrom(array('members@cogiaworld.org' => 'COGIA'))
    // The to address(es)
    ->setTo(array($email => 'COGIA'))
    // Here, you put the content of your email
    ->setBody($bodyContent1, 'text/html')
     ;
if (Swift_Mailer::newInstance(Swift_MailTransport::newInstance())->send($message1)) {
  
	echo '

	<script>

  
successresult.style.display="none";
</script>
								<div id="success">
                                        <h5>Thank you Beloved '. $fn.', you have completed your Membership Registration</h5>
                                        <br>
                                     <span>Kindly take note of your Membership ID <span style="color:green; font-weight: bold;">'. $memberid.'</span> You will be using it for more activties in this platform</span>

                                      
                                    
                                </div>
';

     
    
  
   } else {

     	echo '

	<script>

  
successresult.style.display="none";
</script>
								<div id="success">
                                        <h5>Thank you Beloved '. $fn.', you have completed your Membership Registration</h5>
                                        <br>
                                     <span>Kindly take note of your Membership ID <span style="color:green; font-weight: bold;">'. $memberid.'</span> You will be using it for more activties in this platform</span>

                                     <br>
                                     <br>

                                     <span style="color:orange"> For some reasons we could not send you Email. kindly note down your member id. 

                                     <br>
                                     <br>
                                     Thank you </span>


                                      
                                    
                                </div>
';


    //echo'ys done m dusted';
}

  if(isset($_SESSION['memberid'])){
  unset($_SESSION['memberid']);
echo '
<script>location.replace("https://cogiaworld.org");

</script>
';
}
}


}


 }

 

 }else{
	echo '

<script>

 previefw.innerHTML="Error occured. Kindly try again";
 
</script>
	';
}
 





?>