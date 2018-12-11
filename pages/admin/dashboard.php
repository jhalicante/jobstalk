<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME; ?> - Administrator</title>

		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="<?php echo ASSET_URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
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

		<?php include './pages/admin/header.php'; ?>
		<?php //include './pages/admin/include-inc.php'; ?>
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<?php if($fetch->getInformation('user_account', 'status') != 'verified') { include './pages/lib/pending-notice-popup.php'; } ?>

		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li class="active"><a data-toggle="pill" href="#employer-tab">Employer List</a></li>
								<li><a data-toggle="pill" href="#applicant-tab">Applicant List</a></li>
								<li class="nav-divider"></li>
								<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#joblists-tab">All Jobs</a></li>
								<li class="nav-divider"></li>
								<li class="heading">Reports</li>								
								<li><a data-toggle="pill" class="reports-list-tab" href="#reports-list-tab">General Reports</a>
									<ul>
										<li><a data-toggle="pill" href="#sprs-tab">SPRS</a></li>
										<li><a data-toggle="pill" href="#lmi-tab">LMI</a></li>
										<li><a data-toggle="pill" href="#placement-report-tab">Placement Report</a></li>
									</ul>
								</li>
							    
								<li class="nav-divider"></li>
								<li><a data-toggle="pill" href="#spes-tab">SPES</a></li>								
								<li class="nav-divider"></li>								
							    <!-- <li><a data-toggle="pill" href="#manage-applications-employer">Manage Applications</a></li> -->
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#signout-employer" class="signout">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content employer-dashboard">

							    <div id="employer-tab" class="tab-pane fade in active">
							    	<div class="profile-badge"><h6>Employer List</h6></div>									
							        <div class="profile-wrapper">
										<table id="print-employer-table" class="table table-condensed">
											<thead>
												<tr>
												<th>No.</th>
												<th>Name</th>
												<th>Address</th>
												<th>Email</th>
												<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												global $conn;
												$sql = "SELECT * FROM `user_account` WHERE `role`='employer' ORDER BY status ASC  ";
												$result = $conn->query($sql);
												$i = 0;
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
														$i++;
														$sql1 = "SELECT * FROM `employer_information` WHERE `user_id`='".$row['user_id']."' ";
														$result1 = $conn->query($sql1);
														if ($result1->num_rows > 0) {
														$row1 = $result1->fetch_assoc();
												?>
												<tr>
													<th><?php echo $i; ?></th>
													<td><?php echo $row1['name']; ?></td>
													<td><?php echo $row1['address']; ?></td>
													<td><?php echo $row1['email']; ?></td>
													<td><?php  
														if($row['status'] == 'pending') {
															echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Approve</button>';
															echo '<button class="approved-employer" status="disapproved" user-id="'.$row['user_id'].'">Disapprove</button>';
														}
														else if($row['status'] == 'approved') {
															echo '<button class="approved-employer" status="deactivated" user-id="'.$row['user_id'].'">Deactivate</button>';
														}
														else if($row['status'] == 'deactivated') {
															echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Activate</button>';
														}
														else {
															echo '<span style="background:#4d824d;color:#fff;padding:5px 15px 5px 15px;border-radius:5px;">'.ucfirst($row['status']).'</span>';
														}
													?></td>
												</tr> 
												<?php }}} ?>												
											</tbody>
										</table>
							        </div>
								</div>

							    <div id="joblists-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Job Lists</h6></div>									
							        <div class="profile-wrapper">
										<table id="print-joblists-table" class="table table-condensed">
											<thead>
												<tr>
												<th>No.</th>
												<th>Name</th>
												<th>Job Type</th>
												<th>Status</th>
												<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												global $conn;
												$jpSql = "SELECT * FROM `employer_job_posted` WHERE 1 ORDER BY ID ASC  ";
												$jsResult = $conn->query($jpSql);
												$i = 0;
												if ($jsResult->num_rows > 0) {
													// output data of each row
													while($jpRow = $jsResult->fetch_assoc()) {
														$i++;
												?>
												<tr>
													<th><?php echo $i; ?></th>
													<td><?php echo $jpRow['com_name']; ?></td>
													<td><?php echo $jpRow['job_type']; ?></td>
													<td><?php echo $jpRow['status']; ?></td>
													<td><?php  
														if($jpRow['status'] == 'pending') {
															echo '<button class="approved-job" status="approved" job-id="'.$jpRow['job_id'].'">Approve</button>';
															echo '<button class="approved-job" status="disapproved" job-id="'.$jpRow['job_id'].'">Disapprove</button>';
														}
														else if($jpRow['status'] == 'approved') {
															// echo '<button class="approved-job" status="canceled" job-id="'.$jpRow['job_id'].'">Cancel</button>';
															echo '<button class="approved-job" status="disapproved" job-id="'.$jpRow['job_id'].'">Disapprove</button>';
														}
														else if($jpRow['status'] == 'disapproved') {
															echo '<button class="approved-job" status="approved" job-id="'.$jpRow['job_id'].'">Re-Approve</button>';
														}
														else {
															echo '<b>'.ucfirst($jpRow['status']).'</b>';
														}
													?></td>
												</tr> 
												<?php }} ?>												
											</tbody>
										</table>
							        </div>
								</div>
								
							    <div id="applicant-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Applicant List</h6></div>									
							        <div class="profile-wrapper">
										<table id="print-applicant-table" class="table table-condensed">
											<thead>
												<tr>
												<th>No.</th>
												<th>Name</th>
												<th>Address</th>
												<th>Phone No.</th>
												<th>Gender</th>
												<th>Civil Status</th>
												<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												global $conn;
												$sql = "SELECT * FROM `user_account` WHERE `role`='applicant' ORDER BY status ASC  ";
												$result = $conn->query($sql);
												$i = 0;
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
														$i++;
														$sql1 = "SELECT
																	CONCAT(applicant_personal_information.fname,' ',applicant_personal_information.mname,' ',applicant_personal_information.lname) AS fullname,
																	CONCAT('Brgy.',applicant_contact_information.brgy,' ',applicant_contact_information.municipality ) AS address,
																	applicant_contact_information.phone_no,
																	applicant_personal_information.gender,
																	applicant_personal_information.civil_status,
																	user_account.status
																FROM applicant_personal_information
																INNER JOIN applicant_contact_information ON applicant_contact_information.user_id = applicant_personal_information.user_id
																INNER JOIN user_account ON user_account.user_id = applicant_personal_information.user_id
																WHERE applicant_personal_information.user_id = '".$row['user_id']."' ";
														$result1 = $conn->query($sql1);
														if ($result1->num_rows > 0) {
														$row1 = $result1->fetch_assoc();
												?>
												<tr>
													<th><?php echo $i; ?></th>
													<td><?php echo $row1['fullname']; ?></td>
													<td><?php echo $row1['address']; ?></td>
													<td><?php echo $row1['phone_no']; ?></td>
													<td><?php echo $row1['gender']; ?></td>
													<td><?php echo $row1['civil_status']; ?></td>													
													<td><?php  
														if($row['status'] == 'pending') {
															echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Approve</button>';
															echo '<button class="approved-employer" status="disapproved" user-id="'.$row['user_id'].'">Disapprove</button>';
														}
														else if($row['status'] == 'approved') {
															echo '<button class="approved-employer" status="deactivated" user-id="'.$row['user_id'].'">Deactivate</button>';
														}
														else if($row['status'] == 'deactivated') {
															echo '<button class="approved-employer" status="approved" user-id="'.$row['user_id'].'">Activate</button>';
														}
														else {
															echo '<span style="background:#4d824d;color:#fff;padding:5px 15px 5px 15px;border-radius:5px;">'.ucfirst($row['status']).'</span>';
														}
													?></td>
												</tr> 
												<?php }}} ?>												
											</tbody>
										</table>
							        </div>						        
								</div>
								
								<div id="sprs-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>STATISTICAL PERFORMANCE REPORTING SYSTEM (SPRS) </h6></div>
									<br/>
									<?php include './pages/admin/reports/sprs.php'; ?>
								</div>

								<div id="reports-list-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Reports List</h6></div>									
							        <div class="profile-wrapper">
										<table id="print-admin_sprs_report-table" class="table table-condensed">
											<thead>
												<tr>
												<th>No.</th>
												<th>Type of Report</th>
												<th>Created Date</th>
												<th>Prepared By</th>
												</tr>
											</thead>
											<tbody>
												<?php
													global $conn;
													$sql = "SELECT * FROM `admin_sprs_report` WHERE 1 ORDER BY ID ASC  ";
													$result = $conn->query($sql);
													$i = 0;
													if ($result->num_rows > 0) {
														while($asrRow = $result->fetch_assoc()) {
															$i++;
													?>
													<tr>
														<th><?php echo $i; ?></th>
														<td> <a href="account?admin-sprs-report-id=<?php echo $asrRow['ID']; ?>"> Statistical Performance Reporting System</td>
														<td><?php echo $asrRow['created_date']; ?></td>
														<td><?php echo $asrRow['sprs_name']; ?></td>
													</tr> 
												<?php 
													}
												} 
												?>
											</tbody>
										</table>
							        </div>
								</div>

								<div id="lmi-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>LMI ANALYSIS</h6></div>
									<br/>
									<?php include './pages/admin/reports/lmi.php'; ?>
								</div>

								<div id="placement-report-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Placement Report</h6></div>
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
												$pjsql = "SELECT * FROM `employer_placement_report` WHERE 1 ORDER BY ID DESC";
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

								<div id="placement-report-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Placement Report</h6></div>
									<br/>
									<?php include './pages/admin/reports/sprs.php'; ?>
								</div>

								<div id="spes-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>SPES</h6></div>
									<br/>
									<h3>No content available</h3>
									<?php //include './pages/admin/reports/sprs.php'; ?>
								</div>

							    <div id="job-tab" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="candidate-applications-list-wrapper">

							        	<ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
							        		<li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
							        		<li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
							        		<li class="candidate-resume-cell"><h6>Resume</h6></li>
							        		<li class="candidate-actions-cell"><h6>Actions</h6></li>
							        	</ul> <!-- end .fav-candidates-table-headings -->

							        	<div class="candidate-applications-wrapper">

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Richard Thomas</h4>
															<p>UI/UX Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>David Ortega</h4>
															<p>Front-end developer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Front-end developer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small06.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Nancy Suvillivan</h4>
															<p>Graphic Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Graphic Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small07.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Gregory cooper</h4>
															<p>Web Designer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Web Designer needed</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        		<div class="candidate-application flex no-wrap no-column items-center list-unstyled">
												<div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex items-center no-column no-wrap">
														<div class="candidate-img">
															<img src="<?php echo ASSET_URL;?>assets/images/candidate-small08.jpg" alt="candidate-image" class="img-responsive">
														</div> <!-- end .candidate-img -->
														<div class="cell-text no-column">
															<h4>Brittany Riley</h4>
															<p>Marketer</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="candidate-job-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p>Looking for a market position</p>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-job-cell -->

								        		<div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Resume</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
														<p><span><i class="ion-document"></i></span>PDF (54KB)</p>
													</div> <!-- end .candidate-cell-inner -->								        			
								        		</div> <!-- end .candidate-resume-cell -->

								        		<div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Actions</h6>
													</div> <!-- end .cell-label -->
													<div class="candidate-cell-inner flex no-column no-wrap">
									        			<i class="ion-ios-checkmark-empty approve-icon"></i>
									        			<i class="ion-ios-close-empty trash-icon"></i>
								        			</div> <!-- end .candidate-cell-inner -->
								        		</div> <!-- end .candidate-actions-cell -->
							        		</div> <!-- end .candidate-application -->

							        		<div class="divider"></div>

							        	</div> <!-- end .candidate-applications-wrapper -->
						        	</div> <!-- end .candidate-applications-list-wrapper -->

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

							    </div> <!-- end #manage-applications-employer -->

							    <div id="manage-jobs" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage Jobs</h3>
							        <div class="posted-jobs-list-wrapper">

							        	<ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
							        		<li class="posted-job-title-cell"><h6>Name</h6></li>
							        		<li class="posted-job-type-cell"><h6>Job Type</h6></li>
							        		<li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
							        		<li class="posted-job-featured-cell"><h6>Featured</h6></li>
							        	</ul> <!-- end .posted-jobs-table-headings -->

							        	<div class="posted-jobs-wrapper">

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Web Designer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm freelancer">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're hring a fullstack developer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Front-end developer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm part-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Looking for internship web designer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm internship">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're looking for an project leader</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="<?php echo ASSET_URL;?>assets/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="<?php echo ASSET_URL;?>assets/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        	</div> <!-- end .posted-jobs-wrapper -->
						        	</div> <!-- end .posted-jobs-list-wrapper -->

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
							    </div> <!-- end #manage-applications-tab -->

							    <div id="notifications-employer" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Your notifications</h3>
							        <div class="notifications-list-wrapper">

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
												<p class="ultra-light">3 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">4 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo13.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">5 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
												<p class="ultra-light">6 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">1 day ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
											<p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="<?php echo ASSET_URL;?>assets/images/company-logo15.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        </div> <!-- end .notifications-list-wrapper -->
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
							    </div> <!-- end #notifications-tab -->

							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<?php include './pages/footer.php'; ?>
		<?php include './pages/admin/footer.php'; ?> 
	</body>
</html>