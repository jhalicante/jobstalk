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

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('applicant_personal_information', 'profile_picture'); ?>" alt="candidate-picture" class="img-responsive" width="85" height="85">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark"><?php echo $fetch->getInformation('applicant_personal_information', 'fname').' `'.$fetch->getInformation('applicant_personal_information', 'mname').'` '.$fetch->getInformation('applicant_personal_information', 'lname'); ?></h4>
												<p><?php echo $fetch->getInformation('user_account', 'email_address'); ?></p>
												<div class="profile-contact flex items-center no-wrap no-column">
													<h6 class="contact-location"><?php echo $fetch->getInformation('applicant_contact_information', 'municipality').', BRGY '.$fetch->getInformation('applicant_contact_information', 'brgy'); ?>, PH</span></h6>
													<h6 class="contact-phone"><?php echo $fetch->getInformation('applicant_contact_information', 'phone_no'); ?></h6>
													<h6 class="contact-email"><?php echo $fetch->getInformation('applicant_contact_information', 'email_address'); ?></h6>
												</div> <!-- end .profile-contact -->
												<div class="profile-contact flex items-center no-wrap no-column">
													<h6 class="contact-location"><?php echo $fetch->getInformation('applicant_personal_information', 'bday'); ?></h6>
													<h6 class="contact-phone"><?php echo $fetch->getInformation('applicant_personal_information', 'nationality'); ?></h6>
													<h6 class="contact-email"><?php echo $fetch->getInformation('applicant_personal_information', 'civil_status'); ?></h6>
												</div> <!-- end .profile-contact -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

										<div class="profile-about profile-section">
											<h3 class="dark profile-title">
												Career Objective
												<span class="btn-edit-icon btn-edit-career"><i class="ion-edit"></i></span>												
											</h3>
											<p><?php echo $fetch->getInformation('applicant_career_objective', 'objective_content'); ?></p>
										</div> <!-- end .profile-about -->

										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title">
													Work experience 
													<span class="show-new-experience-view"><i class="ion-plus"></i></span>
											</h3>
											
											<div class="new-experience-view hide">
												<div class="form-fields-wrapper">
													<h3 class="form-fields-title dark">Add new work experience</h3>
													<form method="post" enctype="multipart/form-data" id="UploadMedia">
														<div class="form-group-wrapper flex space-between items-center">
															<div class="form-group">
																<p class="label">Company Logo</p>
																<input type="file" id="company_logo" name="company_logo" placeholder="">
															</div> <!-- end .form-group -->
															<div class="form-group">
																<img src="<?php echo ASSET_URL;?>assets/images/company-logo-big01.jpg" alt="company-logo" class="img-responsive pull-right img-preview">															
															</div> <!-- end .form-group -->
														</div> <!-- end .form-group-wrapper -->
														<div class="form-group-wrapper flex space-between items-center">
															<div class="form-group">
																<p class="label">Company Name</p>
																<input type="text" class="company-title" name="company-title" placeholder="">
															</div> <!-- end .form-group -->
															<div class="form-group">
																<p class="label">Position</p>
																<input type="text" class="position" name="position" placeholder="">
															</div> <!-- end .form-group -->
														</div> <!-- end .form-group-wrapper -->
														<div class="form-group-wrapper flex space-between items-center">
															<div class="form-group">
																<p class="label">Job Started</p>
																<input type="date" class="job-started" name="job-started" placeholder="">
															</div> <!-- end .form-group -->
															<div class="form-group">
																<p class="label">Job Ended</p>
																<input type="date" class="job-ended" name="job-ended" placeholder="">
															</div> <!-- end .form-group -->
														</div> <!-- end .form-group-wrapper -->

														<div class="form-group-wrapper">
															<div class="form-group">
																<p class="label">Job Description</p>
																<textarea name="job-desc" class="job-desc" rows="6"></textarea>
															</div> <!-- end .form-group -->
														</div> <!-- end .form-group-wrapper -->
													</div> <!-- end .form-fields-wrapper -->
													<div class="button-wrapper text-center">
														<button type="button" class="button g-plus-btn hide-new-experience-view">Cancel</button>
														<button type="submit" class="button btn-save-new-experiencex">Save</button>
													</div> <!-- end .button-wrapper -->	
												</form>
											</div>
											<div class="spacer-md"></div>
											<?php 
												global $conn;											
												$sql = "SELECT * FROM `applicant_work_experience` WHERE `user_id`='".$_COOKIE['user_id']."'";
												$result = $conn->query($sql);
												
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
														date_default_timezone_set('Asia/Manila');
														$datetime1 = new DateTime($row['job_start']);
														$datetime2 = new DateTime($row['job_end']);
														$interval = $datetime1->diff($datetime2);
											?>
												<div class="profile-experience flex space-between no-wrap no-column">
													<div class="profile-experience-left">
														<h5 class="profile-designation dark"><?php echo $row['company_name']; ?></h5>
														<p class="profile-company dark"><?php echo $row['position']; ?></p>
														<p class="small ultra-light"><?php echo $row['job_start']; ?> - <?php echo $row['job_end']; ?> (<?php echo $interval->format('%y year %m months');?>)</p>
														<p class="small ultra-light"><i class="ion-location" style="font-size:13px;"></i> <?php echo $row['location']; ?></p>
														<p><?php echo $row['description']; ?></p>
														<h6 class="text-info show-new-experience-view">Edit &nbsp; [ <span><i class="ion-edit"></i></span> ]</h6>
														<!-- projects-count -->
													</div> <!-- end .profile-experience-left -->
													<div class="profile-experience-right">
														<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $row['company_logo']; ?>" alt="company-logo" class="img-responsive" width="100">
													</div> <!-- end .profile-experience-right -->
												</div> <!-- end .profile-experience -->
												<div class="spacer-md"></div>												
											<?php
													}
												}
											?>

										</div> <!-- end .profile-experience-wrapper -->

										<div class="divider"></div>

										<div class="profile-education-wrapper profile-section">
											<h3 class="dark profile-title">Education<span><i class="ion-edit"></i></span></h4>											
											<?php 
												global $conn;											
												$sql = "SELECT * FROM `applicant_education` WHERE `user_id`='".$_COOKIE['user_id']."' ";
												$result = $conn->query($sql);
												
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) { 
											?>
											<div class="profile-education">												
												<h5 class="dark"><?php echo $row['ter_sname']; ?></h5>
												<p><?php echo $row['ter_course']; ?></p>
												<p class="ultra-light"><?php echo $row['ter_ys']; ?> - <?php echo $row['ter_ye']; ?></p>
												<p class="ultra-light"><?php echo $row['ter_ad']; ?></p>
											</div> <!-- end .profile-education -->
											<div class="spacer-md"></div>	
											<div class="profile-education">												
												<h5 class="dark"><?php echo $row['sec_sname']; ?></h5>
												<p class="ultra-light"><?php echo $row['sec_ys']; ?> - <?php echo $row['sec_ye']; ?></p>
												<p class="ultra-light"><?php echo $row['sec_ad']; ?></p>
											</div> <!-- end .profile-education -->
											<div class="spacer-md"></div>	
											<div class="profile-education">												
												<h5 class="dark"><?php echo $row['pri_sname']; ?></h5>
												<p class="ultra-light"><?php echo $row['pri_ys']; ?> - <?php echo $row['sec_ye']; ?></p>
												<p class="ultra-light"><?php echo $row['pri_ad']; ?></p>
											</div> <!-- end .profile-education -->
											<?php
												}
											}
											?>
										</div> <!-- end .profile-education-wrapper -->

										<div class="divider"></div>

										<div class="profile-skills-wrapper profile-section">
											<h3 class="dark profile-title">Summary skill<span><i class="ion-edit"></i></span></h3>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">HTML</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">PHP</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="80">80</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">NODEJS</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="60">60</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">JAVASCRIPT</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
										</div> <!-- end .profile-skills-wrapper -->

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