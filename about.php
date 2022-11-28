<?php 
require "connection.php";
                //=$_SESSION['adminname'];
       require "middleware.php";                  
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
              <link href="css/owl.carousel.css" rel="stylesheet">
                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/owl.carousel.js"></script>

</head>


<body>
    <!-- header -->
   <?php require "header.php" ?>
    <!-- //header -->
	
	<!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock py-5 mb-lg-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="images/pking.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>Want to Contact the Man of God?<br> Get in touch now. </p>
                        <a href="tel:http:// +2348035424726"><i class="fas fa-phone-alt"></i>  +2348035424726</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
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
    <!-- //home image with content block -->

    <!-- stats block -->
    <section class="w3-stats pt-4 pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase"></p>
                <h3 class="title-style">We are Proud to Share with You</h3>
            </div>
            <div class="row text-cendter pt-4 mb-6">
                <div class="col-md-4 col-1 offset-4 mb-4" >
                    <ul class="nav nav-tabs" role="tablist">
                       <!--  <li class="nav-item">
                          <a class="nav-link active text-center" data-bs-toggle="tab" href="#home"></a>
                        </li> -->
                      
                    </ul>

                    </div>
                      <!-- Tab panes -->
                      <div class="tab-content ">
                        <div id="home" class="container tab-pane active"><br>
                          <h3 class="text-center mb-4" style="color:#0825c3">Our Vision</h3>
                           
                          <p class=text-center>Preparing Man For Heaven</p>

                          <br>
               
                           
                          <p class=text-center>Raising People Of Fire That Will Carry The Presence, Glory and Power Of God into the Systems and For The Second Coming Of Jesus Christ</p>

                           


                            <h3 class="text-center mt-5 mb-4" style="color:#0825c3">Our Mission</h3>
                          <p class=text-center>To Reach The World With The Supernatural Power Of God By The World</p>
                          

                           <h3 class="text-center mb-4 mt-5" style="color:#0825c3">Our Mandate</h3>
                           
                          <p class=text-center>Raising Kings and Queens for the kingdom</p>
                          
                        </div>





                        <!-- OUR MISSION -->
                        <div id="menu1" class="container tab-pane fade"><br>
                          <h3 class=text-center>Our Mission</h3>
                          <p>To Reach The World With The Supernatural Power Of God By The World</p>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                          <h3 class=text-center>Our Vision</h3>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                      </div>
                  
                </div>

               
    </section>
    <!-- //stats block -->

  
    <!-- testimonials block -->
 <?php

  // require "testimony.php"

   ?>
    <!-- //testimonials block -->
    <!-- team block -->
                         <script>
                            $(document).ready(function() {
                                $("#owl-demo").owlCarousel({
                                    items :2,
                                    lazyLoad : true,
                                    autoPlay : true,
                                    autoplayTimeout: 10,
                                    autoplaySpeed: 10,
                                    pagination : true,
                                    nav:true,
                                });
                            });
                        </script>

    <section class="w3l-team-13 py-5" id="team">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Team</p>
                <h3 class="title-style">Meet Our Pastors</h3>
            </div>
            <div class="row text-center left-side owl-carousel" id="owl-demo">
                <div class="col-lg-12 col-md-12">

                    <?php 
                                            //=$_SESSION['adminname'];
                                    $query = "SELECT* from pastors where status=0";
                                        $result = mysqli_query($conn, $query);

                                        //runs the connection to database and then run the query


                                        $return = mysqli_num_rows($result);

                                // 
                        if($return ){
                        
                                while ($row = mysqli_fetch_assoc($result)){ 
                                        $fname = $row["name"];
                                     
                                        $phone = $row["phone"];
                                 
                                        $email = $row["email"];
                                        $id = $row["id"];
                                        $fb = $row["fb"];
                                        $instagram = $row["instagram"];
                                        $twitter = $row["twitter"];             
                                        $img = $row["img"];             
                                        $position = $row["position"];               
                                            
                                    ?>

                    <div class="image-one item">
                        <a href="#team">
                            <img src="admin/<?php echo $img ?> " class="arrow-png img-responsive lazyOwl" />
                            <h4 style="color:white"><?php echo base64_decode($fname) ?></h4>
                            <div class="buttons-teams2 mt-2">
                                <a href="<?php echo $fb ?>"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?php echo $twitter ?>"><i class="fab fa-twitter-square"></i></a>
                                <a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                        </a>
                    </div>
                </div>

            <?php }

        } ?>


            </div>
        </div>
    </section>
    <!-- //team block -->


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
  <!--   <script src="assets/js/jquery-3.3.1.min.js"></script> -->
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
</body>

</html>