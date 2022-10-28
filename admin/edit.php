   <?php 
   require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


          $checkingmsg="SELECT* FROM contactus where status=1 ";

     $checkmsg=mysqli_query($conn,$checkingmsg);
     $checker=mysqli_num_rows($checkmsg);

        ?>



        <?php
$getcontact = "SELECT* from contact";
$cresult=mysqli_query($conn,$getcontact);
$creturn=mysqli_num_rows($cresult);
if($creturn){
    while($row=mysqli_fetch_assoc($cresult)){
         $email = $row['contactemail'];
         $phone = $row['contactphone'];
         $office = $row['contactoffice'];
    }
}
 ?>

<?php 

    if(isset($_GET['trk'])){

    	$tracknum=base64_decode($_GET['trk']); 
    	$tracker=$tracknum;

$details="SELECT* from consignment where tracknumber= $tracknum";

$result=mysqli_query($conn,$details);
$return=mysqli_num_rows($result);
if($return){
	while($row=mysqli_fetch_assoc($result)){
		$sendername=$row['sendername'];
		$senderemail=$row['senderemail'];
		$senderphone=$row['senderphone'];
		$senderaddress=$row['senderaddress'];
		$recname=$row['recname'];
		$recemail=$row['recemail'];
		$recphone=$row['recphone'];
		$recaddress=$row['recaddress'];
		$origin=$row['origin'];
		$package=$row['package'];
		$destination=$row['destination'];
		$carrier=$row['carrier'];
		$weight=$row['weight'];
		$shipment_mode=$row['shipment_mode'];
		$product=$row['product'];
		$qty=$row['qty'];
		$total_freight=$row['total_freight'];
		$delivery_date=$row['delivery_date'];
		$pick_up_date=$row['pick_up_date'];
		$pick_up_time=$row['pick_up_time'];
		$comment=$row['comment'];
	}
}else{
	echo "<script>alert('Track Number not found');location.replace('view') </script>";
    	 
}

}else{
	echo "<script>alert('Track Number not found');location.replace('view') </script>";

}

 ?>
<!DOCTYPE html>
<head>
 <title>United Offshore Express Courier</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="DARMA COURIER SERVICES" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="web/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<link href="web/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="web/css/font.css" type="text/css"/>
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="web/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="web/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="web/js/jquery2.0.3.min.js"></script>
<script src="web/js/raphael-min.js"></script>
<script src="web/js/morris.js"></script>
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>
<body>
<section id="container">
<!--header start-->
<?php require "hd.php";
 ?>
<!--header end-->
<!--sidebar start-->
<?php require "aside.php" ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">

		<div class="row">
	                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-push-2 ">
	                    	<h2 style="text-align: center;">ADD CONSIGNMENT</h2>
	                    	

	                    	<input type="hidden" id="tracknum" value="" name="">

	                        <div class="contact-form">
	                        	<!-- <div id="snackbar">CONSIGNMENT ADDED</div> -->

	                        		<!-- SENDER DETAILS  -->
	                        	<div class="panel panel-success">
	                        		<div class="panel panel-heading">
	                        			<h4 style="text-align: center;font-weight: bold;">SENDER's DETAILS</h4>
	                        		</div>
	                        		<div class="panel-body">
	                        			 <div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">

		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">NAME*</span>
									        
									        			<input type="text" value="<?php echo $sendername ?>" onkeypress="letlevel1()"  id="sendername" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
									    			</div>		                                           
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                     	<div class="form-group" id="email-field">

		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">E-MAIL*</span>
									        
									        			 <input type="email" value="<?php echo $senderemail ?>" onkeypress="letlevel2()" id="senderemail" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
									    			</div>		                                            
		                                        </div>		                                
	                                	</div>
	                                </div>

	                                	<div class="row">
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                        	<div class="form-group" id="name-field">
		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PHONE*</span>
									        
									        			  <input type="number" value="<?php echo $senderphone ?>" onkeypress="letlevel3()" id="senderphone" class="form-control" id="form-name" name="form-name" placeholder="PHONE.." required>
									    			</div>
		                                        </div>
		                                         
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                    	<div class="form-group" id="email-field">

		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">ADDRESS*</span>
									        
									        			 <input type="" value="<?php echo $senderaddress ?>" onkeypress="letlevel4()" id="senderaddress" class="form-control" id="form-email" name="form-email" placeholder="ADDRESS.." required>
									    			</div>		                                           
		                                        </div>
		                                        
		                                    </div>
	                                	</div>
	                        		</div>	
	                        	</div>

	                        	<!-- RECEVERS DETAILS  -->

	                        	<div class="panel panel-default">
	                        		<div class="panel panel-heading">
	                        			<h4 style="text-align: center;font-weight: bold;">RECEIVER'S DETAILS</h4>
	                        		</div>
	                        		<div class="panel-body">
	                        			 <div class="row">
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                       
		                                    	<div class="form-group" id="name-field">
		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">NAME*</span>
									        
									        			   <input value="<?php echo $recname  ?>"  type="text" onkeypress="letlevel5()" id="recname" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
									    			</div>				    			
		                                        </div>



		                                    </div>
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="email-field">
		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">E-MAIL*</span>
									        
									        			  <input value="<?php echo $recemail  ?>" type="email" onkeypress="letlevel6()" id="recemail" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
									    			</div>
		                                            
		                                        </div>
		                                    </div>
	                                	</div>


	                                	<div class="row">
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PHONE*</span>
									        
									        			   <input value="<?php echo $recphone  ?>" type="number" onkeypress="letlevel7()" id="recphone" class="form-control" id="form-name" name="form-name" placeholder="PHONE.." required>
									    			</div>
		                                             
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="email-field"> 
		                                        	<div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">ADDRESS*</span>
									        
									        			<input value="<?php echo $recaddress  ?>" type="email" onkeypress="letlevel8()" id="recaddress" class="form-control" id="form-email" name="form-email" placeholder="ADDRESS.." required>
									    			</div>	
		                                           
		                                        </div>
		                                    </div>
	                                	</div>
	                        		</div>	
	                        	</div>
	                            <!-- RECEVERS DETAILS END  -->
	                               


	                                <div class="row">

	                                	<div class="panel panel-default">
	                        		<div class="panel panel-heading">
	                        			<h3 style="text-align: center;font-weight: bold;">PACKAGE DETAILS</h3>
	                        		</div>
	                        		<div class="panel-body">
	                        			<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">ORIGIN*</span>
									        
									        			<input value="<?php echo $origin  ?>" required="yes" onkeypress="letlevel9()" id="origin"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PACKAGE*</span>
									        
									        			<input value="<?php echo $package  ?>" required="yes" onkeypress="letlevel10()" id="package"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">DESTINATION*</span>
									        
									        			<input value="<?php echo $destination  ?>" required="yes" onkeypress="letlevel11()" id="destination"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">CARRIER*</span>
									        
									        			<input value="<?php echo $carrier  ?>" required="yes" onkeypress="letlevel12()"  id="carrier"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">WEIGHT*</span>
									        
									        			<input value="<?php echo $weight ?>" required="yes" onkeypress="letlevel13()" id="weight"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">SHIPMENT MODE*</span>
									        
									        			<input value="<?php echo $shipment_mode ?>" required="yes" onkeypress="letlevel14()" id="shipmode"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PRODUCT*</span>
									        
									        			<input value="<?php echo $product ?>" required="yes" onkeypress="letlevel15()" id="product"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">QTY*</span>
									        
									        			<input value="<?php echo $qty ?>" required="yes" onkeypress="letlevel16()" id="qty"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">TOTAL FREIGHT*</span>
									        
									        			<input value="<?php echo $total_freight ?>" required="yes" onkeypress="letlevel17()" id="totalfreight"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">EXP. DEL. DATE*</span>
									        
									        			<input value="<?php echo $delivery_date ?>" required="yes" onkeypress="letlevel18()" id="expdeldate"   type="" class="form-control text-nonez"  placeholder="EXPECTED DELIVERY DATE" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	<div class="row">



	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PICK-UP DATE*</span>
									        
									        			<input value="<?php echo $pick_up_date ?>" required="yes" onkeypress="letlevel19()" id="pickupdate"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">PICK-UP TIME*</span>
									        
									        			<input value="<?php echo $pick_up_time ?>" required="yes" onkeypress="letlevel20()" id="pickuptime"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>
	                                	<div class="hidden">
	                                		<input type="" id="tracker" value="<?php echo $tracker ?>" name="">
	                                	</div>

	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">COMMENT*</span>
									        
									        			<input value="<?php echo $comment ?>" required="yes" onkeypress="letlevel21()" id="comment"   type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	
	                        		</div>	
	                        	</div>
	                                </div>
								 	<div class="row">
	                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                           <input type="submit" value="Update" id="enterdetails" class="form-control btn btn-sm btn-danger" name="">
	                                        </div>
	                                    </div>

	                                </div>
	                                 <div class="col-md-12 col-md-push-2">
											<h2 id="rst"></h2>

										</div>
	                            
	                        </div>
	                    </div>             
	    </div>
	

			
	</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			 <p>© 2022  All rights reserved <a href="https://unioffshorexpc.com">united offshore services</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="web/js/bootstrap.js"></script>
<script src="web/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="web/js/scripts.js"></script>
<script src="web/js/jquery.slimscroll.js"></script>
<script src="web/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="web/js/jquery.scrollTo.js"></script>

<script type="text/javascript">



  $(document).ready(function(){

  	

 $("#enterdetails").click(function(){
//alert("jj");
 
 var sendername=$("#sendername").val();
 var senderemail=$("#senderemail").val();
 var senderphone=$("#senderphone").val();
 var senderaddress=$("#senderaddress").val();
 var recname=$("#recname").val();
 var recemail=$("#recemail").val();
 var recphone=$("#recphone").val();
 var recaddress=$("#recaddress").val();
 var origin=$("#origin").val();
 var package=$("#package").val();
 var destination=$("#destination").val();
 var carrier=$("#carrier").val();
 var weight=$("#weight").val();
 var shipmode=$("#shipmode").val();
 var product=$("#product").val();
 var qty=$("#qty").val();
 var totalfreight=$("#totalfreight").val();
 var expdeldate=$("#expdeldate").val();
 var pickupdate=$("#pickupdate").val();
 var pickuptime=$("#pickuptime").val();
 var comment=$("#comment").val();
 var tracker=$("#tracker").val();

  // $('#comment').val("ADDINssdasG....");
              $.ajax({
                    url:'prud.php',
                    method:'POST',
                    data:{
                        sendername:sendername,
                        senderphone:senderphone,
                        senderemail:senderemail,
                        senderaddress:senderaddress,
                        recname:recname,
                        recemail:recemail,
                        recphone:recphone,
                        recaddress:recaddress,
                        origin:origin,
                        package:package,
                        destination:destination,
                        carrier:carrier,
                        weight:weight,
                        shipmode:shipmode,
                        product:product,
                        qty:qty,
                        totalfreight:totalfreight,
                        expdeldate:expdeldate,
                        pickupdate:pickupdate,
                        pickuptime:pickuptime,
                        comment:comment,
                        tracker:tracker,
                       
                       
                    },

                      beforeSend: function(){
                $('#enterdetails').val("ADDING....");
              },
                   success:function(data){
                   
                   	//$('#uplevel').effect("shake",options,800);
                   	// $('#comment').val("ADDED....");
                   	 	// alert("done");
               
                 //myfunction();
                   	$("#rst").html(data);

//$("#showme").hide();
                     }
                });

            // }

 });

 });


</script>

<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
