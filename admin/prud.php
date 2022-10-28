<?php
require "../connection.php";

if(isset($_POST['sendername'])){

                                             

	 $sendername = isset($_POST['sendername']) ? trim($_POST['sendername']) : '';
	$senderphone = isset($_POST['senderphone']) ? trim($_POST['senderphone']) : '';
	$senderaddress = isset($_POST['senderaddress']) ? trim($_POST['senderaddress']) : '';
	$senderemail = isset($_POST['senderemail']) ? trim($_POST['senderemail']) : '';

	$recname = isset($_POST['recname']) ? trim($_POST['recname']) : '';
	$recemail = isset($_POST['recemail']) ? trim($_POST['recemail']) : '';
	$recphone = isset($_POST['recphone']) ? trim($_POST['recphone']) : '';
	$recaddress = isset($_POST['recaddress']) ? trim($_POST['recaddress']) : '';
	$origin = isset($_POST['origin']) ? trim($_POST['origin']) : '';
	$package = isset($_POST['package']) ? trim($_POST['package']) : '';

	$destination = isset($_POST['destination']) ? trim($_POST['destination']) : '';
	$carrier = isset($_POST['carrier']) ? trim($_POST['carrier']) : '';
	$weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
	$shipmode = isset($_POST['shipmode']) ? trim($_POST['shipmode']) : '';
	$product = isset($_POST['product']) ? trim($_POST['product']) : '';
	$qty = isset($_POST['qty']) ? trim($_POST['qty']) : '';

	$totalfreight = isset($_POST['totalfreight']) ? trim($_POST['totalfreight']) : '';
	$expdeldate = isset($_POST['expdeldate']) ? trim($_POST['expdeldate']) : '';
	$pickupdate = isset($_POST['pickupdate']) ? trim($_POST['pickupdate']) : '';
	$pickuptime = isset($_POST['pickuptime']) ? trim($_POST['pickuptime']) : '';
	$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
	$tracker = isset($_POST['tracker']) ? trim($_POST['tracker']) : '';



	if(empty($sendername)){

		  echo'<script>sendername.style.border="2px solid red";


		 function letlevel1(){
            if(sendername !==""){
        
                sendername.style.border="2px solid green";

            }
            
            else{
                sendername.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML="HKHK";

        
            }
        };</script>';

	}elseif(empty($senderemail)){

		  echo'<script>senderemail.style.border="2px solid red";

	
		   function letlevel2(){
            if(senderemail !==""){
        
                senderemail.style.border="2px solid green";

            }
            
            else{
                senderemail.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($senderphone)){

		  echo'<script>senderphone.style.border="2px solid red";

	
		   function letlevel3(){
            if(senderphone !==""){
        
                senderphone.style.border="2px solid green";

            }
            
            else{
                senderphone.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($senderaddress)){

		  echo'<script>senderaddress.style.border="2px solid red";

	
		   function letlevel4(){
            if(senderaddress !==""){
        
                senderaddress.style.border="2px solid green";

            }
            
            else{
                senderaddress.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recname)){

		  echo'<script>recname.style.border="2px solid red";

	
		   function letlevel5(){
            if(recname !==""){
        
                recname.style.border="2px solid green";

            }
            
            else{
                recname.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recemail)){

		  echo'<script>recemail.style.border="2px solid red";

	
		   function letlevel6(){
            if(recemail !==""){
        
                recemail.style.border="2px solid green";

            }
            
            else{
                recemail.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recphone)){

		  echo'<script>recphone.style.border="2px solid red";

	
		   function letlevel7(){
            if(recphone !==""){
        
                recphone.style.border="2px solid green";

            }
            
            else{
                recphone.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recaddress)){

		  echo'<script>recaddress.style.border="2px solid red";

	
		   function letlevel8(){
            if(recaddress !==""){
        
                recaddress.style.border="2px solid green";

            }
            
            else{
                recaddress.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

        
	}elseif(empty($origin)){

		  echo'<script>origin.style.border="2px solid red";

	
		   function letlevel9(){
            if(origin !==""){
        
                origin.style.border="2px solid green";

            }
            
            else{
                origin.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($package)){

		  echo'<script>package.style.border="2px solid red";

	
		   function letlevel10(){
            if(package !==""){
        
                package.style.border="2px solid green";

            }
            
            else{
                package.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($destination)){

		  echo'<script>destination.style.border="2px solid red";

	
		   function letlevel()11{
            if(destination !==""){
        
                destination.style.border="2px solid green";

            }
            
            else{
                destination.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

                     
	}elseif(empty($carrier)){

		  echo'<script>carrier.style.border="2px solid red";

	
		   function letlevel()12{
            if(carrier !==""){
        
                carrier.style.border="2px solid green";

            }
            
            else{
                carrier.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

                     
	}elseif(empty($weight)){

		  echo'<script>weight.style.border="2px solid red";

	
		   function letlevel13(){
            if(weight !==""){
        
                weight.style.border="2px solid green";

            }
            
            else{
                weight.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($shipmode)){

		  echo'<script>shipmode.style.border="2px solid red";

	
		   function letlevel14(){
            if(shipmode !==""){
        
                shipmode.style.border="2px solid green";

            }
            
            else{
                shipmode.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
                                         
	}elseif(empty($product)){

		  echo'<script>product.style.border="2px solid red";

	
		   function letlevel15(){
            if(product !==""){
        
                product.style.border="2px solid green";

            }
            
            else{
                product.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($qty)){

		  echo'<script>qty.style.border="2px solid red";

	
		   function letlevel16(){
            if(qty !==""){
        
                qty.style.border="2px solid green";

            }
            
            else{
                qty.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($totalfreight)){

		  echo'<script>totalfreight.style.border="2px solid red";

	
		   function letlevel17(){
            if(totalfreight !==""){
        
                totalfreight.style.border="2px solid green";

            }
            
            else{
                totalfreight.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($expdeldate)){

		  echo'<script>expdeldate.style.border="2px solid red";

	
		   function letlevel18(){
            if(expdeldate !==""){
        
                expdeldate.style.border="2px solid green";

            }
            
            else{
                expdeldate.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

	}elseif(empty($pickupdate)){

		  echo'<script>pickupdate.style.border="2px solid red";

	
		   function letlevel19(){
            if(pickupdate !==""){
        
                pickupdate.style.border="2px solid green";

            }
            
            else{
                pickupdate.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($pickuptime)){

		  echo'<script>pickuptime.style.border="2px solid red";

	
		   function letlevel20(){
            if(pickuptime !==""){
        
                pickuptime.style.border="2px solid green";

            }
            
            else{
                pickuptime.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($comment)){

		  echo'<script>comment.style.border="2px solid red";

	
		   function letlevel21(){
            if(comment !==""){
        
                comment.style.border="2px solid green";

            }
            
            else{
                comment.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{
			// echo'<script>
		
		 //  alert("dodne");

		 //  </script>';
		

		// $enter="INSERT INTO consignment (adminname,sendername,senderemail,senderphone,senderaddress,recname,recemail,recphone,recaddress,origin,package,destination,carrier,weight,shipment_mode,product,qty,total_freight,delivery_date,pick_up_date,pick_up_time,comment,tracknumber) 
		// values('$admin','$sendername','$senderemail','$senderphone','$senderaddress','$recname','$recemail','$recphone','$recaddress','$origin','$package','$destination','$carrier','$weight','$shipmode','$product','$qty','$totalfreight','$expdeldate','$pickupdate','$pickuptime','$comment','$tracknum')";



		$upd="UPDATE consignment set sendername='$sendername',senderemail='$senderemail',senderphone='$senderphone',senderaddress='$senderaddress',recname='$recname', recemail='$recemail',recphone='$recphone',recaddress='$recaddress',origin='$origin',package='$package',destination='$destination',carrier='$carrier',weight='$weight',shipment_mode='$shipmode',product='$product',qty='$qty',total_freight='$totalfreight',delivery_date='$expdeldate', pick_up_date='$pickupdate',pick_up_time='$pickuptime',comment='$comment' where tracknumber='".$tracker."'";

		$result1=mysqli_query($conn,$upd);
		
		if($result1){

			echo '<script> 
			 $("#sendername").val("");
			 $("#senderemail").val("");
			 $("#senderphone").val("");
			 $("#senderaddress").val("");
			 $("#recname").val("");
			 $("#recemail").val("");
			 $("#recphone").val("");
			 $("#recaddress").val("");
			 $("#origin").val("");
			 $("#package").val("");
			 $("#destination").val("");
			 $("#carrier").val("");
			 $("#weight").val("");
			 $("#shipmode").val("");
			 $("#product").val("");
			 $("#qty").val("");
			 $("#totalfreight").val("");
			 $("#expdeldate").val("");
			 $("#pickupdate").val("");
			 $("#pickuptime").val("");
			 $("#comment").val("");
			 $("#enterdetails").val("ADDED");
		 ;</script>';
		
			echo "TRACK NUMBER IS: ".$tracknum;



			
	}else{


		 echo mysqli_error($conn);



	}


}

}