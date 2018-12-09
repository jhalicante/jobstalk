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
								<li><a data-toggle="pill" href="#post-jobs" class="postjob-tab">Post A Job</a></li>
								<li><a data-toggle="pill" href="#jobslist" class="jobslist-tab">Jobs List</a></li>
							    <li><a data-toggle="pill" href="#placement-report" class="placement-report-tab">Placement Report</a></li>
							    <li class="nav-divider"></li>
							    <li><a href="#" class="signout">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content employer-dashboard">

							    <div id="profile" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Profile</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('employer_information', 'logo'); ?>" alt="company-logo" class="img-responsive" width="150" height="150">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark"><?php echo $fetch->getInformation('employer_information', 'name'); ?></h4>
												<p><?php echo $fetch->getInformation('employer_information', 'address'); ?></p>
												<div class="profile-contact flex items-center no-wrap no-column">													
													<h6 class="contact-phone"><?php echo $fetch->getInformation('employer_information', 'contact_no'); ?></h6>
													<h6 class="contact-email"><?php echo $fetch->getInformation('employer_information', 'email'); ?></h6>
													<h6 class="contact-email"><?php echo '<a href="'.$fetch->getInformation('employer_information', 'website').'">Website</a>'; ?></h6>
												</div> <!-- end .profile-contact -->
												<span><?php echo $fetch->getInformation('employer_information', 'address'); ?></span>
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

										<div class="profile-about profile-section">
											<h3 class="dark profile-title">About company<span><i class="ion-edit"></i></span></h3>
											<p><?php echo $fetch->getInformation('employer_information', 'about'); ?></p>
										</div> <!-- end .profile-about -->

										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title">Awards<span><i class="ion-edit"></i></span></h3>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													<h5 class="profile-designation dark">AWWWARDS</h5>
													<h5 class="profile-company dark">Site of the month</h5>
													<p class="small ultra-light">Aug 2016</p>
													<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
													<h6 class="projects-count">http://banana.com</h6>
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
											<div class="spacer-md"></div>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													<h5 class="profile-designation dark">Best css award</h5>
													<h5 class="profile-company dark">Site of the day</h5>
													<p class="small ultra-light">Aug 16th, 2016</p>
													<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
													<h6 class="projects-count">http://banana.com</h6>
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
										</div> <!-- end .profile-experience-wrapper -->

							        </div> <!-- end .profile-wrapper -->						        
								</div> <!-- end #profile-tab -->

							    <div id="post-jobs" class="tab-pane fade in">	
									<div class="profile-badge"><h6>Post a new Job</h6></div>
									<br/>
									<div class="password-form-wrapper">
										<div class="posted-jobs-list-wrapper">
											<div class="form-fields-wrapper">
												<form method="post" enctype="multipart/form-data" id="post-new-job">

													<div class="form-group-wrapper">
														<div class="form-group upload-company-logo">
															<p class="label">Choose Company Logo <span>(Maximum file size: 5MB)</span><sup>*</sup></p>
															<label for="logo-picture" class="flex space-between items-center no-column no-wrap">
																<span class="logo-picture-name">Upload logo</span>
																<span><i class="ion-ios-folder-outline"></i>Browse Photo</span>								    	
															</label>
															<input type="file" name="logo" id="logo-picture" data-label-class="logo-picture-name" data-preview-img="logo-picture-preview"> 
															<img src="<?php echo ASSET_URL; ?>assets/images/image-placeholder.jpg" class="img-circle logo-picture-preview" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Company Name<sup>*</sup></p>
															<input type="text" class="company-name" name="company-name" placeholder="" required="">
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Position<sup>*</sup></p>
															<input type="text" class="position" name="position" placeholder="" required="">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Required Course<sup>*</sup></p>
															<select name="required_course" class="form-control selectpicker" required="" data-live-search="true">
																<?php 
																	global $conn;
																	$sql = "SELECT * FROM `course_lists`";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) { echo '<option value="'.$row['course_id'].'">'.$row['name'].'</option>'; } }
																?>
															</select>
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Job Industry<sup>*</sup></p>
															<select name="job_industry" class="form-control" required="" data-live-search="true">
																<?php 
																	global $conn;
																	$sql = "SELECT * FROM `job_industry`";
																	$result = $conn->query($sql);
																	if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) { echo '<option value="'.$row['ji_id'].'">'.$row['name'].'</option>'; } }
																?>
															</select>
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Year(s) Experience Required<sup>*</sup></p>
															<input type="number" class="company-title" name="years_experience" placeholder="" required="">
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Month(s) Experience Required <span>(Optional)</span><sup>*</sup></p>
															<input type="number" class="position" name="months_experience" placeholder="" required="">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper flex space-between items-center">
														<div class="form-group">
															<p class="label">Job Type<sup>*</sup></p>
															<select name="job_type" class="form-control selectpicker" required="" data-live-search="true">
																<option value="part-time">Part Time</option>
																<option value="full-time">Full Time</option>
																<option value="internship">internship</option>
															</select>
														</div> <!-- end .form-group -->
														<div class="form-group">
															<p class="label">Address<sup>*</sup></p>
															<input type="text" name="address" placeholder="" required="">
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->

													<div class="form-group-wrapper">
														<div class="form-group">
															<p class="label">Job Description<sup>*</sup></p>
															<textarea name="job_desc" class="job-desc" rows="2" Required=""></textarea>
														</div> <!-- end .form-group -->
													</div> <!-- end .form-group-wrapper -->
												</div> <!-- end .form-fields-wrapper -->
												<div class="button-wrapper text-center">
													<!-- <button type="button" class="button g-plus-btn hide-new-experience-view">Cancel</button> -->
													<button type="submit" class="button">Submit Now</button>
												</div> <!-- end .button-wrapper -->	
												<br/>										
											</form>
										</div>
									</div>
								</div> <!-- end #change-password-tab --> 		
														
								<div id="jobslist" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Jobs Lists</h6></div>									
									<div class="profile-wrapper">
										<table id="print-joblist-table" class="table table-condensed">
											<thead>
												<tr>
													<th>No.</th>
													<th>Company Name</th>
													<th>Position</th>
													<th>Date Posted</th>
													<th>Candidates</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
											<?php 
												global $conn;
												$pjsql = "SELECT
															employer_job_posted.`job_id`,
															employer_job_posted.`com_name`,
															employer_job_posted.`com_address`,
															employer_job_posted.`position`,
															employer_job_posted.`status`,  
															employer_job_posted.`created_date`,
															COUNT(applied_job.`ID`) AS applicant_applied
														FROM `employer_job_posted`
														LEFT JOIN applied_job ON applied_job.`job_id` = employer_job_posted.`job_id`    
														WHERE employer_job_posted.`user_id`='".$_COOKIE['user_id']."'
														GROUP BY employer_job_posted.`ID`
														ORDER BY employer_job_posted.`ID` DESC ";
												$pjresult = $conn->query($pjsql);
												if ($pjresult->num_rows > 0) {
													$i = 1;
													while($pjrow = $pjresult->fetch_assoc()) { ?>															
												<tr>
													<th><?php echo $i++; ?></th>
													<td><a href="#" class="jobinfo-show-modal" job_id="<?php echo $pjrow['job_id']; ?>"><?php echo $pjrow['com_name']; ?></a></td>
													<td><?php echo $pjrow['position']; ?></td>
													<td><?php echo $pjrow['created_date']; ?></td>
													<td><?php 
														if( $pjrow['applicant_applied'] >= 1 ) {
															echo '<a href="#" class="candidates-show-modal" job_id="'.$pjrow['job_id'].'"> <b>'.$pjrow['applicant_applied'].' Candidate(s)';
														} 
														else {
															echo '0 Candidate';
														}
														?></td>
													<td><?php echo ucfirst($pjrow['status']); ?></td>
												</tr> 
												<?php
													} 
												}
											?>								
											</tbody>
										</table>
									</div>
								</div> <!-- end #manage-applications-tab -->

							    <div id="placement-report" class="tab-pane fade in">
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
															<input type="text" name="company-name" placeholder="Company Name" required>
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
												global $conn;
												$pjsql = "SELECT * FROM `employer_placement_report` WHERE `user_id`='".$_COOKIE['user_id']."' ORDER BY ID DESC";
												$pjresult = $conn->query($pjsql);
												if ($pjresult->num_rows > 0) {
													$i = 1;
													while($pjrow = $pjresult->fetch_assoc()) { ?>															
												<tr>
													<th><?php echo $i++; ?></th>
													<td><?php echo $pjrow['job_title']; ?></td>
													<td><?php echo $pjrow['company_name']; ?></td>
													<td><?php echo $pjrow['date_conducted']; ?></td>
													<td><?php echo $pjrow['venue']; ?></td>
												</tr> 
												<?php
													} 
												}
											?>
											</tbody>
										</table>
									</div>

								</div>
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