<?php

require "../connection.php";

  session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
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

    echo'<script>location.replace("adview")</script>';
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




if(isset($_POST['name'])){
                            

	 $name = isset($_POST['name']) ? trim($_POST['name']) : '';
	$shipper = isset($_POST['shipper']) ? trim($_POST['shipper']) : '';
	$consignee = isset($_POST['consignee']) ? trim($_POST['consignee']) : '';
	$references = isset($_POST['references']) ? trim($_POST['references']) : '';

	$party1 = isset($_POST['party1']) ? trim($_POST['party1']) : '';
	$party2 = isset($_POST['party2']) ? trim($_POST['party2']) : '';
	$contactemail = isset($_POST['contactemail']) ? trim($_POST['contactemail']) : '';
	$placeofissue = isset($_POST['placeofissue']) ? trim($_POST['placeofissue']) : '';
	$vessel = isset($_POST['vessel']) ? trim($_POST['vessel']) : '';
	$voyagenumber = isset($_POST['voyagenumber']) ? trim($_POST['voyagenumber']) : '';

	$portofload = isset($_POST['portofload']) ? trim($_POST['portofload']) : '';
	$portofdischarge = isset($_POST['portofdischarge']) ? trim($_POST['portofdischarge']) : '';
	$placeofreceipt = isset($_POST['placeofreceipt']) ? trim($_POST['placeofreceipt']) : '';
	$placeofdeliv = isset($_POST['placeofdeliv']) ? trim($_POST['placeofdeliv']) : '';
	$containernumber = isset($_POST['containernumber']) ? trim($_POST['containernumber']) : '';
	$sealnumber = isset($_POST['sealnumber']) ? trim($_POST['sealnumber']) : '';

	$otherseal = isset($_POST['otherseal']) ? trim($_POST['otherseal']) : '';
	$containersize = isset($_POST['containersize']) ? trim($_POST['containersize']) : '';
	$numberofpackage = isset($_POST['numberofpackage']) ? trim($_POST['numberofpackage']) : '';
	$cargodescript = isset($_POST['cargodescript']) ? trim($_POST['cargodescript']) : '';
	$weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
	$volume = isset($_POST['volume']) ? trim($_POST['volume']) : '';

	$tfreight = isset($_POST['tfreight']) ? trim($_POST['tfreight']) : '';
	$expdel = isset($_POST['expdel']) ? trim($_POST['expdel']) : '';
	$deptime = isset($_POST['deptime']) ? trim($_POST['deptime']) : '';
	$picktime = isset($_POST['picktime']) ? trim($_POST['picktime']) : '';
	$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
	$pickdate = isset($_POST['pickdate']) ? trim($_POST['pickdate']) : '';
	$recemail = isset($_POST['recemail']) ? trim($_POST['recemail']) : '';



$num = rand(765456353635, 6357487996353);
$re=rand(2349,2956);
$ca=rand(10,90);
	$tracknumber = "UOCS".$num;
	// $tracknumber=base64_encode($tracknumber);

	$refnumber="rylexpc/bsc/idn/".$re;
	$companyref="rylexpc/bsc/idn/".$re;

	$sednumber="CCD".$ca."SA";
	$scaccode="CCD".$ca."SA";
	$comment2=base64_encode($comment);


	// numberofdoc,shippeddoc,waybill,receiveddoc , receivedwaybill

$enter="INSERT INTO consigne (name,tracknumber,refnumber,shipper,companyref,consignee,refowner,notifyparty1,notifyparty2,contactemail,placeofissue,vessel,voyagenumber,portofload,portofdischarge,placeofreceipt,placeofdelivery,containernumber,sealnumber,othersealnumber,weight,volume,containertype,cargodiscription,numberofpackage,sednumber,scaccode,admin,tfreight,expdel,deptime,picktime,comment,pickdate,recemail)

values('$name','$tracknumber','$refnumber','$shipper','$companyref','$consignee','$references','$party1','$party2','$contactemail','$placeofissue','$vessel','$voyagenumber','$portofload','$portofdischarge','$placeofreceipt','$placeofdeliv','$containernumber','$sealnumber','$otherseal','$weight','$volume','$containersize','$cargodescript','$numberofpackage','$sednumber','$scaccode','$admin'  ,'$tfreight','$expdel','$deptime','$picktime','$comment2','$pickdate','$recemail')";

		$result1=mysqli_query($conn,$enter);

		$enterloc ="INSERT INTO clocation (tracknumber) values('$tracknumber')";
		$enterst=mysqli_query($conn,$enterloc);
		
		if($result1){

	
			echo "TRACK NUMBER IS: ".$tracknumber;



			
	}else{


		 echo "error occure". mysqli_error($conn);



	}




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









if(isset($_POST['histracknum'])){
	 $histracknum = isset($_POST['histracknum']) ? trim($_POST['histracknum']) : '';

	$hisremark = isset($_POST['hisremark']) ? trim($_POST['hisremark']) : '';

	$hisstatus = isset($_POST['hisstatus']) ? trim($_POST['hisstatus']) : '';

	$hislocation = isset($_POST['hislocation']) ? trim($_POST['hislocation']) : '';

	$hisdate = isset($_POST['hisdate']) ? trim($_POST['hisdate']) : '';
	$histime = isset($_POST['histime']) ? trim($_POST['histime']) : '';



	if(empty($hisdate)){
		  echo'<script>hisdate.style.border="2px solid red";
		 function history1(){
            if(hisdate !==""){
        
                hisdate.style.border="2px solid green";

            }
            
            else{
                hisdate.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}elseif(empty($histime)){
		  echo'<script>histime.style.border="2px solid red";
		 function history5(){
            if(histime !==""){
        
                histime.style.border="2px solid green";

            }
            
            else{
                histime.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}

	elseif(empty($hislocation)){

		  echo'<script>hislocation.style.border="2px solid red";

	
		   function history2(){
            if(hislocation !==""){
        
                hislocation.style.border="2px solid green";

            }
            
            else{
                hislocation.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($hisstatus)){

		  echo'<script>hisstatus.style.border="2px solid red";

	
		   function history3(){
            if(hisstatus !==""){
        
                hisstatus.style.border="2px solid green";

            }
            
            else{
                hisstatus.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($hisremark)){

		  echo'<script>hisremark.style.border="2px solid red";

	
		   function history4(){
            if(hisremark !==""){
        
                hisremark.style.border="2px solid green";

            }
            
            else{
                hisremark.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{


	$enterhis="INSERT INTO history (hisdate,hislocation,hisstatus,hisremark,histracknum,histime) values('$hisdate','$hislocation','$hisstatus','$hisremark','$histracknum','$histime')";

	$rst=mysqli_query($conn,$enterhis);

	if($rst){
		$upstatus = "UPDATE consignment set comment='$hisstatus' where tracknumber='".$histracknum."'";

		$rstup=mysqli_query($conn,$upstatus);

		if($rstup){

					echo '<script> 
			 $("#hisdate").val("");
			 $("#histime").val("");
			 $("#hislocation").val("");
			 $("#hisstatus").val("");
			 $("#hisremark").val("");
			 $("#enterhistory").val("SAVED");
		 ;</script>';
		}

	}


}

}

if(isset($_POST['dashid'])){
	 $dashid = isset($_POST['dashid']) ? trim($_POST['dashid']) : '';

	 $delhis = "UPDATE history set status=0 where id='".$dashid."'";

		$delhisrstup=mysqli_query($conn,$delhis);

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

	 if(isset($_POST['viewid'])){
	 $viewid = isset($_POST['viewid']) ? trim($_POST['viewid']) : '';

	 $delhisviewid = "UPDATE consignment set status=0, tracknumber='nonethbinginit' where id='".$viewid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

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