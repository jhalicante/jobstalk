<?php

    if(isset($_GET['applicant-profile'])) {

    global $conn;											
    
    $vasql = "SELECT * FROM `applicant_personal_information` WHERE `user_id`='".$_GET['applicant-profile']."' ";
    
    $varesult = $conn->query($vasql);
    if ($varesult->num_rows > 0) {
        $varow = $varesult->fetch_assoc();
    }
    $cisql = "SELECT * FROM `applicant_contact_information` WHERE `user_id`='".$_GET['applicant-profile']."' ";
    $ciresult = $conn->query($cisql);
    
    if ($ciresult->num_rows > 0) {
        $cirow = $ciresult->fetch_assoc();
    }
    $cosql = "SELECT * FROM `applicant_career_objective` WHERE `user_id`='".$_GET['applicant-profile']."' ";
    $coresult = $conn->query($cosql);
    
    if ($coresult->num_rows > 0) {
        $corow = $coresult->fetch_assoc();
    }
    

?>
<div class="profile-wrapper">
    <div class="profile-info profile-section flex no-column no-wrap">
        <div class="profile-picture">
            <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $varow['profile_picture']; ?>" alt="candidate-picture" class="img-responsive" width="85" height="85">
        </div> <!-- end .user-picture -->
        <div class="profile-meta">
            <h4 class="dark"><?php echo $varow['fname'].''.$varow['mname'].''.$varow['lname']; ?></h4>
            <p><?php echo $cirow['email_address']; ?></p>
            <div class="profile-contact flex items-center no-wrap no-column">
                <h6 class="contact-location"><?php echo $cirow['municipality'].', BRGY '.$cirow['brgy']; ?>, PH</span></h6>
                <h6 class="contact-phone"><?php echo $cirow['phone_no']; ?></h6>
                <h6 class="contact-email"><?php echo $cirow['email_address']; ?></h6>
            </div> <!-- end .profile-contact -->
            <div class="profile-contact flex items-center no-wrap no-column">
                <h6 class="contact-location"><?php echo $varow['bday']; ?></h6>
                <h6 class="contact-phone"><?php echo $varow['nationality']; ?></h6>
                <h6 class="contact-email"><?php echo $varow['civil_status']; ?></h6>
            </div> <!-- end .profile-contact -->
        </div> <!-- end .profile-meta -->
    </div> <!-- end .profile-info -->

    <div class="divider"></div>

    <div class="profile-about profile-section">
        <h3 class="dark profile-title">
            Career Objective
        </h3>
        <p><?php echo $corow['objective_content']; ?></p>
    </div> <!-- end .profile-about -->

    <div class="divider"></div>

    <div class="profile-experience-wrapper profile-section">
        <h3 class="dark profile-title">
                Work experience 
                <span class="show-new-experience-view"></span>
        </h3>
        <?php 									
            $sql = "SELECT * FROM `applicant_work_experience` WHERE `user_id`='".$_GET['applicant-profile']."'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    date_default_timezone_set('Asia/Manila');
                    $datetime1 = new DateTime($row['job_start']);
                    $datetime2 = new DateTime($row['job_end']);
                    $interval = $datetime1->diff($datetime2);
        ?>
            <div class="profile-experience flex space-between no-wrap no-column">
                <div class="profile-experience-left">
                    <h5 class="profile-designation dark"><?php echo $row['company_name']; ?></h5>
                    <p class="profile-company dark"><?php echo $row['position']; ?></p>
                    <p class="small ultra-light"><?php echo $row['job_start']; ?> - <?php echo $row['job_end']; ?> (<?php echo $interval->format('%y year %m months');?>)</p>
                    <p class="small ultra-light"><i class="ion-location" style="font-size:13px;"></i> <?php echo $row['location']; ?></p>
                    <p><?php echo $row['description']; ?></p>
                    <!-- projects-count -->
                </div> <!-- end .profile-experience-left -->
                <div class="profile-experience-right">
                    <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $row['company_logo']; ?>" alt="company-logo" class="img-responsive" width="100">
                </div> <!-- end .profile-experience-right -->
            </div> <!-- end .profile-experience -->
            <div class="spacer-md"></div>												
        <?php
                }
            }
        ?>

    </div> <!-- end .profile-experience-wrapper -->

    <div class="divider"></div>

    <div class="profile-education-wrapper profile-section">
        <h3 class="dark profile-title">Education</h4>											
        <?php 									
            $sql = "SELECT * FROM `applicant_education` WHERE `user_id`='".$_GET['applicant-profile']."' ";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
        ?>
        <div class="profile-education">												
            <h5 class="dark"><?php echo $row['ter_sname']; ?></h5>
            <p><?php echo $row['ter_course']; ?></p>
            <p class="ultra-light"><?php echo $row['ter_ys']; ?> - <?php echo $row['ter_ye']; ?></p>
            <p class="ultra-light"><?php echo $row['ter_ad']; ?></p>
        </div> <!-- end .profile-education -->
        <div class="spacer-md"></div>	
        <div class="profile-education">												
            <h5 class="dark"><?php echo $row['sec_sname']; ?></h5>
            <p class="ultra-light"><?php echo $row['sec_ys']; ?> - <?php echo $row['sec_ye']; ?></p>
            <p class="ultra-light"><?php echo $row['sec_ad']; ?></p>
        </div> <!-- end .profile-education -->
        <div class="spacer-md"></div>	
        <div class="profile-education">												
            <h5 class="dark"><?php echo $row['pri_sname']; ?></h5>
            <p class="ultra-light"><?php echo $row['pri_ys']; ?> - <?php echo $row['sec_ye']; ?></p>
            <p class="ultra-light"><?php echo $row['pri_ad']; ?></p>
        </div> <!-- end .profile-education -->
        <br/>

        <?php if(!isset($_GET['mode'])) { ?>
        <div class="divider"></div>
        <br/>        
        <div class="profile-education text-center">												
            <h5 class="dark">Update Applicant Status</h5>
            <br>
            <select class="change-selected-status">
                <option value="for-interview">For Interview</option>
                <option value="rejected">Reject</option>
                <option value="completed">Complete</option>
                <option value="hired">Hired</option>
                <option value="no-hired">No Hire</option>
                <option value="awol">AWOL</option>
                <option value="resigned">Resigned</option>
                <option value="regularized">Regularize</option>
                <option value="terminated">Terminate</option>
            </select>
            <br/>
            <br/>
            <button class="button update-applicant-status" applicant-id="<?php echo $row['user_id']; ?>">Submit</button>
        </div> <!-- end .profile-education -->
        <br/>
        <?php
                }
            }
        }
        ?>
    </div>
</div>
<?php } ?>