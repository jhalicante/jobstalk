<?php

    // header('Content-Type: application/json');

    // Included configs
    include '../lib/Router.php';
    include '../lib/Validation.php';
    include '../lib/Config.php';
    include '../lib/Cipher.php';
    include './SignIn.php';
    include './SignUp.php';
    include './ValidateData.php';
    include './Applicant.php';


    // Included functions

    if(isset($_COOKIE['user_id']) && isset($_COOKIE['role']))
    {
        define('USER_ID', $_COOKIE['user_id']);
    }

    // Sign In Route
    $router->post(API_VERSION.'/signin', function () {
        $signin = new SignIn();
        $signin->auth( $_POST['email_address'], $_POST['password'] );
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


    // Applicant 
    // Add new work experience
    $router->post(API_VERSION.'/add-work-experience', function () {
        
        // $applicant = new Applicant();
        // $applicant->AddWorkExperience( 
        //     $_FILES['file']['logo'],
        //     $_POST['companyName'],
        //     $_POST['position'],
        //     $_POST['jobStarted'],
        //     $_POST['jobEnd'],
        //     $_POST['jobDescription']
        // );
        $filepath = "../assets/uploaded/".GEN_UID.".png";
        $filetmp = $_FILES['company_logo']['tmp_name'];
        move_uploaded_file($filetmp, $filepath);

        echo "<pre>"; print_r($_FILES);echo "</pre>"; die; //this will show you the file transfered by form.
    });

    // Run router
    $router->run();
?>