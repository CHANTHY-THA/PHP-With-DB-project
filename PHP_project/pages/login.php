
<?php include_once('partial/header.php')?>
    <div class="container p-4 w-50">
        <form method="POST" action="create_customer_model.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="email address">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="phone" placeholder="phone number">
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="country" placeholder="country">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block w-50 ml" name="customer" value="submit">
            </div>
           
        </form>
    </div>
<?php include_once('partial/footer.php') ?>


