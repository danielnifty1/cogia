
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo" style="font-size:20px">
        COGIA <span style="color: lightblue">ADMIN</span>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
      
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
              <!--   <span class="badge bg-important"><?php echo $checker ?></span> -->
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have <?php echo $checker ?> Mails</p>
                </li>

                <?php

                $getmsg ="SELECT* FROM contactus where status=1 "; 
                $rstt=mysqli_query($conn,$getmsg);
                $rtnn= mysqli_num_rows($rstt);

                if($rtnn){

                    while($row=mysqli_fetch_assoc($rstt)){
                        $name=$row['name'];
                        $sub=$row['subject'];       
                ?>           


                <li>
                    <a href="inbox">
                        <span class="photo"></span>
                                <span class="subject">
                                <span class="from"><?php echo $name ?></span>
                                <span class="time"><?php echo $sub ?></span>
                                </span>
                               
                    </a>
                </li>
<?php
    }
                }


                ?> 
               


                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
       
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <!-- <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="web/images/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li> -->
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
