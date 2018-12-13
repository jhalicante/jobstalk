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
								<li class="heading">Manage All Jobs, Applicant & Employer </li>
								<li class="active"><a data-toggle="pill" href="#joblists-tab">All Jobs</a></li>
							    <li><a data-toggle="pill" href="#employer-tab">Employer List</a></li>
								<li><a data-toggle="pill" href="#applicant-tab">Applicant List</a></li>
								<li class="nav-divider"></li>
								<li class="heading">Manage Reminders</li>
							    <li><a data-toggle="pill" href="#reminders-lists-tab">Remiders List</a></li>
							    <li><a data-toggle="pill" href="#reminders-add-tab"> &nbsp;&nbsp;&nbsp; Add Remiders</a></li>
								<li class="nav-divider"></li>
								<li class="heading">Manage Reports</li>								
								<li><a data-toggle="pill" class="kpi-tab" href="#kpi-tab">Key performance indicator</a></li>
								<li><a data-toggle="pill" class="reports-list-tab" href="#reports-list-tab">General Reports</a></li>
								<?php if(isset($_GET['admin-sprs-report-id'])) {  ?>
									<li><a href="account" class="sprs-tab"> &nbsp;&nbsp;&nbsp; Add SPRS</a></li>
									<li><a data-toggle="pill" href="#sprs-tab" class="sprs-tab hide"> &nbsp;&nbsp;&nbsp; Add SPRS</a></li>									
								<?php } else {  ?>
									<li><a data-toggle="pill" href="#sprs-tab" class="sprs-tab"> &nbsp;&nbsp;&nbsp; Add SPRS</a></li>								
								<?php }  ?>
								<?php if(isset($_GET['admin-lmi-report-id'])) {  ?>
									<li><a href="account" class="lmi-tab"> &nbsp;&nbsp;&nbsp; Add LMI</a></li>
									<li><a data-toggle="pill" href="#lmi-tab" class="lmi-tab hide"> &nbsp;&nbsp;&nbsp; Add LMI</a></li>
								<?php } else {  ?>
									<li><a data-toggle="pill" href="#lmi-tab" class="lmi-tab"> &nbsp;&nbsp;&nbsp; Add LMI</a></li>
								<?php }  ?>
								<li><a data-toggle="pill" href="#placement-report-tab"> &nbsp;&nbsp;&nbsp; Placement Report</a></li>
								<li class="nav-divider"></li>
								<li class="heading">Manage SPES</li>
								<li><a class="spes-brgy" data-toggle="pill" href="#spes-tab">SPES</a></li>
								<li><a data-toggle="pill" href="#spes-add-new-tab"> &nbsp;&nbsp;&nbsp; Add New</a></li>
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
										<?php include './pages/admin/side-navigation/employer.php'; ?>
							        </div>
								</div>

								<div id="joblists-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Job Lists</h6></div>									
									<div class="profile-wrapper">
										<?php include './pages/admin/side-navigation/joblists.php'; ?>
									</div>
								</div>
								
							    <div id="applicant-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Applicant List</h6></div>									
							        <div class="profile-wrapper">
										<?php include './pages/admin/side-navigation/applicant.php'; ?>
							        </div>						        
								</div>

								<div id="kpi-tab" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Key performance indicator</h6></div>									
							        <div class="profile-wrapper">
										<?php include './pages/admin/side-navigation/kpi.php'; ?>										
							        </div>						        
								</div>
								
								<div id="sprs-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>STATISTICAL PERFORMANCE REPORTING SYSTEM (SPRS) </h6></div>
									<br/>
									<?php include './pages/admin/side-navigation/reports/sprs.php'; ?>
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
												<?php
													$lmisql = "SELECT * FROM `admin_lmi_report` WHERE 1 ORDER BY ID ASC  ";
													$lmiresult = $conn->query($lmisql);
													if ($lmiresult->num_rows > 0) {
														while($lmirRow = $lmiresult->fetch_assoc()) {
															$i++;
													?>
													<tr>
														<th><?php echo $i; ?></th>
														<td> <a href="account?admin-lmi-report-id=<?php echo $lmirRow['ID']; ?>"> Labor Market Information Analysis</td>
														<td><?php echo $lmirRow['created_date']; ?></td>
														<td><?php echo $lmirRow['17']; ?></td>
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
									<div class="profile-badge"><h6>Labor Market Information Analysis ANALYSIS</h6></div>
									<br/>
									<?php include './pages/admin/side-navigation/reports/lmi.php'; ?>
								</div>

								<div id="placement-report-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Placement Report</h6></div>
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

								<div id="spes-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>SPES List</h6></div>
									<div class="profile-wrapper"> 
										<?php include './pages/admin/side-navigation/spes-view.php'; ?>									
						        	</div>
								</div>

							    <div id="spes-add-new-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>ADD SPES</h6></div>
							        <div class="profile-wrapper"> 
										<?php include './pages/admin/side-navigation/spes-add-new.php'; ?>
						        	</div>
							    </div>

								<div id="reminders-lists-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Reminders List</h6></div>
									<div class="profile-wrapper"> 
										<?php include './pages/admin/side-navigation/reminders-list-view.php'; ?>									
						        	</div>
								</div>

								<div id="reminders-add-tab" class="tab-pane fade in">
									<div class="profile-badge"><h6>Add Reminder</h6></div>
							        <div class="profile-wrapper"> 
										<?php include './pages/admin/side-navigation/reminders-add.php'; ?>
						        	</div>
							    </div>
							</div>
						</div>
					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		
		<?php 
			// date_default_timezone_set('Asia/Manila');		
			$date = new DateTime('19:24:15 06/13/2013');
			// echo $date->format('h:i:s a m/d/Y').' - ' ;
			// echo date("Y/m/d").' - '.date("h:i:sa").' - '.date("A"); 
			

			global $conn;
			$alrm = $conn->query("SELECT * FROM `admin_reminders` WHERE 1 ORDER BY ID DESC");
			if ($alrm->num_rows > 0) {
				while($alrow = $alrm->fetch_assoc()) {
					// echo '  = '.$alrow['date'] .' = '. date("Y-m-d");
				if( $alrow['date'] == date("Y-m-d")) { 
					if(date("h") == $alrow['hour'] && date("A") == $alrow['am_pm']) {

					?>
						<audio src="./assets/sound/Store_Door_Chime-Mike_Koenig-570742973.mp3" loop controls autoplay />
						<div class="toast toast--yellow add-margin">
							<div class="toast__icon">
								<svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 301.691 301.691" style="enable-background:new 0 0 301.691 301.691;" xml:space="preserve">
									<g>
										<polygon points="119.151,0 129.6,218.406 172.06,218.406 182.54,0  "></polygon>
										<rect x="130.563" y="261.168" width="40.525" height="40.523"></rect>
									</g>
								</svg>
							</div> 
							<div class="toast__content">
								<p class="toast__type"><?php echo $alrow['title']; ?></p>
								<p class="toast__message">
								<?php echo $alrow['description']; ?></p>
							</div>
							<div class="toast__close">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
									<path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
								</svg>
							</div>
						</div>
		<?php 
					}		
				}
			}
		} ?>

		<?php include './pages/footer.php'; ?>
		<?php include './pages/admin/footer.php'; ?> 
	</body>
</html>