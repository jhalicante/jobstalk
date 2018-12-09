
<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME; ?> - Find Job</title>
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
		<script>
			var api_url = '<?php echo API_URL; ?>';
			var asset_url = '<?php echo ASSET_URL; ?>';
		</script>
	</head>
	<body>
		<!-- Header -->
		<header class="header">
			<div class="container-fluid clearfix">
				<div class="header-inner has-form flex space-between items-center">
					<div class="left flex items-center no-column no-wrap">
						<div class="logo"><a href="index.html"><img src="<?php echo ASSET_URL;?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>
						<div class="job-search-form form-header">						
							<form class="form-inline flex no-column no-wrap" method="GET" id="find-job-form">
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" name="location" class="form-control" id="input-field-2" placeholder="Prefered Location">
										<i class="ion-ios-location-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group -->
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" name="position" class="form-control" id="input-field-1" placeholder="Position, Job Title">
										<i class="ion-ios-briefcase-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div>
								<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
							</form>
						</div> <!-- end .job-search-form -->
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav" style="visibility:hidden;">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="menu-item-has-children">
										<a href="candidates-listing.html">Candidates</a>
										<ul>
											<li><a href="candidates-listing.html">Browse Candidates</a></li>
											<li><a href="companies-listing.html">Browse Companies</a></li>
											<li><a href="jobs-listing.html">Jobs Listing</a></li>
											<li><a href="job-details.html">Job Details</a></li>
											<li><a href="categories.html">Job Categories</a></li>
											<li><a href="post-resume-form.html">Post a Resume</a></li>
											<li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
										</ul>									
									</li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open" style="visibility:hidden;"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<?php if ( !empty($_COOKIE['user_id']) ) { ?>
								<a href="account" class="button">My Account</a>
								<a href="#" class="button signout">Sign Out</a>
							<?php } else { ?>
								<a href="post-job-form.html" class="button">Post a Job</a>
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
		 
		<!-- Job Listings Section -->
		<div class="section jobs-listing-section" style="display:none;">
			<div class="container-fluid">
				<div class="jobs-listing-wrapper flex no-wrap">

					<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Overall statistics</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark">683,207</h2>
									<h5>Created Resumes</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark">129, 245</h2>
										<h5>Posted Jobs</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

						<div class="featured-jobs-widget-wrapper jobs-widget">
							<h6>Featured Jobs</h6>
							<div class="featured-jobs-widget">

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="<?php echo ASSET_URL;?>assets/images/company-logo16.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="<?php echo ASSET_URL;?>assets/images/company-logo15.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="<?php echo ASSET_URL;?>assets/images/company-logo17.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

							</div> <!-- end .featured-jobs-widget -->

						</div> <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

						<div class="latest-updates-widget-wrapper jobs-widget">
							<h6>Latest updates</h6>
							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo ASSET_URL;?>assets/images/avatar11.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>James Patel</span>has got a job!</h5>
									<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo ASSET_URL;?>assets/images/avatar12.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Alice Phillips</span>has got a job!</h5>
									<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Evotweet</span>has got a job!</h5>
									<h5><a href="#0">Front-end developer</a>needed in<a href="#0">Technologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo ASSET_URL;?>assets/images/avatar13.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Wayne Welch</span>has got a job!</h5>
									<h5><span>Software Engineer</span>for Apple Inc. in<a href="#0">Technologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="<?php echo ASSET_URL;?>assets/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Prymb Creative Studio</span>has got a job!</h5>
									<h5><a href="#0">We're looking for an Art Director</a>in<a href="#0">Tecnologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

						</div> <!-- end .latest-updates-widget-wrapper -->

					</div> <!-- end .left-side -->

					<div class="center-content-wrapper">

						<div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
							<div class="left-side-inner">
								<h6>Showing <span>1-5</span>or<span>748</span>job in<a href="#0">Art/design</a>and<a href="#0">Technologies</a>in<a href="#0">San Francisco</a></h6>								
							</div> <!-- end .left-side -->								
							<div class="right-side-inner">
								<div class="sort-by dropdown flex no-wrap no-column items-center">
									<h6>sort by</h6>
									<button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						       			Default
						    		<i class="ion-ios-arrow-down"></i>
						 			</button>
									<ul class="dropdown-menu" aria-labelledby="sort-by">
									    <li><a href="#">Featured</a></li>
									    <li><a href="#">Top candidates</a></li>
									    <li><a href="#">Price, high to low</a></li>							    
									    <li><a href="#">Alphabetically, A-Z</a></li>
									    <li><a href="#">Alphabetically, Z-A</a></li>
									    <li><a href="#">Best sellers</a></li>
								  	</ul> <!-- end .dropdown-menu -->
								</div> <!-- end .sort-by-drop-down -->	
							</div> <!-- end .right-side -->
						</div> <!-- end .sort-by-wrapper -->
						
				        <div class="bookmarked-jobs-list-wrapper on-listing-page">
				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
					        			<h5>Banana inc.</h5>
					        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
					        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
					        					</ul> <!-- end .candidates-avatar -->
												<h6 class="bookmarked-job-category">Art/Design</h6>
					        					<h6 class="candidate-location">Park ave,<span>nyc, usa</span></h6>
												<h6 class="hourly-rate">$45<span>/Hour</span></h6>
					        				</div> <!-- end .bookmarked-job-meta -->
					        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="#0" class="button">more detail</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 

				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big02.jpg" alt="company-icon" class="img-responsive">
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
					        			<h5>Cat studio</h5>
					        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
					        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
					        					</ul> <!-- end .candidates-avatar -->
												<h6 class="bookmarked-job-category">Art/Design</h6>
					        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
												<h6 class="hourly-rate">$45<span>/Hour</span></h6>
					        				</div> <!-- end .bookmarked-job-meta -->
					        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="#0" class="button">more detail</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 

				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big03.jpg" alt="company-icon" class="img-responsive">
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
					        			<h5>Bull creative angency</h5>
					        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
					        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
					        					</ul> <!-- end .candidates-avatar -->
												<h6 class="bookmarked-job-category">Art/Design</h6>
					        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
												<h6 class="hourly-rate">$45<span>/Hour</span></h6>
					        				</div> <!-- end .bookmarked-job-meta -->
					        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="#0" class="button">more detail</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 

				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
					        			<h5>Elephant studio</h5>
					        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
					        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
					        					</ul> <!-- end .candidates-avatar -->
												<h6 class="bookmarked-job-category">Art/Design</h6>
					        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
												<h6 class="hourly-rate">$45<span>/Hour</span></h6>
					        				</div> <!-- end .bookmarked-job-meta -->
					        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="#0" class="button">more detail</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper --> 

				        	<div class="bookmarked-job-wrapper">
				        		<div class="bookmarked-job flex no-wrap no-column ">
					        		<div class="job-company-icon">
					        			<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
					        		</div> <!-- end .job-icon -->
					        		<div class="bookmarked-job-info">
					        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
					        			<h5>Banana inc.</h5>
					        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
					        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
					        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
					        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
					        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
					        					</ul> <!-- end .candidates-avatar -->
												<h6 class="bookmarked-job-category">Art/Design</h6>
					        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
												<h6 class="hourly-rate">$45<span>/Hour</span></h6>
					        				</div> <!-- end .bookmarked-job-meta -->
					        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
					        					<i class="ion-ios-heart wishlist-icon"></i>
					        					<a href="#0" class="button">more detail</a>
					        				</div> <!-- end .right-side-bookmarked-job-meta -->
					        			</div> <!-- end .bookmarked-job-info-bottom -->
					        		</div> <!-- end .bookmarked-job-info -->
				        		</div> <!-- end .bookmarked-job -->
				        	</div> <!-- end .bookmarked-job-wrapper -->
			        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
			        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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

					</div> <!-- end .center-content -->

					<div class="right-side">
						
						<div class="job-categories-widget jobs-widget">
							<h6>Categories</h6>
					        <ul class="job-categories list-unstyled">
			                    <li class="job-category checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox1" type="checkbox">
			                        <label for="checkbox1">Fianance<span>4,286 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox2" type="checkbox">
			                        <label for="checkbox2">Constructions<span>452 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox3" type="checkbox">
			                        <label for="checkbox3">Logistics<span>1,867 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox4" type="checkbox" checked="">
			                        <label for="checkbox4">Art/Design<span>3,094 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox5" type="checkbox">
			                        <label for="checkbox5">Sales/Marketing<span>2,955 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox6" type="checkbox">
			                        <label for="checkbox6">Science<span>470 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox7" type="checkbox" checked="">
			                        <label for="checkbox7">Technologies<span>4,536 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox8" type="checkbox">
			                        <label for="checkbox8">Healthcare<span>2,619 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox9" type="checkbox">
			                        <label for="checkbox9">Education Training<span>1,132 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="checkbox10" type="checkbox">
			                        <label for="checkbox10">Food Services<span>757 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>
		                    </ul> <!-- end .job-categories -->
						</div> <!-- end .job-categories-widget -->

						<div class="job-status-widget jobs-widget">
							<h6>Categories</h6>
					        <ul class="job-status-wrapper list-unstyled">
			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox1" type="checkbox">
			                        <label for="job-status-checkbox1">Full Time<span>4,286 Jobs</span></label>
			                    </li>

			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox2" type="checkbox">
			                        <label for="job-status-checkbox2">Part time<span>6,883 Jobs</span></label>
			                    </li>
			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox3" type="checkbox">
			                        <label for="job-status-checkbox3">Freelancer<span>1,724 Jobs</span></label>
			                    </li>

			                    <li class="job-status checkbox">
			                        <input id="job-status-checkbox4" type="checkbox">
			                        <label for="job-status-checkbox4">Internship<span>876 Jobs</span></label>
			                    </li>
		                    </ul> <!-- end .job-status-wrapper -->
						</div> <!-- end .job-status-widget -->

						<div class="job-locations-widget jobs-widget">
							<h6>Locations</h6>
					        <ul class="job-locations list-unstyled">
			                    <li class="job-category checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox1" type="checkbox">
			                        <label for="job-locations-checkbox1">New York<span>7,286 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox2" type="checkbox" checked="">
			                        <label for="job-locations-checkbox2">San Francisco<span>452 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox3" type="checkbox">
			                        <label for="job-locations-checkbox3">San Diego<span>1,867 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox4" type="checkbox">
			                        <label for="job-locations-checkbox4">Los Angeles<span>3,094 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox5" type="checkbox">
			                        <label for="job-locations-checkbox5">Chicago<span>2,955 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox6" type="checkbox">
			                        <label for="job-locations-checkbox6">Houston<span>470 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>

			                    <li class="checkbox flex space-between items-center no-column no-wrap">
			                        <input id="job-locations-checkbox7" type="checkbox">
			                        <label for="job-locations-checkbox7">New Orleans<span>4,536 Jobs</span></label>
			                        <span><i class="ion-android-add"></i></span>
			                    </li>
		                    </ul> <!-- end .job-locations -->
						</div> <!-- end .job-locations-widget -->

						<div class="cta-job-widget">
							<h5 class="dark">Need a job?</h5>
							<h3 class="dark">Join our community and search for a better job</h3>
							<a href="#0">Get started now <span><i class="ion-ios-arrow-thin-right"></i></span></a>
						</div> <!-- end .cta-job-widget -->

					</div> <!-- end .right-side -->

				</div> <!-- end .jobs-listing-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->

		<br/>
		<br/>
		<div class="section blog-list-section">		
			<div class="inner">
				<div class="container">
					<h3>Searched jobs: 200 results</h3>
				</div>		
			</div>		
		</div>		
		<br/>
		<!-- Blog Section -->
		<div class="section blog-list-section">
			<div class="inner">
				<div class="container">

					<div class="blog-posts-wrapper flex space-between no-wrap">
						
						<div class="blog-left-side searched-job-lists">
							<!-- Job searched goes here -->
						</div>
						
						<div class="blog-sidebar">
							
							<div class="search-widget blog-widget">
								<h6>Search this site</h6>
				                <div class="input-group search-form">
				                    <input type="text" class="form-control"  placeholder="Enter your keyword" >
				                    <button type="submit"><span><i class="ion-ios-search"></i></span></button>
	                			</div>
							</div> <!-- end .search-widget -->

							<div class="recent-posts-widget blog-widget">
								<h6>Recent Posts</h6>

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="<?php echo ASSET_URL;?>assets/images/recent-post01.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">Tips to write an impressive resume online for beginner</a></h4>
								</div> <!-- end .recent-post -->

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="<?php echo ASSET_URL;?>assets/images/recent-post02.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">The secret to pitching for new business</a></h4>
								</div> <!-- end .recent-post -->

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="<?php echo ASSET_URL;?>assets/images/recent-post03.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">7 things you should never say to your boss</a></h4>
								</div> <!-- end .recent-post -->

							</div> <!-- end .recent-posts-widget -->
							
							<div class="blog-category-widget blog-widget">
								<h6>Categories</h6>
								<ul class="blog-categories list-unstyled">
									<li><a href="#0">Announcement</a></li>
									<li><a href="#0">Indeed events</a></li>
									<li><a href="#0">Tips &amp; Tricks</a></li>
									<li><a href="#0">Experiences</a></li>
									<li><a href="#0">Case Studies</a></li>
									<li><a href="#0">Labor Market News</a></li>
									<li><a href="#0">HR Best practices</a></li>
								</ul>
							</div> <!-- end .blog-category-widget -->

							<div class="blog-tags-widget blog-widget">
								<h6>Tags</h6>
								<ul class="blog-tags flex no-column list-unstyled">
									<li><a href="#0" class="button button-xs grey">Jobpress</a></li>
									<li><a href="#0" class="button button-xs grey">Recruiter</a></li>
									<li><a href="#0" class="button button-xs grey">Interview</a></li>
									<li><a href="#0" class="button button-xs grey">Employee</a></li>
									<li><a href="#0" class="button button-xs grey">Labor</a></li>
									<li><a href="#0" class="button button-xs grey">HR</a></li>
									<li><a href="#0" class="button button-xs grey">Freelancer</a></li>
									<li><a href="#0" class="button button-xs grey">Slaray</a></li>
									<li><a href="#0" class="button button-xs grey">Employer</a></li>
								</ul>
							</div> <!-- end .blog-tags-widget -->

							<div class="blog-archives-widget blog-widget">
								<h6>Arhives</h6>
								<ul class="blog-archives list-unstyled">
									<li><a href="#">October 2016<span>28 posts</span></a></li>
									<li><a href="#">September 2016<span>35 posts</span></a></li>
									<li><a href="#">August 2016<span>19 posts</span></a></li>
									<li><a href="#">July 2016<span>23 posts</span></a></li>
									<li><a href="#">June 2016<span>29 posts</span></a></li>
									<li><a href="#">May 2016<span>16 posts</span></a></li>
									<li><a href="#">April<span>14 posts</span></a></li>
								</ul>
							</div> <!-- end .blog-archives-widget -->

						</div> <!-- end .blog-sidebar -->
					</div> <!-- end .blog-posts-wrapper -->

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
		<script src="<?php echo ASSET_URL;?>assets/js/find-job.js"></script>
	</body>
</html>