<?php
//include '../../controller/ProductController.php';
include '../../model/database.php';
include '../../controller/product.php';
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Xlight Bootstrap Responsive HTML5/CSS3 Template</title>
    <meta name="description" content="Xlight Bootstrap Responsive HTML5/CSS3 Template">
    <meta name="author" content="Andsolutions.it">
    <meta name="description" content="">
	 <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="../css/animate.min.css" rel="stylesheet" >	
	<link href="../css/font-awesome.min.css" rel="stylesheet">	
	<link href="../css/prettyPhoto.css" rel="stylesheet">
	
	<link href="../css/theme.css" rel="stylesheet">	
	<link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/colors/blue.css" rel="stylesheet" class="colors">


	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">

</head>

<body data-spy="scroll" data-target="#mynav" data-offset="85">

<!-- Preloader --> 
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<!-- End Preloader -->

<header>

<!-- Bootstrap Menu -->
<div id="navigation">
	<div class="navbar-wrapper">
		<nav class="navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>
					<div id="mynav" class="navbar-collapse collapse">
						<ul class="nav navbar-nav main-nav-list">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#works">Works</a></li>
							<li><a href="#pricing">Price</a></li>
							<li><a href="#news">News</a></li>
							<li><a href="#contacts">Contact</a></li>								
						</ul>
					</div>		
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- End Bootstrap Menu -->


</header>



<!-- Team Section --> 
<section class="section-wrapper" id="team">
	<div class="team">
		<!-- Block Title -->
		<div class="meet-the-team">			
			<div class="element-title">			
				<div class="row">	 		
					<div class="container">	 
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Our Products</span></h1>								
					</div>					
					</div>
				</div>
			</div>
			<!-- End Block Title -->
			<div class="row">
				<div class="container">	
					<div class="wrapper-team">		
					    <?php foreach($record as $records  ){?>	
					  <div class="col-lg-3 col-md-3">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="1100ms">
									<div class="team-member-image">
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($records['product_image'] ).'" height="300" width="300"/>'?>
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
									
									</div>
									<div class="team-member-meta">
									
									
									
										<h4 class="team-member-name"><?php echo $records['product_name']?></h4>
										
									</div>
								</div>
							       </div>
						    </div>	
							<?php } ?>	
					 </div>
				        
					
				</div>
			</div>
		</div>
		
	</div>
	
	
</section> 
<!-- End Team Section --> 


	

<!-- Contact Section --> 
<section class="section-wrapper" id="contacts">
	<!-- Contacts -->	
	<div class="contacts"> 
	
		<!-- Block Title -->	
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Contact Us</span></h1>							
					</div>				
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Contact Our <span class="main-color">Staff </span> to ask to Clarify any doubts</h3>	
				</div>
			</div>
		</div>
		<!-- End Block Title -->	
	
		<div class="container">
			<div class="row">	
				<div class="wrapper-contacts">		
					<div class="contact_form">
						<div class="row">
							<div class="wrapper-contacts-icons">	
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="300ms">	
									<i class="fa fa-map-marker"></i>
									<div class="">125 Abbey Road</div>
									<div class="">90210 Los Angeles</div>
								</div>								
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="450ms">	
									<i class="fa fa-mobile-phone"></i>
									<div class="">Mon - Fri 08:00 21:00</div>
									<div class="">+1800 920 8845</div>
								</div>
								<div class="col-xs-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="600ms">	
									<i class="fa fa-envelope-o"></i>
									<div class="">Feel Free to Email Us</div>
									<div class="">info@mywebsite.com</div>
								</div>								
								
							</div>								
						</div>								
						<div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="800ms">
							<!-- Start contact-form -->	
							<form id="contact-form" method="post" action="#">
								<div class="col-lg-6 col-sm-6">				
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Your name">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Your email address">
									</div>
									<div class="form-group">
										<input type="text" name="subject" class="form-control" placeholder="Subject">
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">				
									<div class="form-group">
										<textarea  name="message" class="form-control" placeholder="Your message" rows="8"></textarea>
									</div>
									<div id="output"></div>
									<input type="submit" class="" value="Submit">
								</div>
							</form>
							<!-- End contact-form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contacts -->	
	
</section> 
<!-- End Contact Section -->		
	
<!-- Footer -->
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">
			<ul class="bottom-social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-flickr"></i></a></li>
			</ul>
		</div>	
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><span>&#169; Copyright 2017 Xlight Template by</span>  <a href="https://www.andsolutions.it">Andsolutions</a></p>
		</div>		  
	</div>
</div>
<!-- End Footer -->		

<!-- Scroll to Top  -->
<a href="#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/retina.min.js"></script>
	<script src="../js/jquery.easing.min.js"></script>
	<script src="../js/wow.min.js"></script>	
	<script src="../js/waypoints.min.js"></script>	
	<script src="../js/jquery.countTo.js"></script>
	<script src="../js/jquery.mixitup.min.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>	
	<script src="../js/jquery.knob.min.js"></script>	
	<script src="../js/jquery.validate.min.js"></script>
	<script src="../js/custom.js"></script>
  

</body>
</html>