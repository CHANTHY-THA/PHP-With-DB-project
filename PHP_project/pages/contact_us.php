
<?php include_once('partial/header.php')?>
    <div class="container p-4">
        <form action="create_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Book name" name="book">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="price" name="price">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger btn-block">Save</button>
            </div>
        </form>
    </div>
<?php include_once('partial/footer.php') ?>


