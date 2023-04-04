<?php
    require_once 'functions.php';
    require_once 'Route.php';

    $route = new Route('');

    $route->add('/home', 'home', 'GET');
    $route->add('/contact', 'contact_us', 'GET');
    $route->add('/contact', 'contact_us', 'POST');
    $route->add('/about', 'about', 'GET');
    $route->add('/portfolio', 'portfolio', 'GET');
    $route->add('/404', 'notfound', 'GET');


    $route->submit();
?>