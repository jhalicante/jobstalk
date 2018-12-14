<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo SITE_NAME.' - SPES'; ?></title>
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

		<?php include './pages/bpc/header.php'; ?>

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
							   	<li class="heading">Manage job</li>
								<li><a data-toggle="pill" href="#spes-list">Spes List</a></li>
							    <li class="nav-divider"></li>
							    <li><a class="signout" href="#">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">
 
							    <div id="spes-list" class="tab-pane fade in active">
									<div class="profile-badge"><h6>SPES List</h6></div> 
									<div class="profile-wrapper">
										<table id="spes-table" class="table table-condensed">
											<thead>
												<tr>
													<th>No.</th>
													<th>Fullname</th>
													<th>Age</th>
													<th>School</th>
													<th>Barangay</th>
													<th>Status</th>
													<th>Year</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php  
													global $conn;
													$sqlAJ = "SELECT * FROM `admin_spes_report` WHERE 1 ORDER BY ID DESC";
													$resultAJ = $conn->query($sqlAJ);
													
													if ($resultAJ->num_rows > 0) {
														$i=1;
														while($rowAJ = $resultAJ->fetch_assoc()) {
												?>													
												<tr>
													<td><?php echo $i++; ?></td>
													<td><?php echo $rowAJ['fname'].' '.$rowAJ['mname'].' '.$rowAJ['lname']; ?></a></td>
													<td><?php echo $rowAJ['age']; ?></td>
													<td><?php echo $rowAJ['school']; ?></td>
													<td><?php echo $rowAJ['brgy']; ?></td>
													<td><?php echo ucfirst($rowAJ['status']); ?></td>
													<td><?php echo ucfirst($rowAJ['year']); ?></td>
													<td><button class="delete-spes" id="<?php echo $rowAJ['ID']; ?>">Delete</button></td>
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
		<?php include './pages/bpc/footer.php'; ?>
		<?php include './pages/footer.php'; ?>
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 14:59:28 GMT -->
</html>