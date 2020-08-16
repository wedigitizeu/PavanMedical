<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- contact11:26-->
<head>
        <?php include_once('public/head.php')?>
    </head>
    <body>
<!--loader-->

<?php include_once('public/preloader.php')?>


<!--loader--> 
		<!--Header Section Start Here
		==================================-->
		<header>
		<?php include_once('public/header.php') ?>
		<div class="main_nav stricky-header__top navbar-toggleable-md">

			<nav class="navbar navbar-default navbar-sticky bootsnav">
				<div class="container">
				<!---Navigation bar start----->
					<?php include_once('public/navbar.php')?>
				<!---Navigation bar start----->
				</div>
			</nav>
		</div>
	</header>
	<!--Section End Here-->

		<!-- END HEADER -->
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Contact"><span>Book Now</span></h1>
						<div class="page-breadcrumb">
							<a>Home</a>/ <span>Book</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-lg-8">

							<div class="headeing pb-30">
			<h2>
				Book now for door to door Service 
				
			</h2>
								<span class="b-line l-left line-h"></span>
							</div>
	<!-- Contact FORM -->
	<?php include_once('public/book_form.php')?>					
	 <!-- END Contact FORM -->
						</div>

						<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
							<div class="headeing pb-20">
								<h2>Why With Us</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

								<ul class="info">
									<li>
										<div class=""></div>
										<div class="content">
											<h4>Genuine Spare Parts</h4>
											<h4>
											Quality Service	
											</h4>
											<h4>Cost Effective</h4>
											<h4>24*7 Service</h4>
										</div>
									</li>

									<li>
										<div class=""></div>
										<div class="content">
											<p>
								<?php
									

								?>
									
											</p>
											<p>
												
											</p>
										</div>
									</li>
									<li>
										<div class=""></div>
										<div class="content">
											<p>
												
											</p>
											<p>
												
											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<!--<li>
										<a href="#">
										<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-envelope"></i>
										</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									
									<li>
										<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</li>--->
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			<!-- Map -->
			<section class="map-box">
				<div class="map">
					<div id="map"></div>
				</div>
			</section>
			<!-- Contact Section -->
			<!--End Contact-->
		 

		<!-- Footer_Section -->
		<?php include_once('public/footer.php')?>
		<!-- Footer_Section_End -->
		<!-- Site Wraper End -->
	<!-- Site Wraper End --> 
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.easing.js" type="text/javascript"></script> 

		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/owl.carousel.js" type="text/javascript"></script>
	
		<!-- imagesloaded Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
	
		<!-- revolution Js --> 
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script> 
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script> 
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script> 
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script> 
		<!-- google map -->
		
        <!-- Mail Function Js --> 
        <script src="assets/js/mail.js" type="text/javascript"></script> 
		<!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>
		
    </body>

<!-- contact11:27-->
</html>


