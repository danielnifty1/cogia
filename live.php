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
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="imagetoolbar" content="yes" />
    <meta name="theme-color" content="purple" />
    <meta name="msthemecompatible" content="no" />
    <meta name="cleatype" content="no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <!-- Seo meta -->
    <meta name="author" content="" />
    <meta name="keywords" content="COGIA , City of God, city of god int'l assembly" />
    <meta name="copyright" content="2022" />
    <!-- OpenGraph meta tags -->
    <meta property="og:title" content="cogiaworld:City of God Int'l Assembly" />
    <meta property="og:type" content="cogiaworld.org" />
    <meta property="og:url" content="cogiaworld.com" />
    <meta property="og:description" content="Church, House of God, City  of God Assembly Int'l" />
    <meta property="og:image" content="https://cogiaworld.org/assets/images/mercy.png" />
    
    <title>City Of God Int'l Assembly</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="web/css/font-awesome.css">
       <link rel="shortcut icon" type="image/x-icon" href="assets/images/mercy.png" />
       <style type="text/css">
        @media (min-width: 992px) {
             .ifm {
                height: 750px;
                width: 100%;

                }
        }
           @media (min-width: 768px) {
              .ifm {
                height: 750px;
                width: 100%;

                }


           }

           @media (max-width: 576px) {

            .ifm {
                height: 250px;
                width: 100%;
                 /*margin-left: 8.3333333333%;*/

                }
           }
       </style>
</head>


<body>
    <!-- header -->
   <?php
    require "header.php";
    require "modals.php";

    ?>
    <!-- //header -->
	
	<!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Stream Live</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Stream Live</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5 mb-lg-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-12 col-md-12 position-relative home-block-3-left pb-lg-0 pb-5">
                     <div class="col-lg-12">
                    <main >
                    	
                            <div class="row g-6" id="previewd">

                                <div class="col-md-10 col-lg-10  col-sm-12 col-xs-12  border-2 offset-md-1 offset-sm-0" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 10px; background:rgb(237 237 237 / 10%);;">
                                  	<iframe class="mt-2 mb-2 px-md-5 ifm" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDEEPEARLZEMPIRE%2Fvideos%2F424542846476249"   style="border:1p;overflow:hidden; ;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true",></iframe>
                              	</div>
                            </div>
                    </main>
            </div>
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
         url: "pro.php",
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