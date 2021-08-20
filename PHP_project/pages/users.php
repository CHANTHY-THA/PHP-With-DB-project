<?php include_once('partial/header.php'); ?>

    <div class="container-fluid">

        <div class="d-flex justify-content-end p-2">
            <a href="create_html.php" class="btn btn-primary">+ Add customer</a>
        </div>
        
        <div class="usermanagement p-4">
            <?php
                require_once('database/database.php');
                $result = getAllusers();
                foreach($result as $row):
            ?>
            <div class="card w-100">
                <div class="card-body d-flex justify-content-between">
                    <div class="name">
                        <h5 class="card-title"><?=$row['firstname']?> <?=$row['lastname']?></h5>
                        <p class="card-text"><?=$row['email']?> <?=$row['phone']?> <?=$row['country']?></p>
                    </div>
                   
                    <div class="action">
                        <a href="" class="btn btn-primary btn-sm mr-2 btn-1"><i class="fa fa-pencil"></i></a>
                        <a href="" class="btn btn-danger btn-sm btn-2"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
        </div>
      
    </div>

<?php require_once('partial/footer.php'); ?>



