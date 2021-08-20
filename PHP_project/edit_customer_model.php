<?php

require_once('database/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isUpdate = updateCustomer($_POST);
    
    if($isUpdate){
        header('Location: index.php?page=users');
    }
}