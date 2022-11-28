
<head>
	
<!-- Custom CSS -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>COGIA ADMIN</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="../animate.css" rel='stylesheet' type='text/css' />
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
</head>

<div id="page-wrapper" class="wow tada">
			<div class="main-page login-page ">
				<h2 class="title1"><img src="../assets/images/mercy.png"></h2>
        <P style="color: red;text-align: center;"  id="showme"></P>
				<div class="widget-shadow">
					<div class="login-body">
						
							<input type="email" onkeypress="letlevelz()" class="user" id="adminname" name="email" placeholder="" required="">
							<input type="password" onkeypress="letlevel()" id="adminpassword" name="password" class="lock" placeholder="" required="">
							
							<input type="submit" id="adminenter" name="Sign In" value="Sign In">

							 
						
					</div>
				</div>
				
			</div>
		</div>
<span id="rst"></span>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
		$(document).ready(function(){

  	

 $("#adminenter").click(function(){
//alert("jj");
 
 var adminname=$("#adminname").val();
 var adminpassword=$("#adminpassword").val();

              $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        adminname:adminname,
                        adminpassword:adminpassword,
                       
                       
                    },

                      beforeSend: function(){
                $('#adminenter').val("CONNECTING....");
              },
                   success:function(data){
                   
                   	//$('#uplevel').effect("shake",options,800);
                   	 // $('#adminenter').val("ADDED....");
                   	 	// alert("done");
                   	$("#rst").html(data);

//$("#showme").hide();
                     }
                });

            // }

 });

 });


</script>