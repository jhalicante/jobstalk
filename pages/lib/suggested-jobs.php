<div class="jobs-table">
    <div class="table-header">
        <div class="table-cells flex">
            <div class="job-title-cell"><h6>Job title / Company name</h6></div>
            <div class="job-type-cell"><h6>Type</h6></div>
            <div class="salary-cell"><h6>Required Experience</h6></div>	
            <div class="location-cell"><h6>Location</h6></div>            				
        </div> <!-- end .table-cells -->
    </div> <!-- end .table-header -->
    <?php 
    global $conn;

    $sjSql = "SELECT
                employer_job_posted.*,
                course_lists.*,
                applicant_education.*
            FROM `employer_job_posted`
            INNER JOIN course_lists ON course_lists.`course_id` = course_lists.`course_id`
            INNER JOIN applicant_education ON applicant_education.`ter_course` = course_lists.`name`
            WHERE applicant_education.ter_course = '".$fetch->getInformation('applicant_education', 'ter_course')."' ";

    $sjresult = $conn->query($sjSql);

    if ($sjresult->num_rows > 0) {
        // output data of each row
        while($sjrow = $sjresult->fetch_assoc()) {
    ?>
    <div class="table-row">
        <div class="table-cells flex no-wrap">
            <div class="cell job-title-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6><?php echo $sjrow['com_name']; ?></h6>
                </div> <!-- end .cell-label -->
                <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $sjrow['com_logo']; ?>" alt="company-logo" class="img-responsive" width="80">
                <div class="content">
                    <h4><a href="job-details?job-id=<?php echo $sjrow['job_id'];?>"><?php echo $sjrow['position']; ?></a></h4>
                    <p class="small"><?php echo $sjrow['com_name']; ?></p>
                </div> <!-- end .content -->
            </div> <!-- end .job-title-cell -->
            <div class="cell job-type-cell flex no-column">
                <div class="cell-mobile-label">
                    <h6>Type</h6>
                </div> <!-- end .cell-label -->									
                <button type="button" class="button full-time"><?php echo $sjrow['job_type']; ?></button>
            </div> <!-- end .job-type-cell -->
            <div class="cell salary-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Required Experience</h6>
                </div> <!-- end .cell-label -->
                <p><?php echo $sjrow['years_experience'].'yrs '.$sjrow['months_experience'].'mons'; ?></p>
            </div> <!-- end .salray-cell -->
            <div class=" location-cell">
                <div class="cell-mobile-label">
                    <h6>Location</h6>
                </div> <!-- end .cell-label -->
                <p><?php echo $sjrow['com_address']; ?></p>
            </div> <!-- end .location-cell -->
        </div> <!-- end .table-cells -->
    </div>
    <?php
        }
    }
    ?>

</div> <!-- end .jobs-table -->