		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner has-form flex space-between items-center">
					<div class="left flex items-center no-column no-wrap">
						<div class="logo"><a href="home"><img src="<?php echo ASSET_URL;?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
						<div class="job-search-form form-header">						
							<form class="form-inline flex no-column no-wrap" method="GET" action="find-job">
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" name="position" id="input-field-1" placeholder="Keywords">
										<i class="ion-ios-briefcase-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group-inner -->
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" name="location" id="input-field-2" placeholder="location">
										<i class="ion-ios-location-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group -->
								<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
							</form>
						</div> <!-- end .job-search-form -->
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation" style="visibility:hidden;">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="<?php echo SITE_URL;?>">Home</a></li>
									<li class="active"><a href="<?php echo SITE_URL;?>account">My Account</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="account-info-top flex items-center no-column">
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap">
								<span>Hi! </span> <?php echo $fetch->getInformation('applicant_personal_information', 'fname').' '.$fetch->getInformation('applicant_personal_information', 'lname'); ?>
								<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('applicant_personal_information', 'profile_picture'); ?>" alt="avatar" class="img-responsive">
							</a>
						</div> <!-- end .account-info-top -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->