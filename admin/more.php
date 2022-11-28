<?php
session_start();
if($_GET['event']){
	$eventid=$_GET['event'];
$_SESSION['photosession']=$eventid;
	echo '<script>location.replace("upload")  </script>';
}else{

	echo '<script>location.replace("photos")  </script>';
}