<?php include_once('partial/header.php')?>
    <?php
        require_once('database/database.php');
        $id = $_GET['id'];

        $users = selectOnecustomer($id);
        foreach ($users as $item):
    ?>
    <div class="container p-4 w-50">
        <form method="POST" action="edit_customer_model.php" enctype="multipart/form-data">
            <input type="hidden" value="<?=$item['customerid'] ?>" name="id">
    
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?=$item['name']?>">
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="email address" value="<?=$item['email']?>">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="phone" placeholder="phone number" value="<?=$item['phone']?>">
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="country" placeholder="country" value="<?=$item['country']?>">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block w-50 ml" name="customer" value="submit">
            </div>
           
        </form>
    </div>
    <?php endforeach;?>
<?php include_once('partial/footer.php') ?>


