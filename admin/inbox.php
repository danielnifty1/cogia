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
<?php require "aside.php" ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
					 	<?php

 	$result_per_page=2;

 	$query = "SELECT* from contactus where status=1";
			$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
	 $return = mysqli_num_rows($result);
	// while ($row = mysqli_fetch_assoc($result)){
	// 	echo $row['xblogfname'].'<br>';
	// }
	 $number_of_pages = ceil($return/$result_per_page);

	 if(!isset($_GET['page'])){
	 	$page=1;
	 }else{
	 	$page=$_GET['page'];
	 }


	   $page_first_result = ($page-1)*$result_per_page; ?>

	<div class="row"  >
		<br>
		<br>

			<h4 style="text-align: center; font-weight: bold;">ALL CONSIGNMENT CREATED BY <?php echo $admin ?></h4>		
		<div class="col-md-10 col-lg-10 col-md-push-1">
			<div class="table-responsive">
				<table class="table" >
					<style type="text/css">
						th{
							font-weight: bold;
							color: black !!important;
						}
					</style>
					<tr>
						<th style="font-weight: bold;color: black; text-shadow: 2px 2px orange">Sender name</th>
					
						<th style="font-weight: bold;color: black; text-shadow: 2px 2px orange">Sender email</th>
						<th style="font-weight: bold;color: black; text-shadow: 2px 2px orange">Subject</th>
						<th style="font-weight: bold;color: black; text-shadow: 2px 2px orange">Message</th>
						<th style="font-weight: bold;color: black; text-shadow: 2px 2px orange">Action</th>
					
					

						
					</tr>

					<?php 
       //=$_SESSION['adminname'];
							$query = "SELECT* from contactus where status=1 LIMIT ".$page_first_result.','.$result_per_page."";
								$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
								$return = mysqli_num_rows($result);
						// 
							if($return ){
						
								while ($row = mysqli_fetch_assoc($result)){ 
										$email = $row["email"];
										$name = $row["name"];
										$subject = $row["subject"];
										$id = $row["id"];
										$msg = $row["msg"];														
									?>
									<tr id="show<?php echo $id ?>">
										<td style="color: black; font-weight: bold;"><?php echo $name ?></td>
										<td style="color: black; font-weight: bold;"><?php echo $email ?></td>
										<td style="color: black; font-weight: bold;"><?php echo $subject ?></td>
										<td style="color: black; font-weight: bold;"><small><?php echo $msg ?></small></td>



										<td>
								  	<input type="hidden" id="msgid<?php echo $id ?>" value="<?php echo $id ?>"  name="">
								  	
								  	<button id="delmsg<?php echo $id ?>">DELETE</button></td>
										
										
									</tr>
<h1 ></h1>
<script type="text/javascript">

  $(document).ready(function(){ 	

 $("#delmsg<?php echo $id ?>").click(function(){



 	 var msgid = $("#msgid<?php echo $id ?> " ).val();
 	
 		var retval =confirm("You are about to delete message from <?php echo $name ?>");

 		if(retval==true){


  
              $.ajax({
                    url:'pr.php',
                    method:'POST',							
                    data:{
                        msgid:msgid,                  
                       
                    },

                      beforeSend: function(){
                $('#delmsg<?php echo $id ?>').val("DELETING....");
              },
                   success:function(data){
             
                 $("#show<?php echo $id ?>").hide(500)
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
					<?php }}?>
				</table>
			</div>
		</div>	
		<div class="col-md-12 col-md-push-6 ">
<?php 

for ($page=1; $page <=$number_of_pages ; $page++) { 
		echo ' <a class="btn-sm btn-info btn" href="inbox.php?page='.$page.'">'.$page.'</a> ';
	} ?>
</div>;

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
