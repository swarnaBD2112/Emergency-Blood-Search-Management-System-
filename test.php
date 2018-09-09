<?php
	session_start();
	require "functions.php";
	$user= new LogInRegistration();
	if($user->getSession()) {
		header('location: home.php');
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

    <title>registration</title>
	<link rel="stylesheet" href="css/datepicker.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
	
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<style>
/* Full-width input fields */
 

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.text{
	text-align: center;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
} 
</style>
  </head>
<body >

  <!-- NAVBAR================================================== -->
     <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top well well-md addpad">
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
			<ul class="nav nav-pills nav-stacked navbar-fixed-left" data-spy="affix" data-offset-top="205">
				<li class="active"><a href="aboutUs.php">About Us</a></li>
                <li><a href="inviteFriend.php">Invite Friends</a></li>
                <li><a href="shareExperience.php">Share Experience</a></li>
                <li><a href="bloodDonateFacts.php">Donate Facts</a></li>
                <li><a href="whocanorcant.php">Check Donate Conditions</a></li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-8" >	
 
	  <h1 class="text-primary text-center">REGISTRATION FORM </h1>
<div class = "container-fluid corselborder">
.......................................................................................................................
	 </div>	
	 
	<div class="page-header text-center">
	<small>
	<?php	
	    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			 $name       = $_POST['name'];
	         $password   = $_POST['password'];
	         $discipline = $_POST['discipline'];
	         $bloodgroup = $_POST['bloodgroup'];
			 $age		 = $_POST['age'];
			 $weight     = $_POST['weight'];
			 $donatedate = $_POST['donatedate'];
			 $donateNum		 = $_POST['donateNum'];
	         $email      = $_POST['email'];	        
			 $phone1     = $_POST['phone1'];
	         $phone2     = $_POST['phone2'];
			 $phone3     = $_POST['phone3'];
			 
			// for img
			$permited  = array('jpg', 'jpeg', 'png', 'gif');
			$file_name  = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			$div = explode('.', $file_name );
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$image = "uploads/".$unique_image;		
	        if (empty($name) or empty($password)or empty($bloodgroup) or empty($email) or empty($age)or empty($weight) or empty($discipline)or empty($phone1) or empty($file_name ) ) {				 
	                echo "<span style='color: #e53d37'>Error...Field must not be empty.<span/>";				
	        }else if ($file_size >1048567) {
					 echo "<span class='error'>Image Size should be less then 1MB!</span>";
				}
			else if (in_array($file_ext, $permited) === false) {
					 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
				}
	        else{
	            //$password = md5($password);
				move_uploaded_file($file_temp,$image );	
	            $register = $user->registerUser($name, $password, $discipline, $bloodgroup, $age,$weight,$donatedate, $donateNum,$email,$phone1,$phone2,$phone3,$image);
	        if ($register) {
	            echo "<span style='color:green'>Registration Comlete <a href = 'login.php'>Click here</a> for login.</span>";
	        } else{
	            echo "<span style='color: #e53d37'>Username or Email already exist.</span>";
	        }
	     }                  
	}
	?>
	</small>
	</div>	
	<form class="form form-horizontal" action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="name">Name:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="name"id="name" placeholder="Enter name">
    </div>
	</div>
	
	<div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="password">Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
	</div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2  " for="discipline">Discipline:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="discipline" id="discipline" placeholder="Enter discipline">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="bloodgroup">Blood Group:</label>
    <div class="col-sm-5">
      <select class="form-control" name="bloodgroup" id="bloodgroup" placeholder = "Enter Blood Group">
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
    <label class="control-label col-sm-2 col-sm-offset-2 " for="age">Age:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="age" id="age" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="weight">Weight:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="weight" id="weight" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">	
		<label class="control-label col-sm-2 col-sm-offset-2 " for="donatedate">Last Donate Date : </label>
		<div class="col-sm-5">
            <input  type="text" class="form-control" placeholder="click to show datepicker(Optional)"  name= "donatedate" id="donatedate">
		</div>
	</div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="donateNum">Donation Number:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="donateNum" id="donateNum" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="email">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name ="email" id="email" placeholder="Enter email">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="phone1">Phone1:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="phone1" id="phone1" placeholder="Enter Phone Number">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="phone2">Phone2:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="phone2" id="phone2" placeholder="Enter Phone Number(Optional)">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2" for="phone3">phone3:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name ="phone3"  id="phone3" placeholder="Enter Phone Number(Optional)">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2 col-sm-offset-2 " for="age">Upload Image:</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" name ="image" id="image" placeholder="Enter Image">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"id="register" type="submit" name="register"  class="btn btn-primary">Register</button>
     <!-- <input id="register" type="submit" name="register" value="Register" class="btn btn-primary"  /> --> 
       <input id="reset" type="reset" name="reset" value="Reset" class="btn btn-primary"  />
    </div>
  </div>
	</form>
	<hr class="featurette-divider">
	<div class="well well-md footStyle">
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>© all right reserved | BADHAN, A Voluntary Blood Donors' Organization | 1997 - 2016 </p>
		  </footer>


		</div>
		</div>
	<div class="col-sm-2  ">
			<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">
			<marquee direction="up" scrolldelay="300">
			<table >
				<tr>
					<td>
					<div class="blog_desc">
					<div class="blog_heading">
							<span style="font-weight:bold"><b>HDFC Bank sets Guinness record in blood collection</b>
					<p>The blood donation camp organised by HDFC Bank on December 6, 2013 involving 61,902 participants has found a place in Guinness Book of Records as the largest such drive on a single day</p></span>
							
					</div><br />
					<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in India</b>
					<p>While the overall number of blood donors in India has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					</div>
                    </td>
				</tr>
                   
            </table>
			</marquee>  
			<div class="clear"></div>	
			</div>	
		</div>
		<div>
			<h2>Related Links</h2>
			<table class="table table-hover table1">
				<tr><td> <a href="login.php">Login</a></td></tr>
				<tr><td><a href="login.php">Login</a></td></tr>
				<tr><td><a href="login.php">Login</a></td></tr>
				<tr><td><a href="login.php">Login</a></td></tr>
				<tr><td><a href="login.php">Login</a></td></tr>
				<tr><td><a href="login.php">Login</a></td></tr>
			</table>
		</div>
			
        </div>
		<div id="id01" class="modal"> 
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/t.jpg" alt="Avatar" class="avatar ">
    </div>
	<div class= "text">We Thank U FOR BEING A DONOR</div>   
  </form>
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
	<!-- following 9 line is added for date picker -->
	<script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {              
                $('#donatedate').datepicker({
                    format: "dd/mm/yyyy"
                });             
            });
    </script>
  </body>
</html>