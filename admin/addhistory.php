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
<section id="container">
<!--header start-->
<?php require "hd.php" ?>
<!--header end-->
<!--sidebar start-->
<?php require "aside.php"; ?>
				 <?php 

				 if(isset($_GET['cst'])){

    	$tracknum=base64_decode($_GET['cst']); 

$details="SELECT* from consigne where tracknumber= '$tracknum'";

$result=mysqli_query($conn,$details);
$return=mysqli_num_rows($result);
if($return){
while($row=mysqli_fetch_assoc($result)){
	$receiver=$row['recname'];
	$sender=$row['sendername'];
}	 ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">

		<div class="row">
	                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-push-2 ">
	                    	<h2 style="text-align: center;">ADD CONSIGNMENT HISTORY</h2>
	                    	
	                    	

	                    	<input type="hidden" id="histracknum" value="<?php echo $tracknum ?>" name="">

	                        <div class="contact-form">
	                        	<!-- <div id="snackbar">CONSIGNMENT ADDED</div> -->
	                        	
	                                <div class="row">

	                                	<div class="panel panel-danger">
	                        		<div class="panel panel-heading" style="height: auto;">
	                        			
	                        			<h3 style="text-align: centedr;font-weight: bold;">HISTORY DETAILS</h3>
	                        			<h6 style="">Track Number: <?php echo $tracknum ?></h6>


	                        			<h6>SENDER: <span style="color: skyblue; font-weight: bold;"><?php echo $sender ?></span></h6>


	                        			<h6>RECEIVER: <span style="color: skyblue; font-weight: bold;"><?php echo $receiver ?></span></h6>
	                        		</div>
	                        		<div class="panel-body">
	                        			<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">DATE*</span>
									        
									        			<input required="yes" onkeypress="history1()" id="hisdate"   type="" class="form-control "  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>

		                                 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">TIME*</span>
									        
									        			<input required="yes" onkeypress="history5()" id="histime"   type="" class="form-control "  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>   


		                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">LOCATION*</span>
									        
									        			<input required="yes" onkeypress="history2()" id="hislocation"   type="" class="form-control"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>
	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">STATUS*</span>
									        
									        			<input required="yes" onkeypress="history3()" id="hisstatus"   type="" class="form-control "  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">REMARK*</span>
									        
									        			<input required="yes" onkeypress="history4()"  id="hisremark"  type="" class="form-control"  placeholder=""   >
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
	                                           <input type="submit" value="Save" id="enterhistory" class="form-control btn btn-sm btn-info" name="">
	                                        </div>
	                                    </div>

	                                </div>
	                                 <div class="col-md-12 col-md-push-2">
											<h2 id="rst"></h2>

										</div>

										<div class="col-md-12">
											<h3 style="color:white;font-weight: bold;text-align: center;">ENTER CURRENT LOCATION</h3>
											<div class="row">
	                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                           <input type=""  id="enterlocation" class="form-control " name="">
	                                        </div>
	                                    </div>

	                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                           <input type="submit" value="Save" id="locbtn" class="form-controlD btn btn-sm btn-danger" name="">
	                                        </div>
	                                    </div>

	                                </div>

										</div>
	                            
	                        </div>
	                    </div>             
	    </div>
	    <hr>

	    <div class="row">
	    	<div class="col-md-8">

	    <div class="row">
	    		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Freight component</span>
									        
									        			<input required="yes" onkeypress="history5()" id="freightcomp"   type="" class="form-control "  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div> 

		</div>  
		<div class="row">  


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Amount</span>
									        
									        			<input required="yes" onkeypress="history2()" id="paidamount"   type="" class="form-control"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div> 

	    </div>

	    <div class="row">  


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">paid by</span>
									        
									        			<input required="yes" onkeypress="history2()" id="paidby"   type="" class="form-control"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div> 

	    </div>

	    	<div class="row">  


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        											        
									        			<button class="btn btn-info btn-sm" id="paidenter">Enter</button>
									    			</div>
		                                        </div>
		                                    </div> 

	    	</div>

	    </div>


	    <div class="col-md-4" style="height:250px; overflow-y:scroll ;">
	    	<div id="getshow">
	    		<table class="table">
				<tr>
					
					<th>freight</th>
					<th>Amount</th>
					<th>Paid</th>
					<th>Delete</th>
				</tr>
				<?php 
				$ges="SELECT* FROM freight where trackid='$tracknum' and status=0";
				$rst=mysqli_query($conn,$ges);
				$rtn=mysqli_num_rows($rst);
				if($rtn){
					while($row=mysqli_fetch_assoc($rst)){
						$freightcomp=$row['freightcomp'];
						$paidamount=$row['paidamount'];
						$paidby=$row['paidby'];
						$id=$row['id'];

						 ?>

							<tr id="hid<?php echo $id ?>">
								<td><?php echo $freightcomp ?></td>
								<td><?php echo $paidamount ?></td>
								<td><?php echo $paidby ?></td>
								<td><button class="btn btn-sm btn-danger" id="delfrieght<?php echo $id ?>">Delete<?php echo $id ?></button></td>
							</tr>

									<script type="text/javascript">



  $(document).ready(function(){

 $("#delfrieght<?php echo $id ?>").click(function(){


  var deltrack="<?php echo $id ?>";

// alert(deltrack);


  // $('#comment').val("ADDINssdasG....");
              $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        deltrack:deltrack,
                    
                    },

                      beforeSend: function(){
                $('#delfrieght<?php echo $id ?>').val("SAVING....");
              },
                   success:function(data){
                   
                   	$('#hid<?php echo $id ?>').hide();
                   	// $('#comment').val("ADDED....");
                   	 	// alert("done");
               
                 //myfunction();
                   	// $("#getshow").html(data);

//$("#showme").hide();
                     }
                });

            // }

 });
 });

</script>



					<?php }
				}
			?>

				
			</table>

	    		
	    	</div>
	    </div>
	</div>
	
<?php }else{
	// echo "<script>alert('Track Number not found');location.replace('iview') </script>";
}

}else{
	echo "<script>location.replace('iview') </script>";
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
      
       $("#paidenter").click(function(){
 
 var paidby=$("#paidby").val();

 var paidamount=$("#paidamount").val();
 var freightcomp=$("#freightcomp").val();

  var trackid="<?php echo $tracknum ?>";

// alert(trackid);


  // $('#comment').val("ADDINssdasG....");
              $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        freightcomp:freightcomp,
                        paidamount:paidamount,
                        paidby:paidby,
                        trackid:trackid,
                        
                     
                       
                       
                       
                    },

                      beforeSend: function(){
                $('#paidenter').val("SAVING....");
              },
                   success:function(data){
                   
                   	//$('#uplevel').effect("shake",options,800);
                   	// $('#comment').val("ADDED....");
                   	 	// alert("done");
               
                 //myfunction();
                   	$("#getshow").html(data);

//$("#showme").hide();
                     }
                });

            // }

 });


  	

 $("#enterhistory").click(function(){
// alert("jj");
 
 var hisdate=$("#hisdate").val();
 var histime=$("#histime").val();
 var hislocation=$("#hislocation").val();
 
 var hisstatus=$("#hisstatus").val();
 var hisremark=$("#hisremark").val();
 var histracknum=$("#histracknum").val();


  // $('#comment').val("ADDINssdasG....");
              $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        hisdate:hisdate,
                        histime:histime,
                        
                        hislocation:hislocation,
                       
                        hisstatus:hisstatus,
                         hisremark:hisremark,
                         histracknum:histracknum,
                       
                       
                       
                    },

                      beforeSend: function(){
                $('#enterhistory').val("SAVING....");
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














 $("#locbtn").click(function(){
// alert("jj");
 
 var enterlocation=$("#enterlocation").val();

 var loctracknum="<?php echo $tracknum ?>";


  // $('#comment').val("ADDINssdasG....");
              $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        enterlocation:enterlocation,
                        loctracknum:loctracknum,
                        
                     
                       
                       
                       
                    },

                      beforeSend: function(){
                $('#locbtn').val("SAVING....");
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
