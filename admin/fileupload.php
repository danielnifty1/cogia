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
$upload_location = "../downloads/";

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
        $valid_ext = array("png","jpeg","jpg","docx","pdf","txt","doc","mp3");

        // Check extension
        if(in_array($ext, $valid_ext)){

        	// File path
        	$path = $upload_location.$filename;
        	// $path =$filename;

            // Upload file
    		if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){

 
 $title=$_POST['title'];
$da=date("d-D-M-Y");
$path =$filename;
$gal= "INSERT INTO downloads (file,title,dat)values('$path','$title','$da')";

$resultgal=mysqli_query($conn,$gal);
if($resultgal){



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












// echo json_encode($files_arr);
die;