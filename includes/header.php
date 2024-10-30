
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo " > <a  href="index.php"><img  src="https://ddac-bucket.s3.amazonaws.com/images/logo.png" width="50"alt="image"/> </a>

		  </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info" >
         <?php 
		 if (isset($_SESSION['login']) ) {
		 
		 echo "<h3>Welcome </h3>"; }?>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default bg-primary" style="background: #7393B3; border-radius:50px; padding:0px; ">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" style="margin:10px; background: black; border-color: blue;" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only" >Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
	  
	  
	  <?php if (isset($_SESSION['login']))  {?>
	  
        <div class="user_login" style="border-radius:20px; width: 100px; background: #4169e1; text-align:center;  float:right; margin-top:15px; ">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
	  <?php }?>
           <div class="header_widgets" ">
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn " style="" > <a href="#loginform" class="btn btn-primary " data-toggle="modal" data-dismiss="modal" style="color:white; background: 	#088F8F; border-radius:40px; margin-top:10px; float:right !important;">Sign in / Sign up</a> </div>
<?php }?>
          </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation" style="">
        <ul class="nav navbar-nav" >
          <li><a href="index.php" style="font-size:1.2em;"> Home</a>    </li>

          <li><a href="page.php?type=aboutus" style="font-size:1.2em;">About Us</a></li>
          <li><a href="car-listing.php" style="font-size:1.2em;">Car Listing</a>
          <li><a href="page.php?type=faqs" style="font-size:1.2em;">FAQs</a></li>
          <li><a href="contact-us.php" style="font-size:1.2em;">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
