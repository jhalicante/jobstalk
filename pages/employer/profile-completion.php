<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME; ?> - Profile Completion</title>
		<?php include './pages/header.php'; ?>
	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<div class="logo"><a href=""><img src="<?php echo ASSET_URL; ?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav" style="visibility:hidden;">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<a href="<?php echo SITE_URL; ?>" class="button">Home</a>
							<a href="<?php echo SITE_URL; ?>" class="button signout">Sign Out</a>
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

		<!-- Post Job Section -->
		<div class="section job-post-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div id="job-post-form" class="job-post-form multisteps-form">				
						<fieldset>
							<form method="post" enctype="multipart/form-data" id="personal-information-form">						  

								<h2 class="form-title text-center dark">Complete your profile</h2>
								<h3 class="step-title text-center dark">Step 1: Complete your Profile Information</h2>

								<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled" style="max-width:160px;">
									<li><span>1</span></li>
									<li><span>2</span></li>
								</ul> <!-- end .steps-progress-bar -->

								<div class="form-inner">
									<h6>Personal Information</h6>					    		
									<div class="divider"></div>
									<div class="form-fields-wrapper">									
										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Company Name<sup>*</sup></p>
												<input type="text" name="company-name" placeholder="" required="">
											</div> <!-- end .form-group -->
											<div class="form-group">
												<div class="form-group">
													<p class="label">Email Address<sup>*</sup></p>
													<input type="email" name="email-address" placeholder="" required="">
												</div> <!-- end .form-group -->
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->	

										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Contact No.<sup>*</sup></p>
												<input type="text" name="contact-no" placeholder="" required="">
											</div> <!-- end .form-group -->
											<div class="form-group">
												<div class="form-group">
													<p class="label">Website<span>(Optional)</span><sup>*</sup></p>
													<input type="text" name="website" placeholder="" value="none">
												</div> <!-- end .form-group -->
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->									
										
										<div class="form-group-wrapper">
											<div class="form-group">
												<p class="label">Short Description<sup>*</sup></p>
												<textarea name="short-description" cols="30" rows="2" style="resize:none;" required=""></textarea>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper --> 

										<div class="form-group-wrapper">
											<div class="form-group">
												<p class="label">Address<sup>*</sup></p>
												<textarea name="address" cols="30" rows="2" style="resize:none;" required=""></textarea>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper --> 

										<div class="form-group-wrapper">
											<div class="form-group">
												<p class="label">About<sup>*</sup></p>
												<textarea name="about" cols="30" rows="4" style="resize:none;" required=""></textarea>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper --> 

										<div class="form-group-wrapper">
											<div class="form-group upload-company-logo">
												<p class="label">Choose Logo<span>(Maximum file size: 5MB)</span><sup>*</sup></p>
												<label for="logo-picture" class="flex space-between items-center no-column no-wrap">
												<span class="logo-picture-name">Upload logo</span>
												<span><i class="ion-ios-folder-outline"></i>Browse Photo</span>								    	
												</label>
												<input type="file" name="logo" id="logo-picture" data-label-class="logo-picture-name" data-preview-img="logo-picture-preview"> 
												<img src="<?php echo ASSET_URL; ?>assets/images/image-placeholder.jpg" class="img-circle logo-picture-preview" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->
									</div> <!-- end .form-fields-wrapper -->

									<div class="divider"></div>

									<div class="button-wrapper text-center">
										<!-- <button type="button" class="button previous">Back</button> -->
										<button type="submit" class="button">Save to proceed</button>
										<button type="button" class="button next hide"></button>
									</div> <!-- end .button-wrapper -->			    		
								</div> <!-- end .form-inner -->							
							</form>						
						</fieldset>

						<fieldset>
							<h2 class="form-title text-center dark">Profile Completed</h2>
							<h3 class="step-title text-center dark">You've successfully posted a job</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled" style="max-width:160px;">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
							</ul> <!-- end .steps-progress-bar -->

							<div class="form-inner">
								<h2 class="text-center job-post-success">Congratulations!</h2>
								<p class="text-center">
									You’ve successfully completed your profile information. 
									<br>
									Please wait the administrator to verify your account before you can post a job hiring.
									<br/>
									Thank you for using our system!
								</p>
								<div class="button-wrapper text-center">
									<a href="">Go to Account</a>
								</div> <!-- end .button-wrapper -->
							</div> <!-- end .form-inner -->	
						</fieldset>
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
        <?php
            include './pages/footer.php'; // Home Page Footer
            include './pages/employer/footer.php'; // Applicant Footer 
        ?>
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/post-job-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
</html>