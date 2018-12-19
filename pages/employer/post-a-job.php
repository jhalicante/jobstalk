<form method="post" enctype="multipart/form-data" id="post-a-new-job">
    <div class="form-group-wrapper">
        <div class="form-group upload-company-logo hide">
            <p class="label">Choose Company Logo <span>(Maximum file size: 5MB)</span><sup>*</sup></p>
            <label for="logo-picture" class="flex space-between items-center no-column no-wrap">
                <span class="logo-picture-name">Upload logo</span>
                <span><i class="ion-ios-folder-outline"></i>Browse Photo</span>								    	
            </label>
            <input type="file" name="com-logo" id="logo-picture" data-label-class="logo-picture-name" data-preview-img="logo-picture-preview"> 
            <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('employer_information', 'logo'); ?>" class="img-circle logo-picture-preview" width="80px" height="80px" alt="" style="right:30px;position:absolute;top:0px;">
        </div> <!-- end .form-group -->
        <input type="hidden" name="com-logo" value="<?php echo $fetch->getInformation('employer_information', 'logo'); ?>">
        <input type="hidden" name="employer-posting" value="true">
    </div> <!-- end .form-group-wrapper -->

    <div class="form-group-wrapper flex space-between items-center">
        <div class="form-group hidden">
            <p class="label">Company Name<sup>*</sup></p>
            <input type="text" class="company-name" name="company-name" placeholder="" required="" value="<?php echo $fetch->getInformation('employer_information', 'name'); ?>">
        </div> <!-- end .form-group -->
        <div class="form-group">
            <p class="label">Position<sup>*</sup></p>
            <input type="text" class="position" name="position" placeholder="" required="">
        </div> <!-- end .form-group -->
    </div> <!-- end .form-group-wrapper -->

    <div class="form-group-wrapper flex space-between items-center">
        <div class="form-group">
            <p class="label">Required Course<sup>*</sup></p>
            <select name="required_course" class="form-control" required="" data-live-search="true">
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
            <input type="number" class="company-title" name="years_experience" value="0" placeholder="" required="">
        </div> <!-- end .form-group -->
        <div class="form-group">
            <p class="label">Month(s) Experience Required <span>(Optional)</span><sup>*</sup></p>
            <input type="number" class="position" name="months_experience" value="0" placeholder="" required="">
        </div> <!-- end .form-group -->
    </div> <!-- end .form-group-wrapper -->

    <div class="form-group-wrapper flex space-between items-center">
        <div class="form-group">
            <p class="label">Job Type<sup>*</sup></p>
            <select name="job_type" class="form-control" required="" data-live-search="true">
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
    <div class="button-wrapper text-center">
        <input type="submit" class="button" value="Submit Now"/>
    </div> <!-- end .button-wrapper -->	
    <br/>										
</form>
