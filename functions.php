<?php

    function about() {
        require_once(dirname(__FILE__) . '/templates/about.php');
    }
    function home() {
        require_once(dirname(__FILE__) . '/templates/home.php');
    }
    function contact_us() {
        require_once(dirname(__FILE__) . '/templates/contact_us.php');
    }
    function portfolio() {
        require_once(dirname(__FILE__) . '/templates/portfolio.php');
    }

    function notfound() {
        require_once(dirname(__FILE__) . '/templates/404.php');
    }
?>