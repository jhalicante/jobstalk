<?php

    header('Content-Type: application/json');

    // Included configs
    include '../lib/Router.php';
    include '../lib/Validation.php';
    include '../lib/Config.php';
    include '../lib/Cipher.php';
    include './ValidateData.php';
    include './SmsHandler.php';
        
    include './model/SignIn.php';
    include './model/BPC.php';
    include './model/SignUp.php';
    include './model/Applicant.php';
    include './model/Employer.php';
    include './model/Admin.php';
    include './model/Job.php';


    // Included functions
    if(isset($_COOKIE['user_id']) && isset($_COOKIE['role']))
    {
        define('USER_ID', $_COOKIE['user_id']);
    }

    /***********************************
     * JOBS FUNCTIONS API
     * *********************************/ 
    // Add Personal Information
    $router->post(API_VERSION.'/job/find-job', function () {
        $job = new Job();
        $job->findJob($_POST);
    });
    $router->post(API_VERSION.'/job/apply-job', function () {
        $job = new Job();
        $job->applyJob($_POST);
    });
    

    /***********************************
     * ENTRY FUNCTIONS API
     * *********************************/ 
    // Sign In Route
    $router->post(API_VERSION.'/signin', function () {
        $signin = new SignIn();
        $signin->auth($_POST);
    });
    // Sign Up Route
    $router->post(API_VERSION.'/signup', function () {
        $signup = new SignUp();
        if($_POST['password'] != $_POST['confirm-password']) 
        {
            echo json_encode(array('errorCode'=>304,'errorMsg'=>'Password does not match'));
        } 
        else {
            $signup->auth( $_POST );
        }
        
    });
    // Sign In For BPC
    $router->post(API_VERSION.'/bpc-signin', function () {
        $bpc = new BPC();
        $bpc->auth($_POST);
    });
    // Check if email is exists route
    $router->get(API_VERSION.'/email-is-exists', function () {
        $validate = new ValidateData();
        $validate->emailIsExists( $_GET['email_address'] );
    });
    /***********************************
     * APPLICANT FUNCTIONS API
     * *********************************/ 
    // Sign In For BPC
    $router->post(API_VERSION.'/bpc/delete-spes', function () {
        $bpc = new BPC();
        $bpc->deleteSpes($_POST);
    });


    /***********************************
     * APPLICANT FUNCTIONS API
     * *********************************/ 
    // Add Personal Information
    $router->post(API_VERSION.'/add-personal-information', function () {
        $applicant = new Applicant();
        $applicant->addPersonalInformation($_POST, $_FILES);
    });
    // Add Educational Background
    $router->post(API_VERSION.'/add-educational-background', function () {
        $applicant = new Applicant();
        $applicant->addEducationalBackground($_POST);
    });
    // Add Work Experience
    $router->post(API_VERSION.'/add-work-experience', function () {
        $applicant = new Applicant();
        $applicant->addWorkExperience($_POST, $_FILES);
    });
    // Add Work Experience
    $router->post(API_VERSION.'/add-contact-details', function () {
        $applicant = new Applicant();
        $applicant->addContactDetails($_POST);
    });
    // Account Add Work Experience
    $router->post(API_VERSION.'/applicant-account-add-work-experience', function () {
        $applicant = new Applicant();
        $applicant->accountAddWorkExperience($_POST, $_FILES);
    });

    /***********************************
     * EMPLOYER FUNCTIONS API
     * *********************************/ 
    // Add Personal Information
    $router->post(API_VERSION.'/employer/add-personal-information', function () {
        $employer = new Employer();
        $employer->addProfileInformation($_POST, $_FILES);
    });
    // Add Job
    $router->post(API_VERSION.'/employer/add-job', function () {
        $employer = new Employer();
        $employer->addJob($_POST, $_FILES);
    });
    // Get Job Information
    $router->post(API_VERSION.'/employer/get-job-information', function () {
        $employer = new Employer();
        $employer->getJobInformation($_POST);
    });
    // Get Job Candidates Applient
    $router->post(API_VERSION.'/employer/get-job-candidates-applied', function () {
        $employer = new Employer();
        $employer->getCandidatesApplied($_POST); 
    }); 
    // Add Placement Report
    $router->post(API_VERSION.'/employer/add-placement-report', function () {
        $employer = new Employer();
        $employer->addPlacementReport($_POST);
        // echo json_encode($_POST);
    });
    // Update Applicant Applied Status
    $router->post(API_VERSION.'/employer/update-employer-status', function () {
        $employer = new Employer();
        $employer->updateApplicantStatus($_POST);
    });

    

    /***********************************
     * ADMIN FUNCTIONS API
     * *********************************/ 
    // Approve User (Employer & Applicant)
    $router->post(API_VERSION.'/admin/approved-user', function () {
        $admin = new Admin();
        $admin->approvedUser($_POST);
    });
    // Approve Job
    $router->post(API_VERSION.'/admin/approved-job', function () {
        $admin = new Admin();
        $admin->approvedJob($_POST);
    });
    // Add SPRS
    $router->post(API_VERSION.'/admin/add-sprs', function () {
        $admin = new Admin();
        $smsHandler = new SMSHandler();
        $admin->addSPRS($_POST['sql']);
    });
    // Get SPRS
    $router->post(API_VERSION.'/admin/get-sprs', function () {
        $admin = new Admin();
        $admin->getSPRS($_POST);
    });
    
    // Add SPES
    $router->post(API_VERSION.'/admin/add-spes', function () {
        $admin = new Admin();
        $admin->addSPES($_POST);
    });
    // Add Reminders
    $router->post(API_VERSION.'/admin/add-reminders', function () {
        $admin = new Admin();
        $admin->addReminders($_POST);
    });
    // Get Reminders
    $router->post(API_VERSION.'/admin/get-reminders', function () {
        $admin = new Admin();
        $admin->getReminders();
    });
    // Create BPC Account AND Employer
    $router->post(API_VERSION.'/admin/create-account', function () {
        $admin = new Admin();
        $admin->createAccount($_POST);
        // echo json_encode($_POST);
    });
    
    // Run router
    $router->run();
?>