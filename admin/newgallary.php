<?php
 require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


  // echo'<script>alert("login")</script>';


if(isset($_POST['gname'])){
 $gname=$_POST['gname'];
 $eventid=$_POST['eventid'];
 


 $gname=base64_encode($gname);

$check="SELECT* FROM photos where eventid='$eventid'";
$rst=mysqli_query($conn,$check);
$rnt=mysqli_num_rows($rst);
if($rnt){
 echo'<script>alert("Event Already Created")</script>'; 
}else{

	$cret="INSERT INTO photos (gallaryname,eventid) values('$gname','$eventid')";

	
$resultgal=mysqli_query($conn,$cret);
if($resultgal){

 $_SESSION['photosession']=$eventid;
if($_SESSION['photosession']){
	echo '<script>location.replace("upload")  </script>';
}else{

	echo '<script>location.replace("photo_gallary")  </script>';
}


 ?>

	<script type="text/javascript">
		showcreate.style.display="none";
		suc.style.display="block";
		nextstage.style.display="block";

		suc.innerHTML="<?php echo base64_decode($gname) ?> Created Successfully";


	</script>
 

<?php }else{
	echo mysqli_error($conn);
	}
}
}