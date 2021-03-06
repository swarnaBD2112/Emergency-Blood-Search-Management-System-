<?php 
 	session_start();
    require_once "functions.php";
    $user     = new LogInRegistration();
    $uid      = $_SESSION['uid'];
	if (!$user->getSession()) {
  	   header('Location: login.php');
  	   exit();
  	}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icn.ico">

    <title>change password</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
	
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<body >

  <!-- NAVBAR================================================== -->
     <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top well well-md addpad topColor">
          <div class="container ">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			  <a href="home.php"> <img  src="img/logo.png"></a>             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">
			    <li class="active"><a href="home.php">Home</a></li>
			  <?php 
					if ($user->getSession()) { ?>
              
                <li><a href="userProfile.php">Show Profile</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
				<?php } else { ?>
				 <li><a href="login.php">Login</a></li>
                <li><a href="Register.php">Register</a></li>
				<?php } ?>
				<li><a href="index.php">Search</a></li> 
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	<br><br><br><br><br><br> 
	<div class="container-fluid pagehead pad " data-spy="scroll" data-target="#myScrollspy" data-offset="15">
	<div class="col-sm-2" >
		<nav  id="myScrollspy">
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
				<li class="active"><a href="aboutUs.php">About Us</a></li>
                <li><a href="inviteFriend.php">Invite Friends</a></li>
                <li><a href="shareExperience.php">Share Experience</a></li>
                <li><a href="bloodDonateFacts.php">Donate Facts</a></li>
                 <li><a href="whocanorcant.php">Check Donate Conditions</a></li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-8 " >	
	 
	<h1 class="text-primary text-center"> Change Password </h1>
<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>	<br>
	<div class="page-header text-center">
	<small>
	<?php
	                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	                         $old_pass     = $_POST['old_password'];
	                         $new_pass     = $_POST['new_password'];
	                         $confirm_pass = $_POST['confirm_password'];	 

	                         if (empty($old_pass) or empty($new_pass) or empty($confirm_pass)) {
	                         	echo "<span style='color: #e53d37'>Error...Field must not be empty.<span/>";
	                         }else if ($new_pass != $confirm_pass) {
	                         	echo "<span style='color: #e53d37'>Error...Password not matched.<span/>";
	                         }else{
	                         	//$old_pass=md5($old_pass);
	                         	//$new_pass=md5($new_pass);
	                         	$passUpdate = $user->updatePassword($uid,$new_pass,$old_pass);
	                         }           
	                    }

			 		 ?>              
	</small>
	</div>	
	
	<form class="form form-horizontal" action="" method="post">
	<div class="form-group">
		<label class="control-label col-sm-2 col-sm-offset-2 " for="old_password">Old Passwword:</label>
		<div class="col-sm-5">
		  <input type="text" class="form-control" name="old_password" id="old_password" placeholder="Enter old password">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2 col-sm-offset-2 " for="new_password">New Password:</label>
		<div class="col-sm-5">
		  <input type="text" class="form-control" name="new_password" id="new_password" placeholder="Enter new password">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2 col-sm-offset-2 " for="confirm_password">Confirm:</label>
		<div class="col-sm-5">
		  <input type="text" class="form-control" name="confirm_password" id="confirm_password" placeholder="Please type new password again">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-5 col-sm-10">
			<button id="Update" type="submit" name="Update"  class="btn btn-primary">Update</button>
		   <input id="reset" type="reset" name="reset" value="Reset" class="btn btn-primary"  />
	</div>
	</div>
	</form>
		<hr class="featurette-divider">
	<div class="well well-md topColor">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="text-primary">© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016   </p>
		  </footer>
	</div>
	</div>
	<div class="col-sm-2  ">
	<div>
			<h2 class="text-primary active">Related Links</h2><br>
			<table class="table table-hover table1">
				 <tr><td > <a href="#"style="color:green;" >Sondhani Khulna Medical Unit</a></td></tr> 
				<tr><td><a href="#"style="color:green;" >Badhon,KUET</a></td></tr>
				<tr><td><a href="#"style="color:green;" >Blood Donor Association Khulna</a></td></tr>
				<tr><td><a href="#"style="color:green;" >Donate Blood, Save Life, Khulna</a></td></tr>
				<tr><td><a href="#" style="color:green;" >Tarun Sangha</a></td></tr> 
			</table>
		</div>
			<div class="sidebar">
			<h2 class="text-primary">Latest News</h2><br>
			<div class="blog_posts">
			<marquee direction="up" scrolldelay="300">
			<table >
				<tr>
					<td>
					 
					<div class="blog_heading">
							<span style="color:green;"><b>***Prothom Alo Social Work Award***</b></span>
					<p>Badhon has won award for it's social work. The vice chancellor of khulna University have congratulated Badhan for it's glorious gain.</p> 
							
					</div><br />
					<span style="color:green;"><b>***World Blood Donor Day: Poor health reduces women blood donors in Bangladesh****</b></span>
					<p>While the overall number of blood donors in Bangladesh has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					<br />
					<span style="color:green;"><b>***19th Establishment day of badhan***</b></span>
					<p>24 October was the 19th establishment day of Badhan. All the committe members were present there. They celebrated the day with numerous program.  </p></span>
					<br />
					<span style="color:green;"><b>*****Registration Camp*****</b></span>
					<p>Badhan has recently organized registration camp for the newly admitted students of 2015-2016. New students were also very egar to be a part of this social work.  </p></span>
					 
                    </td>
				</tr>
                   
            </table>
			</marquee>  
			<div class="clear"></div>	
			</div>	
		</div>
		
			
        </div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/myJS.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>