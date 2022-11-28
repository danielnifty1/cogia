<?php

require "../connection.php";

  session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }


// deleting photo from gallary

        if(isset($_POST['photodelid'])){

	 $photodelid = isset($_POST['photodelid']) ? trim($_POST['photodelid']) : '';
	// $adminpassword = isset($_POST['adminpassword']) ? trim($_POST['adminpassword']) : '';


	 $current = "UPDATE photo_gallary set status=3 where id='".$photodelid."'";

		$currentrtn=mysqli_query($conn,$current);

}

// deleting file from downloads 

        if(isset($_POST['filedel'])){

	 $filedel = isset($_POST['filedel']) ? trim($_POST['filedel']) : '';
	// $adminpassword = isset($_POST['adminpassword']) ? trim($_POST['adminpassword']) : '';


	 $current = "UPDATE downloads set status=0 where id='".$filedel."'";

		$currentrtn=mysqli_query($conn,$current);

}


if(isset($_POST['adminname'])){

	 $adminname = isset($_POST['adminname']) ? trim($_POST['adminname']) : '';
	$adminpassword = isset($_POST['adminpassword']) ? trim($_POST['adminpassword']) : '';


	if(empty($adminname)){
		  echo'<script>adminname.style.border="2px solid red";
		 function letlevelz(){
            if(adminname !==""){
        
                adminname.style.border="2px solid green";

            }
            
            else{
                adminname.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}elseif(empty($adminpassword)){

		  echo'<script>adminpassword.style.border="2px solid red";

	
		   function letlevel(){
            if(adminpassword !==""){
        
                adminpassword.style.border="2px solid green";

            }
            
            else{
                adminpassword.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{

		$query ="SELECT* FROM admin where adminname='$adminname' and adminpassword='$adminpassword' and status=1";
		$result=mysqli_query($conn,$query);
		$return = mysqli_num_rows($result);
		if($return){
			while($row=mysqli_fetch_assoc($result)){

					session_start();


					$_SESSION['shore'] = $row['adminname'];				
					if(isset($_SESSION['shore'])){

    echo'<script>location.replace("members")</script>';
		}

			}

			
	}else{


		 echo'<script>
		  var showme=document.getElementById("showme")
		  showme.innerHTML="incorrect Password and username combination";

		  </script>';



	}


}

}

	 // SETTING PREVIOUS PROGRAM 
 if(isset($_POST['positionid'])){
	  $positionid = isset($_POST['positionid']) ? trim($_POST['positionid']) : '';
	  $act = isset($_POST['act']) ? trim($_POST['act']) : '';

	  if($act=="previous"){

	 $current = "UPDATE events set status=0 where status !=2 and status!=3";

		$currentrtn=mysqli_query($conn,$current);

		if($currentrtn){

			$currentb = "UPDATE events set status=1  where id='".$positionid."'";

		$rtn=mysqli_query($conn,$currentb);

		}
	  }


	 }


// SETTING CURRENT PROGRAM 
 if(isset($_POST['positionid'])){
	  $positionid = isset($_POST['positionid']) ? trim($_POST['positionid']) : '';
	  $act = isset($_POST['act']) ? trim($_POST['act']) : '';

	  if($act=="current"){

	 $current = "UPDATE events set status=0 where status !=1 and status!=3";

		$currentrtn=mysqli_query($conn,$current);

		if($currentrtn){

			$currentb = "UPDATE events set status=2  where id='".$positionid."'";

		$rtn=mysqli_query($conn,$currentb);

		}
	  }


	 }

	 // SETTING NEXT PROGRAM 
 if(isset($_POST['positionid'])){
	  $positionid = isset($_POST['positionid']) ? trim($_POST['positionid']) : '';
	  $act = isset($_POST['act']) ? trim($_POST['act']) : '';

	  if($act=="next"){

	 $current = "UPDATE events set status=0 where status !=1 and status!=2";

		$currentrtn=mysqli_query($conn,$current);

		if($currentrtn){

			$currentb = "UPDATE events set status=3  where id='".$positionid."'";

		$rtn=mysqli_query($conn,$currentb);

		}
	  }


	 }







 if(isset($_POST['eventid'])){
	echo  $eventid = isset($_POST['eventid']) ? trim($_POST['eventid']) : '';

	 $delhisviewid = "UPDATE events set del=1 where id='".$eventid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

	 }


	 if(isset($_POST['testdeleteid'])){
	 $testdeleteid = isset($_POST['testdeleteid']) ? trim($_POST['testdeleteid']) : '';

	 $delhisviewid = "UPDATE testimonies set status=2 where id='".$testdeleteid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

	 }
	 
	 	 if(isset($_POST['approvetest'])){
	 $approvetest = isset($_POST['approvetest']) ? trim($_POST['approvetest']) : '';

	 $delhisviewid = "UPDATE testimonies set status=1 where id='".$approvetest."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

	 }




if(isset($_POST['enterlocation'])){
	 $enterlocation = isset($_POST['enterlocation']) ? trim($_POST['enterlocation']) : '';

	$loctracknum = isset($_POST['loctracknum']) ? trim($_POST['loctracknum']) : '';

if(empty($enterlocation)){
		  echo'<script>enterlocation.style.border="2px solid red";
		 function history1(){
            if(enterlocation !==""){
        
                enterlocation.style.border="2px solid green";

            }
            
            else{
                enterlocation.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}else{

     


	$upstatus = "UPDATE clocation set location='$enterlocation' where tracknumber='".$loctracknum."'";

		$rstuploc=mysqli_query($conn,$upstatus);

		if($rstuploc){

					echo '<script> 
			 
			 $("#enterlocation").val("");
			 $("#locbtn").val("SAVED");
		 ;</script>';
		}
	}

}












	 if(isset($_POST['companyemaildir'])){

	 $companyemaildir = isset($_POST['companyemaildir']) ? trim($_POST['companyemaildir']) : '';

	 $contactquery = "UPDATE contact set contactemail='$companyemaildir'";

		$contactresult=mysqli_query($conn,$contactquery);

		if($contactresult){

			echo '<script> 
			 save1.style.background="lightblue";
			 $("#contactemail").val("");
			 $("#save1").val("SAVED");
		 ;</script>';
		}

	 }


	  if(isset($_POST['contactphone'])){

	 $contactphone = isset($_POST['contactphone']) ? trim($_POST['contactphone']) : '';

	 $contactquery1 = "UPDATE contact set contactphone='$contactphone'";

		$contactresult1=mysqli_query($conn,$contactquery1);

		if($contactresult1){

				echo '<script>
			
			 save2.style.background="lightblue";
			 $("#contactphone").val("");
			 $("#save2").val("SAVED");
		 ;</script>';


		}

	 }
	 
	 	 	 if(isset($_POST['featureid'])){


	 $featureid = isset($_POST['featureid']) ? trim($_POST['featureid']) : '';
	 $contactquery2 = "UPDATE features set status=1 where id='$featureid'";

		$contactresult2=mysqli_query($conn,$contactquery2);


	 }

	 
	 	 if(isset($_POST['deltrack'])){
echo '<script>alert("sss")</script>';

	 $deltrack = isset($_POST['deltrack']) ? trim($_POST['deltrack']) : '';
	 $contactquery2 = "UPDATE freight set status=1 where id='$deltraCK'";

		$contactresult2=mysqli_query($conn,$contactquery2);


	 }



	 if(isset($_POST['paidby'])){
	 $paidby = isset($_POST['paidby']) ? trim($_POST['paidby']) : '';
	 $paidamount = isset($_POST['paidamount']) ? trim($_POST['paidamount']) : '';
	 $freightcomp = isset($_POST['freightcomp']) ? trim($_POST['freightcomp']) : '';
	 $trackid = isset($_POST['trackid']) ? trim($_POST['trackid']) : '';


	 $in="INSERT INTO freight (paidby,paidamount,freightcomp,trackid) values('$paidby','$paidamount','$freightcomp','$trackid')";



		$contactresult2=mysqli_query($conn,$in);

		if($contactresult2){ ?>

			<table class="table">
				<tr>
					
					<th>freight</th>
					<th>Amount</th>
					<th>Paid</th>
				</tr>
				<?php 
				$ges="SELECT* FROM freight where trackid='$trackid' and status=0";
				$rst=mysqli_query($conn,$ges);
				$rtn=mysqli_num_rows($rst);
				if($rtn){
					while($row=mysqli_fetch_assoc($rst)){
						$freightcomp=$row['freightcomp'];
						$paidamount=$row['paidamount'];
						$paidby=$row['paidby']; ?>

							<tr>
								<td><?php echo $freightcomp ?></td>
								<td><?php echo $paidamount ?></td>
								<td><?php echo $paidby ?></td>
							</tr>


					<?php }
				}
			?>

				
			</table>





			
		<?php }


	 }


	  if(isset($_POST['contactlocation'])){
	 $contactlocation = isset($_POST['contactlocation']) ? trim($_POST['contactlocation']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice='$contactlocation'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactlocation").val("");
			 $("#save3").val("SAVED");
		 ;</script>';
		}


	 }

	 if(isset($_POST['contactdubai'])){
	 $contactdubai = isset($_POST['contactdubai']) ? trim($_POST['contactdubai']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice2='$contactdubai'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactdubai").val("");
			 $("#save4").val("SAVED");
		 ;</script>';
		}


	 }


	 if(isset($_POST['contactmalaysia'])){
	 $contactmalaysia = isset($_POST['contactmalaysia']) ? trim($_POST['contactmalaysia']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice3='$contactmalaysia'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactmalaysia").val("");
			 $("#save5").val("SAVED");
		 ;</script>';
		}


	 }



	   if(isset($_POST['newadminname'])){
	 $newadminname = isset($_POST['newadminname']) ? trim($_POST['newadminname']) : '';
	 $newadminpassword = isset($_POST['newadminpassword']) ? trim($_POST['newadminpassword']) : '';



	 if(empty($newadminname)){

		  echo'<script>newadminname.style.border="2px solid red";
		   $("#adminenter1").val("REGISTER");

	
		   function let1(){
            if(newadminname !==""){
        
                newadminname.style.border="2px solid green";

            }
            
            else{
                newadminname.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($newadminpassword)){

		  echo'<script>newadminpassword.style.border="2px solid red";
		   $("#adminenter1").val("REGISTER");

	
		   function let2(){
            if(newadminpassword !==""){
        
                newadminpassword.style.border="2px solid green";
               adminenter1.val("REGISTER");

            }
            
            else{
                newadminpassword.style.border="2px solid red";
                 adminenter1.val("REGISTER");
        
            }
        };</script>';
	}else{

	 $checking="SELECT* FROM admin where adminname='$newadminname' ";

	 $checkrst=mysqli_query($conn,$checking);
	 $checkrtn=mysqli_num_rows($checkrst);
	 if($checkrtn){

	 	echo '<script> 
			
			
			 $("#adminenter1").val("REGISTER");
		 ;</script>';

		 echo $newadminname." already existing";


	 }else{

	 $contactquery2 = "INSERT INTO admin (adminname,adminpassword)  values('$newadminname','$newadminpassword')";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 adminenter1.style.background="green";
			 $("#newadminname").val("");
			 $("#newadminpassword").val("");
			 $("#adminenter1").val("REGISTERED");
		 ;</script>';
		}
	}

}
	 }


	  if(isset($_POST['adminid'])){

	   $adminid = isset($_POST['adminid']) ? trim($_POST['adminid']) : '';

	 $delhisadminid = "UPDATE admin set status=0 where id='".$adminid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisadminid);

	 }

       if(isset($_POST['datetrack'])){

       $datetrack = isset($_POST['datetrack']) ? trim($_POST['datetrack']) : '';
       $dateid = isset($_POST['dateid']) ? trim($_POST['dateid']) : '';

     $d = "UPDATE consignment set receiptdate='$dateid' where tracknumber='".$datetrack."'";

        $delhisrstupviewid=mysqli_query($conn,$d);

       echo "DATE: ".$dateid;

     }


     if(isset($_POST['msgid'])){

       $msgid = isset($_POST['msgid']) ? trim($_POST['msgid']) : '';
       // $dateid = isset($_POST['dateid']) ? trim($_POST['dateid']) : '';

     $d = "UPDATE contactus set status=2 where id='".$msgid."'";

        $delhisrstupviewid=mysqli_query($conn,$d);

           $checkingmsg="SELECT* FROM contactus where status=1 ";

     $checkmsg=mysqli_query($conn,$checkingmsg);
     echo $checker=mysqli_num_rows($checkmsg);

       // echo "DATE: ".$dateid;

     }

?>