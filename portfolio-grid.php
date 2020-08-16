<!DOCTYPE html>
<html lang="en">
	
<!-- portfolio-grid10:01-->
<head>
	<?php include_once('public/head.php')?>
	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		<!--loader-->
		<!--Header Section Start Here
		==================================-->
		<header>
			<?php include_once('public/header.php') ?>
			<div class="main_nav stricky-header__top navbar-toggleable-md">

				<nav class="navbar navbar-default navbar-sticky bootsnav">
					<div class="container">
						<!-- Start Header Navigation -->
				<?php include_once('public/navbar.php')?>
						
						<!--navbar-collapse -->
					</div>
				</nav>
			</div>
		</header><!--Section End Here-->

		<!-- END HEADER -->
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Portfolio"><span>Our Gallery</span></h1>
						<div class="page-breadcrumb">
				
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		<!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<!--<center>Any Title in Future</center>-->
																				
					</div>
				</div>
				
				<div class="row container-grid nf-col-3">
<?php 
	for($i=0;$i<=15;$i++)
	{
?>
					<div class="nf-item branding coffee spacing">
						<div class="item-box">
							<a> <img alt="1" src="assets/images/portfolio/1.jpg" class="item-container"> </a>
							<div class="link-zoom">
								<a href="project-details.html" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
								<a href="assets/images/project/project_1.jpg" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
								<div class="gallery-heading">
									<h4><a href="#">Cleaning Services</a></h4>

								</div>
							</div>
						</div>
					</div>
				<?php 

				}
				?>
				</div>

		</section>
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
		<!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>

	</body>

<!-- portfolio-grid10:29-->
</html>

