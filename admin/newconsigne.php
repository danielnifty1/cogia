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
<title>United Offshore ADMIN DASHBOARD</title>
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
</style>
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

		<div class="row">
	        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-push-2 ">
	                    

	                                <div class="row">

	                                	<div class="panel panel-default">
	                        		<div class="panel panel-heading">
	                        			<h3 style="text-align: center;font-weight: bold;">CONSIGNMENT DETAILS</h3>
	                        		</div>
	                        		<div class="panel-body">
	                        			<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Sender Name*</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="name"   type="" class="form-control text-nonez"  placeholder="" >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Rec. Name*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="shipper"   type="" class="form-control text-nonez"  placeholder="" >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Sender Address*</span>

									        			<textarea required="yes" onkeypress="letlevel11()" id="consignee"   type="" class="form-control text-nonez"  placeholder="" >
									        				
									        			</textarea>
									        
									        			<!-- <input required="yes" onkeypress="letlevel11()" id="consignee"   type="" class="form-control text-nonez"  placeholder=""  > -->
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Rec. Address owner:*</span>

									        			<textarea required="yes" onkeypress="letlevel12()"  id="references"  type="" class="form-control text-nonez"  placeholder="">
									        				
									        			</textarea>
									        
									        			<!-- <input required="yes" onkeypress="letlevel12()"  id="references"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  > -->
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Sender Phone:</span>
									        
									        			<input required="yes" onkeypress="letlevel13()" id="party1"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Rec. Phone:</span>
									        
									        			<input required="yes" onkeypress="letlevel14()" id="party2"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Sender Email:*</span>
									        
									        			<input required="yes" onkeypress="letlevel15()" id="contactemail"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Rec. Email:</span>
									        
									        			<input required="yes" onkeypress="letlevel16()" id="recemail"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>
	                                	<hr>
	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of issue*</span>
									        
									        			<input required="yes" onkeypress="letlevel16()" id="placeofissue"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Voyage Number*</span>
									        
									        			<input required="yes" onkeypress="letlevel18()" id="voyagenumber"   type="" class="form-control text-nonez"  placeholder="EXPECTED DELIVERY DATE"  >
									    			</div>
		                                        </div>
		                                    </div>    

                          
	                                	</div>



	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Port of loading:*</span>
									        
									        			<input required="yes" onkeypress="letlevel19()" id="portofload"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Port of discharge*</span>
									        
									        			<input required="yes" onkeypress="letlevel20()" id="portofdischarge"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of receipt:*</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="placeofreceipt"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of Delivery:*</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="placeofdeliv"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>

	                                		



	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Container number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="containernumber"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Seal Number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="sealnumber"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Other Seal Number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="otherseal"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Container size/type:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="containersize"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">No. of packages:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="numberofpackage"   type="" class="form-control text-nonez"  placeholder=""    >
									    			</div>
		                                        </div>
		                                    </div>

		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Cargo description:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="cargodescript"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Gross Weight:*</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="weight"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Volume:*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="volume"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Total Freight:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="tfreight"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Exp Del Date:*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="expdel"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>





	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Departure Time:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="deptime"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Pick-up Date*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="pickdate"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>



	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Pick-up Time:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="picktime"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Comments*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="comment"   type="" class="form-control text-nonez"  placeholder=""   >
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
	                                           <input type="submit" value="Save" id="enterdetails" class="form-control btn btn-sm btn-info" name="">
	                                        </div>
	                                    </div>

	                                </div>
	                                 <div class="col-md-12 col-md-push-0">
											<h5 style="text-align: center; color: orange; font-weight: bold;" id="rst"></h5>

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

 
 var name=$("#name").val();
 var shipper=$("#shipper").val();
 var consignee=$("#consignee").val();
 var references=$("#references").val();
 var party1=$("#party1").val();
 var party2=$("#party2").val();
 var contactemail=$("#contactemail").val();
 var placeofissue=$("#placeofissue").val();
 var vessel=$("#vessel").val();
 var voyagenumber=$("#voyagenumber").val();
 var portofload=$("#portofload").val();
 var portofdischarge=$("#portofdischarge").val();
 var placeofreceipt=$("#placeofreceipt").val();
 var placeofdeliv=$("#placeofdeliv").val();
 var containernumber=$("#containernumber").val();
 var sealnumber=$("#sealnumber").val();
 var otherseal=$("#otherseal").val();
 var containersize=$("#containersize").val();
 var numberofpackage=$("#numberofpackage").val();
 var cargodescript=$("#cargodescript").val();
 var weight=$("#weight").val();
 var volume=$("#volume").val(); 

 var tfreight=$("#tfreight").val();
 var expdel=$("#expdel").val(); 

 var deptime=$("#deptime").val();
 var picktime=$("#picktime").val();

  var comment=$("#comment").val();
 var pickdate=$("#pickdate").val();
 var recemail=$("#recemail").val();

  // $('#weight').val("ADDINssdasG....");
              $.ajax({
                    url:'consign.php',
                    method:'POST',
                    data:{
                        name:name,
                        consignee:consignee,
                        shipper:shipper,
                        references:references,
                        party1:party1,
                        party2:party2,
                        contactemail:contactemail,
                        placeofissue:placeofissue,
                        vessel:vessel,
                        voyagenumber:voyagenumber,
                        portofload:portofload,
                        portofdischarge:portofdischarge,
                        placeofreceipt:placeofreceipt,
                        placeofdeliv:placeofdeliv,
                        containernumber:containernumber,
                        sealnumber:sealnumber,
                        otherseal:otherseal,
                        containersize:containersize,
                        numberofpackage:numberofpackage,
                        cargodescript:cargodescript,
                        weight:weight,
                        volume:volume,

                         tfreight:tfreight,
                        expdel:expdel,

                        deptime:deptime,
                        picktime:picktime,

                           comment:comment,
                        pickdate:pickdate,
                        recemail:recemail,
                       
                       
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
