<?php
	session_start();
	require_once "functions.php";
	$user= new LogInRegistration();

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

    <title>about us</title>

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
	<div class="container-fluid pagehead pad" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
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
	<div class="col-sm-8" >	
<div class="page-header text-center ">
		<h1> <span class="label label-danger">Badhon,  একের রক্ত অন্যের জীবন, রক্তই হোক আত্মার বাঁধন  </span></h1>

	</div>	
	<div class="alert alert-warning" role="alert"> 
			Historical Background
	</div> 

Badhan is a voluntary blood donars’ organization. The journey of Badhan has been continuing since 1997. Through a Free Blood Group Testing Program on 24 October, 1997 in the Shahidullah Hall of Dhaka University, Badhan expressed itself. Before that, dream of an organization from the thoughts of doing something for the people requiring blood (specillay who gathered regularly in the Hall Gate) was running in the mind of one student of that hall Md. Shahidul Islam Ripon. Later he pioneered some other students along with him toward the same thought. And the outcome was that 24 October’s program and Badhan! We, the members of Badhan, donate blood ourselves and motivate others also to donate blood! We believe one’s blood can save another one life! </br></br>
	
	<div class="alert alert-warning" role="alert"> 
		Some Important Information about Badhon
	</div>
	<div class= "col-sm-offset-1">
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Name : ‘BADHAN’ (A Voluntary Blood Donors’Organization)‘বাঁধন’ (স্বেচ্ছায় রক্তদাতাদের সংগঠন)<br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Establishment Date : 24 October,1997.</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Govt. Registration No: DHA-06152</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Slogan: ‘ একের রক্ত অন্যের জীবন, রক্তই হোক আত্মার বাঁধন ‘</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Nature of the Organization: It is totally non-political, non-communal, non- regional, non-racial, secular and voluntary social organization.</br>

		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Goals and objectives: Initiating social movement to build up a healthy society. through motivating voluntary blood donation,donating blood voluntarily&Others services and awareness programs.</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>Programs:</br>

		<div class= "col-sm-offset-1" > 
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Motivating Students and Young generation of Bangladesh to donate blood voluntarily.</br> 
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Free blood group test.</br>
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Donating blood voluntarily for patients.</br>
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Motivating people for voluntary blood donation and taking part in service and awareness program.</br>
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Taking relief and rehabilitation programs to overcome natural and human created calamities.</br> 
		</div>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Expansion: Graduate and Post-Graduate level educational institution of Bangladesh.</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Working Area: Whole Bangladesh.</br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>To be a donor, <a href="registration.php">Click here.</a></br>
		<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>To search for a donor , <a href="index.php">Click here.</a></br><br>
	</div>  
	<hr class="featurette-divider">
	<div class="well well-md topColor">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="text-primary">© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016  </p>
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