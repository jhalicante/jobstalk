<div class="profile-info profile-section flex no-column no-wrap">
    <div class="profile-picture">
        <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('applicant_personal_information', 'profile_picture'); ?>" alt="candidate-picture" class="img-responsive" width="85" height="85">
    </div> <!-- end .user-picture -->
    <div class="profile-meta">
        <h4 class="dark"><?php echo $fetch->getInformation('applicant_personal_information', 'fname').' `'.$fetch->getInformation('applicant_personal_information', 'mname').'` '.$fetch->getInformation('applicant_personal_information', 'lname'); ?></h4>
        <p><?php echo $fetch->getInformation('user_account', 'email_address'); ?></p>
        <div class="profile-contact flex items-center no-wrap no-column">
            <h6 class="contact-location"><?php echo $fetch->getInformation('applicant_contact_information', 'municipality').', BRGY '.$fetch->getInformation('applicant_contact_information', 'brgy'); ?>, PH</span></h6>
            <h6 class="contact-phone"><?php echo $fetch->getInformation('applicant_contact_information', 'phone_no'); ?></h6>
            <h6 class="contact-email"><?php echo $fetch->getInformation('applicant_contact_information', 'email_address'); ?></h6>
        </div> <!-- end .profile-contact -->
        <div class="profile-contact flex items-center no-wrap no-column">
            <h6 class="contact-location"><?php echo $fetch->getInformation('applicant_personal_information', 'bday'); ?></h6>
            <h6 class="contact-phone"><?php echo $fetch->getInformation('applicant_personal_information', 'nationality'); ?></h6>
            <h6 class="contact-email"><?php echo $fetch->getInformation('applicant_personal_information', 'civil_status'); ?></h6>
            <h6 class="contact-email"><?php echo $fetch->getInformation('applicant_personal_information', 'language'); ?></h6>
        </div> <!-- end .profile-contact -->
    </div> <!-- end .profile-meta -->
</div> <!-- end .profile-info -->

<div class="divider"></div>

<div class="profile-about profile-section">
    <h3 class="dark profile-title">
        Career Objective
        <span class="btn-edit-icon btn-edit-career"><i class="ion-edit"></i></span>												
    </h3>
    <p><?php echo $fetch->getInformation('applicant_career_objective', 'objective_content'); ?></p>
</div> <!-- end .profile-about -->

<div class="divider"></div>

<div class="profile-experience-wrapper profile-section">
    <h3 class="dark profile-title">
            Work experience 
            <span class="show-new-experience-view"><i class="ion-plus"></i></span>
    </h3>
    <?php 
        global $conn;											
        $sql = "SELECT * FROM `applicant_work_experience` WHERE `user_id`='".$_COOKIE['user_id']."'";
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
                <!-- <h6 class="text-info show-new-experience-view">Edit &nbsp; [ <span><i class="ion-edit"></i></span> ]</h6> -->
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
    <h3 class="dark profile-title">Education
        <!-- <span><i class="ion-edit"></i></span> -->
    </h4>											
    <?php 
        global $conn;											
        $sql = "SELECT * FROM `applicant_education` WHERE `user_id`='".$_COOKIE['user_id']."' ";
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
    <?php
        }
    }
    ?>
</div> <!-- end .profile-education-wrapper -->