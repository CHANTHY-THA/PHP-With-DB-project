<?php

require_once('database/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isUpdate = updateProduct($_POST);
    
    if($isUpdate){
        header('Location: index.php?page=shop_now');
    }
}