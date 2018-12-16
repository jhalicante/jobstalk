<div class="profile-info profile-section flex no-column no-wrap">
    <div class="profile-picture">
        <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $fetch->getInformation('employer_information', 'logo'); ?>" alt="company-logo" class="img-responsive" width="150" height="150">
    </div> <!-- end .user-picture -->
    <div class="profile-meta">
        <h4 class="dark"><?php echo $fetch->getInformation('employer_information', 'name'); ?></h4>
        <p><?php echo $fetch->getInformation('employer_information', 'address'); ?></p>
        <div class="profile-contact flex items-center no-wrap no-column">
            <h6 class="contact-phone"><?php echo $fetch->getInformation('employer_information', 'contact_no'); ?></h6>
            <h6 class="contact-email"><?php echo $fetch->getInformation('employer_information', 'email'); ?></h6>
            <h6 class="contact-email"><?php echo '<a href="'.$fetch->getInformation('employer_information', 'website').'">Website</a>'; ?></h6>
        </div> <!-- end .profile-contact -->
        <span><?php echo $fetch->getInformation('employer_information', 'address'); ?></span>
    </div> <!-- end .profile-meta -->
</div> <!-- end .profile-info -->

<div class="divider"></div>

<div class="profile-about profile-section">
    <h3 class="dark profile-title">About company</h3>
    <p><?php echo $fetch->getInformation('employer_information', 'about'); ?></p>
</div> <!-- end .profile-about -->

<div class="divider"></div>