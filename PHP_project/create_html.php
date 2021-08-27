<?php include_once('partial/header.php')?>;
    <div class="container p-4 w-50">
        <form method="POST" action="create_model.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div class="form-group">
                <input type="text" name="productname" class="form-control" placeholder="Product name" cols="40" rows="4">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="price" placeholder="price">
            </div>
            <div class="form-group">
                <select name="category">
                    <option value="1">Clothes</option>
                    <option value="2">Food</option>
                    <option value="3">Electronice</option>
                </select>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            
            <div class="form-group d-flex">
                <a class="btn btn-primary btn-1 w-50 mr-3" href="index.php?page=shop_now">Back</a>
                <input type="submit" class="btn btn-danger btn-block w-50 ml-3" name="upload" value="Carate Product">
            </div>
        </form>
    </div>
    
    <?php include_once('partial/footer.php')?>;


