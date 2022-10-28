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

</head>
<body>
<section id="container" >
<!--header start-->
<?php require "hd.php" ?>
<!--header end-->
<!--sidebar start-->
<?php require "aside.php" ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content" style="background: none;">
	<section class="wrapper" style="background: none;">
							<?php 
	if(isset($_GET['rcp'])){
		$ba=$_GET['rcp'];
		$rcp= base64_decode($_GET['rcp']);

$details="SELECT* from consigne where tracknumber= '$rcp'";

$na="http://seaportmover.com/track-package?trk=".$ba;
// Include qrcode.php file.

// require "qrcode.php";
// Create object
// $qc = new QRCODE();
// Create Text Code
// $qc->URL("$na");
// Save QR Code
// $qc->QRCODE(400,"$rcp.png");








$result=mysqli_query($conn,$details);
$return=mysqli_num_rows($result);
if($return){
	while($row=mysqli_fetch_assoc($result)){
		$name=$row['name'];
		$tracknumber=$row['tracknumber'];
		$refnumber=$row['refnumber'];
		$shipper=$row['shipper'];
		$companyref=$row['companyref'];
		$consignee=$row['consignee'];
		$refowner=$row['refowner'];
		$notifyparty1=$row['notifyparty1'];
		$notifyparty2=$row['notifyparty2'];
		$contactemail=$row['contactemail'];
		$placeofissue=$row['placeofissue'];
		$placeofissue=$row['placeofissue'];
		$vessel=$row['vessel'];
		$voyagenumber=$row['voyagenumber'];
		$portofload=$row['portofload'];
		$portofdischarge=$row['portofdischarge'];
		$placeofreceipt=$row['placeofreceipt'];
		$placeofdelivery=$row['placeofdelivery'];
		$containernumber=$row['containernumber'];
		$sealnumber=$row['sealnumber'];
		$othersealnumber=$row['othersealnumber'];
		$weight=$row['weight'];
		$volume=$row['volume'];
		$containertype=$row['containertype'];
		$cargodiscription=$row['cargodiscription'];
		$numberofpackage=$row['numberofpackage'];
		$sednumber=$row['sednumber'];
		$scaccode=$row['scaccode'];
		
	}
if($companyref==0){

	$companyref="NOT Cleared";
}elseif($companyref==1){
	$companyref="Cleared";
}


		?>
		<script >
			function Clickheretoprint(){ 
			  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
			      disp_setting+="scrollbars=yes"; 
			  var content_vlue = document.getElementById("print_content").innerHTML; 
			  
			  var docprint=window.open("","",disp_setting); 
			   docprint.document.open(); 
			   docprint.document.write('<html><head><title>United Offshore services-<?php echo $tracknumber ?></title><link rel="stylesheet" href="web/css/bootstrap.min.css">'); 
			   docprint.document.write('<style>body{width:100%;}</style></head><body onLoad="self.print()" style="width: 100%; font-size:12px; font-family:arial;">');          
			   docprint.document.write(content_vlue);          
			   docprint.document.write('</body></html>'); 
			   docprint.document.close(); 
			   docprint.focus(); 
			}
</script>
		<input type="hidden"  id="datetrack" value="<?php echo $rcp ?>" name="">
<style type="text/css">
	
</style>

	<div  class="container-fluid" >
		<div id="print_content"  class="col-md-11 col-xs-12 col-sm-12 col-md-push-0 table-responsive "  >

			<table class="table" style="border:1px solid black;">
				
				<tr>
					<td style="width:500px;border-top: 1px solid black;">
						<img src="../assets/images/united.png">
					</td>
					<td style="width: 500px;border-left: 1px solid black;border-top: 1px solid black; text-align:center;">
						<h3 style="font-weight:bold;color:black;">United Express Shipping Instruction</h3>
						<p style="text-align:center;color:black;;">(All information are provided by sender)</p>
					</td>
				</tr>
			</table>

			<table class="table" style="border:0px solid black;">
				<tr >
					<td style="width: 1500px;border-top: 1px solid black;">
						<h4 style="color:black;font-weight:bold;text-align:center">Shipping Instruction submitter (who should After Ship contact in case of inquiries to this document)</h4>
					</td>
				</tr>
				
			</table>


			<table class="table" style="border:1px solid black; ">
				<tr style="border:1px solid black !important;">
					<td style="width:500px;color: black;border:1px solid black;"><h4><span>Name:</span><?php echo $name ?> </h4> </td>
					<td style="width:500px;border: 1px solid black;color: black;"><h4><span>Carrier Reference No:</span><?php echo $refnumber ?> </h4> </td>
				</tr>

				<tr style="border:1px solid black ;">
					<td style="width:500px;color: black;border: 1px solid black"><h4><span>Shipper:</span><?php echo $shipper ?> </h4> </td>
					<td style="width:500px;border-left: 1px solid black;color: black; border-bottom: 1px solid black;"><h4><span>Tracking Number::</span><?php echo $tracknumber ?> </h4> </td>
				</tr>
			</table>

			<table class="table">
				<tr style="border:1px solid black !important;">
					<td style="width:500px;color: black;border: 1px solid black"><h4><span>Consignee:<p></span><?php echo $consignee ?> </h4> </td>

					<td style="width:250px;border-left: 1px solid black !important; color: black; border: 1px solid black;">	<h4><span>Company references:</span><?php echo $companyref ?> </h4>
					 </td>
					<td style="width:250px;border: 1px solid black !important; color: black; border-bottom: 1px solid black;"><h4><span>References owner:</span><?php echo $refowner ?> </h4> </td>
				</tr>

				<tr style="border:1px solid black ;">
					<td style="width:500px;color: black;border: 1px solid black"><h4><span>Notify party 1:</span><?php echo $notifyparty1 ?> </h4> </td>
					<td style="width:500px;border: 1px solid black;color: black; border-bottom: 1px solid black;"><h4><span>Notify party 2:</span><?php echo $notifyparty2 ?> </h4> </td>
				</tr>

				<tr style="border:1px solid black ;">
					<td style="width:500px;color: black;border: 1px solid black"><h4><span>Service Contact Email:</span> </h4> </td>
					<td style="width:500px;border: 1px solid black;color: black; border-bottom: 1px solid black;"><h4><span><?php echo $contactemail ?></span> </h4> </td>
				</tr>
				


				<tr style="border:1px solid black ;">
					<td style="width:500px;color: black;border: 1px solid black"><h6><span>Onward inland routing (Not part of precarriage for account and risk of merchant)</span> </h6> </td>

					<td style="width:500px;border: 1px solid black;color: black; border-bottom: 1px solid black;"><h4><span>Place of issue:<p><?php echo $placeofissue ?></span> </h4> </td>
				</tr>

			</table>

			<table class="table">
				<tr style="border:1px solid black border: 1px solid black">
					<td style="width:500px;color: black;border: 1px solid black">
						<h6>Vessel:<span><?php echo $vessel ?></span> </h6> 
					</td>

					<td style="width:500px;border: 1px solid black;color: black; border-bottom: 1px solid black;">

						<h4>Voyage Number:<span><p><?php echo $voyagenumber ?></span> </h4> 
					</td>

					<td style="width:500px;color: black;border: 1px solid black">
						<h6>Place of receipt:<span><?php echo $placeofreceipt ?></span> </h6> 
					</td>				
					
				</tr>

				<tr style="border:1px solid black ;">
					<td style="width:500px;color: black;border: 1px solid black">
						<h6>Port of loading:<span><?php echo $portofload ?></span> </h6> 
					</td>

					<td style="width:500px;border: 1px solid black;color: black; border-bottom: 1px solid black;">

						<h4>Port of discharge:<span><p><?php echo $portofdischarge ?></span> </h4> 
					</td>

					<td style="width:500px;color: black;border: 1px solid black">
						<h6>Place of delivery:<span><?php echo $placeofdelivery ?></span> </h6> 
					</td>				
					
				</tr>
			</table>
			<h4 style="text-align:center;color: black;font-weight: bold;"><u>Particulars as furnished by shipper – Carrier not responsible</u></h4>

			<table class="table">
				<tr style="border:1px solid black ;">
					<thead style="border:1px solid black">
						<td style="color:black;font-weight: bold;border:1px solid black">Container number:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Seal Number:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Other Seal Number:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Container size/type:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">No. of packages:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Cargo description:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Marks & Number:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Gross Weight:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Volume:</td>
					</thead>
				</tr>

				<tr>
					<td style="color:black;border:1px solid black"><?php echo $containernumber ?></td>
					<td style="color:black;border:1px solid black"><?php echo $sealnumber ?></td>
					<td style="color:black;border:1px solid black"><?php echo $othersealnumber ?></td>
					<td style="color:black;border:1px solid black"><?php echo $containertype ?></td>
					<td style="color:black;border:1px solid black"><?php echo $numberofpackage ?></td>
					<td style="color:black;border:1px solid black"><?php echo $cargodiscription ?></td>
					<td style="color:black;border:1px solid black"></td>
					<td style="color:black;border:1px solid black"><?php echo $weight ?></td>
					<td style="color:black;border:1px solid black"><?php echo $volume ?></td>
				</tr>
				
			</table>



				<h4 style="text-align:center;color: black;font-weight: bold;"><u>Documentation printing instructions</u></h4>

			<table class="table" style="border:1px solid black ;">
				<tr style="border:1px solid black ;">
					<thead style="border:1px solid black ;">
						<td style="color:black;font-weight: bold;border:1px solid black">Number of original and copy Transport Documents required</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Shipped on board Transport Document</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Shipped on board waybill</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Shipped on board waybill</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Received for shipment waybill</td>
						
					</thead>
				</tr>

				<tr style="border:1px solid black ;">
					<td style="color:black;border:1px solid black">12</td>
					<td style="color:black;border:1px solid black">011</td>
					<td style="color:black;border:1px solid black">002</td>
					<td style="color:black;border:1px solid black">20ft (6.09m)</td>
					<td style="color:black;border:1px solid black">2</td>
					
				</tr>
				
			</table>


					<h4 style="text-align:center;color: black;font-weight: bold;"><u>Specific for shipments to and from ASIA, AUSTRALIA, EUROPE, UK and USA</u></h4>

			<table class="table" style="border:1px solid black ;">
				<tr style="border:1px solid black ;">
					<thead style="border:1px solid black ;">
						<td style="color:black;font-weight: bold;border:1px solid black">SED/AES Number:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">SCAC Code:</td>
						
						
					</thead>
				</tr>

				<tr style="border:1px solid black ;">
					<td style="color:black;border:1px solid black"><?php echo $sednumber ?></td>
					<td style="color:black;border:1px solid black"><?php echo $scaccode ?></td>
					
					
				</tr>
				
			</table>
			
			<h4 style="text-align:center;color: black;font-weight: bold;"><u>Payments</u></h4>

			<table class="table" style="border:1px solid black ;">
				<tr style="border:1px solid black ;">
					<thead style="border:1px solid black ;">
						<td style="color:black;font-weight: bold;border:1px solid black">Freight Component:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">Prepared Payment:</td>
						<td style="color:black;font-weight: bold;border:1px solid black">To be paid by:</td>
						
						
					</thead>
				</tr>

				<?php 
				$ges="SELECT* FROM freight where trackid='$rcp' and status=0";
				$rst=mysqli_query($conn,$ges);
				$rtn=mysqli_num_rows($rst);
				if($rtn){
					while($row=mysqli_fetch_assoc($rst)){
						$freightcomp=$row['freightcomp'];
						$paidamount=$row['paidamount'];
						$paidby=$row['paidby']; ?>


						<tr style="border:1px solid black ;">
								<td style="color:black;border:1px solid black"><?php echo $freightcomp ?></td>
								<td style="color:black;border:1px solid black"><?php echo $paidamount ?></td>
								<td style="color:black;border:1px solid black"><?php echo $paidby ?></td>
							</tr>


					<?php }
				}
			?>


				
			</table>

			<div class="row">
				<div class="col-md-6 col-sm-6 col-md-push-6">
					<img src="images/stamp.png" style="width: 250px;height: 150px;">

					<br>
					<br>

					<h3>Mr. Hesamani Henshow</h3>

					<span style="text-align:centedr;">(Dir. Shipments)</span>
				</div>
				
			</div>


		</div>
	</div>
<a class="btn btn-danger" href="javascript:Clickheretoprint()">Print</a>

<?php }else{
	echo "<script>alert('Track Number not found');location.replace('view') </script>";
}


}else{
	echo "<script>location.replace('view') </script>";
} ?>
	
	

			
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

 $("#dateenter").click(function(){


 	 var datetrack = $("#datetrack" ).val();
 	 var dateid = $("#dateid" ).val();
 	  // $("#showdate").val(dateid);

$.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        datetrack:datetrack,
                        dateid:dateid,
                                         
                    },

                      beforeSend: function(){
               // $('#enterdetails').val("ADDING....");
              },
                   success:function(data){
                  
                   	$("#showdate").html(data);

//$("#showme").hide();
                     }
                });
 
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
