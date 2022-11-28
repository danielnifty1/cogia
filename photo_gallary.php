<?php 
require "connection.php";
                //=$_SESSION['adminname'];
       require "middleware.php";                  
                                 

 $getgallary = "SELECT* from photos where current=1 ";
                                $getresult = mysqli_query($conn, $getgallary);
                                $getreturn = mysqli_num_rows($getresult);
      
                if($getreturn ){
                        
                                while ($row = mysqli_fetch_assoc($getresult)){ 
                                        $eventid = $row["eventid"];
                                     
                                      }
                                      }


if((isset($_GET['event']))){

$currenteventid=$_GET['event'];

 




}else{
$currenteventid=$eventid;
         
}
                                    




                                      $getup="SELECT* FROM photos where eventid='$currenteventid'";
       $gets=mysqli_query($conn,$getup);
       $getrtn=mysqli_num_rows($gets);

       if($getrtn){
        while($row=mysqli_fetch_assoc($gets)){
            $gname=$row['gallaryname'];
        }

        $gname=base64_decode($gname);
       }

$result_per_page=10;

    $query ="SELECT* FROM photo_gallary where eventid='$currenteventid' and status=0";
            $result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
     $tmember = mysqli_num_rows($result);
    // while ($row = mysqli_fetch_assoc($result)){
    //  echo $row['xblogfname'].'<br>';
    // }
     $number_of_pages = ceil($tmember/$result_per_page);

     if(!isset($_GET['page'])){
        $page=1;
     }else{
        $page=$_GET['page'];
     }


       $page_first_result = ($page-1)*$result_per_page;



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
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
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
    <!-- HEADER TWO -->
	<div class="nav-scroller bg-body shadow-sm bd-dark" >
  <nav class="nav" aria-label="Secondary navigation" style="background:black;color: white !important;">
  
    <a class="nav-link"  >
      	<select id="cat" class="form-control" style="bacdkground: black;">
                <option style="color:white;">SELECT EVENT TO VIEW</option>
            <?php 
            $getphoto="SELECT* FROM photos where status=1 order by id desc";
            $getrst=mysqli_query($conn,$getphoto);
            $getrtn=mysqli_num_rows($getrst);
            if($getrtn){
                while($row=mysqli_fetch_assoc($getrst)){
                    $nam=$row['gallaryname'];
                    $eventid=$row['eventid'];
                    $nam=base64_decode($nam); ?>
                <option value="<?php echo $eventid ?>"><?php echo ($nam) ?></option>

                                        

                <?php }
            } 
            ?>
            </select>

            <script type="text/javascript">
                                                       jQuery(function(){
                                                        jQuery("#cat").change(function(){

                                                           var se=$("#cat").val();
                                                           // var se=jQuery(this).val();
                                                           // alert(se);
                                                          location.href="photo_gallary?event="+se;
                                                               

                                                                 })


                                                            })
                                                    </script>
                              
    </a>
     
  </nav>
	</div>
    <!-- //HEADER TWO -->

    <!-- HEADER TWO TITLE -->
<!--     <div class="  align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm" style="background:gray;bordder: 1px solid red;">
    
      <h1 class="h6 mb-0 text-white  ">Trending Event</h1>
   
      	
      <h4 class="text-center" style="text-align: center;">Since 2011</h4>
       
    
  </div> -->
    <!-- //HEADER TWO TITLE-->
    <!-- home image with content block -->
     <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
             <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                 
                <h3 class="title-style"><?php echo $gname ?></h3>
            </div>
            <div class="row justify-contend	t-center">
              
                    

                      <?php      

                        $getup="SELECT* FROM photo_gallary where eventid='$currenteventid' and status=0 order by id desc LIMIT ".$page_first_result.','.$result_per_page;;
                        $gets=mysqli_query($conn,$getup);
                        $getrtn=mysqli_num_rows($gets);

                         if($getrtn){
                            while($row=mysqli_fetch_assoc($gets)){
                                $img=$row['img'];
                                $eve=$row['eventid'];
                            ?>


                <div class="col-lg-3 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="admin/<?php echo $img ?>" alt="" class="img-fluid" />
                            <h4 style="color:white"><?php echo $eve ?></h4>
                            
                        </div>
                     
                    </div>
                </div>

                    <?php }
                            }
                            ?>

                                <div class="row">
                <div class="col-md-12 col-md-push-0 ">
                                    <br>
                                    <br>
                    <center>
                        
                    <?php 

                    for ($page=1; $page <=$number_of_pages ; $page++) { 
                        echo ' <a class="btn-sm btn-info btn" href="photo_gallary?event='.$eventid.'&page='.$page.'">'.$page.'</a> ';
                    } ?>
                    </center>
                </div>
        </div>

<!-- 
                <div class="col-lg-3 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="images/p1.jpg" alt="" class="img-fluid" />
                            
                        </div>
                     
                    </div>
                </div>



                <div class="col-lg-3 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="images/p1.jpg" alt="" class="img-fluid" />
                            
                        </div>
                     
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="images/p1.jpg" alt="" class="img-fluid" />
                            
                        </div>
                     
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="images/p1.jpg" alt="" class="img-fluid" />
                            
                        </div>
                     
                    </div>
                </div> -->
                   

               
            </div>
            <!-- <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="#">
                    MORE</a>
            </div> -->
        </div>
    </div>
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