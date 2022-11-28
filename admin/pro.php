<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


if(isset($_POST['pid'])){


// echo '<script>alert("ssnoo") </script>';


$pid=$_POST['pid'];

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'pastors/'; // upload directory
if(!empty($_POST['pid']) || $_FILES['image']){
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{


$checker="SELECT* FROM pastors where pid ='$pid'";
$chrst=mysqli_query($conn,$checker);
$chrtn=mysqli_num_rows($chrst);
if($chrtn){

	$gal= "UPDATE pastors set img='$path' where `pid`='".$pid."'";

	
$resultgal=mysqli_query($conn,$gal);



}else{
$gal= "INSERT INTO pastors (pid,img) values('$pid','$path')";
$resultgal=mysqli_query($conn,$gal);



}


if($resultgal){

	 echo '
  <script>

debtn.style.display="block";

  </script>';

	$getupl="SELECT* from pastors where pid='$pid' ";
	$resu=mysqli_query($conn,$getupl);
	$myrtn=mysqli_num_rows($resu);
	if($myrtn){
		while($row=mysqli_fetch_assoc($resu)){
			$pic=$row['img'];?>

			<script>

				 
					// debtn.style.display="block";

  			</script>

<div class="col-md-2 col-sm-4">
	<div class="thumbnail" style="	;width:100%">

	 <img src="<?php echo $pic ?>" style="width:100%;" />

	  </div>

	</div>
		<?php }
	}

}
//echo $insert?'ok':'err';
}
}else{
echo 'invalid';
}
}else{
	echo '<script>alert("noo") </script>';
}
}



if(isset($_POST['viewid'])){


// echo '<script>alert("ssnoo") </script>';


$viewid=$_POST['viewid'];

$upda="UPDATE pastors set status =1 where id='".$viewid."'";
$rst=mysqli_query($conn,$upda);


}