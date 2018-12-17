<form method="post" enctype="multipart/form-data" id="edit-work-experience-form">
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <h4 class="form-fields-title dark">Career Objective Details</h4>

            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Career Objective<sup>*</sup></p>
                    <textarea name="career-objective" cols="30" rows="2" style="resize:none;"><?php echo $fetch->getInformation('applicant_career_objective', 'objective_content'); ?></textarea>
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper --> 
            
            <div class="divider"></div>
            <h4 class="form-fields-title dark">Company Information</h4>
            <div class="form-group-wrapper">
                <div class="form-group upload-company-logo">
                    <p class="label">Choose Logo<span>(Maximum file size: 5MB)</span><sup>*</sup></p>
                    <label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
                    <span class="company-logo-name">Upload your logo</span>
                    <span><i class="ion-ios-folder-outline"></i>Browse image</span>								    	
                    </label>
                    <input type="file" name="company-logo-image" id="company-logo-upload" data-label-class="company-logo-name" data-preview-img="company-logo-preview-image">
                    <img src="<?php echo ASSET_URL; ?>assets/images/image-placeholder.jpg" class="img-circle company-logo-preview-image" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->
            
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Company name<sup>*</sup></p>
                    <input type="text" name="com_name" placeholder="" required="">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Position<sup>*</sup></p>
                    <input type="text" name="com_position" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->									

            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Job Started<sup>*</sup></p>
                    <input type="date" name="com_js" placeholder="" required="">
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Job Ended<sup>*</sup></p>
                    <input type="date" name="com_je" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper -->

            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Location<sup>*</sup></p>
                    <input type="text" name="com_location" placeholder="" required="">
                </div> <!-- end .form-group -->
            </div> <!-- end .form-group-wrapper --> 

            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Description<sup>*</sup></p>
                    <textarea name="com_desc" rows="4"></textarea>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="button-wrapper text-center">
            <button type="button" class="button previous">Back</button>
            <button type="submit" class="button">Save to proceed</button>
            <button type="button" class="button next hide"></button>
        </div>
    </div>
</form>