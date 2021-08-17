
<?php include_once('partial/header.php')?>
    <div class="container p-4 w-50">
        <form method="POST" action="create_model.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title of product" cols="40" rows="4">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="price" placeholder="price">
            </div>
            <div class="form-group d-flex">
                <input type="back" class="btn btn-primary btn-block w-5" name="upload" value="Back">
                <input type="submit" class="btn btn-danger btn-block w-5" name="upload" value="Carate Product">
            </div>
        </form>
    </div>
<?php include_once('partial/footer.php') ?>


