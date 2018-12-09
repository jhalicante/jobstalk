<?php

    header('Content-Type: application/json');

    // Included configs
    include '../lib/Router.php';
    include '../lib/Validation.php';
    include '../lib/Config.php';
    include '../lib/Cipher.php';
    include './ValidateData.php';
        
    include './model/SignIn.php';
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
     * ADMIN FUNCTIONS API
     * *********************************/ 
    // Add Personal Information
    $router->post(API_VERSION.'/job/find-job', function () {
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
    // Check if email is exists route
    $router->get(API_VERSION.'/email-is-exists', function () {
        $validate = new ValidateData();
        $validate->emailIsExists( $_GET['email_address'] );
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

    /***********************************
     * ADMIN FUNCTIONS API
     * *********************************/ 
    // Add Personal Information
    $router->post(API_VERSION.'/admin/approved-user', function () {
        $admin = new Admin();
        $admin->approvedUser($_POST);
    });
    

    

    // Run router
    $router->run();
?>