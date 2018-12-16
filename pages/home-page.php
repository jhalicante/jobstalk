<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME; ?> - Sign In | Sign Up</title>
		<?php include './pages/header.php'; ?>
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
						<div class="navigation" style="visibility:hidden;">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="">Home</a></li>
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
						</div> <!-- end .button-group-merged -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<?php include './pages/lib/login-modal.php' ?>

		<!-- Hero Section -->
		<div class="section hero-section transparent" style="background-image: url('<?php echo ASSET_URL;?>assets/images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="job-search-form">
						<h2>Over<span><?php echo $repInc->jobsCount(); ?><sup>+</sup></span>jobs are waiting for you</h2>
						<form class="form-inline flex" method="GET" action="find-job">
							<div class="form-group">
								<div class="form-group-inner">
									<input type="text" class="form-control" name="position" id="input-field-1" placeholder="job title / Keywords / company name">
									<i class="ion-ios-briefcase-outline"></i>
								</div>
							</div>
							<div class="form-group">							
								<input type="text" class="form-control" name="location" id="input-field-2" placeholder="city / province / zip code">
								<i class="ion-ios-location-outline"></i>
							</div>
							<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
						</form>
						<div class="keywords flex">
							<h4 class="self-center">Popular Keywords:</h4>
							<?php 
							global $conn;
							$pksql = "SELECT * FROM `employer_job_posted` WHERE `status`='approved' ORDER BY ID DESC LIMIT 3 ";
							$pkresult = $conn->query($pksql);
							
							if ($pkresult->num_rows > 0) {
								// output data of each row
								while($pkrow = $pkresult->fetch_assoc()) {
							?>
							<a href="find-job?position=<?php echo $pkrow['position'] ?>&location=<?php echo $pkrow['com_address'] ?>" class="button item-center"><?php echo $pkrow['position']; ?></a>
							<?php
									}
								}
							?>
						</div> <!-- end .keywords -->
					</div> <!-- end .job-search-form -->	
				</div> <!-- end .container -->
				<div class="features-bar">
					<div class="container">
						<div class="features-bar-inner flex space-between">
							<div class="features-box self-center">
								<h3><?php echo $repInc->jobsCount(); ?>+ Job Count</h3>
							</div> <!-- end .feature-box -->
							<div class="features-box-icon flex no-wrap">
								<img src="<?php echo ASSET_URL;?>assets/images/feature-icon01.png" alt="cup-icon" class="img-responsive self-center">
								<div class="content self-center">
									<h3><?php echo $repInc->employerApplicantCount('user_account','role','employer'); ?> Employers</h3>
								</div> <!-- end .content -->							
							</div> <!-- end .feature-box-icon -->
							<div class="features-box-icon flex no-wrap">
								<img src="<?php echo ASSET_URL;?>assets/images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
								<div class="content self-center">
									<h3><?php echo $repInc->employerApplicantCount('user_account','role','applicant'); ?>+ candidates</h3>
								</div> <!-- end .content -->
							</div> <!-- end .feature-box-icon -->
							<div class="user-profile-icon self-center">
								<img src="<?php echo ASSET_URL;?>assets/images/profile-icon01.png" alt="profile-icon" class="img-responsive self-center">
							</div> <!-- end .profile-icon -->
						</div> <!-- end .features-bar-inner -->
					</div> <!-- end .container -->
				</div> <!-- end .features-bar -->	
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Featured Jobs Section -->
		<?php if(isset($_COOKIE['role'])) { 
			if( $_COOKIE['role'] == 'applicant')  {
		?>
		<div class="section featured-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Suggested Jobs</h1>
					</div> <!-- end .section-top-content -->
					<?php include './pages/lib/suggested-jobs.php'; ?>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<?php }} ?>
		<!-- Latest Jobs Section -->
		<div class="section Latest-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Latest Jobs</h1>
					</div> <!-- end .section-top-content -->
					<?php include './pages/lib/view-all-jobs.php'; ?>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section cta-section parallax text-center" style="background-image: url('<?php echo ASSET_URL;?>assets/images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<h2>Looking for a job</h2>
					<p class="large light">Join thousand of emplyers and earn what you deserve</p>
					<div class="cta-button">
						<a href="find-job?position=&location=" class="button">Get started now</a>
					</div> <!-- end .cta-button -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
 
		<!-- CTA App Section -->
		<div class="section cta-app-section solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="cta-app-section-inner flex space-between items-center">
						<div class="left">
							<h2 class="light">Don't want to miss a thing?</h2>
						</div> <!-- end .left -->
						<div class="button-group flex no-column">
							<!-- <a href="#0" class="button white">Google Play</a>
							<a href="#0" class="button white">Apple Store</a> -->
						</div> <!-- end .button-group -->
					</div> <!-- end .cta-app-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<?php include './pages/footer.php'; ?>
		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="<?php echo ASSET_URL;?>assets/js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo ASSET_URL;?>assets/js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
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