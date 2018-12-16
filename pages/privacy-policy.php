
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jobstalk - Privacy Policy</title>
		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="<?php echo ASSET_URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="<?php echo ASSET_URL;?>assets/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="<?php echo ASSET_URL;?>assets/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo ASSET_URL;?>assets/css/owl.theme.default.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="<?php echo ASSET_URL;?>assets/css/animate.min.css" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="<?php echo ASSET_URL;?>assets/css/magnific-popup.css" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="<?php echo ASSET_URL;?>assets/css/tagsinput.css" rel="stylesheet">		
		<!-- Style.css -->
		<link href="<?php echo ASSET_URL;?>assets/css/style.css" rel="stylesheet">
	</head>
	<body>

		<!-- Header --> 
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<div class="logo"><a href="index.html"><img src="<?php echo ASSET_URL;?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav" style="visibility:hidden;">
								<ul class="list-unstyled">
									<li><a href="about.html">About</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<?php if ( !empty($_COOKIE['user_id']) ) { ?>
								<a href="account" class="button">My Account</a>
								<a href="#" class="button signout">Sign Out</a>
							<?php } else { ?>
								<a href="find-job" class="button">Find Job</a>
								<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Sign Up</a>
							<?php }?>
						</div>
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		
		<!-- Login/Signup Popup -->
		<?php include './pages/lib/login-modal.php' ?>

		<!-- Help Tabs Section -->
		<div class="section help-tabs-section">
			<div class="inner">
				<div class="container">
					<div class="help-tabs-wrapper flex no-wrap">

						<div class="left-sidebar-menu">
						    <ul class="nav nav-pills nav-stacked">
							    <li class="active"><a data-toggle="pill" href="#privacy-policy">Privacy policy</a></li>
							</ul>
						</div> <!-- end .left-side -->
						
						<div class="right-side-content">
							<div class="tab-content help-tabs">
					        	<div id="privacy-policy" class="tab-pane fade in active">
						        	<h1 class="tab-pane-title">Privacy Policy</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
						        </div> <!-- end .privacy-policy-content -->

					        </div> <!-- end .tab-content -->
				        </div> <!--end .right-side -->
			        </div> <!-- end .help-tabs-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('<?php echo ASSET_URL;?>assets/images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<img src="<?php echo ASSET_URL;?>assets/images/footer-logo.png" alt="footer-logo" class="img-responsive">
					<ul class="list-unstyled footer-menu flex">
						<li><a href="#0">Home</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Browse Jobs</a></li>
						<li><a href="#0">Browse candidates</a></li>
						<li><a href="#0">Contact</a></li>
					</ul> <!-- end .footer-menu -->				
				</div> <!-- end .top -->
				<div class="footer-widgets flex no-column space-between">					
					<div class="widget">
						<h6>About</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Company</a></li>
							<li><a href="#0">Our Partners</a></li>
							<li><a href="#0">Blog</a></li>
							<li><a href="#0">FAQ</a></li>
							<li><a href="#0">Pricing</a></li>
							<li><a href="#0">Help Center</a></li>
							<li><a href="#0">Team</a></li>
							<li><a href="#0">Contact Us</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For candidates</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Jobs</a></li>
							<li><a href="#0">Browse categories</a></li>
							<li><a href="#0">Submit Resume</a></li>
							<li><a href="#0">Candidate Dashboard</a></li>
							<li><a href="#0">Job Alerts</a></li>
							<li><a href="#0">My Bookmarks</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For companies</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Candidates</a></li>
							<li><a href="#0">Company Dashboard</a></li>
							<li><a href="#0">Add A Job</a></li>
							<li><a href="#0">Packages</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>Follow us</h6>
						<ul class="list-unstyled social-icons flex no-column">
							<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#0"><i class="ion-social-youtube"></i></a></li>
							<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
						</ul>				
						<h6>Subscribe Us</h6>
						<p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
	                    <form class="form-inline subscribe-form flex no-column no-wrap items-center">
	                        <div class="form-group">
	                        	<input type="text" class="form-control" placeholder="Your email">
	                        </div> <!-- end .form-group -->
	                        <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
	                  	</form>
					</div> <!-- end .widget -->
				</div> <!-- end .footer-widgets -->
				<div class="bottom flex space-between items-center">
					<p class="copyright-text small">&copy; 2017 <a href="#0">JobPress</a>. All Rights Reserved. Designed by <a href="#0">LeoStudo</a>.</p>
					<ul class="list-unstyled copyright-menu flex no-column">
						<li><a href="#0">Privacy policy</a></li>
						<li><a href="#0">Terms of service</a></li>
						<li><a href="#0">Conditions</a></li>
					</ul> <!-- end .copyright-menu -->
				</div> <!-- end .bottom -->
			</div> <!-- end .container -->
		</div> <!-- end .footer -->


		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="<?php echo ASSET_URL;?>assets/js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo ASSET_URL;?>assets/js/owl.carousel.min.js"></script>
		<!-- Wow.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/wow.min.js"></script>
		<!-- Typehead.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/typehead.js"></script>
		<!-- Tagsinput.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/tagsinput.js"></script>
		<!-- Bootstrap Select -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap-select.js"></script>		
		<!-- Waypoints -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.waypoints.min.js"></script>
		<!-- CountTo -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.countTo.js"></script>
		<!-- Isotope -->
		<script src="<?php echo ASSET_URL;?>assets/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo ASSET_URL;?>assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- Magnific-Popup -->
		<script src="<?php echo ASSET_URL;?>assets/js/jquery.magnific-popup.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/scripts.js"></script>
        <script src="<?php echo ASSET_URL;?>assets/js/functions.js"></script>
		<script>
			var api_url = '<?php echo API_URL; ?>';
		</script>
	</body>
</html>