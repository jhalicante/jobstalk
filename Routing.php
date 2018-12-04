<?php

    include './lib/Router.php';
    include './lib/Cipher.php';

    include './lib/Config.php';
    // include './lib/Include.php';


    if(isset($_COOKIE['user_id']) && isset($_COOKIE['role']))
    {
        define('USER_ID', $_COOKIE['user_id']);
        define('USER_ROLE', $_COOKIE['role']);
        

        /* (Applicant Dashboard) route */
        $router->get('/account', function () {
            include './pages/applicant/dashboard.php';
        });

        /* (Find Job) route */ 
        $router->get('/find-job', function () {
            include './pages/find-job.php';
        });
    }

    /* (Homepage) route */ 
    $router->get('/', function () {
        include './pages/home-page.php';
    });
?>