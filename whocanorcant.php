<?php 
 	session_start();
    require_once "functions.php";
    $user     = new LogInRegistration();
    $uid      = $_SESSION['uid'];

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

    <title>check vailidy</title>

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
				<li><a href="whocanorcant.php">Check Donate Conditions</a></li> 
				
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	<br><br><br><br> 
	<div class="container-fluid pagehead pad " data-spy="scroll" data-target="#myScrollspy" data-offset="15">
	<div class="col-sm-2" >
		<nav  id="myScrollspy">
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
				<li class="active"><a href="aboutUs.php">About Us</a></li>
                <li><a href="inviteFriend.php">Invite Friends</a></li>
                <li><a href="shareExperience.php">Share Experience</a></li>
                <li><a href="bloodDonateFacts.php">Donate Facts</a></li> 
			</ul>
		</nav>
	</div>
	<div class="col-sm-8 " >
		 
	  <h1 class="text-primary text-center"> Who can/can't donate blood </h1>
<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>	<br>
	<div class="alert alert-warning" role="alert">Who Can......</div>
	
	<h3>Let others benefit from your good health. Do donate blood if ...</h3>
	<div class="col-sm-offset-1">	
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> you are between age group of 18-60 years.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> your weight is 45 kgs or more.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> your haemoglobin is 12.5 gm% minimum.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> your last blood donation was 3 months earlier.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> you are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past. </br>
	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>There are many, many people who meet these parameters of health and fitness! </br>
	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>Do abide by our rules - be truthful about your health status!</br>
	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>We ensure the health of blood, before we take it, as well as after it is collected. Firstly, the donor is expected to be honest about his or her health history and current condition. Secondly, collected blood is tested for venereal diseases, hepatitis B & C and AIDS.<br>

	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>You have to be healthy to give <span style='color: green'>'safe blood' <span/></br></br>
	</div>
	
	<div class="alert alert-warning" role="alert">Who Can't......</div>
	<h3>Do not donate blood if you have any of these conditions</h3>
	<div class="col-sm-offset-1">	
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> cold / fever in the past 1 week.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>under treatment with antibiotics or any other medication.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer,chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> major surgery in the last 6 months.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> vaccination in the last 24 hours.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year. </br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> had fainting attacks during last donation.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> have regularly received treatment with blood products.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> shared a needle to inject drugs/ have history of drug addiction.
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> had sexual relations with different partners or with a high risk individual.
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> been tested positive for antibodies to HIV.</br></br>
	</div>
	<div class="alert alert-warning" role="alert">Pregnancy And Menstrual Cycle</div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Females should not donate blood during pregnancy.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> They can donate after 6 months following a normal delivery and when they are not breast feeding. </br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Females should not donate blood if they are having heavy menstrual flow or menstrual cramps. </br> </br>
			<hr class="featurette-divider">
			
	<div class="well well-md topColor">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="text-primary" >© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016 </p>
		  </footer>
	</div>
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