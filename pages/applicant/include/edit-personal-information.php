<fieldset>
    <form method="post" enctype="multipart/form-data" id="personal-information-form">						  
        <div class="form-inner">
            <div class="form-fields-wrapper">									
                <div class="form-group-wrapper flex space-between items-center">
                    <div class="form-group">
                        <p class="label">Firstname<sup>*</sup></p>
                        <input type="text" name="fname" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'fname'); ?>">
                    </div> <!-- end .form-group -->
                    <div class="form-group">
                        <div class="form-group">
                            <p class="label">Middle Name<sup>*</sup></p>
                            <input type="text" name="mname" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'mname'); ?>">
                        </div> <!-- end .form-group -->
                    </div> <!-- end .form-group -->
                </div> <!-- end .form-group-wrapper -->	

                <div class="form-group-wrapper flex space-between items-center">
                    <div class="form-group">
                        <p class="label">Lastname<sup>*</sup></p>
                        <input type="text" name="lname" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'lname'); ?>">
                    </div> <!-- end .form-group -->
                    <div class="form-group">
                        <div class="form-group">
                            <p class="label">Birthday<sup>*</sup></p>
                            <input type="date" name="bday" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'bday'); ?>">
                        </div> <!-- end .form-group -->
                    </div> <!-- end .form-group -->
                </div> <!-- end .form-group-wrapper -->									

                <div class="form-group-wrapper flex space-between items-center">
                    <div class="form-group">
                        <p class="label">Gender<sup>*</sup></p>
                        <select name="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div> <!-- end .form-group -->
                    <div class="form-group">
                        <p class="label">Nationality<sup>*</sup></p>
                        <input type="text" name="nationality" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'nationality'); ?>">
                    </div> <!-- end .form-group -->
                </div> <!-- end .form-group-wrapper -->

                <div class="form-group-wrapper flex space-between items-center">
                    <div class="form-group">
                        <p class="label">Civil Status<sup>*</sup></p>
                        <input type="text" name="civil-status" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'civil_status'); ?>">                                            
                    </div> <!-- end .form-group -->
                    <div class="form-group">
                        <p class="label">Language<span>(eg: English,Tagalog)</span><sup>*</sup></p>
                        <input type="text" name="language" placeholder="" required="" value="<?php echo $fetch->getInformation('applicant_personal_information', 'language'); ?>">
                    </div> <!-- end .form-group -->
                </div> <!-- end .form-group-wrapper -->

                <div class="form-group-wrapper">
                    <div class="form-group upload-company-logo">
                        <p class="label">Choose Profile Picture<span>(Maximum file size: 5MB)</span><sup>*</sup></p>
                        <label for="profile-picture" class="flex space-between items-center no-column no-wrap">
                        <span class="profile-picture-name">Upload your photo</span>
                        <span><i class="ion-ios-folder-outline"></i>Browse Photo</span>								    	
                        </label>
                        <input type="file" name="profile-picture" id="profile-picture" data-label-class="profile-picture-name" data-preview-img="profile-picture-preview"> 
                        <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('applicant_personal_information', 'profile_picture'); ?>" class="img-circle profile-picture-preview" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
                    </div> <!-- end .form-group -->
                </div> <!-- end .form-group-wrapper -->
            </div> <!-- end .form-fields-wrapper -->

            <div class="button-wrapper text-center">
                <br/>
                <button type="submit" class="button save-personal-information">Save Changes</button>
            </div> <!-- end .button-wrapper -->			    		
        </div> <!-- end .form-inner -->							
    </form>						
</fieldset>