<?php
require "connection.php";
session_start();

if(isset($_SESSION['memberid'])){
$memberid=$_SESSION['memberid'];

$getlevel="SELECT* FROM members where memberid = '$memberid'";
$getrst=mysqli_query($conn,$getlevel);
$getrtn=mysqli_num_rows($getrst);
if($getrtn){
	while ($row=mysqli_fetch_assoc($getrst)) {
		$level=$row['reglevel'];
	}

	if($level==0){

	}elseif($level==1){
		echo '
			<script>
			location.replace("joinus_3");

			</script>
			';

	}elseif($level==2){

	}
}

}else{
		echo '
<script>location.replace("joinus");

</script>
	';
}
?>
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
   <?php require "header.php" ?>
    <!-- //header -->
	
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

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5 mb-lg-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-8 col-md-8 position-relative home-block-3-left pb-lg-0 pb-5">
                     <div class="col-lg-12">
                    <main >
                    	<span id="preview"></span>
                            <div class="row g-6" id="previewd">
                               
                                <div class="col-md-7 col-lg-8 offset-md-2 border-2" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 10px; background:rgb(237 237 237 / 10%);">
                                    <br>
                                    <h4 class="mb-3" style="text-align:center;">MEMBERSHIP FORM</h4>
                                   
                                  		<form id="form" action="membereg" method="post" class="needs-validation" >
                                  			<input type="hidden" name="memberid" value="<?php echo $memberid ?>">
                                      <div class="row g-3 " id="household">
                                          <h5 class="mt-4">Spouse's Information</h5>
                                     <h6 style="text-align:center" id="previefw" style="font-weight: bold;"></h6>
                                    <hr>
                                        <div class="col-sm-6 col-md-6">
                                          <label for="firstName" class="form-label">First name </label>
                                          <input  type="text" class="form-control" name="spousefirstName" id="spousefirstName" placeholder="spouse first Name" value="" required>
                                        </div>

                                        
                                        <div class="col-sm-6 col-md-6">
                                          <label for="lastName" class="form-label">Other names</label>
                                          <input type="text" class="form-control"  name="spouselastName" id="spouselastName" placeholder="spouse Other Name" value="" required>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="firstName" class="form-label">Phone(work) </label>
                                          <input onkeypress="pw()"  type="text" class="form-control" name="spousephonework" id="spousephonework" placeholder="spouse phone (work)" value="" required>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="lastName" class="form-label">Phone(home)</label>
                                          <input type="text" class="form-control"  name="spousephonehome" id="spousephonehome" placeholder="spouse phone (home)" value="">
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="firstName" class="form-label">Email </label>
                                          <input  type="email" onkeypress="em()" class="form-control" name="spouseemail" id="spouseemail" placeholder="spouse email" value="" required>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="lastName" class="form-label">Date of Birth</label>
                                          <input type="date" class="form-control"  name="spousedob" id="spousedob" placeholder="" value="" required>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="firstName" class="form-label">Gender </label>
                                          <select required class="form-control" name="spousesex" id="spousesex">
                                             <option value="">Select Gender</option>
                                             <option value="male">Male</option>
                                             <option value="female">Female</option>
                                         </select>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="lastName" class="form-label">Occupation</label>
                                          <input required type="text" class="form-control"  name="spouseoccup" id="spouseoccup" placeholder="spouse Occupation" value="">
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="firstName" class="form-label">Next of Kin </label>
                                           <input required type="text" class="form-control"  name="nextofkin" id="nextofkin" placeholder="Next of Kin Fullname" value="">
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                          <label for="lastName" class="form-label">Next of Kin Phone</label>
                                          <input required type="text" onkeypress="np()" class="form-control"  name="nextkinphone" id="nextkinphone" placeholder="Next of Kin phone" value="">
                                        </div>

                                        <div class="col-sm-12">
                                          <label for="lastName" class="form-label">Mailing Address</label>
                                           <textarea required class="form-control" name="spouseadd" id="spouseadd" placeholder="spouse address" ></textarea>
                                        </div>
                                       

                                      </div>



<!-- spouse -->
                                     
                                      <hr class="my-4">

                                      <button  class="w-100 btn btn-primary btn-lg d-noned"  name="btnsubmit" id="btnsubmit" type="submit">Save and Continue</button>


                                      <button style="display:none" class="w-100 btn btn-primary btn-lg" name="btnsubmit" id="btnsubmit1" type="submit">Submit<i class="fa fa-spinner fa-spin"></i></button>


                                      <div class="col-sm-12 offset-11">
                                          <span style="cursor: pointer;" id="skip">skip</span>
                                        </div>
                                     

                                      
                                    </form>
                                    <br>
                              </div>
                            </div>
                    </main>
            </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 offset-xl-0 mt-lg-0 mt-2 pt-lg-0 pt-5">
                    <h3 class="title-style">City of God Int'l Assembly</h3>
                    <p class="mt-4">it always get better,bigger, stronger an yet the best is before us.</p>
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


 <script type="text/javascript">
    $(document).ready(function () {

         $("#skip").click(function(){

            location.href="joinus_3";
            

         })


          

     })
</script>



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
        
    
  e.preventDefault();
  $.ajax({
         url: "membereg.php",
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
      $("#btnsubmit").css("display", "block");
    $("#btnsubmit1").css("display", "none");

     $("#btnsubmit").html("Submit");
     $("#preview").html(data).fadeIn();
     // $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
        alert("rr");
    $("#err").html(e).fadeIn();
      }          
    });
 		}));

		});
</script>
</body>

</html>