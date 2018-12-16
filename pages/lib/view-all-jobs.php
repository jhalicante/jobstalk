<div class="jobs-table">
    <div class="table-header">
        <div class="table-cells flex">
            <div class="job-title-cell"><h6>Job title / Company name</h6></div>
            <div class="job-type-cell"><h6>Type</h6></div>
            <div class="location-cell"><h6>REQUIRED EXPERIENCE</h6></div>
            <div class="salary-cell"><h6>Location</h6></div>					
        </div> <!-- end .table-cells -->
    </div> <!-- end .table-header -->
    <?php 
    global $conn;

    $ljSql = "SELECT * FROM `employer_job_posted` WHERE 1 ORDER BY ID DESC ";

    $ljresult = $conn->query($ljSql);

    if ($ljresult->num_rows > 0) {
        // output data of each row
        while($ljrow = $ljresult->fetch_assoc()) {
    ?>
    <div class="table-row">
        <div class="table-cells flex no-wrap">
            <div class="cell job-title-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6><?php echo $ljrow['com_name']; ?></h6>
                </div> <!-- end .cell-label -->
                <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $ljrow['com_logo']; ?>" alt="company-logo" class="img-responsive" width="80">
                <div class="content">
                    <h4><a href="job-details?job-id=<?php echo $ljrow['job_id'];?>"><?php echo $ljrow['com_name']; ?></a></h4>
                    <p class="small"><?php echo $ljrow['position']; ?></p>
                </div> <!-- end .content -->
            </div> <!-- end .job-title-cell -->
            <div class="cell job-type-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Type</h6>
                </div> <!-- end .cell-label -->
                <button type="button" class="button full-time"><?php echo $ljrow['job_type']; ?></button>
            </div>
            <div class="cell salary-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Salary</h6>
                </div> <!-- end .cell-label -->
                <p><?php echo $ljrow['years_experience'].'yrs '.$ljrow['months_experience'].'mons'; ?></p>
            </div>
            <div class="location-cell">
                <div class="cell-mobile-label">
                    <h6>Location</h6>
                </div> <!-- end .cell-label -->
                <p><?php echo $ljrow['com_address']; ?></p>
            </div>
        </div> <!-- end .table-cells -->
    </div> <!-- end .table-row -->
    <?php
        }
    }
    ?>
</div>