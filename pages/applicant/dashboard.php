<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME.' - '.$fetch->getInformation('user_account', 'email_address'); ?></title>
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

		<?php include './pages/applicant/header.php'; ?>

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li class="active"><a data-toggle="pill" href="#resume">My Resume</a></li>
							    <li><a data-toggle="pill" href="#edit-personal-information">Edit Personal Information</a></li>
							    <li><a data-toggle="pill" href="#add-work-experience" class="add-work-experience">Add Work Experience</a></li>
							    <li><a data-toggle="pill" href="#edit-work-experience" class="edit-work-experience">Edit Work Experience</a></li>
							    <!-- <li><a data-toggle="pill" href="#edit-career-objective">Edit Career Objective</a></li>
							    <li><a data-toggle="pill" href="#add-work-experience">Add Work experience</a></li> -->
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#applied">Applied Job</a></li>
							    <li class="nav-divider"></li>
							    <li><a class="signout" href="#">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

							    <div id="resume" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>My resume</h6></div>
							        <div class="profile-wrapper">
										<?php include './pages/applicant/my-resume.php'; ?>
							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #resume-tab -->

								<div id="edit-personal-information" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Edit Personal Information</h6></div>
							        <div class="profile-wrapper">
										<?php include './pages/applicant/include/edit-personal-information.php'; ?>
							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #resume-tab -->

								<div id="edit-work-experience" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Edit Work Experience</h6></div>
							        <div class="profile-wrapper">
										<?php include './pages/applicant/include/edit-work-experience.php'; ?>
							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #resume-tab -->

								<div id="add-work-experience" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Add Work Experience</h6></div>
							        <div class="profile-wrapper">
										<?php include './pages/applicant/include/add-work-experience.php'; ?>
							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #resume-tab -->
								
							    <div id="applied" class="tab-pane fade in">
									<div class="profile-badge"><h6>Applied Job</h6></div>
									<ul class="job-alert-table-headings flex items-center no-column list-unstyled">
										<!-- <li class="company-name-cell"><h6>Company Name</h6></li> -->
										<li class="contract-type-cell"><h6>Contract Type</h6></li>
										<li class="job-position-cell"><h6>Position</h6></li>
										<li class="contract-type-cell"><h6>Contract Type</h6></li>
										<li class="job-frequency-cell"><h6>Frequency</h6></li>
									</ul>
									<div class="profile-wrapper">
										<table id="print-joblist-table" class="table table-condensed">
											<thead>
												<tr>
													<th>No.</th>
													<th>Company Name</th>
													<th>Position</th>
													<th>Date Applied</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php  
													$sqlAJ = "SELECT
																employer_job_posted.com_logo,
																employer_job_posted.com_name,
																employer_job_posted.position,
																employer_job_posted.job_type,
																applied_job.ID,
																applied_job.application_status,
																applied_job.date_applied
															FROM applied_job
															INNER JOIN employer_job_posted ON employer_job_posted.job_id = applied_job.job_id
															WHERE applied_job.applicant_id = '".$_COOKIE["user_id"]."'
															ORDER BY applied_job.`ID` DESC";
													$resultAJ = $conn->query($sqlAJ);
													
													if ($resultAJ->num_rows > 0) {
														$i=1;
														while($rowAJ = $resultAJ->fetch_assoc()) {
												?>													
												<tr>
													<th><?php echo $i++; ?></th>
													<td><a href="#" class="jobinfo-show-modal" job_id="<?php echo $rowAJ['job_id']; ?>"><?php echo $rowAJ['com_name']; ?></a></td>
													<td><?php echo $rowAJ['position']; ?></td>
													<td><?php echo $rowAJ['date_applied']; ?></td>
													<td><?php echo ucfirst($rowAJ['application_status']); ?></td>
												</tr> 
												<?php
													} 
												}
											?>								
											</tbody>
										</table>
									</div>     
							    </div> <!-- end #manage-applications-tab -->

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<?php include './pages/applicant/footer.php'; ?>
		<?php include './pages/footer.php'; ?>
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
</html>