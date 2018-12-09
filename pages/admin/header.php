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
									<li class="active"><a href="<?php echo SITE_URL;?>">Home</a></li>
									<li class="active"><a href="<?php echo SITE_URL;?>account">My Account</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="account-info-top flex items-center no-column">
							<!-- <a href="#0" class="notification-icon"><i class="ion-android-notifications"></i></a> -->
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap">
								<span>His!</span>
								<?php echo $fetch->getInformation('employer_information', 'name'); ?>
								<img src="<?php echo ASSET_URL;?>/assets/images/admin.png" alt="avatar" class="img-responsive">
							</a>
						</div> <!-- end .account-info-top -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->