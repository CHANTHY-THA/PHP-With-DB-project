<?php
require_once('database/database.php');
if(isset($_POST['user'])){

    if(empty($_POST['username'] and $_POST['password'] and $_POST['phone'] and $_POST['country'])){
        echo "You must enter your information please!";
    }else{
        $isCreated = adduser($_POST);
        if($isCreated){
            header('Location: index.php?page=login');
        }
    }
    
    
}