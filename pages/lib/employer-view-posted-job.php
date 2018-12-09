		<!-- Pending Notice -->
		<div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="employer-view-job-information" role="dialog" tabindex="-1" data-backdrop="static">
	        <div class="modal-dialog modal-dialog-centered modal-md login-signup-modal">
	            <div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<h4 class="modal-title text-primary">Posted Job Information</h4>
					</div>
	                <div class="modal-body"> 
						<p class="employer-view-job-information-loading" style="display:none;">Fetching data...</p>
						<div class="password-form-wrapper employer-view-job-information-content" style="display:none;">
							<div class="posted-jobs-list-wrapper">
								<div class="form-fields-wrapper">
									<form method="post" enctype="multipart/form-data" id="post-new-job">

										<div class="form-group-wrapper">
											<div class="form-group upload-company-logo">
												<p class="label" style="visibility:hidden;">Choose Company Logo <span>(Maximum file size: 5MB)</span><sup>*</sup></p>
												<label for="logo-picture" style="visibility:hidden;" class="flex space-between items-center no-column no-wrap">
													<span class="logo-picture-name">Upload logo</span>
													<span><i class="ion-ios-folder-outline"></i>Browse Photo</span>								    	
												</label>
												<input type="file" style="visibility:hidden;" name="logo" id="logo-picture" data-label-class="logo-picture-name" data-preview-img="logo-picture-preview"> 
												<img src="<?php echo ASSET_URL; ?>assets/images/image-placeholder.jpg" class="img-circle view-logo" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Company Name<sup>*</sup></p>
												<input type="text" class="view-company-name" disabled>
											</div> <!-- end .form-group -->
											<div class="form-group">
												<p class="label">Position<sup>*</sup></p>
												<input type="text" class="view-position" disabled>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Course<sup>*</sup></p>
												<input type="text" class="view-req-course" value="Testing" disabled>
												
											</div> <!-- end .form-group -->
											<div class="form-group">
												<p class="label">Job Industry<sup>*</sup></p>
												<input type="text" class="view-req-industry" value="Testing" disabled>												
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Year(s) Experience Required<sup>*</sup></p>
												<input type="text" class="view-years-experience" disabled>
											</div> <!-- end .form-group -->
											<div class="form-group">
												<p class="label">Month(s) Experience Required <span>(Optional)</span><sup>*</sup></p>
												<input type="text" class="view-months-experience" disabled>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper flex space-between items-center">
											<div class="form-group">
												<p class="label">Job Type<sup>*</sup></p>
												<input type="text" class="view-job-type" value="Testing" disabled>												
											</div> <!-- end .form-group -->
											<div class="form-group">
												<p class="label">Address<sup>*</sup></p>
												<input type="text" class="view-address" disabled>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper">
											<div class="form-group">
												<p class="label">Job Description<sup>*</sup></p>
												<textarea class="view-job-desc" rows="2" disabled></textarea>
											</div> <!-- end .form-group -->
										</div> <!-- end .form-group-wrapper -->
									</div> <!-- end .form-fields-wrapper -->
									<div class="button-wrapper text-center">
										<button type="submit" class="button" data-dismiss="modal">Close</button>
									</div> <!-- end .button-wrapper -->	
									<br/>										
								</form>
							</div>
						</div>
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->