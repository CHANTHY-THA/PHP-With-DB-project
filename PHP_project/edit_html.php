
<?php include_once('partial/header.php')?>

    <?php
        require_once('database/database.php');
        $id = $_GET['id'];

        $data = selectOneProduct($id);
        foreach ($data as $item):
    ?>
    <div class="container p-4 w-50">
        <form method="POST" action="edit_model.php" enctype="multipart/form-data">
            <input type="hidden" value="<?=$item['pro_id'] ?>" name="id">
           
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title of product" value="<?=$item['title']?>">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="price" value="<?=$item['price']?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger btn-block" name="update" value="Update Product">
            </div>
        </form>
    </div>
    <?php endforeach; ?>

<?php include_once('partial/footer.php') ?>


