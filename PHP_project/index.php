<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');
    include_once('partial/footer.php');
   
    if(isset($_GET['page'])) {

        $page = $_GET['page'];
        include_once('pages/'.$page.'.php');

    }else{
        include_once('pages/home.php');
    }
?>          