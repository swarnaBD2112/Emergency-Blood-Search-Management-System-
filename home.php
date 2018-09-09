<?php 
 	session_start();
    require_once "functions.php";
    $user     = new LogInRegistration();
    $uid      = $_SESSION['uid'];
    $username = $_SESSION['uname'];  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icn.ico">
    <title>home page</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">	
    <script src="assets/js/ie-emulation-modes-warning.js"></script>	
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>
  <!-- NAVBAR================================================== -->
    <div class="navbar-wrapper ">
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
			  <?php 
				if ($user->getSession()) { ?>
					<li class="active"><a href="home.php">Home</a></li>				
					<li><a href="userProfile.php">Show Profile</a></li>
					<li><a href="changepassword.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				<?php } else { ?>
				 <li><a href="login.php">Login</a></li>
				<?php } ?>
				<li><a href="index.php">Search</a></li>
				<li><a href="registration.php">Register</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
	<br>  
	<?php if ($user->getSession()){?>
	<br><br><br><br>
	<?php } ?>
	 <div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>
    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner style" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/s1 (2).jpg">
          <div class="container">
            <div class="carousel-caption">
               
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/s2 (2).jpg" >
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/s3 (2).jpg">
          <div class="container">
            <div class="carousel-caption">             
            </div>
          </div>
        </div>		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>
	<!-- slider er por theke footer baki design-->
    <div class="container marketing">    
	<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/pi.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php $user->getSuccessFulSeeker();?></h2>
          <p><?php $user->getSuccessFulSeeker();?> lucky people got blood from our website today. Need blood? </p> 
          <p><a class="btn btn-default" href="index.php" role="button">Search Now.. &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/pi.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php $user->getRegisterdDonorToday();?></h2>
          <p><?php $user->getRegisterdDonorToday();?> , people become donor today. Be a donor & help people.Want to be a donor?</p> 
		  <p><a class="btn btn-default" href="registration.php" role="button">Register Now.. &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/pi.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><?php $user->gettotaldonor();?></h2>
          <p><?php $user->gettotaldonor();?> People are our active donor. Want to khow blood donation?</p> 
		  <p><a class="btn btn-default" href="bloodDonateFacts.php" role="button">Blood donate facts.. &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  
	  
     <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Know About Blood Donation. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Every year our nation requires about 5 Crore units of blood, out of which only a meager 2.5 Crore units of blood are available. Every two seconds someone needs blood.   </p>
		   <p><a class="btn btn-default" href="bloodDonateFacts.php" role="button">Learn More.. &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-rounded img-responsive center-block" src="img/pi1.jpg" alt="Generic placeholder image">
        </div>
      </div>
	<div class = "container corselborder">
.......................................................................................................................
	 </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Who can donate? Who can't... <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">All cannot donate blood . There are certain criteria for this.</p>
		  <p><a class="btn btn-default" href="whocanorcant.php" role="button">Check it out.. &raquo;</a></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/pi3.jpg" alt="Generic placeholder image">
        </div>
      </div>
<div class = "container corselborder">
.......................................................................................................................
	 </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Invite Your Friend Now <span class="text-muted">Together we can do it.</span></h2>
          <p class="lead">Give your friend's email address and connect him/her with this great community. We shall send a request mail to register as donor</p>
		   <p><a class="btn btn-default" href="inviteFriend.php" role="button">Invite now.. &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block"  height = "140 px"src="img/pi2.jpg" alt="Generic placeholder image">
        </div>
      </div>
<div class = "container corselborder">
.......................................................................................................................
	 </div>
      <hr class="featurette-divider">
	  

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Share Your Experience... <span class="text-muted">We will share that with all..</span></h2>
          <p class="lead">Let us know your donation experience. Share it with others right now..</p>
		  <p><a class="btn btn-default" href="newExperience.php" role="button">Share yours Experience.. &raquo;</a></p>
		  Thousands of donors have already shared their experience. Check other's experience..</br></br>
		  <p><a class="btn btn-default" href="shareExperience.php" role="button">See others Experience... &raquo;</a></p>
		  
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/pi4.jpg" alt="Generic placeholder image">
        </div>
      </div>
	  <div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>
	<hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     <div class="well well-md  topColor">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p class="text-primary">© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016 </p>
		  </footer>


		</div>

    </div><!-- /.container -->


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
