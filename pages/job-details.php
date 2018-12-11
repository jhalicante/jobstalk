
<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME ?> - Job Details</title>

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
			<div class="container-fluid clearfix">
				<div class="header-inner has-form flex space-between items-center">
					<div class="left flex items-center no-column no-wrap">
						<div class="logo"><a href="index.html"><img src="<?php echo ASSET_URL;?>assets/images/logo.png" alt="JobPress" class="img-responsive"></a></div>
						<div class="job-search-form form-header">						
							<form class="form-inline flex no-column no-wrap" method="GET" action="find-job">
                                <div class="form-group">
									<div class="form-group-inner">
										<input type="text" name="location" class="form-control location-input" id="input-field-2" placeholder="Prefered Location">
										<i class="ion-ios-location-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group -->
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" name="position" class="form-control position-input" id="input-field-1" placeholder="Position, Job Title">
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
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
                            <?php if ( !empty($_COOKIE['user_id']) ) { ?>
								<a href="account" class="button">My Account</a>
								<a href="#" class="button signout">Sign Out</a>
							<?php } else { ?>
								<a href="find-job" class="button">Find a Job</a>
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
 
		<!-- Job Listings Section -->
		<div class="section jobs-details-section">
			<div class="container-fluid">
				<div class="jobs-details-wrapper flex no-wrap">
                    <?php
                        if(isset($_GET['job-id'])) {
                            global $conn;

                            $sql = "SELECT
                                        employer_job_posted.`user_id`,
                                        employer_job_posted.`job_id`,
                                        employer_job_posted.`com_logo`,
                                        employer_job_posted.`com_name`,
                                        employer_job_posted.`com_address`,
                                        employer_job_posted.`position`,
                                        employer_job_posted.`job_type`,
                                        employer_job_posted.`course_id`,
                                        employer_job_posted.`industry_id`,
                                        employer_job_posted.`years_experience`,
                                        employer_job_posted.`months_experience`,
                                        employer_job_posted.`description`,
                                        employer_job_posted.`created_date`,
                                        employer_job_posted.`status`,
                                        course_lists.name as course_name,
                                        employer_information.`email`,
                                        employer_information.`contact_no`,
                                        employer_information.`website`

                                    FROM `employer_job_posted`
                                    LEFT JOIN course_lists ON course_lists.course_id = employer_job_posted.course_id
                                    LEFT JOIN employer_information ON employer_information.`user_id` = employer_job_posted.`user_id`
                                    WHERE `job_id`='".$_GET["job-id"]."' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                    ?>

					<div class="right-side-wrapper">
						<div class="right-side-top">
							<h6><span><i class="ion-ios-arrow-left"></i></span>Back to <a href="javascript:window.history.back();">Find a Job</a></h6>
							<div class="right-side-top-inner flex no-wrap">
							
								<div class="job-post-wrapper">
									<div class="job-post-top flex no-column no-wrap">
										<div class="job-post-top-left">
											<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $row['com_logo'];?>" alt="company-logo" class="img-responsive" width="100px">
										</div> <!-- end .left-side-inner -->
										<div class="job-post-top-right">
											<h4 class="dark">Front-end developer needed</h4>
											<h5><b>Job Type:</b> <?php echo $row['job_type'];?> <br/> <b>Date posted:</b> <?php echo $row['created_date'];?></h5>
											<div class="job-post-meta flex items-center no-column no-wrap">
												<div class="bookmarked-job-meta flex items-center no-wrap no-column">
													<h6 class="bookmarked-job-category"></h6>
						        				</div>
					        					<h6 class="full-time"></h6>
											</div> <!-- end .job-post-meta -->
										</div> <!-- end .right-side-inner -->
									</div> <!-- end .job-post-top -->

									<div class="divider"></div>

									<div class="job-post-bottom">
										<h4 class="dark">Job Description</h4>
										<p><?php echo $row['description']; ?></p>
										<br>
										<h4 class="dark">Requirements</h4>
										<p><b>Educational Attainment:</b> <?php echo $row['course_name'];?></p>
										<p><b>Required Experience:</b> <?php echo $row['years_experience'];?>yrs <?php echo $row['months_experience'];?>mons</p>
										<br>
									</div> <!-- end .job-post-bottom -->

								</div> <!-- end .left-side-inner -->

								<div class="right-side-inner">
									<div class="job-post-company-info">
										<h5 class="dark"><?php echo $row['com_name']; ?></h5>
										<ul class="list-unstyled">
											<li class="flex no-column no-wrap"><i class="ion-ios-location"></i><?php echo $row['com_address'];?></li>
											<li class="flex no-column no-wrap"><i class="ion-ios-telephone"></i><a href="tel:<?php echo $row['contact_no']; ?>"><?php echo $row['contact_no']; ?></a></li>
											<li class="flex no-column no-wrap"><i class="ion-email"></i><a href="//<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></li>
											<li class="flex no-column no-wrap"><i class="ion-earth"></i><a href="//<?php echo $row['website']; ?>"><?php echo $row['website']; ?></a></li>
										</ul>
									</div> <!-- end .job-post-company-info -->
                                    <?php 
                                        if(isset($_COOKIE['user_id'])) {
                                            if($_COOKIE['role'] == 'applicant') {
                                    ?>
                                        <div class="system-login text-center">
                                            <h6>Submit your application by clicking the button below</h6>
                                            <button type="button" class="button send-resume" employer-id="<?php echo $row['user_id']; ?>" job-id="<?php echo $row['job_id']; ?>">Submit your resume</button>
                                        </div>
                                    <?php
                                            }
                                        } else {
                                    ?>
                                    <div class="system-login text-center">
                                        <h6>Submit your application by clicking the button below</h6>
                                        <button type="button" class="button send-resume" employer-id="<?php echo $row['user_id']; ?>" job-id="<?php echo $row['job_id']; ?>">Submit your resume</button>
                                    </div>
                                    <?php } ?>

                                    
								</div> <!-- end .right-side-inner -->

							</div> <!-- end .left-side-top -->

							</div> <!-- end .right-side-top-inner -->
						</div> <!-- end .right-side-top -->
                    </div> <!-- end .right-side-wrapper -->
                    
                    <?php
                            }
                        }
                    ?>
				</div> <!-- end .jobs-details-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->


        <?php include './pages/footer.php'; ?>


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
        <!-- SweetAlert -->
		<script src="<?php echo ASSET_URL;?>assets/js/sweetalert.min.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo ASSET_URL;?>assets/js/job-details.js"></script>
        <script src="<?php echo ASSET_URL;?>assets/js/scripts.js"></script>
        <script src="<?php echo ASSET_URL;?>assets/js/functions.js"></script>
		<script>
			var api_url = '<?php echo API_URL; ?>';
		</script>
	</body>
</html>