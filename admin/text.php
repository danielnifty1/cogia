<?php require "../connection.php";

if(isset($_GET['trk'])){
  $trk=$_GET['trk'];
      $tracknum=base64_decode($trk); 

$details="SELECT* from consigne where tracknumber= '$tracknum'";


$result=mysqli_query($conn,$details);
$return=mysqli_num_rows($result);
if($return){
  while($row=mysqli_fetch_assoc($result)){
    echo $name=$row['name'];
    $tracknumber=$row['tracknumber'];
    $refnumber=$row['refnumber'];
    $shipper=$row['shipper'];
    $companyref=$row['companyref'];
    $consignee=$row['consignee'];
    $refowner=$row['refowner'];
    $notifyparty1=$row['notifyparty1'];
    $notifyparty2=$row['notifyparty2'];
    $contactemail=$row['contactemail'];
    $placeofissue=$row['placeofissue'];
    $placeofissue=$row['placeofissue'];
    $vessel=$row['vessel'];
    $voyagenumber=$row['voyagenumber'];
    $portofload=$row['portofload'];
    $portofdischarge=$row['portofdischarge'];
    $placeofreceipt=$row['placeofreceipt'];
    $placeofdelivery=$row['placeofdelivery'];
    $containernumber=$row['containernumber'];
    $sealnumber=$row['sealnumber'];
    $othersealnumber=$row['othersealnumber'];
    $weight=$row['weight'];
    $volume=$row['volume'];
    $containertype=$row['containertype'];
    $cargodiscription=$row['cargodiscription'];
    $numberofpackage=$row['numberofpackage'];
    $sednumber=$row['sednumber'];
    $scaccode=$row['scaccode'];
    
  }
if($companyref==0){

  $companyref="NOT Cleared";
}elseif($companyref==1){
  $companyref="Cleared";
}
}else{
echo "error".mysqli_error($conn);
  // echo "<script>alert('Track Number not found');location.replace('adview') </script>";
       
}
}

?>