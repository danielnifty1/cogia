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
</head>

<body>
    <!-- header -->
   <?php require "header.php" ?>
    <!-- //header -->

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5" style="background: url(images/banner1.jpg) no-repeat center;">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">City Of God Int'l Assembly<span class="d-block"></span>
                        </h3>
                        <p class="banner-sub">At City of God Church International, Jesus Christ is the head. He leads His people into the King's World which is eternal life....</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="about" class="btn btn-style mt-lg-5 mt-4">More Details</a>
                        </div>
                    </div>
                    <div class=" col-md-6 right-banner-2 text-end position-relative mt-5" style="background: transparent;">
                        <div class="  sub-banner-image mx-auto" style="background: transparent;">
                            <a href="live" class="btn btn-warning btn-lg">live Stream <span style="color:red" class="fa fa-play-circle-o  "></span></a>
                            <!-- <img src="images/banner2.jpg" class=" mt-lg-5 mt-5 img-fluid position-relative" alt=" "> -->
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home 4grids block -->
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase"><!-- ACTIVITIES --></p>
                <h3 class="title-style">Days of activities</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="title"><a href="#about">Sunday Services</a></h4>
                        
                        <p>Do not forsake the gathering of the saints, who will encourage your faith</p>
                        <p>First Service:  <span style="color:red;font-weight: bold;">7:00AM</span>    </p>
                        <p>Second Service:  <span style="color:red;font-weight: bold;">9:00AM</span>    </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-book-reader"></i></div>
                        <h4 class="title"><a href="#about">Tuesdays</a></h4>
                        <p style="font-weight: bold;">Word Alive </p>
                        <p>you are clean by the word that I have spoken to you.</p>
                        <p>Time:  <span style="color:red;font-weight: bold;">5:00PM</span>    </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="title"><a href="#about">Thurdays</a></h4>
                        <p>Prophetic Healing and Deliverance Service</p>
                        <p>Time:  <span style="color:red;font-weight: bold;">5:00PM</span>    </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <div class="icon"><i class="fas fa-university"></i></div>
                        <h4 class="title"><a href="#about">First Fridays</a></h4>
                        <p>Night of Wonders</p>
                        <p>Watch and pray that you may not enter into temptation</p>
                        <p>Time:  <span style="color:red;font-weight: bold;">9:00PM</span>    </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home 4grids block -->

    <!-- home image with content block -->
     <?php 
                    if($currentreturn){ ?>
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <a target="_blank" href="images/banner2.jpg">
                            
                        <img src="admin/<?php echo $currentpimg ?>" alt="" class="img-fluid radius-image">
                        </a>
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>Want to Contact  the Man of God?<br> Get in touch now. </p>
                        <a href="tel:http://+2348035424726"><i class="fas fa-phone-alt"></i> +2348035424726</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style"><?php echo base64_decode($currentptitle) ?></h3>
                    <p class="mt-4"><?php echo base64_decode($currentpmsg) ?>
                        </p>
                        <center>
                            
                        <div class="d-flex align-items-center buttons-banner">
                        <p class="btn btn-style mt-lg-5 mt-4" style="text-align:center;">Featuring</p>
                            <!-- <a href="#" class="btn btn-style mt-lg-5 mt-4">More Details</a> -->
                        </div>
                        </center>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <?php 
                            $query = "SELECT* from features where status=0 and pid ='$currentid' order by id desc ";
                                                $result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
                                                $return = mysqli_num_rows($result);
                                        // 
                                if($return ){
                                
                                        while ($row = mysqli_fetch_assoc($result)){ 
                                            $feature = $row['feature'];
                                            ?>
                        <li><i class="fas fa-check-circle"></i><?php echo base64_decode($feature) ?></li> 

                   <?php }
                   } ?>
                        
                    </ul>
                    <!-- <a href="#" class="btn btn-style mt-5">Apply Now</a> -->
                </div>
            </div>
        </div>
    </section>
     <?php } ?>
    <!-- //home image with content block -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">EVENTS</p>
                <h3 class="title-style">Our God's Appointed Events</h3>
            </div>
            <div class="row justify-content-center">
                 <?php 
                    if($previousreturn){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="admin/<?php echo $previousimg ?>" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="#">Previous</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-clock"></i> Date</li>
                                    <li>  <?php echo $previouspdate ?>
                                    <p>Time: <?php echo $previousptime ?>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="#"><?php echo base64_decode($previousptitle) ?></a></h4>
                            <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6></h6>
                                <a class="btn btn-style-primary" href="giving">Redeem<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                  <?php } ?>

                 <?php 
                    if($currentreturn){ ?>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="admin/<?php echo $currentpimg ?>" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="#" class="sec-2">Current</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                     <li> <i class="fas fa-clock"></i> Date</li>
                                    <li>  <?php echo $currentpdate ?>
                                    <p>Time: <?php echo $currentptime ?>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="#"><?php echo base64_decode($currentptitle) ?></a></h4>
                            <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <!-- <h6>$36.00</h6> -->
                                <a class="btn btn-style-primary" href="giving">Support<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>

                <?php 
                    if($nextreturn){ ?>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="admin/<?php echo $nextpimg ?>" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="#" class="sec-3">Next</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-clock"></i> Date</li>
                                    <li>  <?php echo $nextpdate ?>
                                    <p>Time: <?php echo $nextptime ?>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="#"><?php echo base64_decode($nextptitle) ?></a></h4>
                            <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <!-- <h6>$30.00</h6> -->
                                <a class="btn btn-style-primary" href="giving">Support<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="#">
                    MORE</a>
            </div> -->
        </div>
    </div>
    <!-- //courses section -->

    <!-- why choose block -->
 <!--    <section class="w3l-service-1 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Why Choose Us</p>
                <h3 class="title-style">Tools For Teachers And Learners</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="about.html">Expert Teachers</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="about.html">Safe Environment</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //why choose block -->

    <!-- stats block -->
    <section class="w3-stats pt-4 pb-5" id="stats" style="color:white">
        <div class="container-fluid   ">
            <div class="row">
                
            

            <div class="col-lg-6">
                    <main >
                            <div class="row g-6" id="preview">
                                <span id="previefw"></span>
                                <div class="col-md-7 col-lg-8 offset-md-2 border-2" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 10px; background:rgb(237 237 237 / 10%);">
                                    <br>
                                    <h4 class="mb-3" style="text-align:center;">Send Your Pray Request</h4>
                                    <form id="form" action="pro" method="post" class="needs-validation" >
                                      <div class="row g-3">
                                        <div class="col-sm-6">
                                          <label for="firstName" class="form-label">First name</label>
                                          <input  type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                                          
                                        </div>

                                        <div class="col-sm-6">
                                          <label for="lastName" class="form-label">Other names</label>
                                          <input type="text" class="form-control"  name="lastName" id="lastName" placeholder="" value="" required>
                                          <div class="invalid-feedback">
                                            Valid last name is required.
                                          </div>
                                        </div>

                                        <div class="col-6">
                                          <label for="phone" class="form-label">Phone</label>
                                          <div class="input-group has-validation">
                                            <!-- <span class="input-group-text">@</span> -->
                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="+23490XXXXXXXX" required>
                                          <div class="invalid-feedback">
                                              Your username is required.
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-6">
                                          <label for="email" class="form-label">Email </label>
                                          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                          <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                          </div>
                                        </div>

                                        <div class="col-12">
                                          <label for="address" class="form-label">Address</label>
                                          <textarea class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                                              
                                          </textarea>
                                         
                                          <div class="invalid-feedback">
                                            Please enter your shipping address.
                                          </div>
                                        </div>




                                    

                                        <div class="col-md-12">
                                          <label for="zip" class="form-label">Prayer Request</label>
                                         <textarea required class="form-control" name="enquiry"></textarea>
                                          <div class="invalid-feedback">
                                            Zip code required.
                                          </div>
                                        </div>

                                      </div>

                                      <hr class="my-4">

                                      <button class="w-100 btn btn-primary btn-lg" name="btnsubmit" id="btnsubmit" type="submit">Submit</button>
                                      <button style="display:none" class="w-100 btn btn-primary btn-lg" name="btnsubmit" id="btnsubmit1" type="submit">Submit<i class="fa fa-spinner fa-spin"></i></button>

                                      
                                    </form>
                                    <br>
                              </div>
                            </div>
                    </main>
            </div>



            <div class="col-lg-5">
                <h4 style="text-align: center;">Ways to Salvation</h4>
                <br>
                <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span> Acknowledge your sins. Text: Acts 2:36-38
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body" style="color:black; line-height: 30px;">
                                Therefore let all the house of Israel know assuredly, that God hath made the same Jesus, whom ye have crucified, both Lord and Christ. 37 Now when they heard this, they were pricked in their heart, and said unto Peter and to the rest of the apostles, Men and brethren, what shall we do? 38 Then Peter said unto them, Repent, and be baptized every one of you in the name of Jesus Christ for the remission of sins, and ye shall receive the gift of the Holy Ghost.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span>Confess those sins. Text: Galatians 5:19 - 21
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body" style="color:black; line-height: 30px;"> 
                               Now the works of the flesh are manifest, which are these; Adultery, fornication, uncleanness, lasciviousness, 20 Idolatry, witchcraft, hatred, variance, emulations, wrath, strife, seditions, heresies, 21 Envyings, murders, drunkenness, revellings, and such like: of the which I tell you before, as I have also told you in time past, that they which do such things shall not inherit the kingdom of God.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span>   Ask for forgiveness of sin .  Text: 1 John 1:9 
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body" style="color:black; line-height: 30px;">
                                If we confess our sins, he is faithful and just to forgive us our sins, and to cleanse us from all unrighteousness.
                              </div>
                            </div>
                          </div>


                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reasonfour" aria-expanded="false" aria-controls="reasonfour">
                                <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span> Repent of those sins. Act 3:19 
                              </button>
                            </h2>
                            <div id="reasonfour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body" style="color:black; line-height: 30px;">
                               Repent ye therefore, and be converted, that your sins may be blotted out, when the times of refreshing shall come from the presence of the Lord.
                             </div>
                           </div>
                          </div>

                           <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reasonten" aria-expanded="false" aria-controls="reasonten">
                                    <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span> Forsake all your old way and sinful habit. Text: Luke 14: 33  
                                  </button>
                                </h2>
                                <div id="reasonten" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body" style="color:black; line-height: 30px;">
                                    So likewise, whosoever he be of you that forsaketh not all that he hath, he cannot be my disciple.
                                </div>
                                </div>
                            </div>

                               <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reasonnine" aria-expanded="false" aria-controls="reasonnine">
                                    <span class="fa fa-check" style="color: green"></span><span style="color:white">.</span>Join a Bible believing Church around. Text: Hebrew 10:25   
                                  </button>
                                </h2>
                                <div id="reasonnine" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body" style="color:black; line-height: 30px;">
                                    Not forsaking the assembling of ourselves together, as the manner of some is; but exhorting one another: and so much the more, as ye see the day approaching.
                                </div>
                                </div>
                            </div>



                </div>
            </div>
            </div>




            
          
        </div>
    </section>
    <!-- //stats block -->

    <!-- testimonials block -->
 <?php require "testimony.php" ?>
    <!-- //testimonials block -->



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
    <script src="assets/js/jquersy-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->
<script type="text/javascript">
    $(document).ready(function() {
     // alert("hh");
            $(".gg-moon").click();
    })
    </script>
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
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>