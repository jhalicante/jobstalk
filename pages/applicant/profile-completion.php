<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jobpress.icookcode.net/dev/post-job-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
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
							<a href="post-job-form.html" class="button">Home</a>
							<a href="<?php echo SITE_URL; ?>" class="button">Sign Out</a>
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
					<!-- multistep form -->
					<form action="#" method="post" id="job-post-form" class="job-post-form multisteps-form">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">Complete your profile</h2>
						    <h3 class="step-title text-center dark">Step 1: Complete your Personal Information</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li><span>1</span></li>
								<li><span>2</span></li>
								<li><span>3</span></li>
								<li><span>4</span></li>
							</ul> <!-- end .steps-progress-bar -->

					    	<div class="form-inner">
                                <h6>Personal Information</h6>					    		
                                <div class="divider"></div>
                                <div class="form-fields-wrapper">

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Firstname<sup>*</sup></p>
                                            <input type="text" id="employer-company-name" name="employer-company-name" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                        <div class="form-group">
                                            <div class="form-group">
                                                <p class="label">Middle Name<sup>*</sup></p>
                                                <input type="text" id="employer-company-address" name="employer-company-address" placeholder="" required="">
                                            </div> <!-- end .form-group -->
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->	

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Lastname<sup>*</sup></p>
                                            <input type="text" id="employer-company-name" name="employer-company-name" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                        <div class="form-group">
                                            <div class="form-group">
                                                <p class="label">Birthday<sup>*</sup></p>
                                                <input type="date" id="employer-company-address" name="employer-company-address" placeholder="" required="">
                                            </div> <!-- end .form-group -->
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->									

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Gender<sup>*</sup></p>
                                            <select name="" id="employer-company-number" class="form-control">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div> <!-- end .form-group -->
                                        <div class="form-group">
                                            <p class="label">Nationality<sup>*</sup></p>
                                            <input type="text" id="employer-company-email" name="employer-company-email" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Civil Status<sup>*</sup></p>
                                            <input type="text" id="employer-company-email" name="employer-company-email" placeholder="" required="">                                            
                                        </div> <!-- end .form-group -->
                                        <div class="form-group">
                                            <p class="label">Language<sup>*</sup></p>
                                            <input type="text" id="employer-company-email" name="employer-company-email" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                    <div class="form-group-wrapper">
                                        <div class="form-group upload-company-logo">
                                            <p class="label">Choose Profile Picture<span>(Maximum file size: 5MB)</span><sup>*</sup></p>
                                            <label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
                                            <span>Upload your logo</span>
                                            <span><i class="ion-ios-folder-outline"></i>Browse image</span>								    	
                                            </label>
                                            <input type="file" name="company-logo-upload" id="company-logo-upload">
                                            <img src="https://images.all-free-download.com/images/graphiclarge/cute_icon_vector_4_expression_163160.jpg" class="img-circle" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                </div> <!-- end .form-fields-wrapper -->

                                <div class="divider"></div>

                                <div class="button-wrapper text-center">
                                    <button type="button" class="button previous">Back</button>
                                    <button type="button" class="button next">Save to proceed</button>
                                    <button type="button" class="button next hide"></button>
                                </div> <!-- end .button-wrapper -->			    		

                                </div> <!-- end .form-inner -->							
					 	</fieldset>

					  	<fieldset>
						  	<h2 class="form-title text-center dark">Complete your profile</h2>
						    <h3 class="step-title text-center dark">Step 2: Complete your Educational Background</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="sub-active"><span>2</span></li>
								<li><span>3</span></li>
								<li><span>4</span></li>
							</ul> <!-- end .steps-progress-bar -->

					    	<div class="form-inner">
					    		
					    		<h6>Educational Information</h6>					    		
								<div class="divider"></div>
								<div class="form-fields-wrapper">
									<h6>College School</h6>					    		
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">School Name<sup>*</sup></p>
											<input type="text" id="employer-contact-name" name="employer-contact-name" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Course<sup>*</sup></p>
											<!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
											<input type="text" id="employer-contact-email" name="employer-contact-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Year Started<sup>*</sup></p>
											<input type="text" id="employer-username" name="employer-username" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Year Ended<sup>*</sup></p>
											<input type="email" id="employer-email" name="employer-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">School Address<sup>*</sup></p>
											<input type="text" id="employer-username" name="employer-username" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="divider"></div>

									<h6>Secondary School</h6>					    		

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">School Name<sup>*</sup></p>
											<input type="text" id="employer-contact-name" name="employer-contact-name" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Address<sup>*</sup></p>
											<!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
											<input type="text" id="employer-contact-email" name="employer-contact-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Year Started<sup>*</sup></p>
											<input type="text" id="employer-username" name="employer-username" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Year Ended<sup>*</sup></p>
											<input type="email" id="employer-email" name="employer-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="divider"></div>
									
									<h6>Primary School</h6>					    		
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">School Name<sup>*</sup></p>
											<input type="text" id="employer-contact-name" name="employer-contact-name" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Address<sup>*</sup></p>
											<!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
											<input type="text" id="employer-contact-email" name="employer-contact-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Year Started<sup>*</sup></p>
											<input type="text" id="employer-username" name="employer-username" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Year Ended<sup>*</sup></p>
											<input type="email" id="employer-email" name="employer-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
								</div> <!-- end .form-field-wrapper -->
								<div class="divider"></div>
					    		<div class="button-wrapper text-center">
									<button type="button" class="button previous">Back</button>
                                    <button type="button" class="button next">Save to proceed</button>									
					    			<button type="button" class="button next"></button>
					    		</div> <!-- end .button-wrapper -->			    		

					    	</div> <!-- end .form-inner -->							
					 	</fieldset>

					  	<fieldset>
                            <h2 class="form-title text-center dark">Complete your profile</h2>
						    <h3 class="step-title text-center dark">Step 3: Complete your Work Experience</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="sub-active"><span>3</span></li>
								<li><span>4</span></li>
							</ul> <!-- end .steps-progress-bar -->

					    	<div class="form-inner">
								<h6>Work Experience Information</h6>								
								<div class="form-fields-wrapper">

									<h4 class="form-fields-title dark">Career Objective Details</h4>

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Career Objective<sup>*</sup></p>
										    <input type="text" id="employer-company-site" name="employer-company-site" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper --> 
									
									<div class="divider"></div>
									<h4 class="form-fields-title dark">Company Info</h4>
									<div class="form-group-wrapper">
                                        <div class="form-group upload-company-logo">
                                            <p class="label">Choose Profile Picture<span>(Maximum file size: 5MB)</span><sup>*</sup></p>
                                            <label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
                                            <span>Upload your logo</span>
                                            <span><i class="ion-ios-folder-outline"></i>Browse image</span>								    	
                                            </label>
                                            <input type="file" name="company-logo-upload" id="company-logo-upload">
                                            <img src="https://images.all-free-download.com/images/graphiclarge/cute_icon_vector_4_expression_163160.jpg" class="img-circle" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
                                        </div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->
									
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Company name<sup>*</sup></p>
											<input type="text" id="employer-company-name" name="employer-company-name" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Position<sup>*</sup></p>
											<input type="text" id="employer-company-address" name="employer-company-address" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->									

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Job Started<sup>*</sup></p>
											<input type="text" id="employer-company-number" name="employer-company-number" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Job Ended<sup>*</sup></p>
											<input type="email" id="employer-company-email" name="employer-company-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Location<sup>*</sup></p>
										    <input type="text" id="employer-company-site" name="employer-company-site" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper --> 

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Description<sup>*</sup></p>
											<textarea name="" id="" rows="4"></textarea>
										    <!-- <input type="text" id="employer-company-site" name="employer-company-site" placeholder="" required=""> -->
										</div>
									</div>
								</div>

								<div class="divider"></div>

								<div class="button-wrapper text-center">
									<button type="button" class="button previous">Back</button>
                                    <button type="button" class="button next">Save to proceed</button>
					    			<button type="button" class="button next"></button>
								</div>
					    	</div>
					 	</fieldset>

					 	<fieldset>
                            <h2 class="form-title text-center dark">Complete your profile</h2>
						    <h3 class="step-title text-center dark">Step 4: Complete your Contact Details</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="sub-active"><span>4</span></li>
							</ul> <!-- end .steps-progress-bar -->

					    	<div class="form-inner">
								<h6>Work Experience Information</h6>								
								<div class="form-fields-wrapper">

									<h4 class="form-fields-title dark">Contact Details</h4> 
									
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Email Address<sup>*</sup></p>
											<input type="text" id="employer-company-name" name="employer-company-name" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Phone Number<sup>*</sup></p>
											<input type="text" id="employer-company-address" name="employer-company-address" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->									

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Municipality<sup>*</sup></p>
											<input type="text" id="employer-company-number" name="employer-company-number" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Barangay<sup>*</sup></p>
											<input type="email" id="employer-company-email" name="employer-company-email" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper --> 
								</div>

								<div class="divider"></div>

								<div class="button-wrapper text-center">
									<button type="button" class="button previous">Back</button>
                                    <button type="button" class="button next">Save to proceed</button>
					    			<button type="button" class="button next"></button>
								</div>
					    	</div>
					 	</fieldset>

					 	<fieldset>
						  	<h2 class="form-title text-center dark">Post a Job</h2>
						    <h3 class="step-title text-center dark">You've successfully posted a job</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
							</ul> <!-- end .steps-progress-bar -->

					 		<div class="form-inner">
					 			<h2 class="text-center job-post-success">Congratulations!</h2>
					 			<p class="text-center">
                                    You’ve successfully updated your profile information. 
                                    You can now start applying a job.
                                    <br/>
                                    Thank you for using our system!
                                </p>
				    			<div class="button-wrapper text-center">
                                    <a href="">Go to Account</a>
					    		</div> <!-- end .button-wrapper -->
				    		</div> <!-- end .form-inner -->	
					 	</fieldset>

					</form> <!-- end .job-post-form -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
        <?php
            include './pages/footer.php'; // Home Page Footer
            include './pages/applicant/footer.php'; // Applicant Footer 
        ?>
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/post-job-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
</html>