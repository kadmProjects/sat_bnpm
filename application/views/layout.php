<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo.png">
  <title>SAT</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-teal.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/btn-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/courseCard.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jobCard.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lectureCard.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<section id="top" class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<img style="height: 60px;" id="logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo of SAT">
				</div>
				<div class="col-sm-9 text-right">
					<p id="tagline" class=" hidden-xs">Learning Happen Everywhere</p>
				</div>
			</div>
		</section>
	  	<header class="main-header">
		    <nav class="navbar navbar-static-top" id="nav-bar">
		      	<div class="container-fluid">
			        <div class="navbar-header">
			          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			            	<i class="fa fa-bars"></i>
			          	</button>
			        </div>
			        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
			          	<ul class="nav navbar-nav">
			            	<li id="home-nav">
			            		<a href="<?php echo base_url('home'); ?>">
			            			<span class="fa fa-home"></span> Home
			            		</a>
			            	</li>
			            	<li id="course-nav">
			            		<a href="#">Courses</a>
			            	</li>
			            	<li id="branches-nav">
			            		<a href="#">Branches</a>
			            	</li>
			            	<li id="timetable-nav">
			            		<a href="#">Time Table</a>
			            	</li>
			            	<li id="aboutus-nav">
				              	<a href="#">About Us</a>
			            	</li>
			            	<li id="contactus-nav">
				              	<a href="#">Contact Us</a>
			            	</li>	
			            	<li id="news-nav">
				              	<a href="#">News</a>
			            	</li>			          	
  							<li id="stulogin-nav">
  								<a href="#">Student Login</a>
  							</li>
						</ul>
			        </div>
	      		</div>
		    </nav>
	  	</header>
	  	<div class="content-wrapper">
	  		<?php $this->load->view($content) ?>
	  	</div>
  		<footer class="main-footer" style="background-color: #343a40">
    		<div class="container-fluid">
      			<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-6">
								<h5>About Us</h5>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Press Center</a></li>
									<li><a href="#">Become an Instructor</a></li>
									<li><a href="#">Video2Brain</a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<h5>Products</h5>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Press Center</a></li>
									<li><a href="#">Become an Instructor</a></li>
									<li><a href="#">Video2Brain</a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<h5>Support</h5>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Press Center</a></li>
									<li><a href="#">Become an Instructor</a></li>
									<li><a href="#">Video2Brain</a></li>
								</ul>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6">
								<h5>Apps</h5>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Press Center</a></li>
									<li><a href="#">Become an Instructor</a></li>
									<li><a href="#">Video2Brain</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<h5>Connect</h5>
						<a class="social-icon" href="#"><span class="fa fa-facebook-square"></span></a>
						<a class="social-icon" href="#"><span class="fa fa-twitter-square"></span></a>
						<a class="social-icon" href="#"><span class="fa fa-linkedin-square"></span></a>
						<a class="social-icon" href="#"><span class="fa fa-google-plus-square"></span></a>
					</div>
      			</div>
    		</div>
  		</footer>
	  	<footer class="main-footer" style="border-top:none;background-color: black;">
	    	<div class="container-fluid text-center">
	      		<img style="width: 100px;" src="<?php echo base_url(); ?>assets/images/logo_w.png">
	    	</div>
	  	</footer>
	</div>
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
	<script type="text/javascript">
		var navbar = document.getElementById('nav-bar');
		document.body.onscroll = function (x) {
			if (this.scrollY >= 75) {
				navbar.classList.add('navbar-fixed-top');
				navbar.classList.remove('navbar-static-top');
			} else {
				navbar.classList.remove('navbar-fixed-top');
				navbar.classList.add('navbar-static-top');
			}
		}
	</script>
</body>
</html>
