<?php
require_once('database/database.php');
if(isset($_POST['customer'])){

    if(empty($_POST['name'] and $_POST['email'] and $_POST['phone'] and $_POST['country'])){
        echo "You must enter your information please!";
    }else{
        $isCreated = adduser($_POST);
        if($isCreated){
            header('Location: index.php?page=users');
        }
    }
    
    
}