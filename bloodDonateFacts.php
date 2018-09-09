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

    <title>About Blood Donation</title>

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
	<br><br><br><br> 
	<div class="container-fluid pagehead  pad " data-spy="scroll" data-target="#myScrollspy" data-offset="15">
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
		 
	  <h1 class="text-primary text-center"> Blood Donation Facts </h1>
<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>	<br>
	<div class="alert alert-warning" role="alert">Facts about blood needs</div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Every year our nation requires about 5 Crore units of blood, out of which only a meager 2.5 Crore units of blood are available.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The gift of blood is the gift of life. There is no substitute for human blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Every two seconds someone needs blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> More than 38,000 blood donations are needed every day.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> A total of 30 million blood components are transfused each year.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The average red blood cell transfusion is approximately 3 pints.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The blood type most often requested by hospitals is Type O.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sickle cell patients can require frequent blood transfusions throughout their lives.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> More than 1 million new people are diagnosed with cancer each year. Many of them will need blood, sometimes daily, during their chemotherapy treatment.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> A single car accident victim can require as many as 100 units of blood.</br>
	</div>
	
	<div class="alert alert-warning" role="alert">Facts about the blood supply</div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Blood cannot be manufactured – it can only come from generous donors.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>Type O-negative blood (red cells) can be transfused to patients of all blood types. It is always in great demand and often in short supply.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Type AB-positive plasma can be transfused to patients of all other blood types. AB plasma is also usually in short supply.</br>
	</div>
	<div class="alert alert-warning" role="alert">Facts about the blood donation process</div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Donating blood is a safe process. A sterile needle is used only once for each donor and then discarded.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Blood donation is a simple four-step process: registration, medical history and mini-physical, donation and refreshments.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Every blood donor is given a mini-physical, checking the donor's temperature, blood pressure, pulse and hemoglobin to ensure it is safe for the donor to give blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The actual blood donation typically takes less than 10-12 minutes. The entire process, from the time you arrive to the time you leave, takes about an hour and 15 min.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  The average adult has about 10 units of blood in his body. Roughly 1 unit is given during a donation.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> A healthy donor may donate red blood cells every 56 days, or double red cells every 112 days.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  A healthy donor may donate platelets as few as 7 days apart, but a maximum of 24 times a year.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  All donated blood is tested for HIV, hepatitis B and C, syphilis and other infectious diseases before it can be transfused to patients.</br> 
	</div>
	<div class="alert alert-warning" role="alert">Facts about blood and its components </div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Blood makes up about 7 percent of your body's weight.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> There are four types of transfusable products that can be derived from blood: red cells, platelets, plasma and cryoprecipitate. Typically, two or three of these are produced from a unit of donated whole blood – hence each donation can help save up to three lives.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Donors can give either whole blood or specific blood components only. The process of donating specific blood components – red cells, plasma or platelets – is called apheresis.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  One transfusion dose of platelets can be obtained through one apheresis donation of platelets or by combining the platelets derived from five whole blood donations.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Donated platelets must be used within five days of collection.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>Healthy bone marrow makes a constant supply of red cells, plasma and platelets. The body will replenish the elements given during a blood donation – some in a matter of hours and others in a matter of weeks.</br> 
			</div>
			<div class="alert alert-warning" role="alert">Facts about donors</div>	
			<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The number one reason donors say they give blood is because they "want to help others."</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Two most common reasons cited by people who don't give blood are: "Never thought about it" and "I don't like needles."</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> One donation can help save the lives of up to three people.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> If you began donating blood at age 18 and donated every 90 days until you reached 60, you would have donated 30 gallons of blood, potentially helping save more than 500 lives!</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Only 7 percent of people in India have O-negative blood type. O-negative blood type donors are universal donors as their blood can be given to people of all blood types.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Type O-negative blood is needed in emergencies before the patient's blood type is known and with newborns who need blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Thirty-five percent of people have Type O (positive or negative) blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> 0.4 percent of people have AB-blood type. AB-type blood donors are universal donors of plasma, which is often used in emergencies, for newborns and for patients requiring massive transfusions.</br> 
	</div>
	<div class="alert alert-warning" role="alert">Facts about blood needs</div>
	<div class="col-sm-offset-1">
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Every year our nation requires about 5 Crore units of blood, out of which only a meager 2.5 Crore units of blood are available.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The gift of blood is the gift of life. There is no substitute for human blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Every two seconds someone needs blood.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> More than 38,000 blood donations are needed every day.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> A total of 30 million blood components are transfused each year.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The average red blood cell transfusion is approximately 3 pints.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> The blood type most often requested by hospitals is Type O.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Sickle cell patients can require frequent blood transfusions throughout their lives.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> More than 1 million new people are diagnosed with cancer each year. Many of them will need blood, sometimes daily, during their chemotherapy treatment.</br>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span> A single car accident victim can require as many as 100 units of blood.</br>
	</div>
		<hr class="featurette-divider">
	<div class="well well-md topColor">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="text-primary">© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016 </p>
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