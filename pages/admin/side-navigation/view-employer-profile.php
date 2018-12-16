<?php

if(isset($_GET['employer-profile'])) {

    $epSql = "SELECT * FROM `employer_information` WHERE `user_id`='".$_GET['employer-profile']."' ";

    $epResult = $conn->query($epSql); 
    if ($epResult->num_rows > 0) {
        $epRow = $epResult->fetch_assoc();    
?>

<div class="profile-info profile-section flex no-column no-wrap">
    <div class="profile-picture">
        <img src="<?php echo ASSET_URL;?>assets/uploaded/<?php echo $epRow['com_logo']; ?>" alt="company-logo" class="img-responsive" width="150" height="150">
    </div> <!-- end .user-picture -->
    <div class="profile-meta">
        <h4 class="dark"><?php echo $epRow['name']; ?></h4>
        <p><?php echo $epRow['address']; ?></p>
        <div class="profile-contact flex items-center no-wrap no-column">
            <h6 class="contact-phone"><?php echo $epRow['contact_no']; ?></h6>
            <h6 class="contact-email"><?php echo $epRow['email']; ?></h6>
            <h6 class="contact-email"><?php echo '<a href="'.$epRow['website'].'">Website</a>'; ?></h6>
        </div> <!-- end .profile-contact -->
    </div> <!-- end .profile-meta -->
</div> <!-- end .profile-info -->

<div class="divider"></div>

<div class="profile-about profile-section">
    <h3 class="dark profile-title">About company</h3>
    <p><?php echo $epRow['about']; ?></p>
</div> <!-- end .profile-about -->

<div class="divider"></div>
<?php 
    }
}
?>