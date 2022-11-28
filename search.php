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

$result_per_page=2;

    $query ="SELECT* FROM downloads where status=1";
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

if (isset($_POST['search'])) {

 $searchword = isset($_POST['searchword'])? trim($_POST['searchword']) : '';
}else{
	echo '<script>location.replace("download") </script>';
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
                <h4 class="inner-text-title pt-5">Downloads</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Download</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <!-- HEADER TWO -->
	<div class="nav-scroller bg-body shadow-sm bd-dadrk" style="background:gray" >
  <nav class="nav" aria-label="Secondary navigation" style="">
  
   <form class="d-flex mt-1 mb-3" action="search" method="post">
        <input class="form-control me-2" name="searchword" required type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success" name="search" type="submit">Search</button>
   </form>
     
  </nav>
	</div>
  
     <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            
            <div class="row justify-contend	t-center">
                <?php

                // $getdownloads="SELECT* FROM downloads where status=1 order by id desc LIMIT ".$page_first_result.','.$result_per_page;



                 $get="SELECT* FROM downloads where title LIKE '%$searchword%' and status=1";
                 // LIMIT ".$page_first_result.','.$result_per_page;
                $dwnrst=mysqli_query($conn,$get);
                $dwnrtn=mysqli_num_rows($dwnrst);

                if($dwnrtn){
                    while($row=mysqli_fetch_assoc($dwnrst)){ 
                        $title=$row['title'];
                        $file=$row['file'];
                        $dat=$row['dat'];
                        ?>
                            <div class="my-3 p-3 bg-dark rounded shadow-sm">
                                <div class="d-flex text-muted pt-3">
                                  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                      <strong class="text-gray-dark"><?php echo $title ?></strong>
                                      <a href="downloads/<?php echo $file ?>" target="_blank" style="border: 1px solid white; padding:5px;border-radius: 4px;">
                                        
                                          <div class="fa fa-cloud-download" >
                                          </div>

                                      </a>
                                        
                                    </div>
                                    <span class="d-block"><i class="fa fa-calendar-o"></i> <?php echo $dat ?></span>
                                  </div>
                                </div>
                            </div>
                    <?php }
                }else{ ?>
                                	<h4 style="color:white;text-align: center;"> No matching file with <?php echo $searchword ?> found </h4>
                <?php }

                 ?>
            </div>

            <!--  -->
       
        </div>
    </div>
 
 
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