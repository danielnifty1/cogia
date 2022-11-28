<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        
    if(isset($_SESSION['photosession'])){

    $eventid= $_SESSION['photosession'];

  }else{
             echo'<script>location.replace("photo_gallary")</script>';
        }



$countfiles = count($_FILES['files']['name']);
// echo $tok=$_SESSION['uploadimg'];
// Upload directory
$upload_location = "../photogallary/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

	if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){

    	// File name
    	$filename = $_FILES['files']['name'][$index];

    	// Get extension
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // Valid image extension
        $valid_ext = array("png","jpeg","jpg");

        // Check extension
        if(in_array($ext, $valid_ext)){

        	// File path
        	$path = $upload_location.$filename;

            // Upload file
    		if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){

 
 $eventid=$_POST['eventid'];

$gal= "INSERT INTO photo_gallary (eventid,img)values('$eventid','$path')";

$resultgal=mysqli_query($conn,$gal);
if($resultgal){


$up2="UPDATE photos set current=0";
$r=mysqli_query($conn,$up2);


$up="UPDATE photos set status=1,current=1 where eventid='".$eventid."'";
$uprst=mysqli_query($conn,$up);
    			// $files_arr[] = $path;
    			$upfiles=true;
}else{

    			$upfiles=false;
}

    		}else{
    		}
        }
    }
			   	
}




if($upfiles){
?>

<div class="container-fluid">
<div class="row">

<?php 
if($resultgal){
 $getupl="SELECT* from photo_gallary where eventid='$eventid'";
	// $getupl="SELECT* from test where tok='$tok' and userid='$userid'  ";
	$resu=mysqli_query($conn,$getupl);
	$myrtn=mysqli_num_rows($resu);
	if($myrtn){
		while($row=mysqli_fetch_assoc($resu)){
			 
			$id=$row['id'];
			$pic=$row['img'];

			?>

	
<div class="col-md-2 col-sm-2">
	<div class="thumbnail" style="height:50px;width:50px">

	 <img src="<?php echo $pic ?>" style="width:50px;height:50px" />
			<!-- <h4><?php echo $id ?></h4> -->

	  </div>

	</div>

		<?php }
	}else{
		echo mysqli_error($conn);
	}
// 	echo "

// <div class='w3-col m4' style='height: 320px;background-image: url($path);background-size: cover;background-position: 50%;border-radius: 4px'></div>
// ";
// $eventid = $_POST['name'];
// $email = $_POST['email'];
}
//echo $insert?'ok':'err';
?>
</div>
</div>

<?php
}







// echo json_encode($files_arr);
die;