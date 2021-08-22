<?php 
    if (isset($_SESSION['username'])):
        header('Location: http://localhost/PHP_project/index.php?page=home');
    else:         
?>

<div class="container p-4 w-50 mt-5">
    <form method="POST" action="login_model.php" enctype="multipart/form-data">

        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="username">
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block ml" name="customer" value="Login">
        </div>
        
    </form>
    <hr>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error !</strong> <?= $_SESSION['message'] ?>
        </div>
        
    <?php endif; ?>
</div>

<?php endif;?>


