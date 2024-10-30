<?php

$conn = mysqli_connect("localhost","root","","carrental") or die("db err");


$id = $_GET['del'];
$email = $_GET['email'];
echo $id;


mysqli_query($conn ,"delete from tblusers where Emailid='$email'") or die("delete error");
mysqli_query($conn ,"delete from tbltestimonial where UserEmail='$email'") or die("delete error");
mysqli_query($conn ,"delete from tblbooking where userEmail='$email'") or die("delete error");


header("location: reg-users.php");
?>