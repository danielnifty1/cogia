 <?php require"connection.php" ?>
 <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index" style="font-size: 12px;text-align: center;"><img style="height: 80px;" src="assets/images/mercy.png">
                    <br>
                    <!-- City of God Int'l Assembly -->
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">who we are</a>
                        </li>
                       

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Get Involved </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:white; color:black" >
                            	<li><a class="dropdown-item" href="joinus" style="color:black">Be A Member</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="giving">Givings</a>
                        </li>

                         <li class="nav-item dropdown">
                            

                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Media </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:white; color:black" >
                                <li><a class="dropdown-item" href="photo_gallary" style="color:black">Photo Gallary</a></li>
                           
                                <li><a class="dropdown-item" href="download" style="color:black">Downloads</a></li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link btn btn-warning btn-lg text-center p-1" href="live"> Live Stream<span style="color:red" class="fa fa-play-circle-o  "></span></a>
                        </li>
                    </ul>
                    <!-- search-right -->
                   
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    
                                    <i  class="gg-moon d-none"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <style type="text/css">
.mr-5{font-size: 25px;}
.mr-5 span{font-size: 20px;}

ol{list-style: none}
ol li::before {content: "\2022";display: inline-block;width: 10px;margin-left: -1em; color: black; font-weight: bold;font-size: 20px}
h4{
  color: #131517; font-weight: bold;
}
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
