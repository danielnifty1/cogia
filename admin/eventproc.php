<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


if(isset($_POST['txt'])){
 $title=$_POST['title'];
 $pdate=$_POST['date'];
$ptime=$_POST['ptime'];
 $txt=$_POST['txt'];
echo $pid=$_POST['pid'];

 $title=base64_encode($title);
 $txt=base64_encode($txt);
	$gal= "UPDATE events set title='$title',pdate='$pdate',ptime='$ptime',msg='$txt' where `eventid`='".$pid."'";

	
$resultgal=mysqli_query($conn,$gal);
if($resultgal){
echo "re";

}else{
	echo mysqli_error($conn);
	}
}


if(isset($_POST['txt'])){
 $title=$_POST['title'];
 $pdate=$_POST['date'];
$ptime=$_POST['ptime'];
 $txt=$_POST['txt'];
echo $pid=$_POST['pid'];

 $title=base64_encode($title);
 $txt=base64_encode($txt);
	$gal= "UPDATE events set title='$title',pdate='$pdate',ptime='$ptime',msg='$txt' where `eventid`='".$pid."'";

	
$resultgal=mysqli_query($conn,$gal);
if($resultgal){
echo "re";

}else{
	echo mysqli_error($conn);
	}
}



if(isset($_POST['utitle'])){
 $title=$_POST['utitle'];
 $pdate=$_POST['udate'];
$ptime=$_POST['uptime'];
 $txt=$_POST['utxt'];
 $pid=$_POST['upid'];

 $title=base64_encode($title);
 $txt=base64_encode($txt);
	$gal= "UPDATE events set title='$title',pdate='$pdate',ptime='$ptime',msg='$txt' where `id`='".$pid."'";

	
$resultgal=mysqli_query($conn,$gal);
if($resultgal){
echo '<script>alert("UPDATED") </script>';
}else{
	echo mysqli_error($conn);
	}
}

if(isset($_POST['feature'])){
 $feature=$_POST['feature'];
 $featureid=$_POST['featureid'];
 
 $feature = base64_encode($feature);
 $check="SELECT* FROM features where feature ='$feature' and pid='$featureid' ";
 $result=mysqli_query($conn,$check);
 $retn=mysqli_num_rows($result);
 if($retn){
 echo '
 	<script>
 	fresult.innerHTML="feature already exists for this program"

 	</script>'; 
 }else{
 	$put = "INSERT INTO features (feature,pid) values('$feature','$featureid')";
 	$putrst=mysqli_query($conn, $put);

 	if($putrst){
 	echo ' 
 	<script>
 	feature.innerHTML=" "

 	</script>'; ?>
 	 <script src="web/js/jquery2.0.3.min.js"></script>
 	<table class="table" >
							<tr>
								<th>Feature</th>
								<th>Delete</th>
						

									<?php 
				       								//=$_SESSION['adminname'];
											$query = "SELECT* from features where status=0 and pid ='$featureid' order by id desc ";
												$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
												$return = mysqli_num_rows($result);
										// 
								if($return ){
								
										while ($row = mysqli_fetch_assoc($result)){ 
												$feature = $row["feature"];
												$featureid = $row["id"];
															
											?>
											<tr id="show<?php echo $featureid ?>">
												<td><?php echo base64_decode ($feature) ?></td>
											

														
												<td>
										  	<button class="btn btn-danger btn-sm" id="delfeature<?php echo $featureid ?>">DELETE</button></td>
												
												
											</tr>
											<span id="rst"></span>
										
											<script type="text/javascript">

											  $(document).ready(function(){ 	
 												$("#delfeature<?php echo $featureid ?>").click(function(){
											  	// alert("yes");

											 	 var featureid =  "<?php echo $featureid ?>" ;
											 	
											 		var retval =confirm("do u want to delete the feature<?php echo base64_decode ($feature) ?>?");

											 		if(retval==true){
											  
											              $.ajax({
											                    url:'pr.php',
											                    method:'POST',							
											                    data:{
											                        featureid:featureid,                  
											                       
											                    },

											                      beforeSend: function(){
											                $('#delfeature<?php echo $featureid ?>').val("DELETING....");
											              },
											                   success:function(data){
											             
											                 $("#show<?php echo $featureid ?>").hide(500)
											                   	$("#rst").html(data);
											                     }
											                });

											            // }
											 			return true;
											 		}else{
											 			
											 			return false;
											 		}
											 	
											//alert(''"');
											 
											 });
											 

											  });


											</script>
											<?php }}else{
												echo mysqli_error($conn);
											}?>
		</table>




 	<?php }
 }


}












// ADDING OFFERRING

if(isset($_POST['offerrings'])){
 
 $offerrings=$_POST['offerrings'];
 

 $title=base64_encode($offerrings);
 
 $check= "SELECT* FROM offering where title= '$title' and status=0";
$rst = mysqli_query($conn,$check);
$rtn=mysqli_num_rows($rst);
if($rtn){
	 echo'<script>
		  msgtext.innerHTML="Offering title already existing";
		   
		  offerrings.style.border="2px solid red";
		 function offerrings1(){
            if(offerrings !==""){
        
                offerrings.style.border="2px solid green";
                  msgtext.innerHTML="";

            }
            
            else{
                offerrings.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

?>
		<script src="web/js/jquery2.0.3.min.js"></script>
			<?php require "offdata.php" ?>
 
<?php
}else{
		

$input="INSERT INTO offering (title) values('$title')";
$rst=mysqli_query($conn,$input);
 if($rst){


echo'<script>
		  msgtext.innerHTML=" ";
		   offerrings.style.border="2px solid green";
		  </script>'; ?>

 			<script src="web/js/jquery2.0.3.min.js"></script>
 	 	<?php require "offdata.php" ?>	



 <?php }

}
}


// DELETING OFFER

if(isset($_POST['offerringid'])){
 
 $offerringid=$_POST['offerringid'];

 $upoff="UPDATE offering set status=1 where id ='".$offerringid."'";
 $mrst=mysqli_query($conn,$upoff);


 }



 // updating offering



 if(isset($_POST['updateofferringid'])){
 
 $updateofferringid=$_POST['updateofferringid'];
 $updatetitle=$_POST['updatetitle'];

$title=base64_encode($updatetitle);
 $check= "SELECT* FROM offering where title= '$title' and status=0";
$rst = mysqli_query($conn,$check);
$rtn=mysqli_num_rows($rst);

if($rtn){ ?>
			<script>
				alert("Offering title already existing")
		  			// updrst<?php echo $updateofferringid ?>.innerHTML="";
		    	// updrst<?php echo $updateofferringid ?>.style.color="red";
		  </script>

<?php }else{
	 $upoff="UPDATE offering set title='$title' where id ='".$updateofferringid."'";
 $mrst=mysqli_query($conn,$upoff); ?>

<script>
				alert("Offering Successfully updated")
		  // updrst<?php echo $updateofferringid ?>.innerHTML="Offering updated";
		  //   updrst<?php echo $updateofferringid ?>.style.color="green";
		  </script>
 
		 


<?php }











 }
?>