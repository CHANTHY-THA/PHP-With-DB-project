<?php
    
    require_once("database/database.php");
    $msg = "";
    if(isset($_POST['upload'])) {
    
        // Get the name of image
        $targe = "images/".basename($_FILES['image']['name']);

        $image = $_FILES['image']['name'];
        $title = $_POST['text'];
        $price = $_POST['price'];
        
        $isadded = addproduct($image,$title,$price);

        if(move_uploaded_file($_FILES['image']['tmp_name'] , $targe)){
            $msg = "Image uploaded succsessfully";
        }else{
            $msg = "There was a problem upload image";
        }

        header('Location: index.php?page=shop_now');
    }
  
?>