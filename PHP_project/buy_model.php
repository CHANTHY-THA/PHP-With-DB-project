<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isOrdered = orderProduct($id);
   
    if($isOrdered){
        header('Location: index.php?page=shop_now');
    }