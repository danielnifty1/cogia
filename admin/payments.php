<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
   <?php 
   require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


     //      $checkingmsg="SELECT* FROM contactus where status=1 order by id desc";

     // $checkmsg=mysqli_query($conn,$checkingmsg);
     // $checker=mysqli_num_rows($checkmsg);

       
// $getcontact = "SELECT* from contact";
// $cresult=mysqli_query($conn,$getcontact);
// $creturn=mysqli_num_rows($cresult);
// if($creturn){
//     while($row=mysqli_fetch_assoc($cresult)){
//          $email = $row['contactemail'];
//          $phone = $row['contactphone'];
//          $office = $row['contactoffice'];
//     }
// }

	 if(isset($_GET['page'])){
	$page = $_GET['page'];
 $page;
}
 ?>
<!DOCTYPE html>
<head>
 <title>City of God Admin</title>
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
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/mercy.png" />
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
		<?php

 	$result_per_page=10;

 	$query = "SELECT* from members where status=1";
			$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
	 $tmember = mysqli_num_rows($result);
	// while ($row = mysqli_fetch_assoc($result)){
	// 	echo $row['xblogfname'].'<br>';
	// }
	 $number_of_pages = ceil($tmember/$result_per_page);

	 if(!isset($_GET['page'])){
	 	$page=1;
	 }else{
	 	$page=$_GET['page'];
	 }


	   $page_first_result = ($page-1)*$result_per_page; ?>
	<section class="wrapper">

		<div class="row"  >
			<br>
			<br>

			<h4 style="text-align: center;">All Payments</h4>		
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-md-push-0">
			<div class="table-responsive">
				<style type="text/css">
					th,td{
						color: black !important;
					}
				</style>
				<table class="table" >
					<tr>
						<th>Member ID</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Paid For</th>
						<th>Amount</th>
						<th>Date</th>
						<th>Ref</th>
						<th>ID</th>	
					</tr>

					<?php 
       			//=$_SESSION['adminname'];
							$query = "SELECT* from payment where status=0 order by id desc LIMIT ".$page_first_result.','.$result_per_page;
								$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
								$return = mysqli_num_rows($result);
						// 
				if($return ){
						
								while ($row = mysqli_fetch_assoc($result)){ 
										$name = $row["name"];
										$amount = $row["amount"];
										 
										$email = $row["email"];
										$id = $row["id"];
										$transid = $row["transid"];
										$ref = $row["ref"];
										$transdate = $row["transdate"];
										 
										$paidfor = $row["paidfor"];
										$memberid = $row["memberid"];				
									?>
									<tr id="show<?php echo $id ?>">
										<td><?php echo $memberid ?></td>
										<td><?php echo $name  ?></td>
										<td><?php echo $email ?></td>
										<td><?php echo $paidfor ?></td>
										<td>₦<?php echo number_format($amount) ?></td>
										<td><?php echo $transdate ?></td>
										<td><?php echo $ref ?></td>
										<td><?php echo $transid ?></td>

										<!-- <td><a href="moreview?id=<?php echo $id ?>" class="btn btn-small btn-info">More Details</a></td>		
										<td>
								  	<button id="delview<?php echo $id ?>">DELETE</button></td> -->
										
										
									</tr>
				<span id="rst"></span>
				<script type="text/javascript">

				  $(document).ready(function(){ 	

				 $("#delview<?php echo $id ?>").click(function(){

				 	 var viewid = $("#viewid<?php echo $id ?> " ).val();
				 	
				 		var retval =confirm("do u want to delete <?php echo $recname ?> package");

				 		if(retval==true){
				  
				              $.ajax({
				                    url:'pr.php',
				                    method:'POST',							
				                    data:{
				                        viewid:viewid,                  
				                       
				                    },

				                      beforeSend: function(){
				                $('#delview<?php echo $id ?>').val("DELETING....");
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
									<?php }}else{
										echo mysqli_error($conn);
									}?>
								</table>
							</div>
						</div>	
						<div class="col-md-12 col-md-push-6 ">
				<?php 

				for ($page=1; $page <=$number_of_pages ; $page++) { 
						echo ' <a class="btn-sm btn-info btn" href="adview.php?page='.$page.'">'.$page.'</a> ';
					} ?>
				</div>;

		</div>
	

			
	</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2022  All rights reserved <a href="https://cogiaworld.org">City Of God</a></p>
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
