<?php
	session_start();
	require_once "functions.php";
	$user= new LogInRegistration();
	$user2= new LogInRegistration();
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

    <title>search blood</title>

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
			   <li><a href="home.php">Home</a></li> 
			  <?php 			 
					if ($user->getSession()) { ?>                 
                <li><a href="userProfile.php">Show Profile</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
				<?php } else { ?>
				 <li><a href="login.php">Login</a></li>
                <li><a href="registration.php">Register</a></li>
				
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
	<div class="col-sm-2 " >
		<nav  id="myScrollspy">
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
				<li class="active"><a href="aboutUs.php">About Us</a></li>
                <li><a href="inviteFriend.php">Invite Friends</a></li>
                <li><a href="shareExperience.php">Share Experience</a></li>
                <li><a href="bloodDonateFacts.php">Donate Facts</a></li>
                <li><a href="gallery.php">Gallery</a></li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-8" >	
 
<h1 class="text-primary text-center"> Search Blood </h1>
<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div> 
	  <div class="page-header text-center">
	</div>
	<form class="form form-horizontal" action="" method="post">
	<div class="form-group">
		<label class="control-label col-sm-2 col-sm-offset-2 " for="bloodgroup">Blood Group:</label>
		<div class="col-sm-5">
		  <select class="form-control" name="bloodgroup" id="bloodgroup" placeholder = "Enter Blood Group">
		<option> </option>
		<option>A+</option>
		<option>B+</option>
		<option>B-</option>
		<option>O+</option>
		<option>o-</option>
		<option>AB+</option>
		<option>Bombay</option>
	  </select>
	  </div>
  </div>
 	
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
		<button id="search" type="submit" name="search"  class="btn btn-primary">Search</button>
       <input id="reset" type="reset" name="reset" value="Reset" class="btn btn-primary"  />
    </div>
  </div>
   <div class="page-header text-center ">
	</div>
	</form>
	
	<div class="page-header text-center">
	<small>
	<?php		
	    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if(isset($_POST['found'])){
			
				$user2->incDonor();
			}
			else if (isset($_POST['search'])) { // to check which button is clicked
		     $bloodgroup = $_POST['bloodgroup'];
			if ( empty($bloodgroup)) {
	            echo "<span style='color: #e53d37'>Error...Field must not be empty.<span/>";
	        }else{ ?>															
								<?php
									$i = 0;
									$alluser = $user->getSelectedUser($bloodgroup);
									if($alluser ==null){
										echo "<span style='color: #e53d37'>No donor exist.</span>";
										?></small>
										<?php
									}
									else{
										
										?>
												
										<table class="table">
												
									  <tr class="danger">
										<th class="text-center">No.</th>
										<th class="text-center">Name</th>
										<th class="text-center">Discipline</th>
										<th class="text-center">Email</th>
										<th class="text-center">Phone Number</th>
										<th class="text-center">Phone Number</th>
										<th class="text-center">Phone Number</th>
									  </tr>	
										<h1 class = "text-primary" ><p >Donor list of Blood Group: <?php echo $bloodgroup ?> </p> </h1>
										<?php
										foreach ($alluser as $user){
											$i++;
											if($user2->valid($user['id'])) 	{							
										?>
										<tr class="success">
											<td ><?php echo $i; ?></td>
											<td ><?php echo $user['name']; ?></td>
											<td ><?php echo $user['discipline']; ?></td>
											
											<td ><?php echo $user['email']; ?></td>
											<td ><?php echo $user['phone1']; ?></td>
											<td ><?php echo $user['phone2']; ?></td>
											<td ><?php echo $user['phone3']; ?></td>
										</tr>
									<?php
											}									
										} 
									?>
									</table>
									<form method="post">
										<button id="found" type="submit" name="found"  class="btn btn-primary center-block">Click Here If You Find A Donor</button>	
										<hr class="featurette-divider">
									</form>
									<?php
									}?>
							
							
                        <?php 
							}                  
		} 
		
		}
		?>
	
	</div>
		
	<div class="well well-md topColor uppad">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class = "text-primary" >© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016 </p>
		  </footer>


		</div>
		
		</div>
		<div class="col-sm-2  ">
	<div>
			<h2 class="text-primary active">Related Links</h2>
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