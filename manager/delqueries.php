<?php


include('includes/config.php');
$id = $_GET['del'];
mysqli_query($conn ,"delete from tblcontactusquery where id='$id'") or die("delete error");
header("location: manage-contactusquery.php");
?>