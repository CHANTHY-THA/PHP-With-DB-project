<?php
    
    require_once("database/database.php");
    $msg = "";
    if(isset($_POST['upload'])) {
    
        // Get the name of image
        $image = $_FILES['image']['name'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $category = $_POST['category'];
       
        if(empty($image and $title and $price)){
            header('Location: index.php?page=shop_now');
        }else{
            $targe = "images/".basename($image);
            $isadded = addproduct($image,$title,$price,$category);
            if(move_uploaded_file($_FILES['image']['tmp_name'] , $targe)){
                $msg = "Image uploaded succsessfully";
            }else{
                $msg = "There was a problem upload image";
            }

            header('Location: index.php?page=shop_now');
        }

       

    }
  
?>