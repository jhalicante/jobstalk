<?php
    
    include './lib/Router.php';
    include './lib/Cipher.php';
    include './lib/Config.php';
    // include './lib/Include.php';

    // (Homepage) route
    $router->
    get('/', function () {
        // include './pages/home-page.php';
        include './pages/applicant/dashboard.php';
    });

    // (Find Job) route
    $router->get('/find-job', function () {
        include './pages/find-job.php';
    });
    

    // Run router
    $router->run();
?>