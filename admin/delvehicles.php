<?php


include('includes/config.php');


$id = $_GET['del'];

mysqli_query($conn ,"delete from tblvehicles where id='$_GET[del]'") or die("delete error");
mysqli_query($conn ,"delete from tblbooking where VehicleId='$_GET[del]'") or die("delete error");

header("location: manage-vehicles.php");
//echo $id;
?>