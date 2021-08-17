<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');
    include_once('partial/footer.php');
    if(isset($_GET['page'])) {
        // if($_GET['page'] == "home") {
        //     include_once('pages/home.php');
        // }elseif($_GET['page'] == 'about') {
        //     include_once('pages/about.php');
        // }else {
        //     include_once('pages/service.php');
        // }
        $page = $_GET['page'];
        include_once('pages/'.$page.'.php');

    }else {
        include_once('pages/home.php');
    }
?>