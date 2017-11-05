  <!DOCTYPE html>
<?php
 include('session.php');
  $con=mysqli_connect("localhost","wasbenzt","@Jd3*6^6?jMw","wasbenzt_vssutrobotics.in");
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Vssut Robotics Website ">
        
        <meta name="author" content="Vssut Robotics">
		
        <title>Vssut Robotics | Where Imagination Meets Imagination</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/head1.png" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        <link href="css/flipping_gallery.css" rel="stylesheet" type="text/css">
         

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<link href="https://icons8.com">
			
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js" ></script>
        
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js" ></script>
  		<script type="text/javascript" src="js/jquery.flipping_gallery.js" ></script>
        
  		



		<script async>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
				<script async>
				var jq=$.noConflict();
	  jq(document).ready( function() {
	    jq(".gallery").flipping_gallery({
	      enableScroll: true,
	      
	    });
	    
	    jq(".next").click(function() {
	      jq(".gallery").flipForward();
	      return false;
	    });
	    jq(".prev").click(function() {
	      jq(".gallery").flipBackward();
	      return false;
	    });
	  });
		
	</script>
    
    </head>
	
    <body id="body">
    	
	
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Rings Preloader" src="imgs/Forrest.gif"/>
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<img class="wow fadeInUp" src="img/robotics.png" alt="Robotics">
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Where Imagination Meets Innovation</h2>
								<!--<a class="btn btn-green animated fadeInUp" href="#about">Read More</a>-->
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">AIR<span class="color">-6</span></h2>
								<h3 class="animated fadeInUp">ABU ROBOCON <span class="color">2017</h3>
								<!--<a class="btn btn-green animated fadeInUp" href="#showcase">Lets Explore</a>-->
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight"><span class="color">I</span>deate   <span class="color">C</span>reate   <span class="color">I</span>nnovate</h2>
								<h3 class="animated fadeInLeft"></h3>
								<!--<a class="btn btn-green animated fadeInUp" href="#services">Lets Explore</a>-->
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/robotics1.png" alt="VssutRobotics" />
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#showcase">Projects</a></li>
                        <li><a href="#pricing">Achievements</a></li>
                         <li><a href="#our-team">Team</a></li>
                        <li><a href="#services">Gallery</a></li>
                       <!-- <li><a href="#our-alumni">Our Alumni</a></li>-->
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                        <li><a href="index1.php"> <?php echo $_SESSION['name']; ?> </a></li>
                         <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
      
        <!--    
        Sign Up Section
        ================================================

        ================================================
        -->
        
        <div id= 'id01' class="modal">
           
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"> &times;</span> 
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
       <script src="js/signup.js" ></script>
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="signup.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="f_name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="l_name" required autocomplete="off"/>
            </div>
          </div>
              
              <div class="field-wrap">
              <label>
                Choice:Alumni/student<span class="req">*</span>
              </label>
              <input type="text" name="choice" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="e_mail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email1" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass1" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
    
      </div>
    
</div>
<!-- /form -->    
            
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
		<!-- section title -->
					
				
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Our<span class="color">  Mission</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-12 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<!--<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>	-->				
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<!--<h3 class="ddd">We're Creative</h3>	-->							
								<p>With the dawn of 21st century and scientific advancements at its peak ,sitting with a book and reading about scientific endeavours is too mainstream. The time demands more from us and we are up for the challenge . We are enthusiastic enough to take this opportunity and make a great deal of it. We all succour the ways in which robotics can change the world. Being the avid tech geeks that we are, we can see the positive economic and cultural potential that the technology can offer. Our mission is one- to make the best innovation of the ideas one possesses.</p>
							</div>
						</div>
					</div> 
				</div>
					<!-- End About item -->
					<div class="row">
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>What We<span class="color">  Do</span></h2>
						<div class="border"></div>
					</div>
					<!-- About item -->
					<div class="col-md-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<!--<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>-->
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<!--<h3>We're Professional</h3>-->
								<p>VSSUT Robotics Society provides students with resources and ample support to develop products which will make people lives easier. Over the years, it has not failed once to make its presence felt. Be it the outstanding performances at Robocon or invigorating the primordial ideas of freshers. It fosters and prunes every innovative mind.We love to play with MECHANICAL designs, dope them with the ELECTRONICS components and feel the Automation come alive with few lines of CODING. The society offers indispensable guidance, workshops and tutorials along with tools, equipment, components and workspace to the students of the university.Mentioning of team work! Individual commitment to a group effort-that is what makes,a team work, a company work, this Robotics society work. This is not merely a club of an institute, this is what a family looks like in a technical university.</p>
							</di,
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<!--<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<!--<div class="about-content text-center">
								<h3>We're Professional</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>-->
						</div>
					</div>
					<!-- End About item -->
					
					<!-- End row -->
		 	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Main Features
		==================================== -->
		<section id="main-features">
			<div class="container">
				<div class="row">
					
					<!-- features item -->
					<div id="features">
						<div class="item">
							
							<div class="features-item">
								
								<!-- features media -->
								<div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
									<iframe  src="https://www.youtube.com/embed/RhroZl45nQo" frameborder="0"  allowfullscreen></iframe>
								</div>
								<!-- /features media -->
								
								<!-- features content -->
								<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h3>Robotics Society</h3>
									<p>Robotics Society is an official society of VSSUT, Burla which owes its initiative to alumni Mr. Biswajit Parida. The society encourages various technical activities and projects in the field of amateur as well as advanced Robotics, in the university.</p>
									<p>The members are a bunch of budding technocrats who are driven by an acute zest for learning technological advancements and happenings in the modern world, and endeavor in applying the theoretical learnings into realistic projects.</p>
									<a href="https://www.youtube.com/channel/UCfrM26pYkyk8JtW-G0mcDNQ" class="btn btn-transparent">Watch More</a>
									<!--<a href="#" class="btn btn-transparent">Our Team</a>-->
								</div>
								<!-- /features content -->
								
							</div>
						</div>
						
						<div class="item">
							<div class="features-item">
							
								<!-- features media -->
								<div class="col-md-6 feature-media wow fadeInUp" data-wow-duration="500ms">
									<img src="img/blog/4.jpg" alt="Vssut Robotics App" class="img-responsive">
								</div>
								<!-- /features media -->
								
								<!-- features content -->
								<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h3>The Official App Of Vssut Robotics</h3>
									<p>In this mobile era, apps are the becoming the means of fastest information source & the most effective among hundreds of websites.A quick look on the outrage of ROBOTICS SOCIETY,an offline platform of all the resources and a handful support from the seniors of the society, all the statistics from tip to toe is in front of your screen in just one click on the App of "VSSUT ROBOTICS".</p>
									<p>What we as a student want is the simplicity and focus that apps provide & this  is possible with just a click on the app.In a nutshell,without being online or waiting for the details to load we can open the basic page of the app and can get all the information.</p>
									<a href="https://play.google.com/store/apps/details?id=com.vssut_robotics.application&hl=en" class="btn btn-transparent">Download The App</a>
									<!--<a href="#" class="btn btn-transparent">Purchase Theme</a>-->
								</div>
								<!-- /features content -->
								
							</div>
						</div>
					</div>
					<!-- /features item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="25">25</span>
							</div>
							<i class="fa fa-calendar fa-3x"></i>
							<h3>Events Organised</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="50">50</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="22">22</span>
								<span></span>
							</div>
							<i class="fa fa-trophy fa-3x"></i>
				            <h3>Awards</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="3600">3600</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
							<h3>Likes</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		
		
		
		<!-- Start Portfolio Section
		=========================================== -->
		
		<section id="showcase">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Our <span class="color">Projects</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					
						<!-- portfolio item filtering -->
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".app">Manual</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Aerial</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Image Processing</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".illustrator">Automatic</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
				
					<!-- single portfolio item -->	
					<li class="mix illustrator">
						<a data-largesrc="img/portfolio/3Dprinter.jpg" data-title="3D PRINTER" data-description="3D printing, also known as additive manufacturing (AM), refers to processes used to create a three-dimensional object in which layers of material are formed under computer control to create an object.Objects can be of almost any shape or geometry and are produced using digital model data from a 3D model or another electronic data source such as an Additive Manufacturing File (AMF) file. Thus, unlike material removed from a stock in the conventional machining process, 3D printing or AM builds a three-dimensional object from computer-aided design (CAD) model or AMF file by successively adding material layer by layer.
						">
							<img src="img/portfolio/3Dprinter.jpg" alt="3D PRINTER">
							<div class="hover-mask">
								<h3>3D PRINTER</h3>
								<span>
								<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix  illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Robocon2017.jpg" data-title="DISC THROWING BOT" data-description="The theme was set by the host country Japan and its Nationals were held at MIT, Pune. The Competition demanded making of  a robot which can fix a target  location set at a particular distance with varying heights. The target had a circular ball placed at it. The bot was required to locate the target and throw a disc with proper calculated velocity and angle. The disc was supposed to hit the circular ball, topple it down and hence land itself in the target position.
                        All this work ,needs to be complete within 3 minutes and the team landing maximum number of disc is declared as winner.">
							<img src="img/portfolio/Robocon2017.jpg" alt="DISC THROWING BOT">
							<div class="hover-mask">
								<h3>DISC THROWING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Poleclimbing.jpg" data-title="HYBRID POLE CLIMBING BOT" data-description="Built according to the theme of Robocon 2016, this bot partner with the eco bot. This bot works its way against gravity by itself with help of the science involving pneumatics to climb the pole or any object with plane surface standing perfectly vertical to the ground. It has various industrial applications, one of them involving the repairing fans of windmills, etc.">
							<img src="img/portfolio/Poleclimbing.jpg" alt="HYBRID POLE CLIMBING BOT">
							<div class="hover-mask">
								<h3>HYBRID POLE CLIMBING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/ROBOMINTON.jpg" data-title="ROBOMINTON" data-description="This bot was built as per the theme of Robocon 2015. The bot was built on the foundation of pneumatics that allows the bot to glide/move in the arena and coded so clearly such that it can be controlled or guided to play the game of badminton all by itself. This bot brought many laurels and achievements">
							<img src="img/portfolio/ROBOMINTON.jpg" alt="ROBOMINTON">
							<div class="hover-mask">
								<h3>ROBOMINTON</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Hybridcharger.jpg" data-title="HYBRID CHARGER" data-description="A mobile charger that charges your device through four energy sources namely, solar energy, wind energy, mechanical energy and electrical energy( conventional ac source). Mechanically, a hand crank is present, which when rotated at continuous speed, charges the mobile.

						The advantage of this device is that it does not depend upon only one energy source and employs other renewable sources of energy as well. Incorporating thermal energy and sound energy in this project is under research and development.">
							<img src="img/portfolio/Hybridcharger.jpg" alt="HYBRID CHARGER">
							<div class="hover-mask">
								<h3>HYBRID CHARGER</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Quadcopter.jpg" data-title="DRONE" data-description="Robotics Society has marvelled in the field of aerial robotics.This aerial vehicle has the ability to take aerial still photography,automatic safe-landing,constant altitude maintenance,GPS functionality,programmable automatic parcel delivery system and can be used for aerial survey.">
							<img src="img/portfolio/Quadcopter.jpg" alt="QUADCOPTER">
							<div class="hover-mask">
								<h3>DRONE</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/tricopter.jpg" data-title="TRICOPTER" data-description="A fully customisable drone with three propeller which has the ability to perform aerial stunts comaparable to human acrobats due to its high degree of freedom.It is cost-effective too.">
							<img src="img/portfolio/tricopter.jpg" alt="TRICOPTER">
							<div class="hover-mask">
								<h3>TRICOPTER</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/lifi.jpg" data-title="LI-FI" data-description="Li-Fi is a local area networking system technology, which allows everyone to connect to each other and to the internet.Li-Fi stands for Light Fidelity.It is a bidirectional, high-speed and fully networked wireless communication network technology as similar to Wi-Fi. It is also a wireless networking system but it makes use of UV/Visible/InfraRed light, which have a greater frequency spectrum and also transmit visible light waves , which can easily understand by a light sensor and transmit data in a digital pattern. So basically Wi-Fi & Li-Fi ,both are used for local area networking in a wireless manner, where Wi-Fi is great for general wireless coverage and Li-Fi is ideal for high density coverage in a confined region.">
							<img src="img/portfolio/lifi.jpg" alt="LI-FI">
							<div class="hover-mask">
								<h3>LI-FI</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Firesensingbot.jpg" data-title="AUTOMATIC FIRE SENSING BOT" data-description="An automatic fire sensing and control bot senses fire using three fire sensing modules to detect it and then follows to its source. When the fire is at distance of 20 cms, using an ultrasonic sensor, it orients itself and extinguishes the fire through the exhaust fan fitted to the main body.

						Its advantage is in places where the fire cannot be put down manually.">
							<img src="img/portfolio/Firesensingbot.jpg" alt="AUTOMATIC FIRE SENSING BOT">
							<div class="hover-mask">
								<h3>AUTOMATIC FIRE SENSING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Gesture_control.jpg" data-title="GESTURE CONTROLLED BOT" data-description="Gesture control bot as the name specifies it means the bot is controlled by hand gestures. In this we are controlling a robot wirelessly using hand gestures. This is easy and friendly way to interact with robotic systems. A gesture controlled robot using an accelerometer is one kind of robot which can be operated by the movement of hand by placing an accelerometer on it.Gesture control bot can be fitted with a camera and can be used to see the things underground by simply moving the camera underground with the help of hand gestures, also can be used in places to carry loads where mankind cannot go. This robotics are used in industries to control trolley and lift. ">
							<img src="img/portfolio/Gesture_control.jpg" alt="GESTURE CONTROLLED BOT">
							<div class="hover-mask">
								<h3>GESTURE CONTROLLED BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/selfbalancing.jpg" data-title="SELF-BALANCING BOT" data-description="Self-balancing bot or the so called inverted pendulum balances itself and also corrects its position automatically on disturbance. The robot actually finds it easier to stabilize if the frame is very tall with a lot of weight on top, instead of a small frame with a low centre of gravity. The physics for this robot is simple, the robot stand in two points lined, the wheel, and it tends to fall and lose his verticality, the movement of the wheel in the direction of the falling rises the robot to recover the vertical position.

						Self-balancing scooter, two wheels are used so more efficient and can be used for tracking where large bots cannot go, light sensors can be used in the bot and can make it to follow dark line which can be used in dark areas or places where mankind cannot go.">
							<img src="img/portfolio/selfbalancing.jpg" alt="SELF-BALANCING BOT">
							<div class="hover-mask">
								<h3>SELF-BALANCING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Obstacledetection.jpg" data-title="OBSTACLE DETECTING BOT" data-description="Equipped with ultrasonic sensors, this bot can detect obstacles and guide its way through obstacles with or without light. We can control the movement of the bot through Arduino app without worrying about the collision of the bot with any obstacle.

						It has wide applications in fields like military, city wars and all those places that cannot be reached to by humans.">
							<img src="img/portfolio/Obstacledetection.jpg" alt="OBSTACLE DETECTING BOT">
							<div class="hover-mask">
								<h3>OBSTACLE DETECTING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Objecttracker.jpg" data-title="OBJECT TRACKER BOT" data-description="This bot uses pixy camera which recognizes colour and then follows the set object with identified colour. Can be used to keep surveillance or follow the set target with least scope of error.">
							<img src="img/portfolio/Objecttracker.jpg" alt="OBJECT TRACKER BOT">
							<div class="hover-mask">
								<h3>OBJECT TRACKER BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Kinect.jpg" data-title="KINECT-MOTION TRACKER" data-description="This project which is under development deals with recognizing the movement of the object placed in-front of the primary camera. It recognizes the basic joint of the object/living placed in-front of the camera and then projects it’s movement on the desired screen.">
							<img src="img/portfolio/Kinect.jpg" alt="KINECT-MOTION TRACKER">
							<div class="hover-mask">
								<h3>KINECT-MOTION TRACKER</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/voice_controlled_bot.jpg" data-title="VOICE CONTROLLED BOT" data-description="Nicknamed as ‘Jarvis’, this bot has been embedded with the function to carry out certain tasks precoded in the system when asked to be carried out. Quite resourceful for people who are unable to move or carry out tasks by themselves.">
							<img src="img/portfolio/voice_controlled_bot.jpg" alt="VOICE CONTROLLED BOT">
							<div class="hover-mask">
								<h3>VOICE CONTROLLED BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Stairclimbing.jpg" data-title="STAIR CLIMBING BOT" data-description="This bot is built in such a way to traverse all terrains including heights or stairs thus enabling it carry out the desired/required work with least waste of human efforts or energies.">
							<img src="img/portfolio/Stairclimbing.jpg" alt="STAIR CLIMBING BOT">
							<div class="hover-mask">
								<h3>STAIR CLIMBING BOT</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
						<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/Humanoid.jpg" data-title="HUMANOID" data-description=" Robotics society made the first Humanoid of odisha in the year 2013 in association with A-Set robotics.">
							<img src="img/portfolio/Humanoid.jpg" alt="HUMANOID">
							<div class="hover-mask">
								<h3>HUMANOID</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
						<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/rover.jpg" data-title="ROVER" data-description="The objective of the project is to map the whole arena by controlling the bot from station and detecting obstacles and their colors. This project is based on Line following robot which can wirelessly send or receive signals using Bluetooth module which acts as a medium of communication between the rover and PC. The rover sends runtime feedback about various obstacles using Ultrasonic sensor and colour sensor and can display path. The path is drawn using senior monitor of the Arduino IDE and Processing IDE.">
							<img src="img/portfolio/rover.jpg" alt="ROVER">
							<div class="hover-mask">
								<h3>ROVER</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
						<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/home.jpg" data-title="HOME AUTOMATION" data-description="Home automation is a convenient way to control and monitor any electronic device by using a Bluetooth app on the Android phone.It is a step towards what we call as “INTERNENT OF THINGS”.After connecting the Bluetooth module with the Bluetooth in the smart phone, the commands sent through the module is transmitted to the Arduino where this data is compared with the string written in the sketch. If the data is successfully matched then accordingly the loads are turned on.It is widely used to control electrical appliances with clicks or voice commands. In advance sensors can be used which will automatically adjust or monitor the different parameters like air conditioning, room lighting etc.">
							<img src="img/portfolio/home.jpg" alt="HOME AUTOMATION">
							<div class="hover-mask">
								<h3>HOME AUTOMATION</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
						<!-- /single portfolio item -->
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/roboticarm.jpg" data-title="ROBOTIC ARM" data-description="The sole objective of our project is to make a robotic manipulator or simply a mechanical arm. It is an open or closed kinematic chain of rigid links interconnected by movable joints. Links can be considered to correspond to human anatomy as upper arm and forearm with joints at shoulder and elbow. At the end of the wrist joint a gripper is connected. Here a pick and place mechanism is used. To control the various joints commands are given through arduino. The movements of the joints are done using servo motors.It can be used in Grasping and holding objects for relocation purposes or mixing with other fluids,used in surgery and other medical purposes where the human hand cannot serve the purpose & retrieving suspicious objects without endangering humans.">
							<img src="img/portfolio/roboticarm.jpg" alt="ROBOTIC ARM">
							<div class="hover-mask">
								<h3>ROBOTIC ARM</h3>
									<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					
				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->
			
		</section>   <!-- End section -->
		
		
		<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
				
					<!-- section title -->
					<div class="title text-center">
						<h2>Our <span class="color">Skills</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="50">
								<span class="percent"></span>
							</span>
							<h3><!--<i class="fa fa-wordpress"></i>--> ROS</h3>
							<p>The Robot Operating System (ROS) is a flexible framework for writing robot software. It aim is to simplify the task of creating complex and robust robot behavior across a wide variety of robotic platforms.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="65">
								<span class="percent">86</span>
							</span>
							<h3><!--<i class="fa fa-html5"></i> -->Arduino</h3>
							<p>An Open-source electronic prototyping platform enabling users to create interactive electronic objects.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="50">
								<span class="percent"></span>
							</span>
							<h3><!--<i class="fa fa-android"></i> -->Raspberry Pi</h3>
							<p>The Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects. </p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="40">
								<span class="percent"></span>
							</span>
							<h3><!--<i class="fa fa-apple"></i>--> Image Processing</h3>
							<p>Image processing is a method to convert an image into digital form and perform some operations on it, in order to get an enhanced image or to extract some useful information from it.</p>
						</div>
					</div>
					<!-- end skill set -->
					
				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

		<!-- Start Pricing section
		=========================================== -->
		
		<section id="pricing" class="bg-one">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
				    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
			        	<h2>Our<span class="color"> Achievements</span></h2>
				        <div class="border"></div>
				    </div>
				    <!-- /section title -->
					
					<!-- single pricing table -->
					<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
						<div class="pricing">
							
							<!-- plan name & value -->
							<div class="price-title">
								<h3>ROBOCON</h3>
								<!--<p>From <strong class="value">$99</strong> month</p>-->
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>2017: AIR-6</li>
								<li>2016: AIR-20</li>
								<li>2016: 3rd Prize In Implementing MathWorks In Nationals</li>
								<li>2015: AIR-27</li>
								<li>2011: AIR-4</li>
								<!--<li>24/7 Tech Support</li>-->
							</ul>
							<!-- /plan description -->
							
							<!-- signup button -->
							<a class="btn btn-transparent" href="https://www.linkedin.com/in/vssut-robotics-129434149/">Details</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="pricing">
						
							<!-- plan name & value -->
							<div class="price-title">
								<h3>E-yantra</h3>
								<!--<p>From <strong class="value">$149</strong> month</p>-->
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>2017: 2 teams from VSSUT were finalists</li>
								<li>2016: 3 teams from Vssut Robotics were shortlisted</li>
								<li>2015: AIR–7</li>
								<li>2015: 3 teams were shortlisted</li>
							<!--	<li>10 GB Bandwidth</li>
								<li>24/7 Tech Support</li>-->
							</ul>
							<!-- /plan description -->
							
							<!-- signup button -->
							<a class="btn btn-transparent" href="https://www.linkedin.com/in/vssut-robotics-129434149/">Details</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="pricing">
							
							<!-- plan name & value -->
							<div class="price-title">
								<h3>TechFests</h3>
								<!--<p>From <strong class="value">$199</strong> month</p>-->
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>NIT Rourkela 2016:  1st in Drone Wars & Tread-O-Quest</li>
								<li>IIT Kharagpur 2015: 3rd position in Aerial Event</li>
								<li>IIT Kharagpur 2014: 2nd Position in Water Event(Boyant)</li>
								<li>NIT Rourkela 2014:  1st position automatic Robotic Competition(Tred-o-Quest)</li>
								<li>NIT Rourkela 2014:  2nd Position at NIT Rourkela in Underwater Robotics.</li>
								<li>Kshitij IIT Kharagpur 2008: 1st Position </li>
							</ul>
							<!-- /plan description -->
							
							<!-- signup button -->
							<a class="btn btn-transparent" href="https://www.linkedin.com/in/vssut-robotics-129434149/">Details</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
						<div class="pricing kill-margin-bottom">
						
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Miscellaneous</h3>
								<!--<p>From <strong class="value">$299</strong> month</p>-->
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li> IIT Delhi: 3rd prize in Automatic Event (ROBOTRYST) </li>
								<li>National Robotics Competition 2015: AIR-27</li>
								<li>Robotics Event IIT BHubaneswar: 1st Position</li>
								<li>NEXUS,IIT Bombay 2008: 2nd Position</li>
								<!--<li>10 GB Bandwidth</li>
								<li>24/7 Tech Support</li>-->
							</ul>
							<!-- /plan description -->
							
							<!-- signup button -->
							<a class="btn btn-transparent" href="https://www.linkedin.com/in/vssut-robotics-129434149/">Details</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
				    
					
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Our Team
		=========================================== -->
	
		<section id="our-team" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2><span class="color">Administration</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					

	
<!--<div class="container">
  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   <!-- <div class="carousel-inner">

        		<div class="item active">
<!-- team member -->
					
					
					<div class="col-md-3 col-sm-6 wow fadeInDown "  data-wow-duration="500ms">
                       <article class="team-mate" style="background-color: #4B77BE">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/dsw_sir.jpg" alt="Dr. Debadutta Mishra">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/dmvssut"><i class="fa fa-facebook"></i></a></li>
										<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
										<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Dr. Debadutta Mishra </h3>
								<span>Dean,Students' Welfare</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                          <!-- <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>-->
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown "  data-wow-duration="500ms">
                       <article class="team-mate" style="background-color: #4B77BE">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/gyan-ranjan-biswal.jpg" alt="Dr.Gyan Ranjan Biswal">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
										<li><a href="https://www.linkedin.com/in/gyan-ranjan-biswal-0a845814/"><i class="fa fa-linkedin"></i></a></li>
										<!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Dr.Gyan Ranjan Biswal</h3>
								<span>Vice-President,Technical Society</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                          <!-- <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>-->
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown "  data-wow-duration="500ms">
                       <article class="team-mate" style="background-color: #4B77BE">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/nilakantha-sahu.jpg" alt="Mr.Nilakantha Sahu">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Mr.Nilakantha Sahu</h3>
								<span>Faculty Advisor,Robotics Society</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                          <!-- <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>-->
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
                    <div class="col-md-3 col-sm-6 wow fadeInDown "  data-wow-duration="500ms">
                       <article class="team-mate" style="background-color: #4B77BE">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/shiti.jpg" alt="Shitikantha Bagh">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/shitikanth.bagh"><i class="fa fa-facebook"></i></a></li>
										<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
										<li><a href="https://www.linkedin.com/in/shitikantha-bagh-93479b118/"><i class="fa fa-linkedin"></i></a></li>
										<!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Shitikantha Bagh</h3>
								<span>Secretary,Robotics Society</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                          <!-- <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>-->
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
					
					
  
   				 </div>


				<!--<div class="item">
<!-- team member -->
					
					

  
  				<!--</div>-->


				<!--<div class="item">
<!-- team member -->
					
				
					<!-- end team member -->
  
   			<!--</div>-->



    <!-- Left and right controls -->
   <!-- <a class="nav-arrows" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="nav-arrow-prev">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  	<!--</div>
	</div>

</div>-->
					  
					
					
				</div>  	<!-- End row -->
									<style>  
											.carousel-indicators
												{
													margin-top: -100px;
													margin-bottom: -60px;
							}
											 .row1{
											 	margin-top: 25px;
											 }


									</style>
									<div class="row1">
										<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<!-- End row -->				<a class="btn btn-green animated fadeInUp" href="team.html">More</a>
										</div>
									</div>
			   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!-- Start Twitter Feed
		=========================================== -->
		
		<!--<section id="twitter-feed" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					
						<!-- twitter bird -->
						<!--<div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">
							<span>
								<i class="fa fa-twitter fa-4x"></i>
							</span>
						</div>
						<!-- /twitter bird -->
						
						<!-- fetching tweet -->
						<!--<div class="tweet wow fadeIn" data-wow-duration="2000ms"></div>
						<!-- /fetching tweet -->
						
						<!-- follow us button -->
					<!--	<a href="https://twitter.com/societyrobotics" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Follow Us</a>						
						<!-- /follow us button -->
						
				<!--	</div>
				</div>       <!-- End row -->
		<!--	</div>   	<!-- End container -->
	<!--	</section>-->  <!-- End section -->
		
		
		<!-- Start Gallery Section
		==================================== -->
		  <style>
		  .gallery {
      width: 500px;
      height: 333px;
      margin: 150px auto 100px;

				}
			

    </style>
		<section id="services" class="bg-one" style="background-color: transparent;" >
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2><span class="color">Gallery</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<!--<div class="wrapper">-->
	  <!--<div class="main">
	   <!-- <div class="header">
        <!--<h1>jQuery Flipping Gallery</h1>
        <h2>Create a Flipping Awesome 3D Gallery with One Function Call</h2>-->
       <!-- <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>-->
       <!-- <div class="btns">
  	      <a class="reload btn" href="https://github.com/peachananr/flipping_gallery">Download on Github</a>
  	    </div>-->
  	  <!--</div>-->
  	  <!--<div class="page-container">
    <div class="pointer2">Click Me</div>  
      <div class="pointer">Scroll Me</div> -->
     
	
       <div class="gallery">
          <a href="#" data-caption="Abu Robocon 2017: AIR-6"><img src="imgs/1.jpg"></a>
          <a href="#" data-caption="Abu Robocon 2016"><img src="imgs/2.jpg"></a>
          <a href="#" data-caption="Abu Robocon 2015" style="font size:20px"><img src="imgs/3.jpg"></a>
          <a href="#" data-caption="RoboGames"><img src="imgs/4.jpg"></a>
          <a href="#" data-caption="Hybrid Bot"><img src="imgs/5.jpg"></a>
          <a href="#" data-caption="Independence Day"><img src="imgs/6.jpg"></a>
          <a href="#" data-caption="Orientation Programme"><img src="imgs/7.jpg"></a>
          <a href="#" data-caption="NSSC 2016"><img src="imgs/8.jpg"></a>
          <a href="#" data-caption="NSSC 2017"><img src="imgs/9.jpg"></a>
         <!-- <a href="#" data-caption=""><img src="imgs/5.jpg"></a>-->
        </div>
     
 <div class="navigation">
 	<div class="title text-center wow fadeIn">
          <a href="#" class="btn btn-green animated fadeInUp prev">Previous</a>
          <a href="#" class="btn btn-green animated fadeInUp next">Next</a>
      </div>
        </div>
      
     <!-- </div>-->
    
   <!-- <a class="back" href="http://www.thepetedesign.com/#design">Back to The Pete Design</a>
    <a href="https://github.com/peachananr/flipping_gallery"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 15;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>-->
  
					
                    <!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-wordpress fa-5x"></i>
							</div>
							<h3>WordPress Theme</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>-->
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-desktop fa-5x"></i>
							</div>
							<h3>Responsive Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-play fa-5x"></i>
							</div>
							<h3>Media &amp; Advertisement</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-eye fa-5x"></i>
							</div>
							<h3>Graphic Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-android fa-5x"></i>
							</div>
							<h3>Apps Development</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<!--<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="service-block text-center kill-margin-bottom">
							<div class="service-icon text-center">
								<i class="fa fa-link fa-5x"></i>
							</div>
							<h3>Networking</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End Gallery section -->
		
		
		<!-- Start Testimonial
		=========================================== -->
		
		<section id="testimonial" class="parallax-section">
			<div class="container">
				<div class="row">				
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
							<h3>What People Say About Us</h3>
						</div>
						<!-- /section title -->

						<!-- testimonial wrapper -->
						<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
						<!-- testimonial single -->
                            <!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/vc_sir.jpg" class="img-responsive" alt="Prof. E. Saibaba Reddy">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Prof. E. Saibaba Reddy</h3>
										<span>Honorable Vice Chancellor,VSSUT</span>
									</div>
									<div class="client-comment">
										<p>“I’m ecstatic to learn that the students of Robotics Society have proven their engineering skills by prototyping the 3D printer indegenously in the department laboratory of the university. This shows the scholastic ability and innovative minds of our students. I extend my happiest congratulations in this proud moment and expect many such innovative outcomes from the students of VSSUT. My best wishes are with the students and the faculty and staff of the department.”</p>
										<ul class="social-profile">
										<!--<li><a href="https://www.facebook.com/sanjay.agrawal.73700"><i class="fa fa-facebook-square fa-lg"></i></a></li>-->
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<!--<li><a href="https://www.linkedin.com/in/manikantbehera/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>-->
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/Sanjay_Sir.jpg" class="img-responsive" alt="Dr.Sanjay Agrawal">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Dr.Sanjay Agrawal</h3>
										<span>Ex.Vice-President,Robotics Society</span>
									</div>
									<div class="client-comment">
										<p>“I feel happy and privileged to be recognized by
                                            the young yet acute minds of the Robotics
                                            Society as a part of their small family.
                                            It has always been a treat and moment of pride
                                            to see the society bloom in the tech field and
                                            come out in flying colors.
                                            I wish them a great deal of success and fame in
                                            the upcoming years and motivate them to
                                            become the strongest pillars of our college.”</p>
										<ul class="social-profile">
										<li><a href="https://www.facebook.com/sanjay.agrawal.73700"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<!--<li><a href="https://www.linkedin.com/in/manikantbehera/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>-->
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
                            <!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/dora_sir.jpg" class="img-responsive" alt="Mr.Lingraj Dora">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Mr.Lingraj Dora</h3>
										<span>Ex.Faculty Advisor</span>
									</div>
									<div class="client-comment">
										<p>&quot;I am happy to learn that the support and
                                            guidance rendered by me has been of great
                                            help to the Robotics Society.
                                            I warmly welcome the members of society for
                                            any sort of aid which can build a ladder of
                                            success for them.
                                            Lastly, I congratulate the members for all their
                                            achievements and wish them luck for their
                                            bright future.&quot;</p>
										<ul class="social-profile">
										<li><a href="https://www.facebook.com/lingraj.dora.5"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<!--<li><a href="https://www.linkedin.com/in/manikantbehera/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>-->
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Biswajit Parida">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Biswajit Parida</h3>
										<span>Founder</span>
									</div>
									<div class="client-comment">
										<p>“Robotics Society is an official
                                            technical society of VSSUT, Burla
                                            which encourages various
                                                technical activities and projects in
                                            the field of amateur as well as
                                            advanced Robotics, in the University."</p>
										<ul class="social-profile">
											<li><a href="https://www.facebook.com/biswajit.parida"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>-->
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/suraj_dash.jpg" class="img-responsive" alt="Suraj Dash">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Suraj Dash</h3>
										<span>Former Secretary,2014</span>
									</div>
									<div class="client-comment">
										<p>"It's a proud moment for me to be acknowledged as a member of the robotics society of Vssut.It was a great feeling to work for this club , probably the best one during my whole Btech journey which started as well as ended with this club only.Each moment associated with this society will remain evergreen in my heart."</p>
										<ul class="social-profile">
											<li><a href="https://www.facebook.com/suraj.dash.35"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<li><a href="https://www.linkedin.com/in/suraj-dash-b1636262/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client-2.jpg" class="img-responsive" alt="Manikant Behera">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Manikant Behera</h3>
										<span>Former Secretary,2015</span>
									</div>
									<div class="client-comment">
										<p>“It feels immense pleasure to be honored and
                                            reminisced by the present dwellers of the society
                                            with which I strongly connect to. It has always
                                            been overwhelming for me to be a part of that
                                            society which could arouse the passion in me to
                                            &quot;Bend&quot;,&quot; Break&quot; and &quot;fix&quot; machines.
                                            I truly believe that ,&quot;The mind is not a vessel to
                                            be filled, but a fire to be kindled&quot;.</p>
										<ul class="social-profile">
										<li><a href="https://www.facebook.com/manikantabehera"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<li><a href="https://www.linkedin.com/in/manikantbehera/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
                            <!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client-3.jpg" class="img-responsive" alt="Jajati Mohanty">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Jajati Mohanty</h3>
										<span>Former Secretary,2016</span>
									</div>
									<div class="client-comment">
										<p>“I am really obliged to be the head of the society
                                            which has a distinctive aura of its own which
                                            makes it one of the best tech-society of our
                                            college.
                                            It always feels good to see the budding
                                            Technocrats beget bots with utmost passion and
                                            determination.
                                            I am always ready to be the helping hand for
                                            anyone who seeks to learn and develop his skills
                                            in this field.
                                            
                                            I would also wish the society to reach the summit
                                            in the years to come.”</p>
										<ul class="social-profile">
											<li><a href="https://www.facebook.com/jajati1994"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>-->
											<li><a href="https://www.linkedin.com/in/jajati-mohanty-232a6110a/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
                            	
							
							
						</div>		<!-- end testimonial wrapper -->
					</div> 		<!-- end col lg 12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
		
	
 
  <!---:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->   
		<!--
		Start Blog Section
		=========================================== -->
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Latest <span class="color">Posts</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">
					
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/1.jpg" alt="3D Printer" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>3D Printer</h3>
									<p>The project is all about a 3D PRINTER.3D printing, also known as additive manufacturing (AM).</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- /single blog post -->
						
						<!-- single blog post -->
						<!--<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="img/blog/3.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/2.jpg" alt="Vssut Robotics App" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/1.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</div>
								</div>
								
								<div class="excerpt">
									<h3>Simple Slider Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/2.jpg" alt="Robocon 2017" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Abu Robocon 2017</h3>
									<p>Robocon is organised by Asia-Pacific-Broadcasting-Union(ABU),a collection of over 20 countries of...</p>
									<a class="btn btn-transparent" href="single-post1.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/3.jpg" alt="NSSC 2017" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>NSSC 2017</h3>
									<p>NSSC,India's first & largest space technology fest unfolded by IIT Kharagpur. </p>
									<a class="btn btn-transparent" href="single-post2.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="note kill-margin-bottom">
								<div class="media-wrapper">
									<img src="img/blog/4.jpg" alt="Vssut Robotics App" class="img-responsive">
								</div>
								<div class="excerpt">
									<h3>Vssut Robotics App</h3>
									<p>It allows us to register our profile in it and browse all the information regarding our Technical Society.</p>
									<a class="btn btn-transparent" href="single-post3.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
					</div>

					<div class="all-post text-center">
						<a class="btn btn-transparent" href="blog.html">View All Post</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->
		
		<!-- Srart Contact Us
		=========================================== -->		
		<section id="contact-us">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p>Vssut Robotics,a Confluence Of Innovative Minds,where problem solving & innovation are their only instinct. </p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Room no. A-101, VSSUT ROBOTICS SOCIETY,Burla, Sambalpur</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +91-87638-71658</span>
							</div>
							
							<!--<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Fax: +880-31-000-000</span>
							</div>-->
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: secretary.roboticsvssut@gmail.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map" style="width:1400px;height:380px"></div>
			</div>	
            <script>
			function myMap() {
  var myCenter = new google.maps.LatLng(21.497156,83.904564);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
 
                
}
</script> 
			<!-- /Google Map -->
			
		</section> <!-- end section -->
		<!-- Start Our Team
		=========================================== -->
	
		<section id="contact-us" class="bg-one" style="background-color: #4B77BE">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2><span class="color">Our Social Media</span> Partner</h2>
						<div class="border"></div>
					</div>
                    <div class="text-center">
                        <img class="center-block img-responsive" src="img/bbsrbuzz.png" alt="Bhubaneswar Buzz"/>
                    </div>
                    
                    
                    
                </div>
            </div>
                </section>
					<!-- /section title -->
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="https://www.facebook.com/vssutrobotics/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/societyrobotics"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.vssut_robotics.application&hl=en"><i><img class="icon icons8-Playstore-Filled" width="48" height="48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACYElEQVRoQ+2Y4XHUQAyF36uAUAFHBQkV5EoIFRAqSFIBoQKOCiAVkFQAVMBRAaGDUMHLPEZmbg7bJ3tMvDl2f2ttffuklbTEnizuCQcqSGlKVkUyikhaAHgWtj9J3mb2jbH5J4pIOgHwDoBBNtcawAXJL2Oc7dszOYgkA5wD+AXgGoCdPwioV+HMiuTFlDCTgkgygEG+A1iSvNt0NkLNcIehzGoqmMlAJPnUf4QSR9sQjcNhZ5WeAHjeZTcUcEqQRo3XJD/2OSLpFMAHADtts0BpEEmO7+3k3fyPE/wIwNPIiSYf2nyxega/InkqaQnguMXwluRVBmYIiFIfJBmOfU7YfyW5lHQJ4E2bPcmUjykj/0DSfwFyE2F36BNMKPI2FChKEVfshSQXueMESJMXVrgokBuSJ1sgTvxPHTniyr6KUG1AXE/O5s6RNckXknxjLUheS+p0DMB7kufRxvhWWkv6FjfeXywPnex/Wo5wsEuNxtGXBo5LpGlpWgV8aJDETTvOpIJ0nVu2jow79+5dVZEJFHEL7/a9rXcaLNicijS1wbXE13Az6g6G8IbZQTbmDzeE7nQ9fwxexYBErXD7b6C+1r64OvI7tNq8imbS4eZRN7WKUmTb45gQDbQz3EoH8YTo1sQjb+8qFkSSu1zni2F2ruJAIj+sgrvk9CoGJN6yDOC6MnjNDhLvVw4j15BUGLVRzgoSFb3t7fdRKTLY2b4NcypSQUrLkapIVcRzSzYO6syePakOu3r9dh1gPImObjVGCnPnJ9XM3nSOZD42p00FmfP0W+tNaQ6N9WdvQuseW2BZQgs+Z+QAAAAASUVORK5CYII="></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCfrM26pYkyk8JtW-G0mcDNQ"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://www.linkedin.com/in/vssut-robotics-129434149/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://github.com/Vssut-Robotics"><i class="fa fa-github"></i></a></li>
								<li><a href="https://www.instagram.com/vssut_robotics/"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/robotics2.png"alt="Vssut Robotics"/>
							</a>
							<br />
							
							<p>Design And Developed by <a href="http://www.vssutrobotics.in">Vssut Robotics</a>. Copyright &copy; 2017. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.12.2.min.js" ></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js" ></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js" ></script>
		<script src="js/jquery.ba-cond.min.js" ></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js" ></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js" ></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js" ></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js" ></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js" ></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js" ></script>
		<!-- Google Map API -->
		<script  type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBM8R0qswZUlg1zKSgyDHoeVMdf_XE66Ic&callback=myMap"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

		<script type="text/javascript" src="js/jquery.flipping_gallery.min.js" ></script>

    </body>
</html>