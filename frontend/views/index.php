<?php
include '../controller/UserController.php';
//include '../controller/fetch.php';

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
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">
	
	<link href="css/theme.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/colors/blue.css" rel="stylesheet" class="colors">


	<!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144.png">





	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
   -->
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
						
							<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categories
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  
  <?php foreach($record as $key => $rec  ){?>	
    <li><a href="products/products.php?id=<?php echo $rec['id'] ?>"><?php echo $rec['title']?>	</a></li>
	<?php } ?>
   
  </ul>
</div>
							
															
						</ul>
					</div>		
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- End Bootstrap Menu -->

<!-- Slider -->

<!-- End Slider -->

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
						<h1><span>Our Categories</span></h1>	
						 <!-- <div id="treeview"></div>-->
					
					</div>					
					</div>
				</div>
			</div>
			<!-- End Block Title -->
			<div class="row">
				<div class="container">	
		
					<div class="wrapper-team">	
							
					<?php foreach($record as $key => $rec  ){?>	
						<div class="col-lg-3 col-md-3">
						<a href="products/products.php?id=<?php echo $rec['id'] ?>">
							<div class="team-member">
								<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="1100ms">
									
									<div class="team-member-image">
								
										<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($records[$key]['image'] ).'" height="300" width="300"/>'?>
										<div class="team-overlay">
											<div class="img-overlay"></div>
										</div>
									    </div>
									
									<div class="team-member-meta">
										<div class="team-member-role"><?php echo $rec['title']?></div>
									</div>
									
								</div>
							</div>
							</a>
						</div><?php } ?>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	

	
</section>  
<!-- End Team Section --> 


	

	

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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>	
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
  

</body>
</html>

<script>
$(document).ready(function(){
 $.ajax({ 
   url: "fetch.php",
   method:"POST",
   dataType: "json",       
   success: function(data)  
   {
  $('#treeview').treeview({data:data});
   }   
 });
 
});
</script>