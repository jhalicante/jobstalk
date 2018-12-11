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
						<h2>Over<span>100,000<sup>+</sup></span>jobs are waiting for you</h2>
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
							<a href="#0" class="button item-center">web design</a>
							<a href="#0" class="button item-center">accountant</a>
							<a href="#0" class="button item-center">car dealer</a>
						</div> <!-- end .keywords -->
					</div> <!-- end .job-search-form -->	
				</div> <!-- end .container -->
				<div class="features-bar">
					<div class="container">
						<div class="features-bar-inner flex space-between">
							<div class="features-box self-center">
								<h3>Leading the industry</h3>
								<a href="about.html">About us<i class="ion-ios-arrow-thin-right"></i></a>
							</div> <!-- end .feature-box -->
							<div class="features-box-icon flex no-wrap">
								<img src="<?php echo ASSET_URL;?>assets/images/feature-icon01.png" alt="cup-icon" class="img-responsive self-center">
								<div class="content self-center">
									<h3>High average salary</h3>
									<a href="#0">Learn more<i class="ion-ios-arrow-thin-right"></i></a>
								</div> <!-- end .content -->							
							</div> <!-- end .feature-box-icon -->
							<div class="features-box-icon flex no-wrap">
								<img src="<?php echo ASSET_URL;?>assets/images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
								<div class="content self-center">
									<h3>2,500,000+ candidates</h3>
									<a href="#0">Our community<i class="ion-ios-arrow-thin-right"></i></a>
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
		<div class="section featured-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Featured Jobs</h1>
						<a href="#0">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>
					</div> <!-- end .section-top-content -->
					<div class="jobs-table">
						<div class="table-header">
							<div class="table-cells flex">
								<div class="job-title-cell"><h6>Job title / Company name</h6></div>
								<div class="job-type-cell"><h6>Type</h6></div>
								<div class="location-cell"><h6>Location</h6></div>
								<div class="expired-date-cell"><h6>Expired Date</h6></div>
								<div class="salary-cell"><h6>Salary</h6></div>					
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-header -->

						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo01.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Web Designer needed</a></h4>
										<p class="small">Quick studio</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->									
									<button type="button" class="button full-time">Full time</button>
								</div> <!-- end .job-type-cell -->
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div> <!-- end .location-cell -->
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired Date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div> <!-- end .expire-date-cell -->
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div> <!-- end .salray-cell -->
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->
						
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo02.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
										<p class="small">Archive inc.</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button part-time">Part time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->

						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo03.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Looking for a project leader</a></h4>
										<p class="small">Comply agency</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired Date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->

						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo04.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Front-end developer needed</a></h4>
										<p class="small">Folder cooperation</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button freelancer">freelancer</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->

						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo05.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Software Engineer</a></h4>
										<p class="small">Bookcover publisher</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->

						<div class="table-footer flex space-between items-center">
							<h6>Showing<span>1-5</span>of 23 jobs</h6>
							<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
								<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
								<ul class="list-unstyled flex no-column items-center">
									<li><a href="#0">1</a></li>
									<li><a href="#0">2</a></li>
									<li><a href="#0">3</a></li>
									<li><a href="#0">4</a></li>
									<li><a href="#0">5</a></li>									
								</ul>
								<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
							</div> <!-- end .jobpress-custom-pager -->
						</div>
					</div> <!-- end .jobs-table -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Category Section -->
		<div class="section category-section solid-blue-bg">
			<div class="inner">
				<div class="container">
					<h1 class="light">Browse Categories</h1>
					<div class="category-grid">					
						<div class="category-row flex no-wrap space-between items-center">
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon01.png" alt="category-icon" class="img-responsive">
								<h4>Finance</h4>
								<p class="light">4286 Jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon02.png" alt="category-icon" class="img-responsive">
								<h4>Construction</h4>
								<p class="light">452 Jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon03.png" alt="category-icon" class="img-responsive">
								<h4>Logistics</h4>
								<p class="light">1867 Jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon04.png" alt="category-icon" class="img-responsive">
								<h4>Art/Design</h4>
								<p class="light">3094 jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon05.png" alt="category-icon" class="img-responsive">
								<h4>Sales/Marketing</h4>
								<p class="light">2955 jobs</p>
							</div> <!-- end .item -->
						</div> <!-- end .category-row -->

						<div class="category-row flex no-wrap space-between items-center">
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon06.png" alt="category-icon" class="img-responsive">
								<h4>Science</h4>
								<p class="light">470 Jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon07.png" alt="category-icon" class="img-responsive">
								<h4>Technologies</h4>
								<p class="light">4536 Jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon08.png" alt="category-icon" class="img-responsive">
								<h4>Healthcare</h4>
								<p class="light">2619 Jobs</p>
							</div> <!-- end .item -->	
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon09.png" alt="category-icon" class="img-responsive">
								<h4>Education/Training</h4>
								<p class="light">1132 jobs</p>
							</div> <!-- end .item -->
							<div class="item">
								<img src="<?php echo ASSET_URL;?>assets/images/category-icon10.png" alt="category-icon" class="img-responsive">
								<h4>Food Services</h4>
								<p class="light">757 jobs</p>
							</div> <!-- end .item -->
						</div> <!-- end .category-row -->
					</div>	<!-- end .category-grid -->			
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
        	<div class="background-text">
        		<h1>Categories</h1>
        	</div> <!-- end .background-text -->	
		</div> <!-- end .section -->

		<!-- Latest Jobs Section -->
		<div class="section Latest-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Latest Jobs</h1>
						<a href="#0">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>
					</div> <!-- end .section-top-content -->
					<div class="jobs-table">
						<div class="table-header">
							<div class="table-cells flex">
								<div class="job-title-cell"><h6>Job title / Company name</h6></div>
								<div class="job-type-cell"><h6>Type</h6></div>
								<div class="location-cell"><h6>Location</h6></div>
								<div class="expired-date-cell"><h6>Expired Date</h6></div>
								<div class="salary-cell"><h6>Salary</h6></div>					
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-header -->
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo06.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Web Designer needed</a></h4>
										<p class="small">Whale creative</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->						
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->	
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
										<p class="small">Banana inc.</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button part-time">Part time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Looking for a project leader</a></h4>
										<p class="small">Elephant studio</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo09.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Front-end developer needed</a></h4>
										<p class="small">Med-Equal</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button freelancer">freelancer</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Company name</h6>
									</div> <!-- end .cell-label -->
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo10.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><a href="job-details.html">Software Engineer</a></h4>
										<p class="small">organicoo</p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time">Full time</button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p>Cupertino<span>, CA, USA</span></p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Expired date</h6>
									</div> <!-- end .cell-label -->
									<p>Nov 14th<sup>th</sup><span>, 2017</span></p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Salary</h6>
									</div> <!-- end .cell-label -->
									<p><sup>$</sup>60<span>/hour</span></p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->
						<div class="table-footer flex space-between items-center">
							<h6>Showing<span>1-5</span>of 23 jobs</h6>
							<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
								<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
								<ul class="list-unstyled flex no-column items-center">
									<li><a href="#0">1</a></li>
									<li><a href="#0">2</a></li>
									<li><a href="#0">3</a></li>
									<li><a href="#0">4</a></li>
									<li><a href="#0">5</a></li>									
								</ul>
								<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
							</div> <!-- end .jobpress-custom-pager -->
						</div>
					</div> <!-- end .jobs-table -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section cta-section parallax text-center" style="background-image: url('<?php echo ASSET_URL;?>assets/images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<h2>Looking for a job</h2>
					<p class="large light">Join thousand of emplyers and earn what you deserve</p>
					<div class="cta-button">
						<a href="post-resume-form.html" class="button">Get started now</a>
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