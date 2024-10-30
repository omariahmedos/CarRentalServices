<?php


include('includes/config.php');
$id = $_GET['del'];
mysqli_query($conn ,"delete from tbltestimonial where id='$id'") or die("delete error");
header("location: testimonials.php");
?>