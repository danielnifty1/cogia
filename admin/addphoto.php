<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        
$result_per_page=10;

 	$query = "SELECT* from events where status!=1";
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


	   $page_first_result = ($page-1)*$result_per_page;


       // $eventid="event-".rand(20348,90039);
?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- <script src="js/jquery-1.11.1.min.js"></script> -->

</head>
<body>
<section id="container">
<!--header start-->
<?php require "hd.php";
$autoPin= rand(1000, 2000); 
$autoPin2= rand(100, 200); 


$autoPin3= rand(1, 9);
$eventid="MDT".$autoPin3."F".$autoPin2."D";

 ?>
<!--header end-->
<!--sidebar start-->
<?php require "aside.php" ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	
		<div style="height: 1650px;" class="right_col" role="main" >
            <div class="col-md-8   col-xs-12 col-sm-12 col-md-push-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    
                   
                       <h4 class="wow tada" style="text-align:center;color: dodgerblue;font-weight: bold; margin-top: 5px;padding-top: 15px;">Add Photos
                        
                      </h4>
                      <h5  class="wow tada" id="msgtext" style="color: dodgerblue;text-align: center;"><?php

			          if(isset($_GET['msg'])){
			            $msgs=$_GET['msg'];

			            echo $msgs;
			          }?>

         			 </h5>
                  </div>
               	

                <div class="panel-body">
                  <div class="row">
                    <center class="center">

                      <img  id="myimage" style="height: auto; width:150px;margin: auto;border-radius: 10px">
                    </center>
                    <br>
                  </div>

                  <div class="row" id="showcreate">
                  	<h4 class="text-center">Create Gallary</h4>
                                <div class="col-md-8 col-md-push-2 justify-content-center">
                                <br>
		                          <form id="newgallary"   action="newgallary.php" method="post" enctype="multipart/form-data">
                                 <center>
                                <input type="" name="eventid" value="<?php echo $eventid ?>" style="display: none;">
                                	 <div class="input-group">
		                            <span class="input-group-addon" style="font-weight:bold">
		                              <span class="fa fa-instdagram" style="color:pink;">Gallary name</span>
		                            </span>
		                            	
		                            <input  onkeypress="addnumber1()"   id="gname" name="gname"   required    type="" class="form-control"     >

		                          
		                        </div>
		                           </center>	
		                        <center>
		                        	<button id="create" class="btn btn-sm btn-warning">Create</button>
                              <button id="create2" style="display:none" class="btn btn-sm btn-warning">Create <span class="fa fa-spin fa-spinner"></span></button>
		                            
		                        </center>
                              </form>
		                        </div>
                                	
                    </div>

                    <h4 class="text-center" id="suc"></h4>
                    <hr>


                  <div class="row" id="nextstage" style="display:none">

                    <div class="col-md-12  col-xs-12 col-sm-12">

                    <form id="form" action="pro.php" method="post" enctype="multipart/form-data" >
                      <input type="hidden" name="pid" value="<?php echo $ref ?>">
                         <div class="container"  style="margin-top:3px;margin-bottom: 5px; cursor: pointer;">
                              <div class="container">
                                
                                <span id="pport"></span>
                              <div class="row" id="preview">
                              </div>
                              </div>
                              <label for="firstimg">
                                <img id="pv" src="images/click.jpg" style="width:80px;height: 80px;">
                                    <!-- <i class="fa fa-plus" style="font-size: 24px; border:1px solid black; padding:25px"></i> -->
                              </label>

                               <input type="file" id='firstimg' name="files[]" multiple style="display: none; visibility: none;"    type="file" accept="image/*" >
                                <!--  <input type="file" name="file_name[]" id="firstimg" style="display: none; visibility: none;" class="form-control" accept=".jpg,.jpeg,.png,.webp"  multiple> -->
                                
                               
 
                                <div class="hidden">
                                 
                             <input type="submit" id="upsubmit" value="submit" name="">
                                </div>
                            </div>
                    </form>

                     <!-- =  ======================================================================================================== -->
                                         
                         <div id="rst">
   
                                </div> 
                          <h6 id="addnumbererror"></h6>


                        <!-- ========================================================================================================= -->
                      
                    </div>

                    
                  </div>
                  
                </div>
                
              </div>
            </div> 
 
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
<script type="text/javascript">
    $(document).ready(function() {


  var fade_out=function(){

      $("#msgtext").fadeOut("slow");
    }
    setTimeout(fade_out,3000);

$("#firstimg").on('change',function() {
  alert("ss");
$("#upsubmit").click();

// upsubmit
})
</script>


   // ============================================

    $("#newgallary").on('submit',(function(e) {
      // alert("newgallarynewgallary");    
  e.preventDefault();
  $.ajax({
         url: "newgallary.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {

      create.style.display="none"
      create2.style.display="block"
    //$("#preview").fadeOut();pport
   
    $("#err").fadeOut();
    alert("eventid");
   },
   success: function(data){
    create.style.display="block"
      create2.style.display="none"
     $("#preview").html(data).fadeIn();
     $("#newgallary")[0].reset(); 
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));

  
});
</script>
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
