	<style type="text/css">
		/*--charts--*/
.charts,.row {
    margin: 0 0 1em 0;
}
.charts-grids {
    background-color: #fff;
    padding:1em;
    -webkit-box-shadow: 0px 0px 5px -2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 5px -2px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 5px -2px rgba(0,0,0,0.75);
}
.w3ls-high {
    margin-right: .5em;
    width: 49%;
}
.agileits-high {
    margin-left: .5em;
    margin-right: 0;
    width: 49%;
}
.charts-grids canvas#bar {
    width: 100% !important;
}
.charts canvas#line {
    width: 100% !important;
}
h4.title {
    font-size: 1.1em;
    color: #444;
    margin: 0.5em 0 1em;
    text-transform: uppercase;
}
/*--//charts--*/
	</style>
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								// alert("yes");
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
					 
	
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<?php 

                            $getest="SELECT* FROM testimonies where status=1";
                            $rst = mysqli_query($conn, $getest);
                            $rtn=mysqli_num_rows($rst);
                            if($rtn){
                                while($row=mysqli_fetch_assoc($rst)){

                                    $tname=$row['name'];
                                    $id=$row['id'];
                                    $tmoney=$row['testimony']; ?>
						<div class="item" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 10px; background:rgb(237 237 237 / 10%);"  >
							<center>
								
							  <img src="assets/images/mercy.png" class="img-fluid rounded-cirdcle"
                                    alt="client image" />
							</center>
                                    <blockquote class="quote m-2"><span>
                                    <?php echo base64_decode($tmoney) ?>
                                    </span> </blockquote>
                                <div class="source">- <?php echo $tname ?>-</div>

						</div>
						 <?php }
                            } ?>
				<!-- 		<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/banner2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/next.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
						</div> -->
						
					
		</div>
		