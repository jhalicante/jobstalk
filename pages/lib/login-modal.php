		<!-- Login/Signup Popup -->
	    <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
	        <div class="modal-dialog modal-sm login-signup-modal">
	            <div class="modal-content">
	                <div class="popup-tabs">
	                    <ul class="nav nav-tabs" id="myTab">
	                        <li class="active"><a data-toggle="tab" href="#login">Sign In</a></li>
	                        <li><a data-toggle="tab" href="#register">Sign Up</a></li>
	                    </ul>
	                </div> <!-- end .popup-tabs -->
	                <div class="modal-body">
	                    <div class="tab-content" id="myTabContent">
	                        <div class="tab-pane fade in active" id="login">
	                            <form class="login-form">
									<div class="form-group">
										<p class="signin-error-message text-danger"></p>
									</div>
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control signin-email-address" id="InputEmail1" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control signin-password" autocomplete="off" id="InputPassword1" placeholder="Password">
									</div>
									<button type="button" class="button btn-signin">Sign In</button>
	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->

	                        <div class="tab-pane fade" id="register">
								<form method="post" enctype="multipart/form-data" id="signup-form" class="signup-form">
									<div class="form-group">
										<p class="signup-error-message text-danger"></p>
									</div>
									<div class="form-group"> 
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" name="email-address" placeholder="Enter your email address" require="">
									</div>
									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Enter Password">
									</div>
									<div class="form-group">
									    <label for="InputPassword2">Confirm Password *</label>
									    <input type="password" class="form-control" name="confirm-password" autocomplete="off" placeholder="Enter Confirm-Password">
									</div>
									<div class="form-group">
									    <label for="select1">Register as:</label>
									    <div class="select-wrapper">
									        <select class="form-control" name="role">
										        <option value="applicant">Applicant</option>
										        <option value="employer">Employer</option>
										    </select>
									    </div> <!-- end .select-wrapper -->								    
									</div>
									<button type="type" class="button">Sign Up</button>
	                            </form> <!-- end .signup-form -->
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->