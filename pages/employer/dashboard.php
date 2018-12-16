<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME ?> - Employer</title>

		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="<?php echo ASSET_URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo ASSET_URL;?>assets/css/bootstrap-select.min.css" rel="stylesheet">
		
		<!-- Ionicons -->
		<link href="<?php echo ASSET_URL;?>assets/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php echo ASSET_URL;?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?php echo ASSET_URL;?>assets/css/buttons.dataTables.min.css" rel="stylesheet">
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

		<?php include './pages/employer/header.php'; ?>
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<?php if($fetch->getInformation('user_account', 'status') != 'verified') { include './pages/lib/pending-notice-popup.php'; } ?>
		<?php include './pages/lib/employer-view-posted-job.php'; ?>
		<?php include './pages/lib/employer-view-candidates-applied.php'; ?>

		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li class="active"><a data-toggle="pill" href="#profile" class="myprofile-tab">My Profile</a></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#applicant-profile-tab" class="applicant-profile-tab hide">View Applicant Profile</a></li>
								<li><a data-toggle="pill" href="#post-a-new-jobs" class="postjob-tab">Post A Job</a></li>
								<li><a data-toggle="pill" href="#jobslist" class="jobslist-tab">Jobs List</a></li>
								<li><a data-toggle="pill" href="#hired-applicants" class="hired-applicants-tab">Hired Applicants</a></li>
							    <li><a data-toggle="pill" href="#placement-report-tab" class="placement-report-tab">Placement Report</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="#" class="signout">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content employer-dashboard">

							    <div id="profile" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Profile</h6></div>
							        <div class="profile-wrapper">
										<?php include './pages/employer/my-profile.php'; ?>																											
							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #profile-tab -->

								<div id="post-a-new-jobs" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Post a new Job</h6></div>									
									<div class="profile-wrapper">
										<?php include './pages/employer/post-a-job.php'; ?>
									</div>
								</div>

								<div id="hired-applicants" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Hired Applicants</h6></div>									
									<div class="profile-wrapper">
										<?php include './pages/employer/hired-applicants.php'; ?>
									</div>
								</div>
														
								<div id="jobslist" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Jobs Lists</h6></div>									
									<div class="profile-wrapper">
										<?php include './pages/employer/joblists.php'; ?>
									</div>
								</div>
								
							    <div id="placement-report-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Placement Report</h6></div>
									<div class="password-form-wrapper">
										<div class="posted-jobs-list-wrapper">
											<div class="form-fields-wrapper">
												<form method="post" id="add-placement-report">												
													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Job Title<sup>*</sup></p>
															<input type="text" name="job-title" placeholder="Job Title" required>
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Company Name<sup>*</sup></p>
															<input type="text" name="company-name" placeholder="Company Name" required value="<?php echo $fetch->getInformation('employer_information', 'name'); ?>">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->  

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Date Conducted<sup>*</sup></p>
															<input type="date" name="date-conducted" placeholder="Date Conducted" required>
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Venue<sup>*</sup></p>
															<input type="text" name="venue" placeholder="Venue" required>
														</div> <!-- end .form-group -->
													</div>

												</div> <!-- end .form-fields-wrapper -->
												<br/>
												<div class="button-wrapper text-center">
													<button type="submit" class="button">Save Changes</button>													
												</div> <!-- end .button-wrapper -->	
												<br/>										
											</form>
										</div>
									</div>
									<div class="divider"></div>
									<div class="profile-wrapper">
										<table id="placement-report-table" class="table table-condensed">
											<thead>
												<tr>
													<th>No.</th>
													<th>Job Title</th>
													<th>Company Name</th>
													<th>Date Conducted</th>
													<th>Venue</th>
												</tr>
											</thead>
											<tbody>
											<?php 
												$prsql = "SELECT * FROM `employer_placement_report` WHERE `user_id`='".$_COOKIE['user_id']."' ORDER BY ID DESC";
												$prresult = $conn->query($prsql);
												if ($prresult->num_rows > 0) {
													$i = 1;
													while($prrow = $prresult->fetch_assoc()) { ?>															
												<tr>
													<th><?php echo $i++; ?></th>
													<td><?php echo $prrow['job_title']; ?></td>
													<td><?php echo $prrow['company_name']; ?></td>
													<td><?php echo $prrow['date_conducted']; ?></td>
													<td><?php echo $prrow['venue']; ?></td>
												</tr> 
												<?php
													} 
												}
											?>
											</tbody>
										</table>
									</div>
								</div>
								<div id="applicant-profile-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Applicant Profile Resume</h6></div>
									<?php include './pages/employer/view-applicant-profile.php'; ?>
								</div> <!-- end #resume-tab -->
							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		
		<?php include './pages/footer.php'; ?>
		<?php include './pages/employer/footer.php'; ?>
		
	</body>
</html>