<?php include_once('partial/header.php'); ?>

    <div class="container-fluid p-4">

        <div class="d-flex justify-content-end p-2">
            <a href="create_html.php" class="btn btn-primary">+ Add product</a>
        </div>
        
        <div class="shop p-4">
            <?php
                require_once('database/database.php');
                $result = getproduct();
                foreach($result as $row):
            ?>
                <div class="images">
                    <div class="card">
                        <img class="img" src="images/<?=$row['image']?>">
                        <p class="p-2"><?=$row['title']?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="ml-2"><?=$row['price']."$"?></h3>
                            <p class="mr-2"><?=$row['postDate']?></p>
                        </div>
                        
                    </div>
            
                    <div class="action d-flex mt-3">
                        <a href="#" class="btn btn-success btn-sm mr-2">Buy Now</i></a>
                        <a href="edit_html.php?id=<?=$row['pro_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="delete_model.php?id=<?=$row['pro_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
          

            <?php endforeach; ?>
        </div>
      
    </div>

<?php require_once('partial/footer.php'); ?>



