<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        
    if(isset($_SESSION['photosession'])){

    $eventid= $_SESSION['photosession'];

  }else{
             echo'<script>location.replace("photo_gallary")</script>';
        }

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
</head>
<body>
<section id="container">
<!--header start-->
<?php require "hd.php";
$autoPin= rand(1000, 2000); 
$autoPin2= rand(100, 200); 


$autoPin3= rand(1, 9);
$ref="MDT".$autoPin3."F".$autoPin2."D";

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
                    
                   
                       <h4 class="wow tada" style="text-align:center;color: dodgerblue;font-weight: bold; margin-top: 5px;padding-top: 15px;"> Upload File(image,audio,doc) </span>
                        
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

                  <div class="row">

                    <div class="col-md-12  col-xs-12 col-sm-12 ">

                   		 <form id="form" action="pro.php" method="post" enctype="multipart/form-data">
	                      <!-- <input type="hiddden" name="name" value="<?php echo $userid ?>">
	                        <input type="hiddden" name="tok" value="<?php echo $da ?>"> -->
	                         <div class="contaeiner"  style="margin-top:3px;margin-bottom: 5px; cursor: pointer;">
                              <div class="container">
                                
                                <span id="pport"></span>
                              <div class="row" id="preview">

                                

                              </div>
                              </div>
                           <!--  -->

                              	<div class="input-group">
		                            <span class="input-group-addon" style="font-weight:bold">
		                              <span class="fa fa-udser">Name</span>
		                            </span>
		                            <input required onkeypress="addnumber1()"   id="title" name="title"     type="" class="form-control"  placeholder="Title"  >
		                        </div>
                              <div class="row">
                              

                             		<div class="col-md-2">
                              			<input type="file" id='files' name="files[]" multiple style=""    type="file" accept=".mp3,.jpg,.png,.pdf,.doc,.docx">
                          			</div>
                          			</div>

                          			<br>
                          			
                             
                                <div class="hiddfen">
                                  
                             <input type="submit" id="upsubmit" value="Upload" name="">
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
    $(document).ready(function (e) {
 		$("#form").on('submit',(function(e) {
  		// alert("dd");
  		e.preventDefault();
 		 $.ajax({
	         url: "fileupload.php",
	   type: "POST",
	   data:  new FormData(this),
	   contentType: false,
	         cache: false,
	   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();pport
    $("#pport").html("UPLOADING....");
    $("#err").fadeOut();
   },
   success: function(data){
    if(data=='invalid'){
    $("#pport").html("ERROR OCCURED....");
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }else{
    $("#pport").html("UPLOADED");
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));

 
 
});
</script>
















<script type="text/javascript">
    $(document).ready(function() {


  var fade_out=function(){

      $("#msgtext").fadeOut("slow");
    }
    setTimeout(fade_out,3000);




     $("#up").click(function(){
       // alert("hjjh");

 
var acct="<?php echo $acct ?>";
var fname=$("#fname").val();

var lname=$("#lname").val();
var mname=$("#mname").val();
var username=$("#username").val();
var currency=$("#currency").val();






     $.ajax({
                    url:'adproc.php',
                    method:'POST',
                    data:{
                        acct:acct,
                        fname:fname, 
                        lname:lname, 
                        mname:mname, 
                   
                    

                    },

                      beforeSend: function(){
                   $("#up").html("Creating Account....");

               // $('#login').val("CONNECTING....");
              },
                   success:function(data){
                   // $('#up').html("CREATED");
                   
                    $("#rst").html(data);


                     }
                }); 

 }
 )

 
   

 });


$("#firstimg").on('change',function() {
  // alert("ss");
$("#upsubmit").click();

// upsubmit
})
</script>
	<script type="text/javascript">
    $(document).ready(function (e) {
   $("#firstimg").on('change',function() {
  // alert("ss");
$("#upsubmit").click();

// upsubmit
});

   // ============================================

    $("#formb").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "eventproc.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();pport
   
    $("#err").fadeOut();
   },
   success: function(data){
  	 $("#preview").html(data).fadeIn();
     $("#formb")[0].reset(); 
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));

   // =============================================
 


// =================================================================
// =================================================================
// =================================================================

 
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
