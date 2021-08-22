<?php
    require_once('database/database.php');
    logout();
    header("Location: http://localhost/PHP_project/index.php?page=login");