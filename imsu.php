   <?php
require"connection.php" ;
session_start();
   if(isset($_SESSION['payamount'])){
 	
			unset($_SESSION['payamount']);
			unset($_SESSION['temail']);
			unset($_SESSION['paytype']);
			unset($_SESSION['tfirstName']);
			unset($_SESSION['tphone']);




					}
   if(isset($_SESSION['payref'])){
   	$payref=$_SESSION['payref'];
$sec="SELECT* FROM payment where ref ='$payref'";

$rest=mysqli_query($conn,$sec);
$rch=mysqli_num_rows($rest);

if($rch){
	while($row=mysqli_fetch_assoc($rest)){
		$shown=$row['shown'];
		$paidfor=$row['paidfor'];
		$amount=$row['amount'];
	}
}
   }
    ?>
 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>City Of God Int'l Assembly</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="web/css/font-awesome.css">
       <link rel="shortcut icon" type="image/x-icon" href="assets/images/mercy.png" />

</head>


<body>
    <!-- header -->
<?php
    require "header.php";
    require "modals.php";

    ?>
	
	<!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Be a Member</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Be a Member</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <?php

    if(isset($_SESSION['payref']) and $shown==0){
    	?>
<div class="row">

<!-- <button onclick=";">Try it</button>
 -->
<script>
setTimeout(myFunction, 10000)

function myFunction() {
	$("#rm").click();


  // alert('Hello');

}
</script>



	<div class="col-lg-6 col-md-6 mt-4 offset-md-3 offset-xl-3 off-sm-0 offset-xs-0 col-sm-4 col-xs-4">
		<div class="alert alert-warning alert-dismissible fade show">
    <button type="button" id="rm" class="btn-close" data-bs-dismiss="alert"></button>
    <h6 class="mb-2" style="text-align:center;font-weight: bold;color:orange"><?php echo "₦".number_format($amount). " for ". $paidfor. " Received Successfully" ?></h6>
  </div>
	</div>
</div>

<?php

$up="UPDATE payment set shown=1 where ref='".$payref."'";
$upr=mysqli_query($conn,$up);
 } ?>
    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5 mb-lg-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-8 col-md-8 position-relative home-block-3-left pb-lg-0 pb-5">
                     <div class="col-lg-12">
                    <main >
                    	
                            <div class="row g-6" id="previewd">

                                                 <div class="col-md-7 col-lg-8 offset-md-2 border-2" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 10px; background:rgb(237 237 237 / 10%);">
                                    <br>
                                    <h4 class="mb-3" style="text-align:center;">Share Today</h4>
                                    

                                     <h6 class="mb-2" style="text-align:center" id="previefw" style="font-weight: bold;"></h6>
                                     <div id="preview">
                                     	
                                     </div>
                                     <div id="showdefault">
                                     	
                                     
		                                    <form id="form" action="payment" method="post" class="needs-validation" >
		                                    	<div class="row">
		                                    		<span data-bs-toggle="modal" data-bs-target="#myModal" id="member" style="font-weight:bold;color:#f14040;cursor: pointer;">Click here if you already have Member ID</span>
		                                    		<hr class="my-4">
		                                    		<h4 class="mt-2" id="showname"></h4>
		                                    	</div>
		                                    	<br>

		                                      <div class="row g-3">

		                                      	<div id="showinput">
		                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
		                                          <label for="firstName" class="form-label">Name</label>
		                                          <input  type="text" class="form-control" name="tfirstName" id="tfirstName" placeholder="" value="" required>
		                                          
		                                        </div>

		                                        <div class="d-none">
		                                        	
		                                        <input type="" name="mid" id="mid">
		                                        </div>
		                                        

		                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
		                                          <label for="phone" class="form-label">Phone</label>
		                                          <div class="input-group has-validation">
		                                            <!-- <span class="input-group-text">@</span> -->
		                                            <input type="number" class="form-control" name="tphone" id="tphone" placeholder="+23490XXXXXXXX" required>
		                                          <div class="invalid-feedback">
		                                              Your username is required.
		                                            </div>
		                                          </div>
		                                        </div>

		                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
		                                          <label for="email" class="form-label">Email </label>
		                                          <input type="email" class="form-control" name="temail" id="temail" placeholder="you@example.com" required>
		                                          <div class="invalid-feedback">
		                                            Please enter a valid email address for shipping updates.
		                                          </div>
		                                        </div>
		                                  		</div>

		                                  		<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
		                                          <label for="email" class="form-label">Payment Type </label>
		                                          <select class="form-control" name="paytype" id="paytype" required >
		                                          					<option value="">Select Payment</option>
		                                          					<option value="Dormitory Development Donation">Dormitory Development Donation</option>
                                        							<option value="Convention Offering">Convention Offering</option>
                                        							<option value="Thanksgiving Offering">Thanksgiving Offering</option>
                                        							<option value="New Auditorium Building">New Auditorium Building</option>
                                        							<option value="Children Auditorium Donations">Children Auditorium Donations</option>
                                        							<option value="Holy Ghost Service">Holy Ghost Service</option>
                                        							<option value="Online Tithes">Online Tithes</option>
                                        							<option value="IT Donations">IT Donations</option>
                                        							
                                        							<option value="FirstFruit">FirstFruit</option>
                                        							<option value="Support African Mission">Support African Mission</option>
                                        							<option value="Holyghost Congress Offering">Holyghost Congress Offering</option>
                                        							<option value="Gift To Daddy GO">Gift To Daddy GO</option>
                                        							<option value="FloodGates Of Heaven Seed">FloodGates Of Heaven Seed</option>	
		                                          </select>
		                                          <div class="invalid-feedback">
		                                            Please enter a valid email address for shipping updates.
		                                          </div>
		                                        </div>

		                                         <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
		                                          <label for="email" class="form-label">Amount (₦) </label>
		                                          <input type="number" class="form-control" name="payamount" id="payamount" placeholder="5000" required>
		                                          <div class="invalid-feedback">
		                                            Please enter a valid email address for shipping updates.
		                                          </div>
		                                        </div>

		                                        

		                                      </div>

		                                      <hr class="my-4">

		                                      <button class="w-100 btn btn-primary btn-lg" name="btnsubmit" id="btnsubmit" type="submit">Submit</button>
		                                      <button style="display:none" class="w-100 btn btn-primary btn-lg" name="btnsubmit" id="btnsubmit1" type="submit">Submit<i class="fa fa-spinner fa-spin"></i></button>

		                                      
		                                    </form>
                                    </div>
                                    <br>
                              	</div>
                            </div>
                    </main>
            </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 offset-xl-0 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h4 class="title-style " style="color:white;">Share Your Testimony</h4>
                    <p class="mt-4">But in your hearts honor Christ the Lord as holy, always being prepared to make a defense to anyone who asks you for a reason for the hope that is in you; yet do it with gentleness and respect,</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>We are royalty</li>
                        <li><i class="fas fa-check-circle"></i>We are kings</li>
                        <li><i class="fas fa-check-circle"></i>We are queens</li>
                    </ul>
                   <!--  <a href="contact.html" class="btn btn-style mt-5">Apply Now</a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- //call block -->

    <!-- footer block -->
    <?php require "footer.php" ?>
    <!-- //footer block -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="jquery.js"></script>
    <!-- //common jquery plugin -->

    <!-- counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <!-- <script src="assets/js/bootstrap.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->

     <script type="text/javascript">
    $(document).ready(function (e) {
 		$("#form").on('submit',(function(e) {
    	// alert("dde");
    
  e.preventDefault();
  $.ajax({
         url: "payment.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {

   
    //$("#preview").fadeOut();pport
    $("#btnsubmit").html("Submiting....");
    // $("#btnsubmit").style.display:"none";

    $("#btnsubmit").css("display", "none");
    $("#btnsubmit1").css("display", "block");

    // $("#err").fadeOut();
   },
   success: function(data){
    if(data=='invalid'){
    // $("#pport").html("ERROR OCCURED....");
     // invalid file format.
     // $("#err").html("Invalid File !").fadeIn();
    }else{
    // $("#pport").html("PASSPORT UPLOADED");
    		// alert("dde");
     // view uploaded file.
    //   $("#btnsubmit").css("display", "block");
    // $("#btnsubmit1").css("display", "none");

     $("#btnsubmit").html("Submit");
     $("#preview").html(data).fadeIn();
     // $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 		}));






 		// MEMEBER SEARCH



 			$("#membersearch").on('submit',(function(e) {
    	// alert("dde");
    
  e.preventDefault();
  $.ajax({
         url: "pro.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
   
    
    $("#mbtnsubmit").html("Submiting....");


    $("#mbtnsubmit").css("display", "none");
    $("#mbtnsubmit1").css("display", "block");

    // $("#err").fadeOut();
   },
   success: function(data){
    if(data=='invalid'){
    
    }else{
    
      $("#mbtnsubmit").css("display", "block");
    $("#mbtnsubmit1").css("display", "none");

     $("#mbtnsubmit").html("Submit");
     $("#preview").html(data).fadeIn();
     // $("#form")[0].reset(); 
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
</body>

</html>