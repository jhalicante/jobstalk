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

    // Included functions

    if(isset($_COOKIE['user_id']) && isset($_COOKIE['role']))
    {
        define('USER_ID', $_COOKIE['user_id']);
    }

    // Sign In Route
    $router->post(API_VERSION.'/signin', function () {
        $signin = new SignIn();
        $signin->auth($_POST);
    });

    // Sign Up Route
    $router->get(API_VERSION.'/signup', function () {
        $signup = new SignUp();
        $signup->auth( $_GET['email_address'], $_GET['password'], $_GET['role'] );
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

    

    // Run router
    $router->run();
?>